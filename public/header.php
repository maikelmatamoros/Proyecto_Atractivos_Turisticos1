<!DOCTYPE html>
<html lang="en">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Expertos Travel Agency</title>

        <link rel="shortcut icon" type="image/x-icon" href="public//img/logo.ico"/> 
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/modern-business.css" rel="stylesheet">
        <link href="public/css/siteMap.css" rel="stylesheet">
        <link href="public/css/siteMap.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis-network.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="public/js/siteMap.js"></script>  
        <script type="text/javascript" src="public/js/jquery-3.3.1.js"></script>
        <!-- <script type="text/javascript" src="public/js/siteMap.js"></script> -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.js"></script>

        <script src="https://kit.fontawesome.com/0ca66e1d09.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis-network.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="?controlador=Default"><img class="img-fluid" id="logo" src="public/img/logo.png" alt="logo" width="110"/></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="mapa" data-toggle="modal" data-target="#siteMapModal" >Mapa del Sitio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controlador=AboutUs&accion=showAboutUsView"> ¿Quiénes somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controlador=Atractivo&accion=showAtractivoView"> Atractivos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controlador=Hotel&accion=showHotelView"> Alojamiento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controlador=RentACar&accion=showRentACarView"> Rent a Car</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controlador=TipsDeViaje&accion=showTipsDeViajeView"> Consejos de Viaje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controlador=Gallery&accion=showGalleryView"> Galería</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="modal fade" id="siteMapModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true" style="align-content: center;">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content text-center">
                        <div class="modal-header">
                            <h5 class="modal-title w-100" id="modal-Title" style="color: black;">Mapa del Sitio</h5>
                        </div>
                        <div class="modal-body">

                            <div class="align-center text-center">
                                <div id="graph"></div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Page Content -->
        <div class="container">

