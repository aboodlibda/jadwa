<<<<<<< Updated upstream
<?php $__env->startSection('title'); ?> المشاريع <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> المشاريع <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> قائمة المشاريع <?php $__env->endSlot(); ?>
=======


<?php $__env->startSection('title'); ?>
    المستخدمين
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            المشاريع
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            قائمة المشاريع
        <?php $__env->endSlot(); ?>
>>>>>>> Stashed changes
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <form action="<?php echo e(route('search_user')); ?>" method="post">
<<<<<<< Updated upstream
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('POST'); ?>
                                        <input type="text" name="query" class="form-control" placeholder=" ابحث عن المشروع">
                                        <i class="bx bx-search-alt search-icon"></i>

                                </div>

                            </div>
                        
=======
                                <div class="search-box me-2 mb-2 d-inline-block">
                                    <div class="position-relative">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('POST'); ?>
                                        <input type="text" name="query" class="form-control"
                                            placeholder="ابحث عن مشروع">
                                        <i class="bx bx-search-alt search-icon"></i>

                                    </div>

                                </div>
                                
>>>>>>> Stashed changes
                            </form>
                        </div>

                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <a href="<?php echo e(route('projects.create')); ?>"
<<<<<<< Updated upstream
                                        class="btn btn-success  waves-effect waves-light mb-2 me-2"> إضافة مشروع جديد <i
                                        class="mdi mdi-plus me-1"></i></a>
=======
                                    class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"> إضافة مشروع
                                    جديد <i class="mdi mdi-plus me-1"></i></a>
>>>>>>> Stashed changes
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
<<<<<<< Updated upstream
                        <table class="table align-middle table-nowrap table-check">
                            <thead class="table-light">
                            <tr>

                                <th style="width: 20px;" class="align-middle">#</th>
                                <th class="align-middle">الشعار</th>
                                <th class="align-middle"> اسم المشروع</th>
                                <th class="align-middle">نوع المشروع </th>
                                <th class="align-middle">الموقع</th>
                                <th class="align-middle">تاريخ البداية</th>
                                <th class="align-middle">العمليات</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><img src="<?php echo e(url('public/logo/'.$project->logo)); ?>" width="50" height="50"></td>
                                    <td><?php echo e($project->name); ?></td>
                                    <td><?php echo e($project->projectType->title); ?></td>
                                    <td><?php echo e($project->country .' | ' . $project->city); ?></td>
                                    <td><?php echo e($project->start_date); ?></td>

                                    <td>
                                        <div class="d-flex gap-3">

                               
                            <a href="<?php echo e(route('projects.show', $project->id)); ?>" title="عرض" class="text-success"><i
                              class="far fa-folder-open
                          font-size-18"></i></a>
                                            
                                            <a href="<?php echo e(route('projects.edit', $project->id)); ?>" title="تعديل" class="text-success"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                          

                                         
                                         <a  title="حذف" style="cursor: pointer"  data-id="<?php echo e($project->id); ?>"  class="text-danger delete">
                                            <i
                                                class="mdi mdi-delete font-size-18"></i></a>
                            
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                      
                    </div>
                    <ul class="pagination pagination-rounded justify-content-end mb-2">
                        <?php echo e($projects->links()); ?>

                    </ul>
              
                </div>
              
=======
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th style="text-align: right">#</th>
                                    <th style="text-align: right">اسم المشروع</th>
                                    <th style="text-align: right">نوع المشروع </th>
                                    <th style="text-align: right">الموقع</th>
                                    <th style="text-align: right">تاريخ البداية</th>
                                    <th style="text-align: right">العمليات</th>
                                </tr>
                            </thead>

                        </table>
                    </div>

                    
                </div>
>>>>>>> Stashed changes
            </div>
        </div>
    </div>
    <!-- end row -->
<<<<<<< Updated upstream
    


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
=======

    <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">حذف المشروع</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <form action="projects/destroy" method="POST">.
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <p>هل أنت متأكد من عملية الحذف ؟</p>
                        <input type="hidden" id="id" name="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   

  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
    <script type="text/javascript">
        var table;
        var data = $('table').serializeArray();
        $(document).ready(function() {
            drawTable(data);

            function drawTable(data) {
                table = $('#table').DataTable({
                    processing: true,
                    serverside: true,
                    searching: false,
                    paging:false,
                    order: [
                        [0, "asc"]
                    ],
                    
                    ajax: "<?php echo e(route('get_projects')); ?>",
                    columns: [{
                        data: 'id',
                        name: 'id',
                    }, {
                        data: 'name',
                        name: 'name',
                    }, {
                        data: 'country',
                        name: 'country',
                    }, {
                        data: 'project_type_id',
                        name: 'project_type_id',
                    }, {
                        data: 'start_date',
                        name: 'start_date',
                    }, {
                        data: 'action',
                        name: 'action',
                    }], "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
            }
                })
            };
            
        });
    </script>
>>>>>>> Stashed changes
    <script>
        $('#kt_modal_1').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })

<<<<<<< Updated upstream
    //     $('#kt_modal_2').on('show.bs.modal', function(event) {
    //         var button = $(event.relatedTarget)
    //         var id = button.data('id')
    //         var modal = $(this)
    //         modal.find('.modal-body #id').val(id);
            
  	// });
=======
        $('#kt_modal_2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })
>>>>>>> Stashed changes

        $('#kt_modal_3').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })

        $('#kt_modal_4').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })
<<<<<<< Updated upstream




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
                            url: '<?php echo e(route('proj.del')); ?>',
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

=======
    </script>
>>>>>>> Stashed changes
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Documents\GitHub\jadwa\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>