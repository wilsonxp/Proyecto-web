<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Vida Web</title>
        <script type="text/javascript" src="js/modernizr.custom.79584.js"></script>
        <link  type="text/css" rel="stylesheet" href="css/reset.css"/>
        <link  type="text/css" rel="stylesheet" href="css/index.css"/>
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
            <div id="bienvenida">
                <p><span>Bienvenido</span> a VidaWeb, el lugar en donde podrás llevar a cabo tu negocio, tu hobby y hasta tu sueño. Somos una empresa de desarrollo y diseño de aplicaciónes web, entre ellas, páginas web. Hacemos uso de las últimas tecnologías para estar siempre a la vanguardia.<br/> Te invitamos a navegar en nuestro sitio y ver los servicios que te proponemos según tus necesidades. <br/>Apostamos por un servicio personalizado en donde usted decidirá lo que quiere. Creemos que es necesario que el cliente conozca y pueda “tomarse un café” con la empresa que contrato.</p>
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
                            <p>Acá podrás ver todos los servicios que ofrecemos y elegir el que mejor se ajuste a tus medias, tenemos para todos los gustos y precios.</p>  
                            <a href="oferta.php">Ofertas</a>
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
                            <p>Averigua quienes somos, siempre es bueno saber quienes son los que estarán a cargo de tu proyecto. Tratamos de ser lo más transparente posible por lo que en esta sección sabrás los más importante de nosotros.</p>
                            <a href="#">Preguntas frecuentes</a>
                        </div>    
                    </li>
                    <li class="li3">
                        <a href="contacto.php">
                            <div class="caja3">
                                <p>Contacto</p>
                                <?php include("imagenes/imagen3.php");?>
                            </div>
                        </a>
                        <div class="descripcion">
                            <p>Si tienes dudas, sobre lo que hacemos, cómo lo hacemos o cualquier otra inquietud, en esta sección podrás hacer cualquier consulta y la trataremos de responder en la brevedad.</p>
                            <a href="#">Redes Sociales</a>
                        </div>   
                    </li>
                </ul>
                <div style="clear:both;"></div>
            </nav>
            <section>
                <article class="a1">
                    <h2>¿Porque tener una web?</h2>
                    <p>Tener un sitio Web hoy día es de grán importancia para la estrategia de cualquier tipo de negocio o emprendimiento.
                        Sobre todo si consideramos que cada ves es mayor la tendencia de la mayoría de las personas a buscar en internet 
                        cuando estan pensando en comprar o en contratar cualquier tipo de producto o servicio con el fin de hacer comparaciones
                        que al final terminarán influenciando su decisión de compra.</p>
                    <p>Todos sabemos por ejemplo, que hoy dia  los responsables de compras de cualquier empresa local, nacional o internacional,
                        utilizan cada vez mas internet como herramienta fundamental de decisiones en este proceso de compras, por lo que la
                        presencia y visibilidad en internet mediante un Sitio Web eficaz se vuelve sumamente esencial.
                        Es por esto que, para causar una buena impresión e inclinar la balanza a nuestro favor hay que tener mucho cuidado
                        con la información que suministramos en nuestra web y la manera como lo hacemos.
                    </p>
                </article>
                <article class="a2">
                    <h2>Profesionalismo</h2>
                    <p>No se necesita un Sitio Web muy sofisticado, pero si que trasmita una imagen profesional,
                    con información clara y actualizada de los productos y servicios, que permita lograr objetivos
                    y, sobre todo, que permita el contacto y comunicación con clientes actuales y potenciales.</p>
                    <p>El diseño de un Sitio Web suele ser el punto débil de webs realizadas por personas o empresas
                    que carecen de experiencia en el tema del marketing y la publicidad en internet. Páginas que
                    apuntan a extremos, dando algunas una sensación de dejadez y otras por el contrario saturadas de
                    animaciones y colores de poco profesionalismo y sin mencionar lo mas importante, las que carecen
                    del contenido apropiado para el mercado al cual se dirigen, esto si que es un error.
                    </p>
                    <p>Si bien, el contenido es lo más importante, el contexto que lo acompaña aumentara considerablemente
                    su valor y credibilidad.
                    </p>
                </article>
            </section>
            <footer>
                <h6> (c)Copyright 2012</h6>
            </footer>
        </div>
    </body>
</html>