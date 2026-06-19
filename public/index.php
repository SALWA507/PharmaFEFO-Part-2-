<?php

session_start();

require_once '../src/Controller/Api/ApiDashboardController.php';

$route = $_GET['route'] ?? '';

switch ($route) {

    case 'api/v1/batches':
        $controller = new ApiDashboardController();
        $controller->getBatches();
        break;

    case 'login':
        require '../views/login.php';
        break;

    default:
        echo "PharmaFEFO API Running";
        break;
}