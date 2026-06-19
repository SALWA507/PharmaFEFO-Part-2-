<?php
require_once __DIR__.'/../Repository/StockRepository.php';
class Stockservice{
    private StockRepository $repository;
    public function __construct(){
        $this->repository = new StockRepository();
    }
    public function getLots(){
        return $this->repository->getAllLots();
    }
}
