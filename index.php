<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Titulo de la web</title>
        <script type="text/javascript" src="js/modernizr.custom.79584.js"></script>
        <link  type="text/css" rel="stylesheet" href="reset.css"/>
        <link  type="text/css" rel="stylesheet" href="general.css"/>
        <link  type="text/css" rel="stylesheet" media="screen and (max-device-width: 5000px)" href="res1025.css"/>
        <link  type="text/css" rel="stylesheet" media="screen and (max-device-width: 1024px)" href="res1024.css"/>
        <link  type="text/css" rel="stylesheet" media="screen and (max-device-width: 800px)" href="res600.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <div id="contenido">
            <header>
                <div class="titulo-logo">
                    <h1>Buble</h1>
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
                        <a href="servicios.php">
                            <div class="caja1">
                                <p>Servicios Web</p>
                                <?php include("imagen1.php");?>
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
                                <?php include("imagen2.php");?>
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
                                <?php include("imagen3.php");?>
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