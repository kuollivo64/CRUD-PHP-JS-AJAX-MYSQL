function fijo()
{
document.writeln ("<div id=\"cabecera\">");
document.writeln ("<br>");
document.writeln ("<h1>Ejemplo de Seguridad Web: <br>");
document.writeln ("Autorización y Autenticación</h1>");
document.writeln ("</div>");
document.writeln ("<div id=\"menu\">");
document.writeln ("<h2>MENU</h2>");
document.writeln ("<dt> <p id='principal'>Principal (sin restricciones)</span></dt>");
document.writeln ("<dt> <p id='opcion1'>Autenticación</span></dt>");
document.writeln ("<dt> <p id='opcion2'>Acceso a Usuarios</span></dt>");
document.writeln ("<dt> <p id='opcion3'>Acceso a Administrador</span></dt>");
document.writeln ("<dt> <p id='opcion4'>Cierre de Sesion</span></dt>");
document.writeln("</div>");
}

$(document).ready(function(){
	$("#contenido").load("./contenido/principal.php");
	
	$("#principal").click(function(){				
				$("#contenido").load("./contenido/principal.php");
				});
	
	$("#opcion1").click(function(){				
				$("#contenido").load("./contenido/opcion1.html");
				});
				
	$("#opcion2").click(function(){				
				$("#contenido").load("./contenido/opcion2.php");
				});

	$("#opcion3").click(function(){				
				$("#contenido").load("./contenido/opcion3.php");
				});
					
	$("#opcion4").click(function(){				
				$("#contenido").load("./contenido/opcion4.php");
				});				
				
	
});