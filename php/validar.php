<?php
$dbhost = "sql205.epizy.com";
$dbuser = "epiz_33168732";
$dbpass = "E38VWnBU6w7hd";
$dbname = "epiz_33168732_usuario";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) {
			die("No hay conexión: ".mysqli_connect_error());
		}
	$nombre = $_POST["usuario"];
	$pass = $_POST["pass"];
	$query = mysqli_query($conn,"SELECT * FROM usuario WHERE correo= '".$nombre."' and pass1 = '".$pass."'");
	$nr = mysqli_num_rows($query);
		if($nr == 1)
			{
				echo "<script>alert('Bienvenido') </script>";
				header("Location: ../view/principal.html");
			}
		else if ($nr == 0) 
			{
				echo "<script>alert('No tiene acceso') </script>";
				header("Location: ../view/register.html");
		}
?>