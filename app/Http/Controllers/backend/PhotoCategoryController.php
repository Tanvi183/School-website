<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PhotoCategory;
use Illuminate\Http\Request;
use Image;

class PhotoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PhotoCategory::orderBy('id', 'desc')->get();
        return view('backend.pages.photoCategory.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $max_serial = PhotoCategory::max('serial_num');
        return view('backend.pages.photoCategory.create',compact('max_serial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
        ]);
        $input = $request->all();
        try{
            PhotoCategory::create($input);
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
        $data=PhotoCategory::findOrFail($id);
        $max_serial = PhotoCategory::max('serial_num');
        return view('backend.pages.photoCategory.edit',compact('data','max_serial'));
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
        $this->validate($request,[
            'name'=> 'required|string'
        ]);

        $input = $request->all();
        $data = PhotoCategory::findOrFail($id);
        try {
           $data->update($input);
           $error = 0;
        } catch (\Throwable $e) {
            $error = $e->errorInfo[1];
        }
        if($error==0){
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
        $input = PhotoCategory::findOrFail($id);
        try {
            $input->delete();
            $error = 0;
        } catch (\Throwable $th) {
            $error = $th->errorInfo[1];
        }

        if ($error == 0) {
            return redirect()->back()->with('success', ' Data Deleted Successfully.');
        }
        else {
            return redirect()->back()->with('error', 'Something Error Found! ');
        }
    }
}
