<?php
session_start();
if($_SESSION["inicio"] == 0)
{
?>
<h1>ADVERTENCIA</h1>
<p>Por favor inicie sesion</p>
<br/><br/>
<?php
}
else{
?>
<script>
    $(document).ready(function(){
        $("#b1").click(function(){
            $.post("./programas/cerrarsesion.php",
              function(data){
                  document.getElementById("respuesta").innerHTML="Su usuario "+data;
              });  
        });
    });
</script>
<h1>Cierre de Sesion</h1>
    <input type="button" value="Cerrar sesion" id="b1"><br/>
    <span id="respuesta"></span>
    <br/><br/>
<?php
}
?>