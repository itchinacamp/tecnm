<?php 


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('Concurso de Creatividad e innovación')){
	mkdir('Concurso de Creatividad e innovación',0777,true);
	if(file_exists('Concurso de Creatividad e innovación')){
		if(move_uploaded_file($guardado, 'Concurso de Creatividad e innovación/'.$nombre)){
			echo '<script language="javascript">alert("Archivo guardado");window.location.href="../agregar-credito.php"</script>';
		}else{
			echo '<script language="javascript">alert("Archivo no guardado");window.location.href="../agregar-credito.php"</script>'; 
		}
	}
}else{
	if(move_uploaded_file($guardado, 'Concurso de Creatividad e innovación/'.$nombre)){
		echo '<script language="javascript">alert("Archivo guardado");window.location.href="../agregar-credito.php"</script>';
		}else{
			echo '<script language="javascript">alert("Archivo no guardado");window.location.href="../agregar-credito.php"</script>'; 
	}
}

?>