

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
        
        <div class="row">
            <div class="col-xl-2 col-sm-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-shipping-tab" data-bs-toggle="pill" href="#a" role="tab"
                        aria-controls="v-pills-shipping" aria-selected="true">
                        <p class="fw-bold mb-4"> الخطوة الأولى</p>
                    </a>

                    <a class="nav-link " id="v-pills-shipping-tab" data-bs-toggle="pill" href="#b" role="tab"
                        aria-controls="v-pills-shipping" aria-selected="true">
                        <p class="fw-bold mb-4"> الخطوة الثانية</p>
                    </a>
                    <a class="nav-link " id="v-pills-shipping-tab" data-bs-toggle="pill" href="#c" role="tab"
                        aria-controls="v-pills-shipping" aria-selected="true">
                        <p class="fw-bold mb-4"> الخطوة الثالثة</p>
                    </a>
                    <a class="nav-link " id="v-pills-shipping-tab" data-bs-toggle="pill" href="#d" role="tab"
                        aria-controls="v-pills-shipping" aria-selected="true">
                        <p class="fw-bold mb-4"> الخطوة الرابعة</p>
                    </a>
                    <a class="nav-link " id="v-pills-shipping-tab" data-bs-toggle="pill" href="#e" role="tab"
                        aria-controls="v-pills-shipping" aria-selected="true">
                        <p class="fw-bold mb-4"> الخطوة الخامسة</p>
                    </a>
                    <a class="nav-link " id="v-pills-shipping-tab" data-bs-toggle="pill" href="#f" role="tab"
                        aria-controls="v-pills-shipping" aria-selected="true">
                        <p class="fw-bold mb-4"> الخطوة السادسة</p>
                    </a>
                    <a class="nav-link " id="v-pills-shipping-tab" data-bs-toggle="pill" href="#g" role="tab"
                        aria-controls="v-pills-shipping" aria-selected="true">
                        <p class="fw-bold mb-4"> الخطوة السابعة</p>
                    </a>
                    <a class="nav-link " id="v-pills-shipping-tab" data-bs-toggle="pill" href="#h" role="tab"
                        aria-controls="v-pills-shipping" aria-selected="true">
                        <p class="fw-bold mb-4"> الخطوة الثامنة</p>
                    </a>
                </div>
            </div>
            <div class="col-xl-10 col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <form role="form" id="signupForm1" action="<?php echo e(route('projects.store')); ?>" method="post"
                            class="form-horizontal" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="a" role="tabpanel"
                                    aria-labelledby="v-pills-shipping-tab">

                                    <div class="row">
                                        <div class="inner-repeater mb-4">
                                            <div data-repeater-list="inner-group" class="inner mb-4">
                                                <label>المشكلة</label>
                                                <div data-repeater-item class="inner mb-3 row">
                                                    <div class="col-md-8 col-8">
                                                        <input name="problem" type="text" class="inner form-control"
                                                            placeholder="ادخل المشكلة" />
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
                                                <label>الحل</label>
                                                <div data-repeater-item class="inner mb-3 row">
                                                    <div class="col-md-8 col-8">
                                                        <input type="text" name="solution" class="inner form-control"
                                                            placeholder="ادخل الحل" />
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

                                </div>
                                <div class="tab-pane fade" id="b" role="tabpanel"
                                    aria-labelledby="v-pills-payment-tab">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="verticalnav-pancard-input">القيمة المقترحة</label>
                                                <input type="text" name="suggested_value" class="form-control" id="verticalnav-pancard-input"
                                                    placeholder="كتابة القيمة المقترحة">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="verticalnav-pancard-input">العملاء المستهدفين</label>
                                                <input type="text" name="target_customers" class="form-control" id="verticalnav-pancard-input"
                                                    placeholder="كتابة العملاء المستهدفين">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="verticalnav-cstno-input">السوق الكلي</label>
                                                <input type="text" name="total_market" class="form-control" id="verticalnav-cstno-input"
                                                    placeholder="قيمة السوق الكلي">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="verticalnav-servicetax-input">السوق المستهدف</label>
                                                <input type="text" class="form-control"
                                                    id="verticalnav-servicetax-input" name="target_market" placeholder="قيمة السوق المستهدف">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="verticalnav-companyuin-input">الحصة السوقية</label>
                                                <input type="text" class="form-control"
                                                    id="verticalnav-companyuin-input" name="market_share" placeholder="قيمة الحصة السوقية">
                                            </div>
                                        </div>
                                    </div>
                                    


                                </div>
                                <div class="tab-pane fade" id="c" role="tabpanel"
                                    aria-labelledby="v-pills-confir-tab">

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
                                                <label>قنوات التسويق</label>
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
                                    

                                </div>
                                <div class="tab-pane fade show" id="d" role="tabpanel"
                                    aria-labelledby="v-pills-shipping-tab">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label>حدد معيار المنافسة الأول </label>
                                                <div class="col-md-8 col-8">
                                                    <select class="form-control select2">
                                                        <option>Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label>حدد معيار المنافسة الثاني </label>
                                                <div class="col-md-8 col-8">
                                                    <select class="form-control select2">
                                                        <option>Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="e" role="tabpanel"
                                    aria-labelledby="v-pills-payment-tab">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <h4>الرؤية</h4>
                                                <label for="verticalnav-pancard-input">ما هي رؤيتكم للمشروع خلال فترة محددة
                                                    من
                                                    الزمن. ماذا تريد أن يحقق مشروعكم</label>
                                                <textarea type="text" name="vision" class="form-control" id="verticalnav-pancard-input"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <h4>الرسالة</h4>
                                                <label for="verticalnav-pancard-input">الرسالة الدائمة لتأسيس المشروع وهي
                                                    الهدف
                                                    الرئيسي لتأسيس المشروع وهي غير محددة بوقت</label>
                                                <textarea type="text" name="message" class="form-control" id="verticalnav-pancard-input"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="inner-repeater mb-4">
                                            <div data-repeater-list="inner-group" class="inner mb-4">
                                                <h4>الأهداف</h4>
                                                <label for="verticalnav-pancard-input">مجموعة الأهداف التي عند تحقيقها
                                                    فإننا
                                                    نحقق خطوات إستراتيجية للوصول إلى الرؤية والرسالة الخاصة بالمشروع</label>
                                                <div data-repeater-item class="inner mb-3 row">
                                                    <div class="col-md-10 col-10">
                                                        <input type="text" name="goals" class="inner form-control"
                                                            placeholder="قم بكتابة الهدف" />
                                                    </div>
                                                    <div class="col-md-2 col-2">
                                                        <input data-repeater-delete type="button"
                                                            class="btn btn-danger inner"  value="حذف" />
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

                                    
                                </div>
                                <div class="tab-pane fade" id="f" role="tabpanel"
                                    aria-labelledby="v-pills-confir-tab">

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

                                    
                                </div>
                                <div class="tab-pane fade" id="g" role="tabpanel"
                                    aria-labelledby="v-pills-confir-tab">

                                    <div class="row">
                                        <div class="inner-repeater mb-4">
                                            <div data-repeater-list="inner-group" class="inner mb-4">
                                                <label>اسم المستخدم</label>
                                                <div data-repeater-item class="inner mb-3 row">
                                                    <div class="col-md-12 col-12">
                                                        <input type="text" name="username" class="inner form-control"
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
                                                        <input type="text" name="email" class="inner form-control"
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
                                                        <input type="text" name="phone" class="inner form-control"
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
                                                <input type="text" class="form-control" name="whatsapp" id="verticalnav-cstno-input"
                                                    placeholder="رابط الواتساب">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="verticalnav-servicetax-input">اللينكد ان</label>
                                                <input type="text" class="form-control"
                                                    id="verticalnav-servicetax-input" name="linked" placeholder="رابط اللينكد ان">
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                                <div class="tab-pane fade" id="h" role="tabpanel"
                                    aria-labelledby="v-pills-confir-tab">

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

                                    
                                    <button type="submit"class="btn btn-warning inner" id="save"> حفظ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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