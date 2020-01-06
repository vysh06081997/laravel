<?php

namespace App\Http\Controllers;
use App\Projecttodiscuss;
use Illuminate\Http\Request;

class ProjecttodiscussController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projecttodiscusses = Projecttodiscuss::all()->toArray(); 
        return view('projecttodiscusses.index', compact('projecttodiscusses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projecttodiscusses.create');
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
            'email'=> 'required', 
        ]); 
        $form= new Form(); 
        $form->name=$request->get('name'); 
        $form->email=$request->get('email');
        $form->message=$request->get('message');   
        $form->save(); 
        return redirect('projecttodiscusses')->with('success', 'Projecttodiscuss has been added');
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
         $projecttodiscuss = Projecttodiscuss::find($id); 
        return view('projecttodiscusses.edit',compact('projecttodiscuss','id'));
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
            'email'=> 'required', 
        ]); 
        $form= new Form(); 
        $form->name=$request->get('name'); 
        $form->email=$request->get('email');
        $form->message=$request->get('message');   
        $form->save();
        return redirect('projecttodiscusses'); 
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
         $projecttodiscuss = projecttodiscuss::find($id); 
        $projecttodiscuss->delete(); 
        return redirect('projecttodiscusses')->with('success','Projecttodiscuss has been deleted');
    }
}
