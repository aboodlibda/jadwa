


<?php $__env->startSection('title'); ?> قنوات البيع <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>  <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> قنوات البيع<?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">

                        </div>

                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                

                                        <button type="button" class="btn btn-success  waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة جديد</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">اضافة جديد </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="<?php echo e(route('projBpChanlRes.store')); ?>">
                                                            <?php echo csrf_field(); ?>
                                                           
                                                            <div class="mb-3">
                                                                <label for="title" class="col-form-label">البند</label>
                                                                <input type="text" name="title" class="form-control" id="title" value="<?php echo e(old('title')); ?>">
                                                            </div>

                                                            
                                                                <div class="mb-3">
                                                                    <label for="project_type_id" class="form-label">project_type_id</label>
                                                                    <!-- All countries -->
                                                                    <select id="project_type_id" class="form-select" name="project_type_id">
                                                                        <option selected disabled hidden>-- إختر --</option>
                                                                        <?php $__currentLoopData = $protype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>

                                                           <input type="text" name="type" class="form-control" id="type" value="<?php echo e('sale_channel'); ?>">

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary" >اضافة</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <?php if(isset($projBpChanlRes)): ?>
                    <?php if($projBpChanlRes->count() > 0): ?>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-check">
                            <thead class="orange">
                            <tr>

                                <th style="width: 20px;" class="align-middle">#</th>
                                <th class="align-middle"> البند  </th>
                                <th class="align-middle">العمليات</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $projBpChanlRes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($item->title); ?></td>

                                    <td>
                                        <div class="d-flex gap-3">

                                        
                                            
                                                    <a  title="تعديل" class="text-success"  data-bs-toggle="modal" data-id="<?php echo e($item->id); ?>" 
                                               data-title="<?php echo e($item->title); ?>"          
                                             
                                               data-bs-target="#editModal"><i
                                               class="mdi mdi-pencil font-size-24"></i> </a>
                                              
                                           

                                         <a  title="حذف" style="cursor: pointer"  data-id="<?php echo e($item->id); ?>"  class="text-danger delete">
                                            <i
                                                class="mdi mdi-delete font-size-18"></i></a>

                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    
                <?php endif; ?>
                <?php endif; ?>


                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
 
 <?php $__env->startSection('script-bottom'); ?>
    <script>
        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var item = button.data('item')
            var value = button.data('value')
            

            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #item').val(item);
            modal.find('.modal-body #value').val(value);
            

        })

        $('.table-responsive').on('click', '.delete', function() {
                let id = $(this).data('id');
                swal.fire({
                    text: 'هل انت متاكد من الحذف',
                    icon: "error",
                    confirmButtonText: "نعم",
                    cancelButtonText: "لا",
                    showCancelButton: true,
                    customClass: {
                        confirmButtonText: "btn font-weight-bold btn-light",
                        cancelButtonText: "btn font-weight-bold btn-light",
                    }
                }).then(function(status) {
                    if (status.value) {
                        $.ajax({
                            url: '<?php echo e(url('adminstExp/{adminstExp}')); ?>',
                            type: 'Delete',
                            data: {
                                'id': id,
                                '_token': '<?php echo e(csrf_token()); ?>',
                            },
                            success: function(e) {
                                location.reload();
                               // table.destroy();
                                //drawTable($('table')).serializeArray();
                            }
                        })
                    }
                })
            });
     
        </script>
<?php $__env->stopSection(); ?> 

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Documents\GitHub\jadwa\resources\views/admin/projrctBpChanelRes/index.blade.php ENDPATH**/ ?>