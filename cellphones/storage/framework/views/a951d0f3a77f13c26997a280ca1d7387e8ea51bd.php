<?php $__env->startSection('content'); ?>
    <div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Celulares</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="table_celulares" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th width="50px">
                                    <a class="btn btn-primary btn-xs" href="<?php echo e(url('celulares/create')); ?>">Adicionar celular</a>
                                    <?php if(Session::get('user')->role =='Administrador'): ?>
                                    <a class="btn btn-primary btn-xs" href="<?php echo e(url('celulares/TableCelularesExport/'.$rol = Session::get('user')->role)); ?>">Exportar celulares</a>
                                    <?php endif; ?>
                                </th>
                                <th>Imei</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Color</th>
                                <th>Capacidad</th>
                                <th>Proveedor</th>
                                <th>Fecha compra</th>
                                <th>Precio compra</th>
                                <th>Comprador</th>
                                <th>Fecha venta</th>
                                <th>Precio venta</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $celulares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $celular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php if($celular->venta_id==null): ?>
                                    <a href="<?php echo e(url('/celulares/edit/'.$celular->id)); ?>" class="btn btn-default btn-xs btn-detail">Editar</a>
                                    <?php endif; ?>
                                    <form method="POST" onsubmit="return confirm('Est?? seguro que desea eliminar el celular !');" action="<?php echo e(url('/celulares/destroy/'.$celular->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo e(method_field('DELETE')); ?>

                                        <?php if($celular->venta_id==null): ?>
                                        <button id="delete"  type="submit"  class="btn btn-danger btn-xs btn-delete">Eliminar</button>
                                        <?php endif; ?>
                                        <a class="btn btn-success btn-xs" href="<?php echo e(url('/celulares/garantia/'.$celular->id)); ?>" target="_blank">Garantia</a>
                                     </form>

                                </td>
                                <td><?php echo e($celular->imei); ?></td>
                                <td><?php echo e($celular->marca_desc); ?></td>
                                <td><?php echo e($celular->modelo_desc); ?></td>
                                <td><?php echo e($celular->color_desc); ?></td>
                                <td><?php echo e($celular->capacidad_desc); ?></td>
                                <td><?php echo e($celular->vendedor); ?></td>
                                <td><?php echo date('d-m-Y',strtotime($celular->fecha_compra))?></td>
                                <td><?php echo e($celular->precio_compra); ?></td>
                                <td><?php echo e($celular->comprador); ?></td>
                                <td><?php echo e($celular->fecha_venta); ?></td>
                                <td><?php echo e($celular->precio_venta); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>

        jQuery(document).ready(function($){

            $('#table_celulares').dataTable({
                "language" : {
                    "url":'lan/spanish.json'
                }
            });

            /*$('#delete').on('submit',function (e) {
                e.preventDefault();
                if(!confirm('Est?? seguro que desea eliminar el celular'))
                {
                    e.preventDefault();
                }
            });*/

        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alejandro/Documentos/sellphone/resources/views/celulares/index.blade.php ENDPATH**/ ?>