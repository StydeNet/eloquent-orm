<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\Repositories\Users\UserRepositories;

use Illuminate\Http\Request;
use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $users;
    
    public function __construct(UserRepositories $userRepositories) {
        $this->users = $userRepositories;
    }

    public function getDeleteItems(){
        $users = $this->users->getAll($paginate = true);
        
        return view('users.deleteItems', compact('users'));
    }
    
    public function deleteItems(Request $request){
        $ids = $request->get('ids');
        if(count($ids)){
            $this->users->destroy($ids);
        }
        return back();
    }
    
}
