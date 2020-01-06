<?php

namespace App\Http\Controllers;
use App\Edu;
use Illuminate\Http\Request;

class eduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $edus = Edu::all()->toArray(); 
        return view('edus.index', compact('edus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('edus.create');
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
            'universityname' => 'required', 
            'degree'=> 'required', 
        ]); 
        $form= new Form(); 
        $form->startyear=$request->get('startyear'); 
        $form->endyear=$request->get('endyear'); 
        $form->universityname=$request->get('universityname'); 
        $form->course=$request->get('course'); 
        $form->degree=$request->get('degree');  
        $form->save(); 
        return redirect('edus')->with('success', 'Education has been added');
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
        $edu = EDU::find($id); 
        return view('edus.edit',compact('edu','id'));
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
            'universityname' => 'required', 
            'degree'=> 'required', 
        ]); 
        $form = Edu::find($id); 
        $form->startyear=$request->get('startyear'); 
        $form->endyear=$request->get('endyear'); 
        $form->universityname=$request->get('universityname'); 
        $form->course=$request->get('course');
         $form->degree=$request->get('degree'); 
        $form->save(); 
        return redirect('edus');
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
        $form = edu::find($id); 
        $form->delete(); 
        return redirect('edus')->with('success','Education has been deleted');
    }
}
