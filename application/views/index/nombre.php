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
    <title>Buscar de Herramientas</title>
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
                    <a class="nav-item nav-link" href="<?php echo 'http://localhost/inventario/'; ?>">Home</a>
                    <a class="nav-item nav-link active" id="buscarHerramienta" href="<?php echo  base_url('buscador');?>">Buscar</a>
                    <a class="nav-item nav-link" href="<?php echo base_url('sistema'); ?>" id="registro">Registrar</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom" style="background-image: url('index/img/fondo.jpg'); background-size: cover; background-position: center;">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Buscador</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Buscar</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Reservation Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom" style="background-image: url('index/img/taller.jpg'); background-size: cover; background-position: center;">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">Buscar</h1>
                                <h1 class="text-white">herramienta</h1>
                            </div>
                            <p class="text-white">Busca su herramienta por nombre o codigo recordar que el nombre de ser exacto para obtener la herramienta, si no logra encontrar debe de ser por que falta registrar en el inventario</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">INGRESE</h1>
                            <a href="#" class="btn btn-warning" onclick="codigo();" id="codigo_link">CODIGO</a>
                            <a href="#" class="btn btn-warning" onclick="nombre();" id="nombre_link" style="display:none">NOMBRE</a> 
                            <form class="mb-5">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent border-primary p-4" placeholder="nombre" style="color: white;" id="nombreherramienta" name="nombreherramienta" />
                                    <input type="text" class="form-control bg-transparent border-primary p-4" placeholder="codigo" style="color: white; display:none;" id="codigounico" name="codigounico"/>
                                </div>
                                <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Buscar</button>                                
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function codigo() {
            $('#codigo_link').hide();
            $('#nombre_link').show(); 
            $('#nombreherramienta').hide(); 
            $('#codigounico').show(); 
            $('#nombreherramienta').val('');
        }
        function nombre() {
            $('#codigo_link').show();
            $('#nombre_link').hide(); 
            $('#nombreherramienta').show(); 
            $('#codigounico').hide(); 
            $('#codigounico').val('');
        }        
    </script>
    <script>
        $(document).ready(function () {
    $('form').on('submit', function (e) {
        e.preventDefault();

        var nombre = $('#nombreherramienta').val();
        var codigo = $('#codigounico').val();
        if (nombre === '' && codigo === '') {
            Swal.fire({
                title: 'Advertencia',
                text: 'Es necesario ingresar un valor',
                icon: 'warning',
                confirmButtonText: 'Entendido'
            });
            return;
        }
        $.ajax({
            url: '<?php echo base_url('Inventario_controlador/buscarHerramienta'); ?>',
            type: 'POST',
            data: {
                nombreherramienta: nombre,
                codigounico: codigo
            },
            success: function (data) {
                try {
                    data = JSON.parse(data);
                } catch (e) {
                    console.error('Error al parsear los datos JSON:', data);
                    return;
                }

                if (data === null) {
                    Swal.fire({
                        title: 'Error',
                        html: 'No existen resultados para: ' + '<strong>' + nombre + '</strong> <strong>' + codigo + '</strong>',
                        icon: 'error',
                        width: '600px',
                        preConfirm: () => {
                            location.reload();
                        }
                    });
                } else {
                    let tableContent = '<table class="table table-bordered">';
                    tableContent += '<thead><tr><th>Nombre</th><th>Serie</th><th>Cantidad</th></tr></thead><tbody>';
                    
                    data.forEach(function(item) {
                        tableContent += '<tr><td>' + item.nombreherramienta + '</td><td>' + item.serieherramienta + '</td><td>' + item.cantidad_herramienta + '</td></tr>';
                    });
                    
                    tableContent += '</tbody></table>';
                    
                    Swal.fire({
                        title: 'Resultado de la búsqueda',
                        html: tableContent,
                        icon: 'info',
                        width: '600px',
                        preConfirm: () => {
                            location.reload();
                        }
                    });
                }
            },
                        error: function (xhr, status, error) {
                            console.log("Error: " + error);
                        }
                    });
                });
            });
    </script>
</div>
</body>

</html>