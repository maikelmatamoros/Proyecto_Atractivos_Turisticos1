<?php
include_once 'public/headerIndex.php';
?>

<div class="index">

    <link rel="stylesheet" href="public/css/main.css" />
    <section id="banner" class="bg-img" data-bg="banner1.jfif">
        <div class="inner">
            <header>
                <img class="img-fluid rounded mb-4" src="public/img/logo.png" alt="">
            </header>
        </div>
        <a href="#one" class="more">Learn More</a>
    </section>

    <!-- One -->
    <section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>¿En busca de atractivos turísticos en Costa Rica?</h2>
                </header>
                <div class="content">
                    <p>Buscando un poco de aventura? Bueno, entonces no busque más! Ofrecemos una amplia variedad de atractivos turísticos en Costa Rica. 
                        Con actividades y lugares que satisfarán incluso al adicto de adrenalina. Los surfistas se han reunido en este país desde hace
                        años. Todo debido a la consistencia calidad de las olas que se encuentran en ambas costas. Pavones es famoso por ser el segundo más 
                        largo “leftbreak” del mundo. Además,Roca Bruja apareció en la película ‘Endless Summer’. Costa Rica ha sido aclamado como un destino 
                        turístico caliente durante muchos años. </p>
                </div>
                <footer>
                    <a href="?controlador=Atractivo&accion=showAtractivoView" class="button alt">Leer más...</a>
                </footer>
            </article>
        </div>
        <a href="#two" class="more">Learn More</a>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper post bg-img" data-bg="banner3.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>Diversas formas de alojamiento para organizar tu estancia en Costa Rica</h2>
                </header>
                <div class="content">
                    <p>Costa Rica ofrece una amplia variedad de tipos alojamiento en la mayoría de sus ciudades y pueblos 
                        en los que podrás hospedarte y conocer todos sus lugares. En todas sus ciudades podrás encontrar 
                        hoteles adaptados a todos los bolsillos. El precio medio de una habitación ronda entre los $10 y $30 
                        por persona y día. Todos suelen estar bien equipados con aire acondicionado, televisión y cama limpia.</p>
                </div>
                <footer>
                    <a href="?controlador=Hotel&accion=showHotelView" class="button alt">Leer más...</a>
                </footer>
            </article>
        </div>
        <a href="#three" class="more">Learn More</a>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper post bg-img" data-bg="baner4.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>¿Con ganas de una escapa rápida a un destino diferente y no tienes vehículo?</h2>
                </header>
                <div class="content">
                    <p>Con poco más de 50.000 kilómetros, Costa Rica es un país diez veces menos extenso que España, por lo que rentar un 
                        vehículo te va a permitir desplazarte cómodamente por allí y aprovechar hasta el último segundo de tu viaje. 
                        En Expertos Travel Agency podrás encontrar diversos tipos de vehículos para rentar a manos de las mejores
                        compañías de Costa Rica. Las compañías con las que trabajamos, le ofrecen vehículos a la medida a los mejores 
                        precios del mercado.</p>
                </div>
                <footer>
                    <a href="?controlador=RentACar&accion=showRentACarView" class="button alt">Leer más...</a>
                </footer>
            </article>
        </div>
        <a href="#four" class="more">Learn More</a>
    </section>

    <!-- Four -->
    <section id="four" class="wrapper post bg-img" data-bg="baner5.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>¿Necesitas consejos para viajar?</h2>
                </header>
                <div class="content">
                    <p>Quizá mucha gente piense que viajar, solamente se trata de pasear y disfrutar, pero hay cosas que pueden complicar 
                        la ruta o la estadía en un nuestro país. Por lo tanto, si nunca has viajado o si tu idea es empezar a hacerlo con 
                        mucha más frecuencia, estos tips de viaje te ayudarán a estar alerta y conocer las cosas que podrían salir mal, y
                        cómo resolverlas. </p>
                </div>
                <footer>
                    <a href="?controlador=TipsDeViaje&accion=showTipsDeViajeView" class="button alt">Leer más...</a>
                </footer>
            </article>
        </div>
    </section>

</div>

<!-- Scripts -->
<script src="public/jquery/jquery.min.js"></script>
<script src="public/jquery/jquery.scrolly.min.js"></script>
<script src="public/jquery/jquery.scrollex.min.js"></script>
<script src="public/js/skel.min.js"></script>
<script src="public/js/util.js"></script>
<script src="public/js/main.js"></script>


<?php
include_once 'public/footer.php';
?>