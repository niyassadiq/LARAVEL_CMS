<?php

namespace App\Http\Controllers;
use App\Models\Forms;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('admin.image');
    }
    function save(Request $request){

    $request->validate([
            'Name' => 'required',
            'image' =>'required',
            'video' => 'required|mimes:mp4,ogxogv,ogg',
        ]);
        // return $request->all();
        $create = new Forms();

        if($request->file())
        {
            $file = ($request->file())['image'];
            $fileName = time().'_'.rand().'.'.$file->extension();
            $file->move(public_path('img/sample'), 
            $fileName);
            $request->image= $fileName;
            $create->image = $fileName;
        }
        $video=$request->file('video');
        $video->move('upload',$video->GetClientOriginalName());
        $video_name =$video->GetClientOriginalName();

        $create->video =  $video_name;

        $create->text = $request->input('Name');



        $create->save();
        return redirect()->back()->with('success', ('successfully_added_document'));
    }
}
