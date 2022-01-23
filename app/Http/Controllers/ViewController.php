<?php

namespace App\Http\Controllers;

use App\Models\View;
use App\Models\User;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Products::all();
        $sum = Products::sum('price');
        $count = Products::get('id')->count();
        $users = User::get('id')->count();
        $deleted = Products::onlyTrashed()->count();
        return view('/dashboard')->with(compact('products'))->with(compact('sum'))
        ->with(compact('count'))->with(compact('users'))->with(compact('deleted'));

    }


    public function userregister(Request $request){
        $request->validate([
            'name'  =>  'required',
            'email'  =>  'required',
            'password'   =>  'required',

           
        ]);
        DB::table('users')->insert([
            'name'=>$request->name,
            'email'=>  $request->email,
            'password'   =>  bcrypt($request->password),
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
        ]);


        return redirect('/dashboard')->with('usersuccess', 'Registered successfully.');

    }


    public function users()
    {
        $users= User::all();
        return view('users')->with(compact('users'));

       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request){
  
        $request->validate([
            'name'  =>  'required',
            'quantity'   =>  'required',
            'price'   =>  'required',
            'detail'   =>  'required',
            'image'       =>  'required|image|max:2048'
        ]);
        
    $image = $request->file('image');
  
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('image'), $new_name);

    DB::table('products')->insert([
        'name'  =>$request->name,
        'quantity'=>  $request->quantity,
        'price'   =>  $request->price,
        'detail'   =>  $request->detail,
        'image'        =>   $new_name ,
        "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
        "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
     
    ]);

    return redirect('/dashboard')->with('success', 'Data Added successfully.');
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function show($id){
   
        $products = Products::where('id',$id)->get();
        return view('show')->with(compact('products'));
        // return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $products = Products::where('id',$id)->get();
        return view('/edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if ($image != '') {
            $request->validate([
                'name'  =>  'required',
                'quantity'   =>  'required',
                'price'   =>  'required',
                'detail'   =>  'required',
                'image'       =>  'image|max:2048'
            ]); 
             $image_name = rand() . '.' . $image->getClientOriginalExtension();
                $form_data = array(
                    'name'  =>  $request->name,
                    'quantity'   =>  $request->quantity,
                    'price'   =>  $request->price,
                    'detail'   =>  $request->detail,
                    'image'   =>  $image_name,
                );
          
            $image->move(public_path('image'), $image_name);
        }
        else{
            $form_data = array(
                'name'  =>  $request->name,
                'quantity'   =>  $request->quantity,
                'price'   =>  $request->price,
                'detail'   =>  $request->detail,
        
            );
            $request->validate([
                'name'  =>  'required',
                'quantity'   =>  'required',
                'price'   =>  'required',
                'detail'   =>  'required',
            ]);
        }

        products::whereId($id)->update($form_data);
        return redirect ('/dashboard')->with('success', 'Data Succesfully Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect('dashboard')->with('success', 'Data Deleted Temporary');
    }
    public function viewDeletes(){
        $products = Products::onlyTrashed()->get();
        return view('deletedRecord',compact('products'));
    }
    public function restore($id){
        $products =  Products::withTrashed()->findOrFail($id);
        $products->restore();
        // dd($product);
        return redirect('/viewDeleted')->with('success', 'Data Successfully Restored');
    }
    public function forceDelete($id){
       $products =  Products::withTrashed()->findOrFail($id);
       $products->forceDelete();
       // dd($product);
       return redirect('/viewDeleted')->with('success', 'Data Deleted Permanently');
   }
}
