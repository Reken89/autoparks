<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class AuthModel extends BaseModel
{
    /**
     * Выполняем проверку логина и пароля
     * Возвращаем массив с информацией о пользователе
     *
     * @param string $name, string $password
     * @return 
     */
    public function ExaminAuth(string $login, string $password)
    {   
        $sql = "SELECT * FROM users WHERE login = :login AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount() > 0 ? $stmt->fetch(PDO::FETCH_ASSOC) : false;  
    }  
}
