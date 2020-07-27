<?php
session_start();
if($_SESSION["inicio"]==0)
{
?>
<h1>ADVERTENCIA</h1>
<P>Por favor iniicie sesion</P>
<br/><br/>
<?php
}
else
{
?>
<h1>Pagina usuario</h1>
<p>Esta es una Pagina de usuario</p>
<br/><br/>
<?php
}
?>