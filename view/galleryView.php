<?php
include_once 'public/header.php';
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<link rel="stylesheet" href="public/css/cards-gallery.css">

<br/>
<br/>

<h1 class="mt-4 mb-3">Galería</h1>

<section class="gallery-block cards-gallery">
    <div class="row">

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalNaturaleza">
                <a class="lightbox">
                    <img src="public/img/natureCategory.jpg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Naturaleza</a></h6>
                    <p class="text-muted card-text">Costa Rica es hogar del 5% de la biodiversidad mundial, con más de 500.000 especies de flora y fauna.</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalNaturaleza" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Naturaleza</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"> 

                        <!-- carrusel -->
                        <div id="carouselNaturaleza" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselNaturaleza" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselNaturaleza" data-slide-to="1"></li>
                                <li data-target="#carouselNaturaleza" data-slide-to="2"></li>
                                <li data-target="#carouselNaturaleza" data-slide-to="3"></li>
                                <li data-target="#carouselNaturaleza" data-slide-to="4"></li>
                                <li data-target="#carouselNaturaleza" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/naturaleza/1.png" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/naturaleza/2.jpeg" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/naturaleza/3.jpeg" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/naturaleza/4.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/naturaleza/5.jpg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/naturaleza/6.webp" alt="sixth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselNaturaleza" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselNaturaleza" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalAventura">
                <a class="lightbox" href="#">
                    <img src="public/img/aventureCategory.jpg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Aventura</a></h6>
                    <p class="text-muted card-text">Costa Rica por su topografía ofrece la oportunidad de vivir experiencias llenas de adrenalina.</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalAventura" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Aventura</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- carrusel -->
                        <div id="carouselAventura" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselAventura" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselAventura" data-slide-to="1"></li>
                                <li data-target="#carouselAventura" data-slide-to="2"></li>
                                <li data-target="#carouselAventura" data-slide-to="3"></li>
                                <li data-target="#carouselAventura" data-slide-to="4"></li>
                                <li data-target="#carouselAventura" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/aventura/1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/aventura/2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/aventura/3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/aventura/4.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/aventura/5.jpg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/aventura/6.jpg" alt="sixth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselAventura" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselAventura" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalCultura">
                <a class="lightbox" href="#">
                    <img src="public/img/CultureCategory.jpg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Cultura</a></h6>
                    <p class="text-muted card-text">A lo largo y ancho de las 7 provincias de Costa Rica, encontrará diversas manifestaciones culturales.</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalCultura" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Cultura</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- carrusel -->
                        <div id="carouselCultura" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselCultura" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselCultura" data-slide-to="1"></li>
                                <li data-target="#carouselCultura" data-slide-to="2"></li>
                                <li data-target="#carouselCultura" data-slide-to="3"></li>
                                <li data-target="#carouselCultura" data-slide-to="4"></li>
                                <li data-target="#carouselCultura" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/cultura/1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/cultura/2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/cultura/3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/cultura/4.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/cultura/5.jpg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/cultura/6.jpg" alt="sixth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselCultura" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselCultura" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalBienestar">
                <a class="lightbox" href="#">
                    <img src="public/img/yogaCategory.jpeg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Bienestar & Yoga</a></h6>
                    <p class="text-muted card-text">Un equilibrio saludable entre la mente,cuerpo y espíritu, una sensación de bienestar gracias a los hermosos paisajes que nos rodean.</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalBienestar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Bienestar & yoga</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- carrusel -->
                        <div id="carouselBienestar" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselBienestar" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselBienestar" data-slide-to="1"></li>
                                <li data-target="#carouselBienestar" data-slide-to="2"></li>
                                <li data-target="#carouselBienestar" data-slide-to="3"></li>
                                <li data-target="#carouselBienestar" data-slide-to="4"></li>
                                <li data-target="#carouselBienestar" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/bienestar/1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/bienestar/2.webp" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/bienestar/3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/bienestar/4.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/bienestar/5.jpg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/bienestar/6.jpg" alt="sixth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselBienestar" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselBienestar" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalFamilia">
                <a class="lightbox" href="#">
                    <img src="public/img/familyFriendsCategory.jpeg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Familia & Amigos</a></h6>
                    <p class="text-muted card-text">Vacaciones familiares o con amigos, ideal para estrechar los lazos de convivencia basada en experiencias positivas.</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalFamilia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Familia & Amigos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- carrusel -->
                        <div id="carouselFamilia" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselFamilia" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselFamilia" data-slide-to="1"></li>
                                <li data-target="#carouselFamilia" data-slide-to="2"></li>
                                <li data-target="#carouselFamilia" data-slide-to="3"></li>
                                <li data-target="#carouselFamilia" data-slide-to="4"></li>
                                <li data-target="#carouselFamilia" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/familia/1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/familia/2.jpeg" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/familia/3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/familia/4.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/familia/5.jpeg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/familia/6.jpg" alt="sixth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselFamilia" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselFamilia" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 transform-on-hover" data-toggle="modal" data-target="#modalCliente">
                <a class="lightbox" href="#">
                    <img src="public/img/clientsCategory.jpg" alt="Card Image" class="card-img-top">
                </a>
                <div class="card-body">
                    <h6><a href="#">Clientes</a></h6>
                    <p class="text-muted card-text">Nuestro motor, lo que nos impulsa día a día a esforzarnos en diseñar vacaciones inolvidables a los mejores precios.</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Clientes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- carrusel -->
                        <div id="carouselClientes" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselClientes" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselClientes" data-slide-to="1"></li>
                                <li data-target="#carouselClientes" data-slide-to="2"></li>
                                <li data-target="#carouselClientes" data-slide-to="3"></li>
                                <li data-target="#carouselClientes" data-slide-to="4"></li>
                                <li data-target="#carouselClientes" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/clientes/1.jpeg" alt="First slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/clientes/2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/clientes/3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/clientes/4.jpg" alt="Forth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/clientes/5.jpg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item" style="max-width: 100%;height: auto;">
                                    <img class="d-block w-100" src="public/img/clientes/6.jpg" alt="sixth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselClientes" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselClientes" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- carrusel -->

                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Modal -->

    </div>
</section>

<br/>
<br/>

<?php
include_once 'public/footer.php';
?>