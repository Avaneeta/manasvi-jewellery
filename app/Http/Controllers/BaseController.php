<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(Type $var = null)
    {
       $title="";
       return view('base.pages.home.index', ['title'=>$title]);
    }

}