
<?php 
   

$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('Modalidad Academica')){
	mkdir('Modalidad Academica',0777,true);
	if(file_exists('Modalidad Academica')){
		if(move_uploaded_file($guardado, 'Modalidad Academica/'.$nombre)){
			echo '<script language="javascript">alert("Archivo guardado");window.location.href="../agregar-credito.php"</script>';
		}else{
			echo '<script language="javascript">alert("Archivo no guardado");window.location.href="../agregar-credito.php"</script>'; 
		}
	}
}else{
	if(move_uploaded_file($guardado, 'Modalidad Academica/'.$nombre)){
		echo '<script language="javascript">alert("Archivo guardado");window.location.href="../agregar-credito.php"</script>';
	}else{
		echo '<script language="javascript">alert("Archivo no guardado");window.location.href="../agregar-credito.php"</script>';
	}
}


?>
