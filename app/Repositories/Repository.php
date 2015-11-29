<?php

namespace EloquentORM\Repositories;

/*
 * File Created for Rimorsoft Online
 * italomoralesf.com | rimorsoft.com
 */

/**
 * Description of Repositorie
 *
 * @author Italo Morales
 */
abstract class Repository {
    
    protected $entity;
    
    public function __construct() {
        $this->entity = $this->getEntity();
    }

    abstract public function getEntity();

    public function getAll($paginate = false){
        $q = $this->entity;
        
        return $paginate
                ? $q->paginate()
                : $q->get();
    }
    
    public function delete($id){
        
    }
    
    public function destroy(array $ids){
        $this->entity->destroy($ids);
    }
    
}
