<?php
include('app/config/config.php');
session_start();


if(isset($_SESSION['u_usuario'])){
    //echo "existe sesión";
    //echo "bienvenido usuario";
$correo_sesion = $_SESSION['u_usuario'];
    $query_sesion = $pdo->prepare("SELECT * FROM tb_usuarios WHERE correo = '$correo_sesion' AND estado = '1' ");
    $query_sesion->execute();
    $sesion_usuarios = $query_sesion->fetchAll(PDO::FETCH_ASSOC);
    foreach ($sesion_usuarios as $sesion_usuario){
        $id_sesion = $sesion_usuario['id'];
         $id_nombres = $sesion_usuario['nombres'];
        $id_ap_paterno = $sesion_usuario['ap_paterno'];
        $id_ap_materno = $sesion_usuario['ap_materno'];
         $id_sexo = $sesion_usuario['sexo'];
         $id_numero_control = $sesion_usuario['numero_control'];
         $id_carrera = $sesion_usuario['carrera'];
         $id_correo = $sesion_usuario['correo'];
         $id_estado_civil = $sesion_usuario['estado_civil'];
         $id_telefono = $sesion_usuario['telefono'];
         $id_ciudad = $sesion_usuario['ciudad'];
         $id_colonia = $sesion_usuario['colonia'];
         $id_calle = $sesion_usuario['calle'];
         $id_codigo_postal = $sesion_usuario['codigo_postal'];
         $id_curp = $sesion_usuario['curp'];
         $id_fecha_nacimiento = $sesion_usuario['fecha_nacimiento'];
         $id_nivel_escolar = $sesion_usuario['nivel_escolar'];
         $id_reticula = $sesion_usuario['reticula'];
         $id_entidad = $sesion_usuario['entidad'];
         $id_foto_perfil = $sesion_usuario['foto_perfil'];
         $id_cargo = $sesion_usuario['cargo'];

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('layout/head.php'); ?>
    <title>Sistema de Farmacia - Usuario </title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include('layout/menu.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                SISTEMA DE FARMACIA - USUARIOS
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="panel panel-primary">
                <div class="panel-heading">Listado de Usuarios Activos</div>
                <div class="panel-body">
<table border="1">
            <tr>
                <td>Nombre Completo</td>
                <td><?php echo $id_nombres." ".$id_ap_paterno." ".$id_ap_materno;?></td>
            </tr>
            <tr>
                <td>Numero de control</td>
                <td><?php echo $id_numero_control;?></td>
            </tr>
            <tr>
                <td>Fecha nacimiento</td>
                <td><?php echo $id_fecha_nacimiento;?></td>
            </tr>
            <tr>
                <td>Genero</td>
                <td><?php echo $id_sexo;?></td>
            </tr>
            <tr>
                <td>ciudad</td>
                <td><?php echo $id_ciudad;?></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><?php echo $id_telefono;?></td>
            </tr>
            <tr>
                <td>Código postal</td>
                <td><?php echo $id_codigo_postal;?></td>
            </tr>
            <tr>
                <td>Foto Perfil</td>
                <td><?php echo $id_foto_perfil;?></td>
            </tr>
            <tr>
                <td>correo institucional</td>
                <td><?php echo $id_correo;?></td>
            </tr>
            <tr>
                <td>Carrera</td>
                <td><?php echo $id_carrera;?></td>
            </tr>
        </table>
        <a href= 
        </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <?php include('layout/footer.php');?>
</div>
<?php include('layout/footer_links.php');?>
</body>
</html>
    <?php

   


}else{
    echo "no existe sesión";
    header('Location:'.$URL.'/login');
}



?>
