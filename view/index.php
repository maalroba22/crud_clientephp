<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('src/header.php'); ?>
 

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

            <i class="bi bi-trash3 delete"></i>
            <i class="bi bi-journal-check update"></i>

          </td>
        </tr>

      </tbody>
    </table>
  </div>

  <?php include_once('src/footer.php') ?>
  <!-- incluyo mi funcion clientes -->
  <script src="js/cliente.js"></script> 
</body>

</html>