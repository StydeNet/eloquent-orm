<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\User;

use Illuminate\Http\Request;
use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

class PagesController extends Controller
{
    
    public function home(){
        $users = User::orderBy('id', 'DESC')
                ->take(10)
                ->get();
        return view('pages.home', compact('users'));
    }
    
}
