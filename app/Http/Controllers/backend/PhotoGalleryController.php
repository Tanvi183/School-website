<?php

namespace App\Http\Controllers\backend;

use App\Models\PhotoCategory;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use MyHelper;

class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PhotoGallery::orderBy('id', 'desc')->get();
        return view('backend.pages.photoGallery.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = PhotoCategory::where('status', 1)->pluck('name','id');
        return view('backend.pages.photoGallery.create', compact('category'));
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
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'captionn' => 'nullable|string|max:250',
            'category_id' => 'required',
            'status' => 'required',
        ]);
        // return $request;
        $input = $request->all();
        if ($request->hasFile('image')){
            $input['image']=MyHelper::photoUpload($request->file('image'),'images/photoGallery/',600,400);

        }
        try{
            PhotoGallery::create($input);
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
        $data = PhotoGallery::findOrFail($id);
        $category = PhotoCategory::where('status', 1)->pluck('name','id');
        return view('backend.pages.photoGallery.edit', compact('data','category'));
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
        $data = PhotoGallery::findOrFail($id);
        $input=$request->all();

        $validator = Validator::make($input, [
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
            'captionn' => 'nullable|string|max:250',
            'category_id' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')){
            $input['image'] = MyHelper::photoUpload($request->file('image'),'images/photoGallery/',600,400);
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
        $data = PhotoGallery::findOrFail($id);
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
