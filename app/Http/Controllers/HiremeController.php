<?php

namespace App\Http\Controllers;
use App\Hireme;
use Illuminate\Http\Request;

class HiremeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hiremes = Hireme::all()->toArray(); 
        return view('hiremes.index', compact('hiremes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hiremes.create');
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
         $request->validate([ 
            'name' => 'required', 
            'amount'=> 'required', 
        ]); 
        $form= new Form(); 
        $form->name=$request->get('name'); 
        $form->amount=$request->get('amount');
        $form->details=$request->get('details');   
        $form->save(); 
        return redirect('hiremes')->with('success', 'Packages has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $hireme = Hireme::find($id); 
        return view('hiremes.edit',compact('hireme','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([ 
            'name' => 'required', 
            'amount'=> 'required', 
        ]);
        $form= new Form(); 
        $form->name=$request->get('name'); 
        $form->amount=$request->get('amount');
        $form->details=$request->get('details');   
        $form->save(); 
        return redirect('hiremes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $hireme = hireme::find($id); 
        $hireme->delete(); 
        return redirect('hiremes')->with('success','Package has been deleted');
    }
}
