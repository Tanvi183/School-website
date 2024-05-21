<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use MyHelper;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Video::orderBy('serial_num', 'ASC')->get();
        return view('backend.pages.videoGallery.index', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $max_serial = Video::max('serial_num');
        return view('backend.pages.videoGallery.create',compact('max_serial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $video = explode('src=" ', $input['url']);
        if (isset($video[1])) {
            $video=explode('"',$video[1] );
        }
        $input['url'] = $video[0];

        $validation = Validator::make($input,[
            'title' => 'required|string',
            'url' => 'required|url',
            'image' => 'required|image|max:2048',
            'status'=> 'required',
            'serial_num' => 'required'
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        if ($request->hasFile('image')){
            $input['image']=MyHelper::photoUpload($request->file('image'),'images/video/', 450, 400);
        }

        try {
            Video::create($input);
            $error = 0;
        } catch (\Exception $e) {
            $error = $e->errorInfo[1];
        }

        if ($error==0) {
            return redirect()->back()->with('success','Successfully Inserted');
        }else {
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
        $data = Video::findOrFail($id);
        $max_serial = Video::max('serial_num');
        return view('backend.pages.videoGallery.edit',compact('data','max_serial'));
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
        $input = $request->all();
        $data = Video::findOrFail($id);

        $validation = Validator::make($input,[
            'title'=> "required|unique:videos,title,$id",
            'url' => 'required|url',
            'image' => 'image|max:2048',
            'serial_num' => "required|unique:videos,serial_num,$id",
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        if ($request->hasFile('image')) {
            $input['image'] = MyHelper::photoUpload($request->file('image'), 'images/video/', 450, 400);
            if (file_exists($data->image)) {
                unlink($data->image);
            }
        }

        try {
            $data->update($input);
            $error = 0;
        } catch (\Exception $e) {
            $error = $e->errorInfo[1];
        }

        if ($error == 0) {
            return redirect()->back()->with('success', 'Data Update Successfully!');
        }else {
            return redirect()->back()->with('error', 'Something Error Found ! ');
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
        $data = Video::findOrFail($id);
        try {
            $data->delete();
            if (file_exists($data->image)){
                unlink($data->image);
            }
            $error = 0;
        } catch (\Exception $e) {
            $error = $e->errorInfo[1];
        }

        if ($error == 0) {
            return redirect()->back()->with('success', ' Data Deleted Successfully.');
        }
        else {
            return redirect()->back()->with('error', 'Something Error Found! ');
        }
    }
}
