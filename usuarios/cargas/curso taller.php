<?php 


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('Curso o curso taller')){
	mkdir('Curso o curso taller',0777,true);
	if(file_exists('Curso o curso taller')){
		if(move_uploaded_file($guardado, 'Curso o curso taller/'.$nombre)){
			echo '<script language="javascript">alert("Archivo guardado");window.location.href="../agregar-credito.php"</script>';
		}else{
			echo '<script language="javascript">alert("Archivo no guardado");window.location.href="../agregar-credito.php"</script>'; 
		}
	}
}else{
	if(move_uploaded_file($guardado, 'Curso o curso taller/'.$nombre)){
		echo '<script language="javascript">alert("Archivo guardado");window.location.href="../agregar-credito.php"</script>';
		}else{
			echo '<script language="javascript">alert("Archivo no guardado");window.location.href="../agregar-credito.php"</script>'; 
	}
}

?>