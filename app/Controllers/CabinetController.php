<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CabinetModel;

class CabinetController extends BaseController
{   
    private string $view_main = "/views/main.php";
    private string $view_parks = "/views/parks.php";
    private $data;
    
    /**
     * Подгружаем шаблон
     * Главная страница
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
    
    /**
     * Подгружаем шаблон
     * Список автопарков
     *
     * @param 
     * @return render
     */
    public function ShowAutoparks()
    {
        $action = new CabinetModel;
        $this->data = $action->SelectParks();
        $this->view->render($this->view_parks, $this->data);
    }

}
