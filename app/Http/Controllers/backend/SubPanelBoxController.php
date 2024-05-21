<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PanelBox;
use App\Models\SubPanelBox;

class SubPanelBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // return $request;
        $input = $request->all();
        try{
           SubPanelBox::create($input);
            $bug=0;   
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
         $allData=SubPanelBox::leftJoin('panel_boxes','sub_panel_boxes.fk_panel_id','=','panel_boxes.id')
        ->select('sub_panel_boxes.*','panel_boxes.name as panel_name')
        ->where('fk_panel_id',$id)->orderBy('serial_num','ASC')->get();
        $panelbox=PanelBox::findOrFail($id);
        $max_serial=SubPanelBox::where('fk_panel_id',$id)->max('serial_num');
        return view('backend.pages.panelBox.subpanelbox',compact('allData','max_serial','panelbox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=SubPanelBox::findOrFail($id);
        $max_serial = PanelBox::max('serial_num');
        return view('backend.pages.panelBox.subpaneledit',compact('data','max_serial'));
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
       $data=SubPanelBox::findOrFail($id);
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
        $input=SubPanelBox::findOrFail($id);
        try {
            $input->delete();
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
