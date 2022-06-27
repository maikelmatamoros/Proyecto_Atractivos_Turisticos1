<?php
        include_once 'public/header.php';
    ?>
<link href="public/css/atractivosCards.css" rel="stylesheet">

<br/>
<br/>
<h1 class="mt-4 ml-4">Atractivos y actividades</h1>

<section>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <p class="lead">
                Los visitantes de nuestro país pueden disfrutar de hermosas playas tropicales, 
                emocionantes aventuras, maravillas de la naturaleza y una interesante cultura, 
                multiples actividades tanto al aire libre como en interiores, todos los 
                componentes necesarios para unas vacaciones ideales. 
                <br><br>
                ¡No es de extrañar que miles de personas hayan hecho de Costa Rica su mejor opción
                de viaje!

            </p>
            <br />

            <hr>

            <p class="lead"><strong> <b>Ingrese la siguiente informacion para ayudarle a encontrar su plan ideal:</b></strong></p>


            <form name="rentACar">
                <div class="row">
                    <div class="col-lg-6 portfolio-item">
                        <div class="card-body">
                            <label>Estimado total del presupuesto en colones:</label>
                            <div class="form-group">
                                <select class="form-control" name="precio" id="precio">
                                    <option value="10000">Menos de 10000</option>
                                    <option value="50000">Más de 10000 y menos de 50000</option>
                                    <option value="50001">Más de 50000</option>
                                </select>
                            </div>
                            <label>Seleccione el tipo de turismo que desea hacer:</label>
                            <div class="form-group">
                                <select class="form-control" name="tipoTurista" id="tipoTurista">
                                    <option value="Tranquilo">Tranquilo</option>
                                    <option value="Aventurero">Aventura</option>
                                    <option value="Extremo">Extremo</option>
                                    <option value="Explorador">Explorador</option>
                                </select>
                            </div>
                            <label>Seleccione el tipo de ambiente que desea:</label>
                            <div class="form-group">
                                <select class="form-control" name="tipoLugar" id="tipoLugar">
                                    <option value="Museo">Museo</option>
                                    <option value="Montaña">Montaña</option>
                                    <option value="Playa">Playa</option>
                                    <option value="Volcán">Volcán</option>
                                    <option value="Mar">Mar</option>
                                    <option value="Reserva">Reserva</option>
                                    <option value="Parque">Parque</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 portfolio-item">
                        <div class="card-body">
                            <label>Seleccionar las estrellas:</label>
                            <div class="form-group">
                                <select class="form-control" name="estrellas" id="estrellas">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <br />
                            <div style="text-align: center">
                                <font color="#ff0000">
                                    <font size="4"> </font>
                                </font>
                                <input value="BUSCAR" id="button" class="btn btn-buscar btn-outline-secondary btn-md"
                                     type="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row" id="fila-content">
            
        </div>
        <template id="template-card">
                <div class="col-md-4">
                    <div class="card text-center card-01 h-100">
                        <div class="carousel slide" data-interval="false" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="card-img-top img-fluid img1" src="" alt="First slide" height="200">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-img-top img-fluid img2" src="" alt="Second slide" height="200">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="card-body h-100 d-flex flex-column">
                            <span class="badge-box" id="icono"></span>
                            <h4 class="card-title" id="nombre"></h4>
                            <div class="flex-column mt-auto">
                                <div class="d-flex justify-content-between">
                                    <h6 id="tipo"> </h6>
                                    <h6 id="lugar"></h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 id="provincia"></h6>
                                    <h6 id="precio"></h6>
                                </div>

                                <button class="btn card-btn btn-default text-uppercase mt-auto">Explorar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
    </div>
</section>

<script type="text/javascript" src="public/js/atractivos.js"></script>
<?php
        include_once 'public/atractivoModal.php';
        include_once 'public/footer.php';
    ?>