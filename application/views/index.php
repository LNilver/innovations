<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <link href="index/img/logosenati.png" rel="icon">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="index/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="index/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="index/css/style.min.css" rel="stylesheet">
</head>

<body>
<div id="todo">
    <title>Inventario de Herramientas</title>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">SENATI</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="" class="nav-item nav-link active">Home</a>
                    <a class="nav-item nav-link" href="<?php echo  base_url('buscador');?>" id="buscarHerramienta">Buscar</a>
                    <a class="nav-item nav-link" href="<?php echo base_url('sistema'); ?>" id="registro">Registrar</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="index/img/soldadura1.jpg" alt="Image" style="height: 800px;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Inventario de</h2>
                        <h1 class="display-1 text-white m-0">HERRAMIENTAS</h1>
                        <h2 class="text-white m-0">* SOLDADURA *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="index/img/mantenimiento1.jpg" alt="Image" style="height: 800px;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Inventario de</h2>
                        <h1 class="display-1 text-white m-0">HERRAMIENTAS</h1>
                        <h2 class="text-white m-0">* MANTENIMIENTO *</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">De que trata las</h4>
                <h1 class="display-4">CARRERAS DE</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">SOLDADURA</h1>
                    <h5 class="mb-3">El profesional técnico operativo en Soldadura</h5>
                    <p>Está capacitado para realizar uniones de piezas metálicas con procesos de soldadura oxiacetilénico, arco eléctrico, MIG/MAG, TIG y alambre tubular; también realiza corte de metales haciendo uso de equipo oxicorte y corte por plasma; aplica normas técnicas.</p>
                    <a href="https://www.senati.edu.pe/especialidades/metalmecanica/soldador-universal" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Ver mas</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="index/img/maquina.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">MANTENIMIENTO</h1>
                    <h5 class="mb-3">El profesional técnico operativo en Mantenimiento</h5>
                    <p>realiza actividades de mantenimiento programadas, como limpieza, lubricación, ajustes y reemplazo de componentes desgastados. Estas acciones se llevan a cabo de manera regular y planificada para prevenir fallos y prolongar la vida útil de los activos.</p>
                    <a href="https://www.senati.edu.pe/especialidades/mantenimiento/mecanico-de-mantenimiento" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Ver mas</a>
                </div>
            </div>         
        </div>
    </div>

    <!-- About End -->

    <!-- Offer Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom" style="background-image: url('index/img/h.jpg'); background-size: cover; background-position: center;">
        <div class="container py-5 " style="background: rgba(207, 216, 220, .6); max-width:30% ;border-radius: 200px;">
            <h1 class="display-3 text-primary mt-3">50% OFF</h1>
            <h1 class="text-white mb-3">Sunday Special Offer</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">Only for Sunday from 1st Jan to 30th Jan 2045</h4>
            <form class="form-inline justify-content-center mb-4">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Your Email" style="height: 60px;">
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-4" type="submit">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Offer End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div>
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">LISTA DE</h4>
                <h1 class="display-4">Herramientas</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="index/img/mascara.png" alt="">
                        <div class="ml-3">
                            <h4>Mascara de soldar</h4>
                            <i>Soldadura</i>
                        </div>
                    </div>
                    <p class="m-0">Es un tipo de equipo de protección individual, ayuda a proteger los ojos, la cara y el cuello del soldador </p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="index/img/juego.png" alt="">
                        <div class="ml-3">
                            <h4>Juego de Llaves</h4>
                            <i>Mantenimiento</i>
                        </div>
                    </div>
                    <p class="m-0">Un juego de llaves te servirán para ajustar, montar y desmontar piezas que están adaptadas a tornillos o tuercas</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="index/img/maquina.png" alt="">
                        <div class="ml-3">
                            <h4>Maquina de soldar</h4>
                            <i>Soldadura</i>
                        </div>
                    </div>
                    <p class="m-0">Es una máquina que se utiliza para la fijación de materiales</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="index/img/compresor.png" alt="">
                        <div class="ml-3">
                            <h4>Compresor de aire</h4>
                            <i>Mantenimiento</i>
                        </div>
                    </div>
                    <p class="m-0">Un compresor de aire sirve para aumentar de potencia un fluido y utilizarlo como fuente de energía para múltiples aplicaciones.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top" style="background-image: url('index/img/e.jpg'); background-size: cover; background-position: center">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">PONERSE EN CONTACTO</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Senati villa de Pasco</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+51 ### ### ###</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>senati@senati.pe</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">SÍGANOS</h4>
                <p>Sigamos en nuestras redes solciales</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">HORARIOS DE APERTURA</h4>
                <div>
                    <h6 class="text-white text-uppercase">Lunes - Viernes</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Lunes - Viernes</h6>
                    <p>2.00 PM - 8.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Boletin informativo</h4>
                <p>Enviamos un correo y te ayudaremos</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Correo Senati">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="index/lib/easing/easing.min.js"></script>
    <script src="index/lib/waypoints/waypoints.min.js"></script>
    <script src="index/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="index/lib/tempusdominus/js/moment.min.js"></script>
    <script src="index/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="index/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="index/mail/jqBootstrapValidation.min.js"></script>
    <script src="index/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="index/js/main.js"></script>
<script>
$(document).ready(function(){
  $('#buscarHerramienta').click(function(){
      $.ajax({
          url: '<?php echo base_url('Inventario_controlador/NombreHerramienta'); ?>',
          type: 'GET',
          success: function(response){
              $('#todo').html(response);
          }
      });
  });          
});
</script>
</body>

</html>