<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class SeederModel extends BaseModel
{
    /**
     * Записываем данные в таблицу users
     * Предварительно биндим данные
     *
     * @param string $name, string $password, string $role
     * @return bool
     */
    public function AddUser(string $login, string $password, string $role): bool
    {   
        $sql = "INSERT INTO users (login, password, role) VALUES (:login, :password, :role)";               
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->bindValue(":role", $role, PDO::PARAM_STR);
        $stmt->execute();      
        return $stmt->rowCount() > 0 ? true : false;  
    }  
}
