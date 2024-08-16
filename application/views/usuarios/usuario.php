<div style="text-align: center; margin-top: 40px;">
        <h1 class="text-white">LISTA DE USUARIOS</h1>
    </div>
<div id="todo">
    <div class="d-flex justify-content-center mt-5">
        <ul class="">
            <li>
                <a id="Nuevousuario" name="Nuevousuario" class="Nuevousuario btn btn-primary">
                    <i class="zmdi zmdi-plus"></i> &nbsp; NUEVO USUARIO
                </a>
            </li>
        </ul>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    #documentosTable {
        font-size: 15px;    
    }

    #documentosTable th,
    #documentosTable td {
        padding: 6px;
    }
</style>
<div class="container-fluid">
    <div class="panel panel-success">
        <div class="panel-body">
            <div class="table-responsive">
                <table id="documentosTable" class="table table-striped table-bordered table-hover" style="width:100%">
                    <thead>
                        <tr style="text-align: center;">
                            <th>N.</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Clave</th>
                            <th>Fecha Registrado</th>
                            <th>Rol</th>
                            <th>Estado</th>                                                
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center; vertical-align: middle;">
                        <?php foreach (array_reverse($grid) as $fila) { ?>
                            <tr style="text-align: center;">
                                <td><?php echo $fila->id_usuario; ?></td>
                                <td><?php echo $fila->usuario; ?></td>
                                <td><?php echo $fila->email; ?></td>
                                <td>
                                    <div style="position: relative; display: inline-block;">
                                        <input type="password" id="clave_<?php echo $fila->id_usuario; ?>" value="<?php echo $fila->clave; ?>" style="border: none; background: none; text-align: center;" readonly>
                                        <button type="button" class="btn btn-light btn-sm rounded-circle toggle-password" data-usuario="<?php echo $fila->id_usuario; ?>" style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; position: absolute; top: 50%; right: -30px; transform: translateY(-50%);">
                                            <i class="fa fa-eye" id="toggleIcon_<?php echo $fila->id_usuario; ?>"></i>
                                        </button>
                                    </div>

                                </td>
                                <td><?php echo $fila->fch_reggem; ?></td>
                                <td><?php echo span_color_status ($fila->rol); ?></td>
                                <td><?php echo span_color_status ($fila->statuUsuario); ?></td>
                                <td class="pull-right opciones"> 
                                    <button style="width: 10px; display: inline-block; position: relative; margin-bottom: 10px;" id="editar_<?php echo $fila->id_usuario; ?>" name="editar_<?php echo $fila->id_usuario; ?>" value="<?php echo $fila->id_usuario; ?>" class="editar btn btn-primary rounded-circle hidden-print" data-placement="left" rel="tooltip" data-original-title="Vista">
                                        <i class="fa fa-pencil" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="div_ModalMant"> 
</div><!-- /.modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.toggle-password').forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                var id_usuario = this.dataset.usuario;
                var passwordInput = document.getElementById('clave_' + id_usuario);
                var icon = document.getElementById('toggleIcon_' + id_usuario);

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = "password";
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });
    });

    $(document).on('click', '.Nuevousuario', function(event) {
        event.preventDefault();     
        var idelemento = $(this).val();
        var url = "<?php echo base_url() ?>Inventario_controlador/usuariodata/" + idelemento + "/insertar";
        $("#div_ModalMant").load(url, function() {
            $('#ModalMante').modal('show');
        });
    }); 

    $(document).on('click', '.editar', function(event) {
        event.preventDefault();     
        var idelemento = $(this).val();
        var url = "<?php echo base_url() ?>Inventario_controlador/usuariodata/" + idelemento + "/editar";
        $("#div_ModalMant").load(url, function() {
            $('#ModalMante').modal('show');
        });
    });   

    $(document).ready(function() {
    $('#documentosTable').DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
});

</script>