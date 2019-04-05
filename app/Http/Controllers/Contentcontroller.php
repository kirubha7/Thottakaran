<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Admin;

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

    public function updateProfile(){
        $this->validate(request(),[
            'oldPassword'=>'required',
            'password'    =>'required|confirmed|min:6',
        ]);
        $authundicated_user = Admin::find(auth()->user()->id);

        if (password_verify(request('oldPassword'), $authundicated_user->password)) {
            $authundicated_user->password = bcrypt(request('password'));
            $authundicated_user->save();
            return back()->with('success','Password Changed successfully!!');
        }else{
            return back()->with('wrong','Current Password is Wrong !!');
        }
    }

    public function profile(){
        return view('admin.content.profile');
    }


}
