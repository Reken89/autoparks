<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class LoginController extends BaseController
{   
    private string $view_auth = "/views/login.php";
    private array $data = [];
    
    /**
     * Подгружаем шаблон
     *
     * @param 
     * @return render
     */
    public function ViewAuth()
    {
        $this->view->render($this->view_auth, $this->data);
    }
    
    /**
     * Выполняем авторизацию
     *
     * @param 
     * @return
     */
    public function ExaminAuth()
    {
        //Проверяем ввел ли пользователь логин и пароль
        if($_POST['login'] == true && $_POST['password'] == true){
            
            $action = new AuthModel;
            $result = $action->ExaminAuth($_POST['login'], md5($_POST['password']));
            if($result == true){
                $_SESSION['auth'] = $result;
                header("Location: /autoparks/main/");
            }else{
                header("Location: /autoparks/");
            }
        } else {
            header("Location: /autoparks/");
        }
    }

}
