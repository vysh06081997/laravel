<?php

namespace App\Http\Controllers;
use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $works = Work::all()->toArray(); 
        return view('works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('works.create');
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
            'projecttype' => 'required', 
            'projectname'=> 'required', 
        ]); 
        $form= new Form(); 
        $form->projecttype=$request->get('projecttype'); 
        $form->projectname=$request->get('projectname');   
        $form->save(); 
        return redirect('works')->with('success', 'Latest Work has been added');
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
          $work = Work::find($id); 
        return view('works.edit',compact('work','id'));
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
            'projecttype' => 'required', 
            'projectname'=> 'required', 
        ]); 
        $form= new Form(); 
        $form->projecttype=$request->get('projecttype'); 
        $form->projectname=$request->get('projectname');    
        $form->save(); 
        return redirect('exps');
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
         $work = work::find($id); 
        $work->delete(); 
        return redirect('works')->with('success','Latest Work has been deleted');
    }
}
