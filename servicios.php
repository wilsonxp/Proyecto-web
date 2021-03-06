<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Titulo de la web</title>
        <script type="text/javascript" src="js/modernizr.custom.79584.js"></script>
        <link  type="text/css" rel="stylesheet" href="css/reset.css"/>
        <link  type="text/css" rel="stylesheet" href="css/servicios.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
                        <a href="index.php"><span>Inicio</span></a>
                    </li>
                    <li class="li2">
                        <a href="servicios.php">Servicios</a>
                    </li>
                    <li class="li3">
                        <a href="oferta.php">Ofertas</a>
                    </li>
                    <li class="li4">
                        <a href="">¿Quienes somos?</a>
                    </li>
                    <li class="li5">
                        <a href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </nav>
            <div id="bienvenida">
                <p>A continuación te mostramos todos los planes disponibles. Hemos creado
                estos planes de tal forma que nadie se quede sin una opción, es por eso que
                en caso que por alguna razón ninguno de estos planes te acomode, elige el más 
                cercano y luego cuando te contactemos, nos explicas bien tus requerimientos.
                Les queremos recordar que estos planes son solo para tener una referencia de
                lo que quieren al momento de contactarnos con usted, pero siempre se pueden
                hacer excepciones y estamos dispuestos a la mayor flexibilidad para que se sienta a gusto.</p>
            </div>
            <section id="tablas">
                <article>
                    <div class="pack1">
                        <table>
                            <tr>
                                <th>Plan basico</th>
                            </tr>
                            <tr>
                                <td>5 paginas</td>
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
                        <div class="flecha"><?php include("imagenes/flecha.php");?></div>
                        <div class="caja-precio">
                            <p class="desde">aprox</p>
                            <p class="precio">$80.000</p><span class="no-incluye-host">(no incluye host)</span>
                        </div>
                        <div class="contratar">
                            <a href="#">Contratar</a>
                        </div>
                        <!--<div>
                        </div>-->
                    </div>                  
                    <div class="pack2">
                        <table>
                            <tr>
                                <th>Plan medio</th>
                            </tr>
                            <tr>
                                <td>10 paginas</td>
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
                        <div class="flecha"><?php include("imagenes/flecha.php");?></div>
                        <div class="caja-precio">
                            <p class="desde">aprox</p>
                            <p class="precio">$120.000</p><span class="no-incluye-host">(no incluye host)</span>
                        </div>
                        <div class="contratar">
                            <a href="#">Contratar</a>
                        </div>
                        <!--<div>
                        </div>-->
                    </div>                    
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
                        <div class="flecha"><?php include("imagenes/flecha.php");?></div>
                        <div class="caja-precio">
                            <p class="desde">aprox</p>
                            <p class="precio">$170.000</p><span class="no-incluye-host">(no incluye host)</span>
                        </div>
                        <div class="contratar">
                            <a href="#">Contratar</a>
                        </div>
                        <!--<div>
                        </div>-->
                    </div>
                    <div class="pack4">
                        <table>
                            <tr>
                                <th>Plan aplicacion</th>
                            </tr>
                            <tr>
                                <td>
                                    <img src="imagenes/app-web.jpg">
                                </td>
                            </tr>
                            <tr>
                                <td>Base de datos</td>
                            </tr>
                            <tr>
                                <td>Dinamica</td>
                            </tr>
                            <tr>
                                <td>Mysql</td>
                            </tr>
                            <tr>
                                <td>Todo dispositivo</td>
                            </tr>
                        </table>
                        <div class="flecha"><?php include("imagenes/flecha.php");?></div>
                        <div class="caja-precio">
                            <p class="desde">aprox</p>
                            <p class="precio">Variable</p><span class="no-incluye-host">(no incluye host)</span>
                        </div>
                        <div class="contratar">
                            <a href="#">Contratar</a>
                        </div>
                        <!--<div>
                        </div>-->
                    </div>                   
                    <div class="pack5">
                        <table>
                            <tr>
                                <th>Plan dinamico</th>
                            </tr>
                                <td>
                                    <img src="imagenes/dinamico.jpg">
                                </td>
                            <tr>
                                <td>Si ningun plan es adecuado para tus nesesidades, puedes elegir este plan y contruirlo a tu medida</td>
                            </tr>
                        </table>
                        <div class="flecha"><?php include("imagenes/flecha.php");?></div>
                        <div class="caja-precio">
                            <p class="desde">aprox</p>
                            <p class="precio">Variable</p><span class="no-incluye-host">(no incluye host)</span>
                        </div>
                        <div class="contratar">
                            <a href="#">Contratar</a>
                        </div>
                        <!--<div>
                        </div>-->
                    </div>   
                    <div style="clear:both;"></div>        
                </article>
            </section>
            <section id="des-tablas">
                <h2>Descripción de planes</h2>
                <article id="basico">
                    <h3>Plan basico</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </article>
                <article id="medio">
                    <h3>Plan medio</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </article>
                <article id="avanzado">
                    <h3>Plan avanzado</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </article>
                <article id="aplicacion">
                    <h3>Plan aplicacion</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </article>
                <article id="dinamico">
                    <h3>Plan dinamico</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </article>
            </section>
            <footer>
                <h6> (c)Copyright 2012</h6>
            </footer>
        </div>
    </body>
</html>