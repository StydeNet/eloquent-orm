<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\Repositories\Books\BookRepositories;

use Illuminate\Http\Request;
use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

class BookController extends Controller
{
    
    protected $books;
    
    public function __construct(BookRepositories $bookRepositories) {
        $this->books = $bookRepositories;
    }


    public function getBooks() {
        $books = $this->books->getAll($paginate = true);
        return view('books.index', compact('books'));
    }
    
    public function delBooks(Request $request) {
        $ids = $request->get('ids');
        if(count($ids)){
            $this->books->destroy($ids);
        }
        return back();
    }
    
}
