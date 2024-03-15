<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CabinetController extends BaseController
{   
    private string $view_main = "/views/main.php";
    private array $data = [];
    
    /**
     * Подгружаем шаблон
     *
     * @param 
     * @return render
     */
    public function ShowCabinet()
    {
        if(isset($_SESSION['auth'])){
            $this->view->render($this->view_main, $this->data);
        }else{
            echo "Просмотр страницы возможен только для авторизованных пользователей!";
        }
    }

}
