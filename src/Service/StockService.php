<?php

class StockService
{
    public function addBatch()
    {
        return [
            "success" => true,
            "message" => "Lot ajouté"
        ];
    }

    public function deliverBox()
    {
        return [
            "success" => true,
            "message" => "Boîte délivrée"
        ];
    }
}