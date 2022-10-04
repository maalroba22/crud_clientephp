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
      }
}
