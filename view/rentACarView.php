<?php
include 'public/header.php';
?>
<br/>
<br/>
<!-- Título -->
<h1 class="mt-4 mb-3">Rent a Car</h1>

<!-- Imagen -->
<img class="img-fluid rounded mb-4" src="public/img/rentACar.png" alt="">

<br/>
<br/>

<section id="generalFacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <p class="lead">
                    Costa Rica abundante en territorios paradisíacos de playa y montaña, donde hay tanto qué ver y tanto qué disfrutar, 
                    que para sacar mejor provecho a unas vacaciones se requiere un vehículo que garantice libertad y autonomía.<br><br>

                    Es posible visitar algunos de los parques nacionales naturales en un solo día y disfrutar playas en el término 
                    de unas horas. De ahí la importancia de tener a disposición un vehículo de alquiler.<br><br>

                    Las compañías de rent a car con las que trabaja Expertos Travel Agency, están dirigidos a todos los y las personas que deseen explorar los tesoros naturales y las bellezas exóticas del país.
                    Ofrecemos una variedad de compañías que estarán comprometidas a satisfacer sus gustos, intereses, necesidades y presupuesto.

                </p>
                <br/>
                <p class="lead"><strong> <b>A continuación, te damos unas pequeñas sugerencias que puedes seguir a la hora de rentar un automóvil:</b></strong></p>
                <p class="lead">
                    1. Busque una empresa responsable.<br>
                    2. Haga su reservación con tiempo.<br>
                    3. Revise términos del seguro. <br>
                    4. Inspeccione el vehículo. <br>
                </p>

                <br/>

                <!-- Video -->
                <div style="text-align: center;">
                    <video style="  max-width: 100%;height: auto;" width="1200" height="480" controls autoplay>
                        <source src="public/videos/recomendacionesRentACar.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <br/>
                <hr>

                <p class="lead"><strong> <b>Ingrese la siguiente informacion para utilizar el recomendador de rent a cars:</b></strong></p>


                <form name="rentACar">
                    <div class="row">
                        <div class="col-lg-6 portfolio-item">
                            <div class="card-body">           
                                <label >Seleccionar el tipo de vehículo a alquilar:</label> 
                                <div class="form-group">
                                    <select class="form-control" name="carType" id="carType">
                                        <option value="Sedan">Sedan</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Motocicleta">Motocicleta</option>
                                    </select> 
                                </div>     
                            </div>
                        </div>
                        <div class="col-lg-6 portfolio-item">
                            <div class="card-body">
                                <label >Seleccionar la provincia deseada:</label> 
                                <div class="form-group">
                                    <select class="form-control" name="provinces" id="provinces">
                                        <option value="Cartago">Cartago</option>
                                        <option value="San José">San José</option>
                                        <option value="Heredia">Heredia</option>
                                        <option value="Alajuela">Alajuela</option>
                                        <option value="Puntarenas">Puntarenas</option>
                                        <option value="Guanacaste">Guanacaste</option>
                                        <option value="Limón">Limón</option>
                                    </select> 
                                </div> 
                                <br/>
                                <div style="text-align: center">
                                    <font color="#ff0000"><font size="4"> </font></font><input value="BUSCAR" class="btn btn-outline-secondary btn-md" onclick="getRentACars()" type="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div id="recommendations" class="row">

                <?php foreach ($vars['rentACars'] as $rentacar) { ?>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100 text-center">
                            <br/>
                            <img class="img-fluid" style="display: block; margin-left: auto;margin-right: auto;width: 50%;" 
                                 src="public/img/Rent a Car Logos/<?php echo $rentacar[4] ?>" width="150" height="150">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a style="color:black;"><?php echo $rentacar[0] ?></a>
                                </h4>
                                <!-- Estrellas -->
                                <?php for ($i = 0; $i < $rentacar[6]; $i++) { ?>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                <?php } ?>
                                <p class="card-text"><?php echo $rentacar[1] ?></p>
                                <p class="card-text text-center"><?php echo $rentacar[2] ?></p>
                                <a class="card-text text-center" href="https://<?php echo $rentacar[3] ?>"><?php echo $rentacar[3] ?></a>
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
include 'public/footer.php';
?>