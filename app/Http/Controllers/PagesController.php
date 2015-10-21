<?php

namespace EloquentORM\Http\Controllers;

use Illuminate\Http\Request;
use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

class PagesController extends Controller
{
    
    public function home(){
        return view('pages.home');
    }
    
}
