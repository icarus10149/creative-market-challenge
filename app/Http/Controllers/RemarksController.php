<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remark;
use App\RemarkCount;

class RemarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remarks = Remark::all();
        $remarkCount = RemarkCount::all();
        return view('remarks', compact('remarks','remarkCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // make it easier to re-use the username value
        $username = $request['username'];
        
        // $username is the RemarkCount PrimaryKey
        $remarkCount = RemarkCount::find($username);
        
        // if we didn't find a matching RemarkCount, create a new one, and assign the Primary Key to the username passed in the request
        if(!$remarkCount){
            $remarkCount = new RemarkCount;
            $remarkCount->username = $username;
        }
        
        // $remarkCount->count default is 0 -- so whether a new record, or an existing one, this will properly increment the count.
        $remarkCount->count++;
        
        // Create the Remark record
        $remark = new Remark;        
        $remark->username = $username;
        $remark->remark = $request['remark'];
        if($request['parent_remark_id']){
            $remark->parent_remark_id = $request['parent_remark_id'];
        }
        
        // Save the Remark and RemarkCount
        $remark->save();
        $remarkCount->save();
        
        return redirect('/');
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
    }
}
