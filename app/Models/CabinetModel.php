<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class CabinetModel extends BaseModel
{
    /**
     * Получаем список автопарков
     *
     * @param 
     * @return 
     */
    public function SelectParks()
    {   
        $sql = "SELECT * FROM autoparks";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->rowCount() > 0 ? $stmt->fetch(PDO::FETCH_ASSOC) : false;  
    }  
}
