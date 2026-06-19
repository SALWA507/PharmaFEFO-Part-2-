<?php
require_once __DIR__ .'/../../config/database.php';
class StockRepository{
    private PDO $pdo;

public function __construct()
{
    global $pdo;
    $this->pdo=$pdo;
}
public function getAlllots()
{
    $sql ="
    SELECT 
    lots.id,
    medicaments.name,
    lots.batchNumero,
    lots.quantity,
    lots.expirationDate,
    lots.status
    FROM lots
    JOIN medicaments
    ON medicaments.id = lots.medicament_id
    ";
    $stmt=$this->pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}

