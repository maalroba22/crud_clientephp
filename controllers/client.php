<?php
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
   case 'POST':
      include_once('../controllers/client.php');
      switch ($_POST) {
         case 'getAllClient':
            $res = Clients::getAllClients();
            echo($res);
            break;

         default:
            # code...
            break;
      }
}
