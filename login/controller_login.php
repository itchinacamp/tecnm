<?php   
include('../app/config/config.php');
session_start();
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$correo_tabla = '';
$contraseña_tabla = '';


$query_login = $pdo->prepare("SELECT * FROM tb_usuarios WHERE correo = '$correo' AND contraseña = '$contraseña' AND estado = '1' ");
//print_r($query_login);
$query_login->execute();

$usuarios = $query_login->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
     $correo_tabla = $usuario['correo'];
     $contraseña_tabla = $usuario['contraseña'];
     $privilegio = $usuario ['cargo'];

}
if( ($correo==$correo_tabla) && ($contraseña==$contraseña_tabla) ){
    //echo "usuario correcto";
    $_SESSION['u_usuario'] = $correo;
    //header('Location: ../usuarios/index.php');

    if ($privilegio=="Administrador"){
        header('Location: ../usuarios/index.php');
    } else if ($privilegio=="ALUMNO"){
        header('Location: ../usuarios/indexuser.php');
    }else if ($privilegio=="Maestro"){
        header('Location: ../usuarios/indexmaestro.php');
    }
}else {
    echo "usuario no existe";
    header('location:index.php');
}


