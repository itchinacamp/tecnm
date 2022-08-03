<?php

include ('../app/config/config.php');
//traemos las variables
$matricula=$_POST['matricula'];
$nombre=$_POST['nombre'];
$actividad=$_POST['actividad'];
$obs=$_POST['obs'];
$valor=$_POST['valor'];
$nivel=$_POST['nivel'];


//sentencia sql
$sql= "INSERT INTO creditos (matricula,
                                nombre,
                                act,
                                observacion,
                                valor,
                                desmp) 
                                VALUES 
                                ('$matricula',
                                       '$nombre',
                                       '$actividad',
                                       '$obs';
                                       '$valor',
                                       '$nivel')";


//ejecutamos sql

$ejecutar=mysqli_query($conexion,$sql);
//verificamos la ejecucion
if (!$ejecutar){
    echo 'Error al registrarse';
    }else{
        header('Location: evaluacion.php');
    }
    mysqli_close($conexion);
?>