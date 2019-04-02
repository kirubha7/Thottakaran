<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Content(){
        $Contents = Content::orderBy('date', 'desc')->paginate(10);
        return view('thottakaran.content',compact('Contents'));
    }
}
