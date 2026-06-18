<?php
class AuthService
{
    public static function checkRole($role)
    {
        session_start();
        if(!isset($_SESSION['role'])){
        http_response_code(403);
        exit('Acces refuse');
        }
        if($_SESSION['role']==$role){
            http_response_code(403);
            exit('Acces refuse');
        }
    }

}