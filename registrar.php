<?php

	include ("con_db.php"); 
if (isset ($_POST['register']))
	{
		if (strlen ($_POST['name'])>=1 && strlen ($_POST['email'])>=1 && strlen ($_POST['valor'])>=1 && strlen ($_POST['coment'])>=1 ){
			$name = trim ($_POST['name']);
			$email = trim ($_POST['email']);
			$valor = trim ($_POST['valor']);
			$coment = trim ($_POST['coment']);
			$fechareg = date("d/m/y");	
			$consulta =" INSERT INTO datos (nombre, email, opcion, comentario, fecha_reg) VALUES ('$name','$email','$valor','$coment','$fechareg')" ;
			$resultado = mysqli_query($conex,$consulta);
			
			if ($resultado)
			{
				?>
                <h3 class= "ok">Gracias</h3>
                <?php
			}
			else {
				?>
                <h3 class= "bad">Error</h3>
                <?php
			}	
		}
		else {
				?>
                <h3 class= "bad">Complete los campos</h3>
                <?php
		}
	}
	
?>