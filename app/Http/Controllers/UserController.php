<?php

namespace App\Http\Controllers;
use App\Models\Forms;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){



        $forms = Forms::all();
        $i = 0;
        foreach ($forms as $r) {
            $data[$i]['id'] = $r->id;
            $data[$i]['text'] = $r->text;
            $data[$i]['image'] = $r->image;
            $data[$i]['video'] = $r->video;

            $i++;
        }
        $value = $r;
        $text= $value->text;
        $image = $value->image;
        $video = $value->video;


        return view('layouts.website',compact('text','image','video'));
    }
}
