<?php
session_start();
if(!isset($_SESSION["inicio"]))
{
    $_SESSION["inicio"] = 0;
    $_SESSION["tipoUsuario"] = -1;
}
?>

<h1>Ejemplo de seguridad</h1>
<h2>Autenticacion y Autorizacion</h2>
<p>En esta aplicacion web ejemplo implementaremos los que la seguridad web de la siguiente manera</p>
<p>- A la pagina principal podran acceder cualquier tipo de usuario o persona sin ninguna restriccion</p>
<p>- La opcion Autenticacion serviria para ingresar al usuario y contraseña requeridos por la aplicaion 
    El personal PHP asociado vereficacaran que estos sean correctos .Esta pagina no tiene ninguna restriccion de acceso
</p>
