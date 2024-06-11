
<?php

    $usuario=$_GET['usuario'];//Recoge el nombre del usuario
    session_start(); //Se crea una nueva sesion

    echo'Sesion iniciada <br>';

    $_SESSION["id"] =$usuario;

    echo'Se ha creado una nueva sesion con el nombre de usuario: ' .$_SESSION['id'].'<br>';

    $tiempoInactivo=2;

    if(isset($_SESSION['id'])){
        $sessionTTL= time()- $_SESSION['timeout'];//Calcula el tiempo transcurrido.

        if($sessionTTL> $tiempoInactivo){
            header('Location: sessionCerrada.php');
    }

    $_SESSION['timeout']=time(); //Almacenamos la hora exacta del incio de sesion.

    //session_destroy();  //Si lo activo el enlace dejara de funcionar porque lo destruye.
    //unset($_SESSION['id']);


?>

<!--Se abre de nuevo la sesion-->

<a href="acceso2.php">Pincha aqui para abrir de nuevo la sesion.</a>