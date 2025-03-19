<?php 

session_start();

$errores=[];
$datos=$_POST;

if($_SERVER['REQUEST_METHOD']=='POST'){
    // Validar nombre
    if(empty($_POST['nombre'])){
        $errores['nombre']='El nombre es obligatorio';
}
// Validar apellido
if(empty($_POST['apellidos'])){
    $errores['apellidos']='Los apellidos son obligatorios';
}
// Validar email
if(empty($_POST['email'])){
    $errores['email']='El email es obligatorio';
}elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errores['email'] = 'El mail no es válido';
}
}
// Si hay errores...

if(!empty($errores)) {
    $_SESSION['errores']=$errores;
    $_SESSION['datos']=$datos;
    header('Location:index.php');
    exit;
}
// Si todo ok, redirigir a otra página

if(empty($errores)){
    $_SESSION['datos']=$datos;
    header('location: resultados.php');
    exit;
}

?>