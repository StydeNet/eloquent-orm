<?php

namespace EloquentORM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    
    use SoftDeletes;
    
}
