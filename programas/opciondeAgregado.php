<?php
include('usuario.php');
include('personas.php');
$objetoPersona = new Personas(124578,"Luis","Lopez","Peres",true,new DateTime());
$objetoUsuario = new Usuarios("user123","c354","micorrero@gmial.com",$objetoPersona,0);

$objetoUsuario->Persona->nombreCompleto;
?>