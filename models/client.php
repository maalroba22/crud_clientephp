<?php

class Clients
{

    /**
     * @Description: Listar todos lo clientes
     */

    public static function getAllClients()
    {
       // print_r('estoy en models');
        include_once('../config/init_db.php');
            DB::$encoding = 'utf8';
            $resul = DB::query("SELECT * FROM cliente"); 
           /*  print_r($resul); */
            return $resul;  

    }
}
?>