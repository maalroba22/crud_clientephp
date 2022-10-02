<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./view/src/header.php'); ?>
  <title>Crud php</title>
</head>

<body>

  <div class="container">
    <h1 class="m-5">Crud php y Maysql</h1>
    <button class="btn btn-info">Crear neuvo Prducto</button>
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
        <tr>
          <td>Mneul</td>
          <td>romero</td>
          <td>yati</td>
          <td>3023908743</td>
          <td>
            <button class="btn btn-primary">Update</button>
            <button class="btn btn-danger">Delte</button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>

  <?php include_once('src/footer.php') ?>

  <!-- incluyo mi funcion clientes -->

</body>

<script src="js/clientes.js"></script>
</html>