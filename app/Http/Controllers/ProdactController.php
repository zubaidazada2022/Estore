<?php

namespace App\Http\Controllers;

use App\Prodact;
use Illuminate\Http\Request;

class ProdactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodact=Prodact::all();
        return view('prodect',compact('prodact'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createEdit',['title'=>'Create Prodact ']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Prodact::create([
            'title'=>$request->title,
            'des'=>$request->des,
            'price'=>$request->price,
            'image'=>$request->image->store('image','public')

            ]);

        return redirect ('prodact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prodact  $prodact
     * @return \Illuminate\Http\Response
     */
    public function show(Prodact $prodact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prodact  $prodact
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
          $Prodact=Prodact::find($id);
        return view('createEdit',['title'=>'Edit Prodact'])->with('Prodact',$Prodact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prodact  $prodact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodact $prodact)
    {
        $prodact->update([
            'title'=>$request->title,
            'des'=>$request->des,
            'price'=>$request->price,
            'image'=>$request->image->store('image','public')
            ]);
        return redirect ('prodact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prodact  $prodact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodact $prodact)
    {
        $prodact->delete();
       
        return redirect('prodact');
    }
}
