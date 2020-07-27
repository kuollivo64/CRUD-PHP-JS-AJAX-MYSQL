<?php
session_start();
include('usuario.php');
include('personas.php');
if((isset($_POST["usuario"]) && !empty($_POST["usuario"])) && (isset($_POST["contrasenia"]) && !empty($_POST["contrasenia"]))) 
			{
				$usuario = $_POST["usuario"];
				$contrasenia = $_POST["contrasenia"];

				$objetoPersona = new Personas(1234567,"Luis","Ortega","Perez",true,new DateTime());
				$objetoUsuario = new Usuarios("admin","a123","admin@gmail.com",$objetoPersona,1);
				

				if(strcasecmp($usuario ,$objetoUsuario->usuario) == 0)
				{
					if(strcasecmp($contrasenia, $objetoUsuario->contrasenia) == 0)
				    {  
						echo "Usuario Autenticado";
						echo $objetoUsuario;
						echo ",<br/> Bienvenido ".$objetoPersona->nombreCompleto;
						$_SESSION["inicio"] = 1;
						$_SESSION["tipoUsuario"] = $objetoUsuario->tipoPerfil;
						$usuarioSerializado = serialize($objetoUsuario);
						$_SESSION["usuario"] = $usuarioSerializado;	
				    }
     				else
	     			{
		 	     		echo "Contraseña incorrecta";
		     		}
				}
				else
				{
					echo "Usuario incorrecta";
				}
				
				//echo "Datos recibidos";
			}
			else
			{
				echo "Parametros incompletos";
			}

?>