<?php






include ('../app/config/config.php');

$nombres=$_POST['nombres'];
$numero_control=$_POST['numero_control'];
$correo = $_POST['correo'];

$contraseña = $_POST['contraseña'];
$user_creacion = "ESCAMILLA";

date_default_timezone_set("America/Monterrey");

$fechaHora = date('Y-m-d h:i:s');
$estado = '1';
$cargo = 'ALUMNO';





//echo $nombres ." - ".$ap_paterno." - ".$ap_materno." - ".$sexo." - ".$numero_control." - ".$carrera." - ".$correo." - ".$estado_civil." - ".$telefono." - ".$ciudad." - ".$colonia." - ".$calle." - ".$codigo_postal." - ".$curp." - ".$fecha_nacimiento." - ".$nivel_escolar." - ".$reticula." - ".$entidad." - ".$contraseña." - ".$user_creacion. " - ".$fechaHora." - ".$estado;

$inserta = "INSERT INTO tb_usuarios(nombres, numero_control, correo, contraseña, user_creacion, fyh_creacion, estado, cargo) VALUES ('$nombres', '$numero_control', '$correo', '$contraseña', '$user_creacion', '$fechaHora', '$estado', '$cargo')";

$resultado = mysqli_query($conexion, $inserta);
if (!$resultado){
echo 'Error al registrarse';
}else{
    echo 'usuario registrado correctamente';
}
mysqli_close($conexion);