<?php
class ApiDashboardController{
    public function getBatches(){
        header('content-type:application/json');
        echo json_encode([
            [
            "id" => 1,
                "medicament" => "Paracetamol",
                "quantite" => 50
            ]
        ]);
    }
}

