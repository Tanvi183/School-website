<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use MyHelper;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allMessage = Message::orderBy('serial_num','asc')->get();
        return view('backend.pages.message.index',compact('allMessage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $max_serial = Message::max('serial_num');
        return view('backend.pages.message.create',compact('max_serial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $input = $request->all();
        if ($request->hasFile('image')){
            $input['image']=MyHelper::photoUpload($request->file('image'),'images/message/',600,400);
        }
        Message::create($input);
            $bug=0;
        try{
                
        } catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Data Successfully Inserted');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
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
        $data=Message::findOrFail($id);
        $max_serial = Message::max('serial_num');
        return view('backend.pages.message.edit',compact('data','max_serial'));
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
        $data=Message::findOrFail($id);

        if ($request->hasFile('image')){
            $input['image']=MyHelper::photoUpload($request->file('image'),'images/message/',600,400);
            if (file_exists($data->image)){
                unlink($data->image);
            }
        }
        try{
            $data->update($input);
            $bug=0;
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
        $input=Message::findOrFail($id);
        try {
            $input->delete();
            if (file_exists($input->image)){
                unlink($input->image);
            }
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
        }
        if ($bug == 0) {
            return redirect()->back()->with('success', ' Data Deleted Successfully.');
        }
        else {
            return redirect()->back()->with('error', 'Something Error Found! ');
        }
    }
}
