<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<link  type="text/css" rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/contacto.css">
</head>
<body>
	<div id="contenido">
		<header>
            <div class="titulo-logo">
                <a href="index.php"><?php include("imagenes/logo.php"); ?></a>
            </div>
            <ul>
                <li><a href="https://www.facebook.com/"><img class="iconos" src="imagenes/facebook.png"/></a></li>
                <li><a href="http://twitter.com/"><img class="iconos" src="imagenes/twitter.png"/></a></li>
                <li><a href="https://plus.google.com"><img class="iconos" src="imagenes/google+.png"/></a></li>
            </ul>            
        </header>
        <nav>
            <ul>
                <li class="li1">
                    <a href="index.php">Inicio</a>
                </li>
                <li class="li2">
                    <a href="">¿Quienes somos?</a>
                </li>
                <li class="li3">
                    <a href="contacto.php">Contacto</a>
                </li>
            </ul>
        </nav>
        <h2>
            Formulario de contacto
        </h2>
        <section id="sec-formulario">
        	<form action="#" method="post" enctype="form/multipart">
        		<div class="entradas">
        			<p>Nombre</p><input type="name" autofocus>
        		</div>
        		<div class="entradas">
        			<p>Email</p><input type="email">
        		</div>
        		<div class="entradas">
        			<p>Asunto</p><input type="text">
        		</div>
        		<div class="entradas">
        			<p>Consulta</p><textarea></textarea>
        		</div>
        		<div>
        			<input type="submit" value="Enviar" name="enviar">
        		</div>
        	</form>
        </section>
	</div>
</body>
</html>