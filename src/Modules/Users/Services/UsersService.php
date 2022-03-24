<?php
namespace Src\Modules\Users\Services;

use Exception;
use Src\Modules\Users\Interfaces\IUsersService;

class UsersService implements IUsersService {
    
    public function GetAllUsers($userId){
        
        throw new Exception("Prueba de log");
        return $userId;
    }

}
