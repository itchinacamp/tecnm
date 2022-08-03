<?php
include ('../app/config/config.php');
session_start();
if(isset($_SESSION['u_usuario'])){
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
       

    }

?>

<!DOCTYPE html>
<html>
<head>
  <?php include ('../layout/head.php'); ?>
  <title>Guia de actividades Complementarias</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include ('../layout/menu.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>Reporte</h1>
    <br>    

      <!-- Main content -->
      <section class="content">
    <div class="panel panel-primary">
                    <div class="panel-heading">Guia de Actividades Complementarias</div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover table-condensed">
    <div class="row">
        <div id="content" class="col-lg-12">
<a class="btn btn-primary" href="reporteconstancia.php"><i class="fa fa-download"></i> Descargar PDF</a>
        </div>
    </div>  
    <h2> 

<p style="text-align: center;">CONSTANCIA DE CUMPLIMIENTO DE ACTIVIDAD COMPLEMENTARIA.
</p>
</h2>
 <br>  


  C. 
 <br>

Jefe(a) del Departamento de Servicios Escolares o su equivalente en los Institutos Tecnológicos Descentralizados

 <br> 
PRESENTE. 
<br>
<br>
<br>
<p style="text-align: justify;">
El que se suscribe, por 
este medio se permite hacer de su conocimiento que el estudiante 
con numero de control
de la carrera de 
ha cumplido su actividad complementaria con el nivel de desempeño
 y un valor numérico de 
 durante el periodo escolar 
 con un valor curricular de 
  créditos. 
  </p>
  <br>
  <br>
  <br>
  <p style="text-align: right;">
Se extiende la presente en la 
 a los 
días de 
 de
</p>
 <br>
  <br>
  <br>
  <br>
  <p style="text-align: center;">
  ATENTAMENTE
  </p>
 
    
</div>

</body>
</html>
</table>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include ('../layout/footer.php'); ?>
  <?php include ('../layout/footer_links.php'); ?>




</body>
</html>
<?php
}else{
    echo "no existe sesión";
    header('Location:'.$URL.'/login');
}