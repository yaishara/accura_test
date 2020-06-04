<?php

namespace App\Http\Controllers;

use App\MemberDetails;
use App\Divition;
use Illuminate\Http\Request;

class MemberDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = MemberDetails::all();
        
        return view('member-index',compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divition = Divition::pluck('name','id');
        return view('member-create',compact('divition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'dob' => 'required',
            'divition_id' => 'required'
        ]);
       // dd($request);

        $details = new MemberDetails();
        $details->f_name = $request->f_name;
        $details->l_name = $request->l_name;
        $details->dob = $request->dob;
        $details->summery = $request->summery;
        $details->divition_id = $request->divition_id;
        $details->save();

        return redirect()->back()->with('message', 'Created Successfuly!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MemberDetails  $memberDetails
     * @return \Illuminate\Http\Response
     */
    public function show(MemberDetails $memberDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MemberDetails  $memberDetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = MemberDetails::findOrFail($id);
        $divition = Divition::pluck('name','id');
        return view('member-edit',compact('member','divition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MemberDetails  $memberDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemberDetails $memberDetails)
    {
         $validatedData = $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'dob' => 'required',
            'divition_id' => 'required'
        ]);

         
        $memberDetails->f_name=$request->f_name;
        $memberDetails->l_name=$request->l_name;
        $memberDetails->dob=$request->dob;
        $memberDetails->divition_id=$request->divition_id;
        $memberDetails->summery=$request->summery;
        $memberDetails->save();
         return redirect()->back()->with('message', 'Update Successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MemberDetails  $memberDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $details = MemberDetails::findOrFail($id);
        $details->delete();
          return redirect()->back()->with('message', 'Delete Successfuly!');
    }
}
