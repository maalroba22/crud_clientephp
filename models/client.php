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

  /**
   * @description: permite crear un cliente
   * @params : data
   */

  public static function addClient($data)
  {
    include_once('../config/init_db.php');
    DB::$encoding = 'utf8';
    $insert = DB::query("INSERT INTO cliente(
                                nombre_c,
                                apellido_c,
                                direccion,
                                telefono,
                                estado
                                )
                              VALUES(
                                '{$data['nombre']}', 
                                '{$data['apellido']}', 
                                '{$data['direccion']}', 
                                '{$data['telefono']}', 
                                1
                              )");
    return $insert;
  }

  /**
   * @description: Buscar cliente por id
   * @param id
   */
  public static function buscarId($id){
   include_once('../config/init_db.php');
    DB::$encoding = 'utf8';
    $buscar = DB::query("SELECT * FROM cliente WHERE id_cliente = '{$id['id']}'");
    return $buscar;
}



}
