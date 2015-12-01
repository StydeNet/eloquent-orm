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
    
    public function getIdTrashed($id){
        return $this->entity
                ->withTrashed()
                ->find($id);
    }
    
    public function getId($id){
        return $this->entity
                ->find($id);
    }
    
    public function restore($entity){
        $entity->restore();
    }
    
    public function forceDelete($entity){
        $entity->forceDelete();
    }

    public function getAll($paginate = false){
        $q = $this->entity;
        
        return $paginate
                ? $q->paginate()
                : $q->get();
    }
    
    public function delete($id){
        $entity = $this->getId($id);
        $entity->delete();
    }
    
    public function destroy(array $ids){
        $this->entity->destroy($ids);
    }
    
}