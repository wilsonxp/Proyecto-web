<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link  type="text/css" rel="stylesheet" href="css/general/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/contacto.css" media="all">
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
                    <a href="">Contacto</a>
                </li>
            </ul>
        </nav>
        <section id="sec-formulario">
        	<form action="enviado.php" method="post">
        		<input type="text"/>
        	</form>
        </section>
	</div>
</body>
</html>