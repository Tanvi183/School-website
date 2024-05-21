<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImportantLinks;
use App\Models\Slider;
use App\Models\Message;
use App\Models\PanelBox;
use App\Models\PhotoCategory;
use App\Models\PhotoGallery;
use App\Models\PrimaryInfo;
use App\Models\Video;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public function welcomePage(){
        $importantLinks = ImportantLinks::orderby('serial_num','asc')->get();
        $allSliders = Slider::where('status',1)->orderBy('serial_num','asc')->get();
        $allMessages = Message::orderBy('serial_num','asc')->get();
        $allPanelBox = PanelBox::with('subPanel')->whereStatus(1)->orderBy('serial_num','ASC')->get();
        $info=PrimaryInfo::first();
        // $allNotice = file_get_contents('https://hnp.ntechbangla.com/api/all-notice');
        // $allNotice = json_decode($allNotice);

        return view('frontend.welcome',compact('importantLinks','allSliders','allMessages','allPanelBox','info'));
    }

    public function contactUs(){
        return view('frontend.pages.contact');
    }

    public function aboutUs(){
        return view('frontend.pages.aboutUs');
    }


    public function allTeacherShow(){
        $teachers = file_get_contents('https://hnp.ntechbangla.com/api/all-teacher');
        $teachers = json_decode($teachers);
        return view('frontend.pages.teacherList',compact('teachers'));
    }



    // public function allNoticeList(){
    //     $allNotice = file_get_contents('https://hnp.ntechbangla.com/api/all-notice');
    //     $allNotice = json_decode($allNotice);
    //     return view('frontend.pages.notice.noticeList',compact('allNotice'));
    // }

    public function singleNoticeShow($id){
        $singleNotice = Http::get('https://hnp.ntechbangla.com/api/single-notice/'.$id);
        $singleNotice = json_decode($singleNotice);
        // return $singleNotice;
        return view('frontend.pages.notice.singleNoticeShow',compact('singleNotice'));
    }

    public function photoGallery()
    {
        // $category = PhotoCategory::where('status',1)->get();
        $gallery = PhotoGallery::where('status',1)->orderBy('id','desc')->get();
        return view('frontend.pages.gallery.photoGallery',compact('gallery'));
    }

    public function videoGallery()
    {
        $gallery = Video::where('status',1)->orderBy('id','desc')->get();
        return view('frontend.pages.gallery.videoGallery',compact('gallery'));
    }

    public function videoPlay($id){
        $data = Video::findOrFail($id);
        $sideVideo = Video::where('id', '!=', $data->id)->where('status', 1)->inRandomOrder()->paginate(3);
        $bottomVideo = Video::where('id', '!=', $data->id)->where('status',1)->inRandomOrder()->paginate(8);
        return view('frontend.pages.gallery.videoPlay',compact('data', 'sideVideo', 'bottomVideo'));
    }

    public function onlineClass()
    {
        $allClass = file_get_contents(env('API_URL').'all-classes');
        $allClass = json_decode($allClass);
        return view('frontend.pages.onlineClass.allClass', compact('allClass'));
    }

    public function classSubject($id)
    {
        $classwiseSub = file_get_contents(env('API_URL').'class-wise-subjects?class_id='.$id);
        $classwiseSub = json_decode($classwiseSub);
        // return response()->json($classwiseSub);
        return view('frontend.pages.onlineClass.class-wise-subject', compact('classwiseSub'));
    }

    public function videoClass(Request $request)
    {
        $classVideo = file_get_contents(env('API_URL').'video-class?class_id='.$request->class_id.'&subject_id='.$request->subject_id);
        $classVideo = json_decode($classVideo);
        //return response()->json($classVideo);
        return view('frontend.pages.onlineClass.class-wise-video', compact('classVideo'));
    }
}
