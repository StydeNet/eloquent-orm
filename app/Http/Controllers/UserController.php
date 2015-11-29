<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\User;

use Illuminate\Http\Request;
use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

class UserController extends Controller
{
    
    public function getDeleteItems(){
        $users = User::orderBy('id', 'ASC')
                ->paginate();
        return view('users.deleteItems', compact('users'));
    }
    
    public function deleteItems(Request $request){
        $ids = $request->get('ids');
        if(count($ids)){
            User::destroy($ids);
        }
        return back();
    }
    
}
