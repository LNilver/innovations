<div id="todo">
    <div style="text-align: center; margin-top: 60px;">
        <h1 class="text-white">COMPRAR HERRAMIENTA</h1>
    </div>

    <!-- Panel nuevo cliente -->
    <div class="container-fluid mt-7">
        <div class="panel panel-info">
            <div class="panel-body">
                <form id="registro" name="registro" method="post" action="<?php echo base_url('Inventario_controlador/registrar_herramienta')?>">                    
                    <fieldset>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Almacén</label>
                                        <select class="custom-select form-control" name="almacenherramienta" id="almacenherramienta" required>
                                            <option value="">Selecciona un almacén</option>
                                            <option value="Soldadura">Soldadura</option>
                                            <option value="Mantenimiento">Mantenimiento</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombre</label>
                                        <input class="form-control" type="text" name="nombreherramienta" id="nombreherramienta" maxlength="30" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Serie</label>
                                        <input class="form-control" type="text" name="serieherramienta" id="serieherramienta" maxlength="30" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Cantidad de Herramientas</label>
                                        <input class="form-control" type="number" name="cantidad_herramienta" id="cantidad_herramienta" maxlength="15">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Proveedores</label>
                                        <select class="form-control custom-select" name="id_proveedor" id="id_proveedor" required>
                                            <option value="">Selecciona un Proveedor</option>
                                            <?php foreach($proveedores as $proveedor): ?>
                                                <option value="<?php echo $proveedor->id_proveedor; ?>">
                                                    <?php echo $proveedor->nombreproveedor; ?> ( <?php echo $proveedor->razonsocialproveedor; ?> )
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Descripcion</label>
                                        <textarea name="descripcionherramienta" id="descripcionherramienta" class="form-control" rows="2" maxlength="100" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <p class="text-center" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>