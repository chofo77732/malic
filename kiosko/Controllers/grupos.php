<?php
	
		require_once('conexion.php');
session_start();

		$boton=$_POST['pro'];

		switch ($boton) {

			case 'registrar':
    

			 $nombre=$_POST['nombre'];
             $descripcion=$_POST['descripcion'];
             $tipo=$_POST['tipo'];
             $fk_perfil=$_SESSION['id'];
             $fk_proyecto=$_POST['fk_proyecto'];


             $valores = "INSERT INTO `grupo`(`nombre`, `descripcion`, `tipo`, `fk_proyecto`) VALUES ('$nombre' ,'$descripcion' ,'$tipo' , '$fk_proyecto' )";

             $result = mysqli_query($link, $valores);

             if($result){
					echo "exito";
				
             }else{
             	echo "Solo se puede registrar un grupo por proyecto";

             }

             break;

case 'editar':
	
    

			 $id_grupo=$_POST['id'];
			 $nombre=$_POST['nombre'];
             $descripcion=$_POST['descripcion'];
             $tipo=$_POST['tipo'];
             $valores = "UPDATE `grupo` SET `nombre`='$nombre', `descripcion`='$descripcion', `tipo`='$tipo' WHERE `id_grupo`='$id_grupo'";

             $result = mysqli_query($link, $valores);
             if($result){
					echo "exito";
				
             }else{
             	echo "error";

             }

break;
					case 'modificar':
					

$id_grupo=$_POST['id'];



$valores = "SELECT * FROM grupo WHERE id_grupo = '$id_grupo'";
$valores2 = mysqli_query($link, $valores);

				$row=mysqli_fetch_array($valores2,MYSQLI_ASSOC);

$datos = array(
				
				0 => $row['id_grupo'], 
				1 => $row['nombre'], 
				2 => $row['descripcion'], 
				3 => $row['tipo'], 
				
				);
echo json_encode($datos);
					
				break;

		case 'eliminar':

					
					$id=$_POST['id'];

             $valores = "DELETE from grupo WHERE `id_grupo`='$id'";

             $result = mysqli_query($link, $valores);
             if($result){
					echo "exito";
				
             }else{
             	echo "error";

             }


					
				break;

						case 'unirse':

					
					$id=$_POST['id_proyecto'];
					$perfil=$_POST['user'];

             $valores = "INSERT INTO `user_grupo`(`fk_proyecto`, `fk_perfil`) VALUES ('$id','$perfil')";

             $result = mysqli_query($link, $valores);
             if($result){
					echo "exito";
				
             }else{
             	echo "error";

             }


					
				break;

			default:
				# code...
				break;
		}

		
?>