<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('src/header.php'); ?>
  <title>Crud php</title>
</head>

<body>
  <div class="container">
    <h1 class="m-5">Crud php y Maysql</h1>
    <button class="btn btn-primary "  data-bs-toggle="modal" data-bs-target="#modalCliente" data-bs-whatever="@mdo">Nuevo Cliente</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
    <table class="table table-hover mt-5">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Direccion</th>
          <th>Telefono</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>

  <?php include_once('src/footer.php') ?>
  <?php include_once('conponets/modalClient.php') ?>
  <!-- incluyo mi funcion clientes -->
  <script src="js/cliente.js"></script>

  


  
</body>


</html>