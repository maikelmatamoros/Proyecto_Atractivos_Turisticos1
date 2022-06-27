<?php
include_once 'public/header.php';
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<link rel="stylesheet" href="public/css/cards-gallery.css">

<br />
<br />

<h1 class="mt-4 mb-3">Galería sobre atractivos turísticos</h1>

<section class="gallery-block cards-gallery">
    <div class="row">

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalMuseos">
                <a class="lightbox">
                    <img src="public/img/atractivos/museooro2.jpg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Museos de Costa Rica</a></h6>
                    <p class="text-muted card-text">En Costa Rica, no todo son playas paradisíacas y sorprendentes
                        parques naturales, también tendrás la ocasión de conocer su apasionante historia y cultura,
                        y, para ello, la visita a sus museos es indispensable.</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalMuseos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Museos de Costa Rica</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- carrusel -->
                        <div id="carouselMuseos" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselMuseos" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselMuseos" data-slide-to="1"></li>
                                <li data-target="#carouselMuseos" data-slide-to="2"></li>
                                <li data-target="#carouselMuseos" data-slide-to="3"></li>
                                <li data-target="#carouselMuseos" data-slide-to="4"></li>
                                <li data-target="#carouselMuseos" data-slide-to="5"></li>
                                <li data-target="#carouselMuseos" data-slide-to="6"></li>
                                <li data-target="#carouselMuseos" data-slide-to="7"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/museoarte.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/museoarte2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/museojade.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/museojade2.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/museonacional.jpg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/museonacional2.jpg" alt="sixth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/museooro.jpg" alt="seventh slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/museooro2.jpg" alt="eight slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselMuseos" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselMuseos" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalMontaña">
                <a class="lightbox" href="#">
                    <img src="public/img/atractivos/canopymanuelantonio.jpg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Montañas</a></h6>
                    <p class="text-muted card-text">Costa Rica por su topografía ofrece la oportunidad de vivir experiencias
                        llenas de adrenalina y que mejor que hacerlo rodeado de las preciosas y verdes montañas de nuestro país.</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalMontaña" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Montañas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- carrusel -->
                        <div id="carouselMontaña" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselMontaña" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselMontaña" data-slide-to="1"></li>
                                <li data-target="#carouselMontaña" data-slide-to="2"></li>
                                <li data-target="#carouselMontaña" data-slide-to="3"></li>
                                <li data-target="#carouselMontaña" data-slide-to="4"></li>
                                <li data-target="#carouselMontaña" data-slide-to="5"></li>
                                <li data-target="#carouselMontaña" data-slide-to="6"></li>
                                <li data-target="#carouselMontaña" data-slide-to="7"></li>
                                <li data-target="#carouselMontaña" data-slide-to="8"></li>
                                <li data-target="#carouselMontaña" data-slide-to="9"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/canopymanuelantonio2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/canopyfortuna.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/pejibaye.png" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/riotoro.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/senderismorainmaker.jpg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/senderismomanuelantonio2.jpg" alt="sixth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/raftingsarapiqui.jpg" alt="Seven slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/cataratatoro.jpg" alt="Eight slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/senderimoslafortuna2.jpg" alt="Nine slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/chirripo2.jpg" alt="Ten slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselMontaña" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselMontaña" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalPlaya">
                <a class="lightbox" href="#">
                    <img src="public/img/atractivos/playacahuita.jpg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Playas</a></h6>
                    <p class="text-muted card-text">¿Las mejores playas de Costa Rica están en el Caribe o en el Pacífico?
                        ¡En ambas costas! El territorio costarricense tiene playas preciosas en ambos océanos que merecen
                        ser conocidas. </p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalPlaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Playas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- carrusel -->
                        <div id="carouselPlaya" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselPlaya" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselPlaya" data-slide-to="1"></li>
                                <li data-target="#carouselPlaya" data-slide-to="2"></li>
                                <li data-target="#carouselPlaya" data-slide-to="3"></li>
                                <li data-target="#carouselPlaya" data-slide-to="4"></li>
                                <li data-target="#carouselPlaya" data-slide-to="5"></li>
                                <li data-target="#carouselPlaya" data-slide-to="6"></li>
                                <li data-target="#carouselPlaya" data-slide-to="7"></li>
                                <li data-target="#carouselPlaya" data-slide-to="8"></li>
                                <li data-target="#carouselPlaya" data-slide-to="9"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/playacahuita2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/playaroble.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/playadominical.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/playaesterillos.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/playagarza.jpeg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/playagrande.jpg" alt="sixth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/playaguiones.jpg" alt="Seven slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/playahermosa.jpg" alt="Eight slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/playaherradura.jpg" alt="Nine slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/playamontezuma.jpg" alt="Ten slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselPlaya" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselPlaya" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalVolcan">
                <a class="lightbox" href="#">
                    <img src="public/img/atractivos/volcanpoas.jpg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Volcanes</a></h6>
                    <p class="text-muted card-text">Costa Rica no es solo fauna y bosque. Uno de los mayores atractivos de nuestro
                        país son los volcanes, existentes gracias a que Costa Rica está erigido encima del llamado Cinturón de Fuego del Pacífico.</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalVolcan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Volcanes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- carrusel -->
                        <div id="carouselVolcan" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselVolcan" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselVolcan" data-slide-to="1"></li>
                                <li data-target="#carouselVolcan" data-slide-to="2"></li>
                                <li data-target="#carouselVolcan" data-slide-to="3"></li>
                                <li data-target="#carouselVolcan" data-slide-to="4"></li>
                                <li data-target="#carouselVolcan" data-slide-to="5"></li>
                                <li data-target="#carouselVolcan" data-slide-to="6"></li>
                                <li data-target="#carouselVolcan" data-slide-to="7"></li>
                                <li data-target="#carouselVolcan" data-slide-to="8"></li>
                                <li data-target="#carouselVolcan" data-slide-to="9"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/volcanpoas2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/volcanarenal.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/volcanmiravalles.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/volcanbarva.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/volcanirazu.jpg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/volcarinconvieja.jpg" alt="sixth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/volcantenorio.jpg" alt="Seven slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/volcarinconvieja2.jpg" alt="Eight slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/volcanirazu2.jpg" alt="Nine slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/volcanbarva2.jpg" alt="Ten slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselVolcan" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselVolcan" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalMar">
                <a class="lightbox" href="#">
                    <img src="public/img/atractivos/snorkislacano.jpg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Mares & Océanos</a></h6>
                    <p class="text-muted card-text">Costa Rica está rodeada por sus dos lados por océanos.
                        El Océano Pacífico en la costa oeste y el Mar Caribe en la costa este.
                        Las aguas patrimoniales suman 528,682 kilómetros cuadrados, 11 veces más que el área territorial.</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalMar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Mares & Océanos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- carrusel -->
                        <div id="carouselMar" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselMar" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselMar" data-slide-to="1"></li>
                                <li data-target="#carouselMar" data-slide-to="2"></li>
                                <li data-target="#carouselMar" data-slide-to="3"></li>
                                <li data-target="#carouselMar" data-slide-to="4"></li>
                                <li data-target="#carouselMar" data-slide-to="5"></li>
                                <li data-target="#carouselMar" data-slide-to="6"></li>
                                <li data-target="#carouselMar" data-slide-to="7"></li>
                                <li data-target="#carouselMar" data-slide-to="8"></li>
                                <li data-target="#carouselMar" data-slide-to="9"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/sufsalinas.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/snorkcahuita.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/nadarmanzanillo.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/surfelroble.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/snorkmontezuma.jpg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/snorkmanzanillo.jpg" alt="sixth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/nadarplayagrande.jpg" alt="Seven slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/nadarplayahermosa.jpg" alt="Eight slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/nadarplayaguines.jpg" alt="Nine slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/snorkmanuelantonio.jpg" alt="Ten slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselMar" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselMar" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalParque">
                <a class="lightbox" href="#">
                    <img src="public/img/atractivos/quetzal.jpg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Parques Nacionales</a></h6>
                    <p class="text-muted card-text">Costa Rica es un país privilegiado al conservar buena parte de su
                        territorio, unos 13.000 kilómetros cuadrados, en parques y reservas nacionales. Aquí se mantiene
                        protegido lo más valioso del patrimonio natural e histórico.</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalParque" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Parques Nacionales</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- carrusel -->
                        <div id="carouselParques" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselParques" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselParques" data-slide-to="1"></li>
                                <li data-target="#carouselParques" data-slide-to="2"></li>
                                <li data-target="#carouselParques" data-slide-to="3"></li>
                                <li data-target="#carouselParques" data-slide-to="4"></li>
                                <li data-target="#carouselParques" data-slide-to="5"></li>
                                <li data-target="#carouselParques" data-slide-to="6"></li>
                                <li data-target="#carouselParques" data-slide-to="7"></li>
                                <li data-target="#carouselParques" data-slide-to="8"></li>
                                <li data-target="#carouselParques" data-slide-to="9"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/pilaamistad.png" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/quetzal.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/pqchirripo.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/pqcahuita.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/pqtortuguero.jpg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/pqbarrahonda.jpg" alt="sixth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/pqguanacaste.jpg" alt="Seven slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/pqcarara.jpg" alt="Eight slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/marioBallena.jpg" alt="Nine slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/atractivos/atractivo1.jpg" alt="Ten slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselParques" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselParques" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

    </div>
</section>

<br />
<br />

<?php
include_once 'public/footer.php';
?>