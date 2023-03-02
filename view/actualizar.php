<?php
include('../model/BDconect.php');
include('header.php');
?>
<!-- NOMBRE, APELLIDO, PROFESION, ESTADO.-->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Profesion</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT * FROM users";
      $query = $connect->prepare($sql);
      $query->execute();
      $resultado = $query->fetchAll(PDO::FETCH_OBJ);

      foreach ($resultado as $datos);{
        echo"
        <tr>
        <td>".$datos->Nombre."</td>
        <td>".$datos->Apellido."</td>
        <td>".$datos->Profesion."</td>
        <td>".$datos->Estado."</td>
        </tr>
        
        ";
      }
    ?>
  </tbody>
</table>

<?php
include('footer.php');
?>