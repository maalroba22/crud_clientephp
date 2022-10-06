<?php
$method = $_SERVER['REQUEST_METHOD'];
//print_r($_SERVER); // solo imprime con prin_r
switch ($method) {
   case 'POST':
      include_once('../models/client.php');
      switch ($_POST['opcn']) {
         case 'getAllClient':
            $res = Clients::getAllClients();
            echo json_encode($res);
            break;
         case 'crear':
            $res = Clients::addClient($_POST);
            echo json_encode($res);
            break;
         case 'buscarId':
            $res = Clients::buscarId($_POST);
            echo json_encode($res);
            break;
      }
}
