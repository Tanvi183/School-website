<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrimaryInfo;
use MyHelper;

class PrimaryInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=PrimaryInfo::first();
        //return "hello";
        return view('backend.pages.primary-info.primaryInfo',compact('data'));
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
        //
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
        //return $request;
        $input = $request->all();
        $data=PrimaryInfo::findOrFail($id);

        if ($request->hasFile('logo')){
            $input['logo']=MyHelper::photoUpload($request->file('logo'),'images/logo');
            if (file_exists($data->logo)){
                unlink($data->logo);
            }
        }
        if ($request->hasFile('favicon')){
            $input['favicon']=MyHelper::photoUpload($request->file('favicon'),'images/logo');
            if (file_exists($data->favicon)){
                unlink($data->favicon);
            }
        }

        $data->update($input);
            $bug=0;
        try{
            
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Successfully Update');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
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
