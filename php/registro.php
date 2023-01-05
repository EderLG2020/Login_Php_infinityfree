<?php
error_reporting(0);
$nameuser = $_POST['nameuser'];
$correoe = $_POST['correoe'];
$numerotelefonico = $_POST['numerotelefonico'];
$direccion = $_POST['direccion'];
$apodo = $_POST['apodo'];
$pass1 = $_POST['pass1'];
// $Bs= mysqli_connect("localhost","root","ederllancari12","usuario") or die("No se conecto a la base de datos");

$Bs= mysqli_connect("sql205.epizy.com","epiz_33168732","E38VWnBU6w7hd","epiz_33168732_usuario") or die("No se conecto a la base de datos");
$Bs -> set_charset("utf8");
$Inser = "INSERT INTO usuario(nameuser,correo,numerotelefonico,direccion,apodo,pass1) VALUES('$nameuser', '$correoe','$numerotelefonico','$direccion','$apodo','$pass1')";
  mysqli_query($Bs, $Inser);
?>