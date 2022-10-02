

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Form_Wizard'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            المشاريع
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            قائمة المشاريع
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="vertical-example" class="vertical-wizard">
                        <!-- Seller Details -->
                        <h3>الخطوة الأولى</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>المشكلة</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-8 col-8">
                                                    <input type="text" class="inner form-control"
                                                        placeholder="ادخل المشكلة" />
                                                </div>
                                                <div class="col-md-4 col-4">
                                                    <input data-repeater-delete type="button" class="btn btn-danger inner"
                                                        value="حذف" />
                                                    <input data-repeater-create type="button" class="btn btn-warning inner"
                                                        value="اضافة" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>الحل</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-8 col-8">
                                                    <input type="text" class="inner form-control"
                                                        placeholder="ادخل الحل" />
                                                </div>
                                                <div class="col-md-4 col-4">
                                                    <input data-repeater-delete type="button" class="btn btn-danger inner"
                                                        value="حذف" />
                                                    <input data-repeater-create type="button" class="btn btn-warning inner"
                                                        value="اضافة" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <!-- Company Document -->
                        <h3>الخطوة الثانية</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="verticalnav-pancard-input">القيمة المقترحة</label>
                                            <input type="text" class="form-control" id="verticalnav-pancard-input"
                                                placeholder="كتابة القيمة المقترحة">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="verticalnav-pancard-input">العملاء المستهدفين</label>
                                            <input type="text" class="form-control" id="verticalnav-pancard-input"
                                                placeholder="كتابة العملاء المستهدفين">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="verticalnav-cstno-input">السوق الكلي</label>
                                            <input type="text" class="form-control" id="verticalnav-cstno-input"
                                                placeholder="قيمة السوق الكلي">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="verticalnav-servicetax-input">السوق المستهدف</label>
                                            <input type="text" class="form-control" id="verticalnav-servicetax-input"
                                                placeholder="قيمة السوق المستهدف">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="verticalnav-companyuin-input">الحصة السوقية</label>
                                            <input type="text" class="form-control" id="verticalnav-companyuin-input"
                                                placeholder="قيمة الحصة السوقية">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <!-- Bank Details -->
                        <h3>الخطوة الثالثة</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>قنوات البيع</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-8 col-8">
                                                    <select class="form-control select2">
                                                        <option>Select</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-4">
                                                    <input data-repeater-delete type="button" class="btn btn-danger inner"
                                                        value="حذف" />
                                                    <input data-repeater-create type="button" class="btn btn-warning inner"
                                                        value="اضافة" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>قنوات التسويق</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-8 col-8">
                                                    <select class="form-control select2">
                                                        <option>Select</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-4">
                                                    <input data-repeater-delete type="button" class="btn btn-danger inner"
                                                        value="حذف" />
                                                    <input data-repeater-create type="button"
                                                        class="btn btn-warning inner" value="اضافة" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </section>
                        <!-- Confirm Details -->
                        <!-- Bank Details -->
                        <h3>الخطوة الرابعة</h3>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label>قنوات التسويق</label>
                                            <div class="col-md-8 col-8">
                                                <select class="form-control select2">
                                                    <option>Select</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label>قنوات التسويق</label>
                                            <div class="col-md-8 col-8">
                                                <select class="form-control select2">
                                                    <option>Select</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- Confirm Details -->
                        <!-- Bank Details -->
                        <h3>الخطوة الخامسة</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4>الرؤية</h4>
                                            <label for="verticalnav-pancard-input">ما هي رؤيتكم للمشروع خلال فترة محددة من
                                                الزمن. ماذا تريد أن يحقق مشروعكم</label>
                                            <textarea type="text" class="form-control" id="verticalnav-pancard-input"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4>الرسالة</h4>
                                            <label for="verticalnav-pancard-input">الرسالة الدائمة لتأسيس المشروع وهي الهدف
                                                الرئيسي لتأسيس المشروع وهي غير محددة بوقت</label>
                                            <textarea type="text" class="form-control" id="verticalnav-pancard-input"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <h4>الأهداف</h4>
                                            <label for="verticalnav-pancard-input">مجموعة الأهداف التي عند تحقيقها فإننا
                                                نحقق خطوات إستراتيجية للوصول إلى الرؤية والرسالة الخاصة بالمشروع</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-10 col-10">
                                                    <input type="text" class="inner form-control"
                                                        placeholder="قم بكتابة المشكلة" />
                                                </div>
                                                <div class="col-md-2 col-2">
                                                    <input data-repeater-delete type="button"
                                                        class="btn btn-danger inner" value="حذف" />
                                                </div>
                                            </div>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-10 col-10">
                                                    <input type="text" class="inner form-control"
                                                        placeholder="قم بكتابة المشكلة" />
                                                </div>
                                                <div class="col-md-2 col-2">
                                                    <input data-repeater-create type="button"
                                                        class="btn btn-warning inner" value="اضافة" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- Confirm Details -->
                        <!-- Bank Details -->
                        <h3>الخطوة السادسة</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>مصادر الايرادات</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-8 col-8">
                                                    <select class="form-control select2">
                                                        <option>Select</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-4">
                                                    <input data-repeater-delete type="button"
                                                        class="btn btn-danger inner" value="حذف" />
                                                    <input data-repeater-create type="button"
                                                        class="btn btn-warning inner" value="اضافة" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>هيكل التكاليف</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-8 col-8">
                                                    <select class="form-control select2">
                                                        <option>Select</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-4">
                                                    <input data-repeater-delete type="button"
                                                        class="btn btn-danger inner" value="حذف" />
                                                    <input data-repeater-create type="button"
                                                        class="btn btn-warning inner" value="اضافة" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>الأنشطة الرئيسية</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-8 col-8">
                                                    <select class="form-control select2">
                                                        <option>Select</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-4">
                                                    <input data-repeater-delete type="button"
                                                        class="btn btn-danger inner" value="حذف" />
                                                    <input data-repeater-create type="button"
                                                        class="btn btn-warning inner" value="اضافة" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </section>
                        <!-- Confirm Details -->
                        <!-- Bank Details -->
                        <h3>الخطوة السابعة</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>اسم المستخدم</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-12 col-12">
                                                    <input type="text" class="inner form-control"
                                                        placeholder="اسم المستخدم" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>البريد الالكتروني</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-12 col-12">
                                                    <input type="text" class="inner form-control"
                                                        placeholder="البريد الالكتروني" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label> رقم الجوال</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-12 col-12">
                                                    <input type="text" class="inner form-control"
                                                        placeholder="رقم الجوال" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="verticalnav-cstno-input">واتساب</label>
                                            <input type="text" class="form-control" id="verticalnav-cstno-input"
                                                placeholder="رابط الواتساب">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="verticalnav-servicetax-input">اللينكد ان</label>
                                            <input type="text" class="form-control" id="verticalnav-servicetax-input"
                                                placeholder="رابط اللينكد ان">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- Confirm Details -->
                        <!-- Bank Details -->
                        <h3>الخطوة الثامنة</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>اسم الخدمة</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-8 col-8">
                                                    <input type="text" class="inner form-control"
                                                        placeholder="اسم الخدمة" />
                                                </div>
                                                <div class="col-md-4 col-4">
                                                    <input data-repeater-delete type="button"
                                                        class="btn btn-danger inner" value="حذف" />
                                                    <input data-repeater-create type="button"
                                                        class="btn btn-warning inner" value="اضافة" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>وصف الخدمة</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-8 col-8">
                                                    <input type="text" class="inner form-control"
                                                        placeholder="وصف الخدمة" />
                                                </div>
                                                <div class="col-md-4 col-4">
                                                    <input data-repeater-delete type="button"
                                                        class="btn btn-danger inner" value="حذف" />
                                                    <input data-repeater-create type="button"
                                                        class="btn btn-warning inner" value="اضافة" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- Confirm Details -->
                        
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- jquery step -->
    <script src="<?php echo e(URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js')); ?>"></script>

    <!-- form wizard init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/form-wizard.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/pages/form-repeater.int.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my project\jdwa\resources\views/admin/projects/create.blade.php ENDPATH**/ ?>