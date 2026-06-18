<?php

require_once '../src/Service/StockService.php';

class ApiStockController
{
    public function add()
    {
        header('Content-Type: application/json');

        $service = new StockService();

        echo json_encode(
            $service->addBatch()
        );
    }
}