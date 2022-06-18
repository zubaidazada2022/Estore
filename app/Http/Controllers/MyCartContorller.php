<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCartContorller extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodact=Prodact::all();
        return view('MyCart',compact('MyCart'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createEdit',['title'=>'Create MyCart ']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MyCart::create([
            'title'=>$request->title,
            'des'=>$request->des,
            'price'=>$request->price,
            'image'=>$request->image->store('image','public')

            ]);

        return redirect ('MyCart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MyCart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function show(MyCart $Cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyCart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
          $Cart=MyCart::find($id);
        return view('createEdit',['title'=>'Edit MyCart'])->with('MyCart',$Cart);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyCart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyCart $Cart)
    {
        $Cart->update([
            'title'=>$request->title,
            'des'=>$request->des,
            'price'=>$request->price,
            'image'=>$request->image->store('image','public')
            ]);
        return redirect ('MyCart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyCart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyCart $Cart)
    {
        $Cart->delete();
       
        return redirect('MyCart');
    }
}

