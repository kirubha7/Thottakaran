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
        return view('admin.content.add');
    }

    public function savecontent(Request $request) {
    	$Content = new Content();
    	$Content->title = request('title');
    	$Content->date = request('date');
        $Content->description = request('description');
    	$Content->content = request('content');
    	$Content->save();
    	return back()->with('success','Content Added Successfully');
    }

    public function show(){
        $Contents= Content::get()->all();
        return view('admin.content.show',compact('Contents'));
    }

    public function EditContent($id){
        $Content= Content::findorfail($id);
        return view('admin.content.edit',compact('Content'));
    }

    public function UpdateContent($id) {
        $Content = Content::findorfail($id);
        $Content->title = request('title');
        $Content->date = request('date');
        $Content->description = request('description');
        $Content->content = request('content');
        $Content->save();
        return redirect('admin/contents')->with('success','Content Updated Successfully');
    }

    public function DeleteContent($id){
        Content::findorfail($id)->delete();
        return back()->with('success','Content Deleted Successfully');
    }


}
