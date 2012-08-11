<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Titulo de la web</title>
        <script type="text/javascript" src="js/modernizr.custom.79584.js"></script>
        <link  type="text/css" rel="stylesheet" href="css/general/reset.css"/>
        <link  type="text/css" rel="stylesheet" href="css/index/index.css"/>
        <link  type="text/css" rel="stylesheet" media="screen and (max-device-width: 5000px)" href="css/index/res1025.css"/>
        <link  type="text/css" rel="stylesheet" media="screen and (max-device-width: 1024px)" href="css/index/res1024.css"/>
        <link  type="text/css" rel="stylesheet" media="screen and (max-device-width: 800px)" href="css/index/res600.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <div id="contenido">
            <header>
                <div class="titulo-logo">
                    <?php include("imagenes/logo.php"); ?>
                </div>
                <ul>
                    <li><a href="https://www.facebook.com/"><img class="iconos" src="imagenes/facebook.png"/></a></li>
                    <li><a href="http://twitter.com/"><img class="iconos" src="imagenes/twitter.png"/></a></li>
                    <li><a href="https://plus.google.com"><img class="iconos" src="imagenes/google+.png"/></a></li>
                </ul>            
            </header>
            <div id="bienvenida">
                <p><span>Bienvenido</span> Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <nav>
                <ul>
                    <li class="li1">
                        <a href="servicios.php">
                            <div class="caja1">
                                <p>Servicios Web</p>
                                <?php include("imagenes/imagen1.php");?>
                            </div>
                        </a>
                        <div class="descripcion">
                            <p>Curabitur sit amet sem erat. Suspendisse id odio non lectus placerat commodo. Proin mattis pretium nisi sed consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>  
                            <a href="#">Ofertas</a>
                        </div>    
                    </li>
                    <li class="li2">
                        <a href="#">
                            <div class="caja2">
                                <p>¿Quienes somos?</p>
                                <?php include("imagenes/imagen2.php");?>
                            </div>
                        </a>
                        <div class="descripcion">
                            <p>Estibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus tortor augue, accumsan euismod ornare nec, fermentum vitae augue.</p>
                            <a href="#">Preguntas frecuentes</a>
                        </div>    
                    </li>
                    <li class="li3">
                        <a href="#">
                            <div class="caja3">
                                <p>Contacto</p>
                                <?php include("imagenes/imagen3.php");?>
                            </div>
                        </a>
                        <div class="descripcion">
                            <p>Mauris id ligula metus, vitae pulvinar turpis. Vivamus posuere convallis turpis ac egestas. Sed pellentesque egestas eros id scelerisque.</p>
                            <a href="#">Mopitz</a>
                        </div>   
                    </li>
                </ul>
                <div style="clear:both;"></div>
            </nav>
            <section>
                <article class="a1">
                    <h2>¿Porque tener una web?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In blandit luctus leo vitae volutpat. Sed imperdiet scelerisque consequat. Nullam eu turpis elit. Donec libero massa, interdum et lobortis sed, consequat at ante. Mauris tortor sapien, fermentum vitae dictum et, commodo at sem. Praesent neque lectus, bibendum quis consequat nec, porttitor eu ante. Sed risus nisi, tincidunt sodales mattis vitae, vulputate eget tellus. Integer id urna mi, sit amet imperdiet ipsum. Mauris rhoncus turpis nec sem facilisis et pellentesque diam tincidunt. </p>
                </article>
                <article class="a2">
                    <h2>¿lsndjasncsdj?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In blandit luctus leo vitae volutpat. Sed imperdiet scelerisque consequat. Nullam eu turpis elit. Donec libero massa, interdum et lobortis sed, consequat at ante. Mauris tortor sapien, fermentum vitae dictum et, commodo at sem. Praesent neque lectus, bibendum quis consequat nec, porttitor eu ante. Sed risus nisi, tincidunt sodales mattis vitae, vulputate eget tellus. Integer id urna mi, sit amet imperdiet ipsum. Mauris rhoncus turpis nec sem facilisis et pellentesque diam tincidunt. </p>
                </article>
            </section>
            <footer>
                <h6> (c)Copyright 2012</h6>
            </footer>
        </div>
    </body>
</html>