<?php

namespace EloquentORM\Repositories\Books;

use EloquentORM\Book;
use EloquentORM\Repositories\Repository;

/*
 * File Created for Rimorsoft Online
 * italomoralesf.com | rimorsoft.com
 */

/**
 * Description of BookRepositorie
 *
 * @author Italo Morales
 */
class BookRepositories extends Repository {
    
    public function getEntity() {
        return new Book;
    }
    
    public function getTrashed(){
        return $this->entity
                ->withTrashed()
                ->paginate();
    }
    
}