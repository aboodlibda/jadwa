<?php $__env->startSection('title'); ?> السلايدر <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> السلايدر <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> قائمة السلايدر <?php $__env->endSlot(); ?>
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
                                <a href="<?php echo e(route('sliders.create')); ?>"
                                   class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"> إضافة سلايدر جديد <i
                                        class="mdi mdi-plus me-1"></i></a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-check">
                            <thead class="orange">
                            <tr>

                                <th style="width: 20px;" class="align-middle">#</th>
                                <th class="align-middle">العنوان</th>
                                <th class="align-middle"> النص</th>
                                <th class="align-middle">العمليات</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($item->title); ?></td>
                                    <td><?php echo Str::limit($item->description, 100); ?></td>
                                   
                                    <td>
                                        <div class="d-flex gap-3">
                                         
                                            <a href="<?php echo e(route('sliders.edit' , $item->id)); ?>" title="تعديل" class="text-success"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>

  
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

                   
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
    <script>
  
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
                            url: '<?php echo e(url('sliders/{slider}')); ?>',
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
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Documents\GitHub\jadwa\resources\views/admin/slider/index.blade.php ENDPATH**/ ?>