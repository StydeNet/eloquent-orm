<?php

namespace EloquentORM\Repositories\Users;

use EloquentORM\User;
use EloquentORM\Repositories\Repository;

/*
 * File Created for Rimorsoft Online
 * italomoralesf.com | rimorsoft.com
 */

/**
 * Description of UserRepositorie
 *
 * @author Italo Morales
 */
class UserRepositories extends Repository {
    
    public function getEntity() {
        return new User;
    }
    
}
