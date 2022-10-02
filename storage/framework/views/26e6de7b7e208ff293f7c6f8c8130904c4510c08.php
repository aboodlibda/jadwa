

<?php $__env->startSection('title'); ?>
    المستخدمين
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            المستخدمين
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            قائمة المستخدمين
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <form action="<?php echo e(route('search_user')); ?>" method="post">
                                <div class="search-box me-2 mb-2 d-inline-block">
                                    <div class="position-relative">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('POST'); ?>
                                        <input type="text" name="query" class="form-control"
                                            placeholder="الاسم,المنطقة,البريد,رقم الجوال">
                                        <i class="bx bx-search-alt search-icon"></i>

                                    </div>

                                </div>
                                <button type="submit" class="btn btn-secondary btn-rounded waves-effect waves-light"> بحث
                                    <i class="bx bx-search-alt search-icon me-1"></i></button>
                            </form>
                        </div>

                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <a href="<?php echo e(route('users.create')); ?>"
                                    class="btn btn-warning btn-rounded waves-effect waves-light mb-2 me-2"> إضافة مستخدم
                                    جديد <i class="mdi mdi-plus me-1"></i></a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th style="text-align: right">#</th>
                                    <th style="text-align: right">الاسم</th>
                                    <th style="text-align: right">البريد الإلكتروني</th>
                                    <th style="text-align: right">رقم الجوال</th>
                                    <th style="text-align: right">المنطقة</th>
                                    <th style="text-align: right">الحالة</th>
                                    <th style="text-align: right">العمليات</th>
                                </tr>
                            </thead>

                        </table>
                        
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">تأكيد البريد</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <form action="user/verify" method="POST">.
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <p>هل أنت متأكد من عملية تأكيد البريد ؟</p>
                        <input type="hidden" id="id" name="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" class="btn btn-primary">تأكيد</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">حذف المستخدم</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <form action="users/destroy" method="POST">.
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

    <div class="modal fade" tabindex="-1" id="kt_modal_3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">تفعيل المستخدم</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <form action="user/active" method="POST">.
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <p>هل أنت متأكد من عملية تفعيل المستخدم ؟</p>
                        <input type="hidden" id="id" name="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" class="btn btn-primary">تأكيد</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_4">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">حظر المستخدم</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <form action="user/deactivate" method="POST">.
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <p>هل أنت متأكد من عملية حظر المستخدم ؟</p>
                        <input type="hidden" id="id" name="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" class="btn btn-primary">تأكيد</button>
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
                    
                    ajax: "<?php echo e(route('get_users')); ?>",
                    columns: [{
                        data: 'id',
                        name: 'id',
                    }, {
                        data: 'name',
                        name: 'name',
                    }, {
                        data: 'email',
                        name: 'email',
                    }, {
                        data: 'phone',
                        name: 'phone',
                    }, {
                        data: 'country',
                        name: 'country',
                    }, {
                        data: 'status',
                        name: 'status',
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
    <script>
        $('#kt_modal_1').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })

        $('#kt_modal_2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })

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
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my project\jdwa\resources\views/admin/users/index.blade.php ENDPATH**/ ?>