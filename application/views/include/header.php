<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <link href="index/img/logosenati.png" rel="icon">
</head>

<body>
<div id="completo">
  <title>
    Inventario Senati
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <div class="min-height-300 bg-primary position-absolute w-100" style="background-image: url('https://media.istockphoto.com/id/1345215879/es/vector/fondo-de-cielo-nocturno-con-luces-universo-oscuro-y-estrellas-blancas-textura-cosmos-y-focos.jpg?s=612x612&w=0&k=20&c=n7kryw8qXuwDxfxma--tOMbYHgMfSjWLnZ7k4XZlbbw='); background-position-y: 50%;"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?php echo  base_url('home');?>">
        <img src="index/img/logosenati.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Inventario Senati</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a id="dashboardLink" class="nav-link active" href="<?php echo  base_url('home');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Registar Herramienta</h6>
        </li>        
        <li class="nav-item">
          <a class="nav-link " id="cargarRegistro" href="<?php echo  base_url('registrar');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-box text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Registrar</span>
          </a>
        </li>        
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Almacen</h6>
        </li>        
        <li class="nav-item">
          <a class="nav-link " id="soldadura" href="<?php echo  base_url('soldadura');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-tools text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Soldadura</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " id="mantenimiento" href="<?php echo  base_url('mantenimiento');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-cogs text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Mantenimiento</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">HISTORIAL DE MOVIMIENTO</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " id="registro" href="<?php echo  base_url('movimiento');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-history text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Salida</span>
          </a>
          <a class="nav-link " id="registro" href="<?php echo  base_url('historial');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-clipboard-list text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Historial</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">COMPRA</h6>
        </li>        
        <li class="nav-item">
          <a class="nav-link " id="proveedor" href="<?php echo  base_url('proveedor');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user-tie text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Proveedor</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " id="herramienta" href="<?php echo  base_url('compras');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-truck text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Compra</span>
          </a>
        </li>                
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Accesos</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " id="instructor" href="<?php echo  base_url('usuarios');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Usuarios</span>
          </a>
        </li> 
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Cerrar Sesion</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " id="instructor" href="<?php echo  base_url('salir');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-sign-out-alt text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Salir</span>
          </a>
        </li>       
      </ul>
    </div>
    <div class="sidenav-footer mx-3 mt-4">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Informe</h6>
            <p class="text-xs font-weight-bold mb-0">Senati herramientas</p>
          </div>
        </div>
      </div>
      <a class="btn btn-dark btn-sm w-100 mb-3">Inventario</a>      
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4" id="contenido">

