<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contentcontroller extends Controller
{
     public function __construct(){
        $this->middleware('admin');
    }

    public function content(){
        return view('admin.content.add_content');
    }

}
