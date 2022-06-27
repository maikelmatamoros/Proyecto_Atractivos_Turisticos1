<?php
include_once 'public/header.php';
?>
<br/>
<br/>
<!-- Título -->
<h1 class="mt-4 mb-3">Alojamiento</h1>

<!-- Video -->
<div style="text-align: center;">
    <video style="  max-width: 100%;height: auto;" width="1200" height="480" controls autoplay>
        <source src="public/videos/recomendacionesAlojamiento.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<br/>
<br/>

<section id="generalFacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <p class="lead">
                    Decidir donde quedarse durante su visita en Costa Rica es uno de los temas más difíciles a la hora de planear su viaje. 
                    Y más difícil es decidir entre los cientos de opciones de hospedaje que tiene el país para ofrecerle: lodge de montaña, 
                    hoteles todo incluido, opciones de lujo en ciudad, montaña y playa; acogedoras cabañas para una salida romántica o luna 
                    de miel.<br><br>

                    Expertos Travel Agency, le ofrece una exclusiva colección de hoteles que han cumplido con un 
                    proceso de verificación para obtener la declaratoria turística o la Certificación de Sostenibilidad Turística (CST). 
                    Aquí podrá obtener recomendaciones de alojamiento de acuerdo a la zona turística, lugares turísticos, o tipo de hotel: montaña, ciudad, cerca de los aeropuertos, 
                    turismo rural, entre otros.<br><br>

                    Costa Rica es un destino para viajar durante todo el año, que ofrece una amplia variedad de hoteles para todos los 
                    presupuestos; sin embargo, la mayoría de estos hoteles son pequeños y tienden a tener poca disponibilidad de espacio, 
                    especialmente durante la temporada alta. Planifique su viaje con anticipación, al menos dos meses durante la temporada 
                    baja y seis meses durante la temporada alta (diciembre a marzo).

                </p>
                <br/>

                <!-- Imagen -->
                <img class="img-fluid rounded mb-4" src="public/img/hotel.png" alt="">


                <p class="lead"><strong> <b>¿Dónde Hospedarse?</b></strong></p>
                <p class="lead">
                    ¿Hotel de montaña? ¿Hoteles todo incluido? ¿Lujo? ¿Montaña y playa? ¿Acogedoras cabañas para una escapada romántica o 
                    luna de miel? Un hostal tal vez? Y es más difícil decidir entre los cientos de opciones de alojamiento que ofrece Costa Rica,
                    y una amplia variedad para todos los presupuestos.<br>

                <ul class="lead">
                    <li>No importa cuál elija, al reservar un hotel solicite una confirmación por escrito del servicio y la política de cancelación.</li>
                    <li>Se recomienda no brindar información sobre su tarjeta de débito o crédito por teléfono.</li>
                    <li>Los tomas de corriente son de 110 V, con enchufes estándar de EE. UU. de dos clavijas.</li>
                    <li>Use la caja fuerte del hotel o alojamiento.</li>
                    <li>Cuando realice un recorrido cerca de su hotel, lleve una copia de su pasaporte.</li>
                    <li>Solicite en la recepción las rutas y medios de transporte más seguros, especialmente durante la noche.</li>
                </ul>

                </p>

                <hr>

                <p class="lead"><strong> <b>Ingrese la siguiente informacion para utilizar el recomendador de alojamientos:</b></strong></p>


                <form name="hotel">
                    <div class="row">
                        <div class="col-lg-6 portfolio-item">
                            <div class="card-body">          
                                <label >Seleccionar el tipo de alojamiento:</label> 
                                <div class="form-group">
                                    <select class="form-control" name="hotelType" id="hotelType">
                                        <option value="Montaña">Montaña</option>
                                        <option value="Ciudad">Ciudad</option>
                                        <option value="Cerca Aeropuerto">Cerca Aeropuerto</option>
                                        <option value="Turismo Rural">Turismo Rural</option>
                                        <option value="De Playa">De Playa</option>
                                    </select> 
                                </div>     
                            </div>
                        </div>
                        <div class="col-lg-6 portfolio-item">
                            <div class="card-body">
                                <label >Seleccionar la zona turística deseada:</label> 
                                <div class="form-group">
                                    <select class="form-control" name="turisticZone" id="turisticZone">
                                        <option value="Guanacaste">Guanacaste</option>
                                        <option value="Caribe">Caribe</option>
                                        <option value="Puntarenas">Puntarenas</option>
                                        <option value="Valle Central">Valle Central</option>
                                        <option value="Llanuras del Norte">Llanuras del Norte</option>
                                        <option value="Pacífico Central">Pacífico Central</option>
                                        <option value="Pacífico Sur">Pacífico Sur</option>
                                    </select> 
                                </div> 
                                <br/>
                                <div style="text-align: center">
                                    <font color="#ff0000"><font size="4"> </font></font><input value="BUSCAR" class="btn btn-outline-secondary btn-md" onclick="getHotels()" type="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>



            <div id="recommendations" class="row">

                <?php foreach ($vars['hotels'] as $hotel) { ?>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100 text-center">
                            <br/>
                            <img class="img-fluid" style="display: block; margin-left: auto;margin-right: auto;width: 50%;" 
                                 src="public/img/Hotel Logos/<?php echo $hotel[4] ?>" width="150" height="150">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a style="color:black;"><?php echo $hotel[0] ?></a>
                                </h4>

                                <!-- Estrellas -->
                                <?php for ($i = 0; $i < $hotel[6]; $i++) { ?>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                <?php } ?>
                                <p class="card-text"><?php echo $hotel[1] ?></p>
                                <p class="card-text text-center"><?php echo $hotel[2] ?></p>
                                <a class="card-text text-center" href="https://<?php echo $hotel[3] ?>"><?php echo $hotel[3] ?></a>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</section>

<br/>
<br/>

<?php
include_once 'public/footer.php';
?>