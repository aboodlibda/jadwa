

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Register'); ?> 2
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css')); ?>">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet"
        type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <body class="auth-body-bg">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text">
                                        <a href="index" class="d-block auth-logo">
                                            <img src="<?php echo e(URL::asset('assets/images/logo-light.png')); ?>" alt=""
                                                height="18" class="auth-logo-dark">
                                            <img src="<?php echo e(URL::asset('/assets/images/logo-light.png')); ?>" alt=""
                                                height="18" class="auth-logo-light">
                                        </a>
                                    </div>
                                    <div class="my-auto">

                                        <div>
                                            <h5 class="text colors">للمتابعة قم بانشاء حساب</h5>
                                            <p class="text-muted text">جدوى في السعر - جدوى في الوقت</p>
                                        </div>

                                        <div class="mt-4">
                                            <form method="POST" class="form-horizontal" action="<?php echo e(route('register')); ?>"
                                                enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label colors fon">البريد
                                                        الالكتروني</label>
                                                    <input type="email"
                                                        class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        id="useremail" value="<?php echo e(old('email')); ?>" name="email"
                                                        placeholder="ادخل البريد الالكتروني" autofocus required>
                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="phone" class="form-label colors fon">الهاتف</label>
                                                    <input type="text"
                                                        class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        value="<?php echo e(old('phone')); ?>" id="phone" name="phone" autofocus
                                                        required placeholder="ادخل رقم الهاتف">
                                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="userpassword" class="form-label colors fon">كلمة
                                                        المرور</label>
                                                    <input type="password"
                                                        class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        id="userpassword" name="password" placeholder="ادخل كلمة المرور"
                                                        autofocus required>
                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="confirmpassword" class="form-label colors fon">تاكيد كلمة
                                                        المرور </label>
                                                    <input type="password"
                                                        class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        id="confirmpassword" name="password_confirmation"
                                                        placeholder="تاكيد كلمة المرور" autofocus required>
                                                    <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>


                                                <div class="mt-4 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light log"
                                                        type="submit">تسجيل </button>
                                                </div>

                                                

                                                
                                            </form>

                                            <div class="mt-3 text-center yell">
                                                <p>هل لديك حساب ؟ <a href="<?php echo e(url('login')); ?>" class="fw-medium  yell">
                                                        تسجيل دخول</a> </p>
                                            </div>

                                        </div>
                                    </div>

                                    
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">

                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="text-center">
                                                    <div dir="ltr">
                                                        <div class="owl-carousel owl-theme auth-review-carousel"
                                                            id="auth-review-carousel">
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-18 mb-4">جدوى في
                                                                        التعديل</p>
                                                                    <div>
                                                                        <h4 class="font-size-16">عدل ما تريد في أي وفت خلال فترة التعديل المسموحة وذلك خلال دقائق</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-18 mb-4">جدوى في
                                                                        السعر</p>
                                                                    <div>
                                                                        <h4 class="font-size-16">سيقوم النظام بمساعدتك
                                                                            وسيقوم بالتحليل المالي وتجهيز الدراسة</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-18 mb-4">سهل وبسيط</p>
                                                                    <div>
                                                                        <h4 class="font-size-16">جدوى كلاود تقدم خدماتها
                                                                            بدقة عالية وسعر تنافسي يتيح لك تحقيق أهدافك
                                                                            وبأقل
                                                                            أسعار</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-18 mb-4">جدوى كلاود تقدم خدماتها
                                                                        بدقة عالية وسعر تنافسي يتيح لك تحقيق أهدافك وبأقل
                                                                        أسعار</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
        <!-- owl.carousel js -->
        <script src="<?php echo e(URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js')); ?>"></script>
        <!-- auth-2-carousel init -->
        <script src="<?php echo e(URL::asset('/assets/js/pages/auth-2-carousel.init.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my project\jadwa\resources\views/auth/register.blade.php ENDPATH**/ ?>