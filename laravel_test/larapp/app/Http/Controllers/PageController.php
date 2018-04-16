<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'Welcome to Laravel';
        return view('pages.about')->with('title',$title);
    }

    public function service(){
        $data = array(
            'title' =>'Services',
            'name' =>['Aili','Taylor','Jone']
        );
        return view('pages.services')->with($data);
    }
}
