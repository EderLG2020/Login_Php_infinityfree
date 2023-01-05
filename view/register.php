<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6 fondo-abstracto">
            <h2>Registrate</h2>
                <form action="#">
                <input type="text" name="usuario" id="usuario" placeholder="Nombre completo"
                        autocomplete="email"><br><br>
                    <input type="email" name="correo" id="correo" placeholder="Correo electrónico"><br><br>
                    <input type="number" name="numerotelefonico" id="numerotelefonico"
                        placeholder="Numero telefonico"><br><br>
                    <input type="text" name="direccion" id="direccion" placeholder="Direccion completa"><br><br>
                    <input type="text" name="name" id="name" placeholder="Nombre"><br><br>
                    <input type="password" name="pass1" id="pass1" placeholder="Contraseña"><br><br>
                    <!-- <input type="password" name="pass2" id="pass2" placeholder="Confirmar contraseña"><br><br> -->

                    <div class="aceptar">
                        <p><input type="checkbox" name="acepta" id="acepta"> Acepta nuestros <a>terminos</a> y
                            <a>condiciones</a>
                        </p><br>

                    </div>
                    <button type="submit">Registrarse</button>
                </form>
            </div>
            <div class="col-6">
            <h1>¿Ya tienes cuenta?</h1>
                <p>Inicia sesion para que puedas acceder a los mejores<br> productos y a los mejores precios de Ibcorp 😎 </p>
                <button  class="btn btn-warning"><a href="../index.php">Iniciar sesion</a></button>

                <div class="row">
                    <img src="../src/img/registro.png" alt="imagen_venta">

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
</body>

</html>

