<?php






include ('../app/config/config.php');

$nombres=$_POST['nombre'];
$ap_paterno=$_POST['paterno'];
$ap_materno=$_POST['materno'];
$sexo=$_POST['sexo'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$cargo = $_POST['cargo'];
$profesion = $_POST['profesion'];
$cubiculo = $_POST['cubiculo'];
$area = $_POST['area'];
$contraseña = $_POST['contraseña'];
$user_creacion = "Administrador";

date_default_timezone_set("America/Monterrey");

$fechaHora = date('Y-m-d h:i:s');
$estado = '1';

$nombre_de_foto_perfil = "SisTECNM-".date('Y-m-d-h-i-s');
$filename = $nombre_de_foto_perfil."_".$_FILES['file']['name'];

$location = "update_usuarios/".$filename;

move_uploaded_file($_FILES['file']['tmp_name'],$location);
//echo $nombres ." - ".$ap_paterno." - ".$ap_materno." - ".$sexo." - ".$numero_control." - ".$carrera." - ".$correo." - ".$estado_civil." - ".$telefono." - ".$ciudad." - ".$colonia." - ".$calle." - ".$codigo_postal." - ".$curp." - ".$fecha_nacimiento." - ".$nivel_escolar." - ".$reticula." - ".$entidad." - ".$contraseña." - ".$user_creacion. " - ".$fechaHora." - ".$estado;

$inserta = "INSERT INTO tb_usuarios(nombres, ap_paterno, ap_materno, sexo, correo, telefono, cargo, profesion, cubiculo, area, foto_perfil, contraseña, user_creacion, fyh_creacion, estado) VALUES ('$nombres', '$ap_paterno', '$ap_materno', '$sexo', '$correo', '$telefono', '$cargo', '$profesion', '$cubiculo', '$area', '$filename', '$contraseña', '$user_creacion', '$fechaHora', '$estado')";

$resultado = mysqli_query($conexion, $inserta);
if (!$resultado){
echo 'Error al registrarse';
}else{
    echo '<script language="javascript">alert("Usuario registrado");window.location.href="create_usuario.php"</script>';
}
mysqli_close($conexion);