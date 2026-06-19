<?php
require_once __DIR__ . '/../../Service/StockService.php';
class ApiDashboardController
{
    public function getBatches(){
        header('content-type:application/json');
        $service =new StockService();
        echo json_encode(
            $service->getLots()
        );
    }
}