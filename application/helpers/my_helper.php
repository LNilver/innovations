<?php
    function span_color_status($status) {
                switch ($status) {
                        case 'AC':$resultado = '<span class="center-block padding-5 label label-success">Activo</span>';
                                break;
                        case 'DS':$resultado = '<span class="center-block padding-5 label label-default">Desactivado</span>';
                                break;
                        case 'AN':$resultado = '<span class="center-block padding-5 label label-default">Anulado</span>';
                                break;
                        case 'PE':$resultado = '<span class="center-block padding-5 label label-warning">Pendiente</span>';
                                break;
                        case 'EL':$resultado = '<span class="center-block padding-5 label label-danger">Eliminado</span>';
                                break;

                        case 'IN':$resultado = '<span class="center-block padding-5 label label-success">Instructor</span>';
                                break;

                        case 'ES':$resultado = '<span class="center-block padding-5 label label-success">Estudiante</span>';
                                break;

                        case 'EM':$resultado = '<span class="center-block padding-5 label label-success">Emitido</span>';
                                break;
                        case 'PC':$resultado = '<span class="center-block padding-5 label label-danger">Credito</span>';
                                break;

                        //Para mesas
                        case 'DI':$resultado = '<span class="center-block padding-5 label label-success">Disponible</span>';
                                break;
                        case 'OC':$resultado = '<span class="center-block padding-5 label label-danger">Ocupado</span>';
                                break;
                        case 'RS':$resultado = '<span class="center-block padding-5 label label-warning">Reservado</span>';
                                break;




                        case 'DVC':$resultado = '<span class="center-block padding-5 label label-success">Dev. Completo</span>'; //gridPrestamoConGarantiaVenta_view
                                break;
                        case 'DVI':$resultado = '<span class="center-block padding-5 label label-success">Dev. Incompleto</span>'; //gridPrestamoConGarantiaVenta_view
                                break;


                        case '':$resultado = ''; //Cuando el estado es vacio no mostrar nada
                                break;
                }
                return $resultado;
        }

        
