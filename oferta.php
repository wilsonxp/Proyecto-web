<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/oferta.css" media="all">
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
                    <a href="servicios.php">Servicios</a>
                </li>
                <li class="li3">
                    <a href="">¿Quienes somos?</a>
                </li>
                <li class="li4">
                    <a href="contacto.php">Contacto</a>
                </li>
            </ul>
        </nav>
        <section id="oferta">
        	<div class="pack3">
                <table>
                    <tr>
                        <th>Plan avanzado</th>
                    </tr>
                    <tr>
                        <td>15 paginas</td>
                    </tr>
                    <tr>
                        <td>Logo incluido</td>
                    </tr>
                    <tr>
                        <td>Formulario contacto</td>
                    </tr>
                    <tr>
                        <td>Uso HTML5</td>
                    </tr>
                    <tr>
                        <td>Uso CSS3</td>
                    </tr>
                    <tr>
                        <td>Estatica</td>
                    </tr>
                    <tr>
                        <td>Todo dispositivo</td>
                    </tr>
                </table>
                <!--<div class="flecha"><?php include("imagenes/flecha.php");?></div>-->
                <!--<div>
                </div>-->
            </div>
            <aside id="descripcion">
            	<div id="antes">
            		<p>Antes</p>
            		<p>120.000</p>
            	</div>
            	<div class="flecha"><?php include("imagenes/flecha.php");?></div>
            	<div id="ahora">
            		<p>Ahora</p>
            		<p>100.000</p>
            	</div>
            	<div class="contratar">
                    <a href="#">Contratar</a>
                </div>
            </aside>
            <aside id="texto-des">
            	<p>
        			It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        		</p>
            </aside>
        </section>
        <footer>
            <h6> (c)Copyright 2012</h6>
        </footer>
	</div>
</body>
</html>