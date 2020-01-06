<?php

namespace App\Http\Controllers;
use App\Exp;
use Illuminate\Http\Request;

class ExpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $exps = Exp::all()->toArray(); 
        return view('exps.index', compact('exps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('exps.create');
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
            'Company_Name' => 'required', 
            'Designation'=> 'required', 
        ]); 
        $form= new Form(); 
        $form->Start_Date=$request->get('Start_Date'); 
        $form->End_Date=$request->get('End_Date'); 
        $form->Company_Name=$request->get('Company_Name'); 
        $form->Designation=$request->get('Designation'); 
        $form->Job_Description=$request->get('Job_Description');  
        $form->save(); 
        return redirect('exps')->with('success', 'Experience has been added');
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
         $exp = Exp::find($id); 
        return view('exps.edit',compact('exp','id'));
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
            'Company_Name' => 'required', 
            'Designation'=> 'required', 
        ]); 
        $form= new Form(); 
        $form->Start_Date=$request->get('Start_Date'); 
        $form->End_Date=$request->get('End_Date'); 
        $form->Company_Name=$request->get('Company_Name'); 
        $form->Designation=$request->get('Designation'); 
        $form->Job_Description=$request->get('Job_Description');  
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
        $exp = exp::find($id); 
        $exp->delete(); 
        return redirect('exps')->with('success','Experience has been deleted');
    }
}
