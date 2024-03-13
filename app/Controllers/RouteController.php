<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SeederModel;

class RouteController extends BaseController
{   
    protected array $logins = [
        '0' => 'admin',
        '1' => 'manager',
        '2' => 'vodila1',
        '3' => 'vodila2',
        '4' => 'vodila3'
    ];
    
    protected string $password = "r12345";
    
    protected array $roles = [
        '0' => 'admin',
        '1' => 'manager',
        '2' => 'driver',
        '3' => 'driver',
        '4' => 'driver',
    ];

    /**
     * Обращаемся к Seeder
     * Для заполнения таблицы users
     *
     * @param 
     * @return
     */
    public function AddUsers()
    {
        $password = md5($this->password);
        for($i = 0 ; $i < 5 ; $i++){
            $seeder = new SeederModel();
            $result = $seeder->AddUser($this->logins[$i], $password, $this->roles[$i]);
        }
        if($result == true){
            echo "Таблица users заполнена!";
        }else{
            echo "Что то пошло не так...";
        }
        
    }

}
