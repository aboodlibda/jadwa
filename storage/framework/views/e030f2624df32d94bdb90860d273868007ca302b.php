<?php $__env->startSection('title'); ?> المستخدمين <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> المستخدمين <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> قائمة المستخدمين <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="بحث ...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <a href="<?php echo e(route('users.create')); ?>"
                                        class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"> إضافة مستخدم جديد <i
                                        class="mdi mdi-plus me-1"></i></a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-check">
                            <thead class="table-light">
                            <tr>

                                <th style="width: 20px;" class="align-middle">#</th>
                                <th class="align-middle">الاسم</th>
                                <th class="align-middle">البريد الإلكتروني</th>
                                <th class="align-middle">رقم الجوال</th>
                                <th class="align-middle">المنطقة</th>
                                <th class="align-middle">الحالة</th>
                                <th class="align-middle">العمليات</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><button type="button" class="btn btn-info btn-sm waves-effect waves-light"><?php echo e($user->phone); ?></button></td>
                                    <td><?php echo e($user->country .' | ' . $user->city); ?></td>
                                    <td>
                                        <?php if($user->status == 'active'): ?>
                                            <button type="button" class="btn btn-success waves-effect btn-label btn-sm"><i class="bx bx-check-double label-icon"></i> نشط </button>
                                        <?php else: ?>
                                            <button type="button" class="btn btn-danger waves-effect btn-label btn-sm"><i class="bx bx-block label-icon"></i> غير نشط </button>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3">
                                            
                                                <a data-bs-toggle="modal" data-bs-target="#kt_modal_1" title="تأكيد البريد" style="cursor: pointer"  data-id="<?php echo e($user->id); ?>" class="text-primary"><i
                                                        class="mdi mdi-email-send font-size-18"></i></a>
                                            
                                            <?php if($user->status == 'active'): ?>
                                                <a data-bs-toggle="modal" data-bs-target="#kt_modal_4" title="حظر المستخدم" style="cursor: pointer"  data-id="<?php echo e($user->id); ?>" class="text-danger"><i
                                                        class="mdi mdi-toggle-switch-off font-size-20"></i></a>
                                            <?php else: ?>
                                                <a data-bs-toggle="modal" data-bs-target="#kt_modal_3" title="نفعيل المستخدم" style="cursor: pointer"  data-id="<?php echo e($user->id); ?>" class="text-success"><i
                                                        class="mdi mdi-toggle-switch font-size-20"></i></a>
                                            <?php endif; ?>
                                            
                                            <a href="<?php echo e(route('users.edit' , $user->id)); ?>" title="تعديل" class="text-success"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                            
                                            <a data-bs-toggle="modal" data-bs-target="#kt_modal_2" title="حذف" style="cursor: pointer"  data-id="<?php echo e($user->id); ?>"  class="text-danger"><i
                                                    class="mdi mdi-delete font-size-18"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>

                    <ul class="pagination pagination-rounded justify-content-center mb-2">
                        <?php echo e($users->links()); ?>

                    </ul>
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
                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
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
                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
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
                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
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
                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\jadwa\resources\views/admin/users/index.blade.php ENDPATH**/ ?>