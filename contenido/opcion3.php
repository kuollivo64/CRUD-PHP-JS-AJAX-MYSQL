<?php
session_start();
include('../programas/usuario.php');
include('../programas/personas.php');
if($_SESSION["inicio"] == 0)
{
?>
<h1>ADVERTENCIA</h1>
<p>Por favor inicie sesion</p>
<br><br>
<?php
}
else
{
    $objetoUsuario = unserialize($_SESSION["usuario"]);
    echo $objetoUsuario."<br>";
    echo $objetoUsuario->Persona;
    if($_SESSION["tipoUsuario"] != 1)
    {
?>
<h1>ADVERTENCIA</h1>
<p>Esta es una pagina de Administrador ------ ACCESO RESTRINGIDO</p>
<br><br>
<?php
    }
    else
    {
?>
<h1>Pagina Administrador</h1>
<p>Esta es una pagina de Administrador</p>
<br><br>
<?php
    }
}
?>
