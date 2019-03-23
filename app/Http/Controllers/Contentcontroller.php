<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
class Contentcontroller extends Controller
{
     public function __construct(){
        $this->middleware('admin');
    }

    public function content(){
        return view('admin.content.add_content');
    }

    // public function show(){
    //     return view('admin.content.show_content');
    // }

//     public function show() {
// 	    $addcontent = Content::all();
// 	    return view('admin.content.show_content');
// }

    public function show(){
    	$addcontents= Content::get()->all();
    	return view('admin.content.show_content',compact('addcontents'));
    }

    public function insert(Request $request) {
    	$addcontent = new Content();
    	$addcontent->name = $request->name;
    	$addcontent->dateFrom = $request->dateFrom;
    	$addcontent->ckeditor = $request->ckeditor;
    	$addcontent->save();
    	return back();
    }

}
