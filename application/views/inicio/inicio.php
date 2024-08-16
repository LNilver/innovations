<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Herramientas Registradas</p>
              <h5 class="font-weight-bolder">
                <?php echo $CantidadHerramienta; ?>
              </h5>
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder"><?php echo $procentajeCantidad; ?> % </span>
                porcentaje total
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="ni ni-check-bold text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Herramientas Prestadas</p>
              <h5 class="font-weight-bolder">
                <?php echo $HerramientaPrestada; ?>
              </h5>
              <p class="mb-0">
                <span class="text-danger text-sm font-weight-bolder"><?php echo $procentajePrestada; ?> % </span>
                porcentaje total
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
              <i class="ni ni-basket text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Herramientas en Buen Estado</p>
              <h5 class="font-weight-bolder">
                <?php echo $HerramientaBuen; ?>
              </h5>
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder"><?php echo $procentajeBuen; ?> % </span>
                porcentaje total
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
              <i class="ni ni-settings-gear-65 text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Herramientas en Mal Estado</p>
              <h5 class="font-weight-bolder">
                <?php echo $HerramientaMal; ?>
              </h5>
              <p class="mb-0">
                <span class="text-danger text-sm font-weight-bolder"><?php echo $procentajeMal; ?> % </span>porcentaje total
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
              <i class="ni ni-fat-remove text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="row mt-7">
  <div class="col-lg-7 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize">Herramientas Registradas</h6>
        <p class="text-sm mb-0">
          <i class="fa fa-arrow-up text-success"></i>
          <span class="font-weight-bold"><?php echo $CantidadHerramienta; ?> Registrado</span> en 2024
        </p>
      </div>
      <div class="card-body p-3">
        <div class="chart" style="max-width: 350px; margin: 0 auto;">
          <canvas id="chartEstadoHerramientas" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>

  </div>
  <div class="col-lg-4">
    <div class="card card-carousel overflow-hidden h-100 p-0">
      <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
        <div class="carousel-inner border-radius-lg h-100">
          <div class="carousel-item h-100 active" style="background-image: url('index/img/taller.jpg');
              background-size: cover;">
            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                <i class="ni ni-camera-compact text-dark opacity-10"></i>
              </div>
              <h5 class="text-white mb-1">Taller</h5>
              <p>La excelencia se forja con cada herramienta en nuestras manos.</p>
            </div>
          </div>
          <div class="carousel-item h-100" style="background-image: url('index/img/soldadura1.jpg');
              background-size: cover;">
            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                <i class="ni ni-bulb-61 text-dark opacity-10"></i>
              </div>
              <h5 class="text-white mb-1">Soldadura</h5>
              <p>En el arte de la soldadura, unimos más que metales; construimos futuro.</p>
            </div>
          </div>
          <div class="carousel-item h-100" style="background-image: url('index/img/mantenimiento1.jpg');
              background-size: cover;">
            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                <i class="ni ni-trophy text-dark opacity-10"></i>
              </div>
              <h5 class="text-white mb-1">Mantenimiento</h5>
              <p>Mantener en marcha es asegurar el éxito continuo.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>


<div class="row mt-6" style="text-align: center;">
    <div class="card shadow">
      <div class="card-body p-4">
        <h6 class="font-weight-bolder mb-3">Resumen del Inventario</h6><br>
        <div class="row">
          <div class="col-lg-6 mb-3">
            <p class="text-sm font-weight-bold mb-2">Taller de Soldadura:</p>
            <h5 class="font-weight-bolder text-primary"><?php echo $soldadura; ?> Herramientas</h5>
          </div>
          <div class="col-lg-6 mb-3">
            <p class="text-sm font-weight-bold mb-2">Taller de Mantemiento:</p>
            <h5 class="font-weight-bolder text-primary"><?php echo $mantenimiento; ?> Herramientas</h5>
          </div>
        </div>        
      </div>
    </div>
</div>


<div class="row mt-4" style="text-align: center;">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body p-3">
        <h6 class="font-weight-bolder mb-5">Acciones Rápidas</h6>
        <div class="row">
          <div class="col-lg-3">
            <a href="<?php echo base_url('registrar'); ?>" class="btn btn-primary btn-block">Registrar Herramienta</a>
          </div>
          <div class="col-lg-3">
            <a href="<?php echo base_url('movimiento'); ?>" class="btn btn-secondary btn-block">Historial Salida</a>
          </div>
          <div class="col-lg-3">
            <a href="<?php echo base_url('historial'); ?>" class="btn btn-warning btn-block">Herramientas Devueltas</a>
          </div>
          <div class="col-lg-3">
            <a href="<?php echo base_url('proveedor'); ?>" class="btn btn-success btn-block">Registrar Proveedor</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>