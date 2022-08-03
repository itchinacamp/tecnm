<?php 


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('Diseño de Software')){
	mkdir('Diseño de Software',0777,true);
	if(file_exists('Diseño de Software')){
		if(move_uploaded_file($guardado, 'Diseño de Software'.$nombre)){
			echo '<script language="javascript">alert("Archivo guardado");window.location.href="../agregar-credito.php"</script>';
		}else{
			echo '<script language="javascript">alert("Archivo no guardado");window.location.href="../agregar-credito.php"</script>'; 
		}
	}
}else{
	if(move_uploaded_file($guardado, 'Diseño de Software/'.$nombre)){
		echo '<script language="javascript">alert("Archivo guardado");window.location.href="../agregar-credito.php"</script>';
		}else{
			echo '<script language="javascript">alert("Archivo no guardado");window.location.href="../agregar-credito.php"</script>'; 
	}
}

?>