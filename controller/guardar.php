<?php
include('../model/BDconect.php');

//NOMBRE, APELLIDO, PROFESION, ESTADO.

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$profesion = $_POST['profesion'];
$estado = $_POST['estado'];

$sql = "INSERT INTO users (nombre,apellido,profesion,estado) value ('$nombre','$apellido','$profesion','$estado')";
$sql = $connect->prepare($sql);
$sql->execute();
?>