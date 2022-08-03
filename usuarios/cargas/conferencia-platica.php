<?php 


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('Conferencia Platica')){
	mkdir('Conferencia Platica',0777,true);
	if(file_exists('Conferencia Platica')){
		if(move_uploaded_file($guardado, 'Conferencia Platica/'.$nombre)){
			echo '<script language="javascript">alert("Archivo guardado");window.location.href="../agregar-credito.php"</script>';
		}else{
			echo '<script language="javascript">alert("Archivo no guardado");window.location.href="../agregar-credito.php"</script>'; 
		}
	}
}else{
	if(move_uploaded_file($guardado, 'Conferencia Platica/'.$nombre)){
		echo '<script language="javascript">alert("Archivo guardado");window.location.href="../agregar-credito.php"</script>';
	}else{
		echo '<script language="javascript">alert("Archivo no guardado");window.location.href="../agregar-credito.php"</script>';
	}
}

?>