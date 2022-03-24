<?php

namespace Src\Modules\Users\Controllers;

use App\Http\Controllers\ControllerApi;
use Illuminate\Http\Request;
use Src\Modules\Users\Interfaces\IUsersService;

class UserController extends ControllerApi
{
    function __construct(IUsersService $service){
        parent::__construct($service);
    }

    public function GetAllUsers($userId){
        return $this->service->GetAllUsers($userId);
    }
}
