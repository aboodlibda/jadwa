<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('translation.Recover_Password'); ?> 2
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- owl.carousel css -->
<link rel="stylesheet" href="<?php echo e(URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<body class="auth-body-bg">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>

    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-xl-9">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">

                                <div class="p-4 mt-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">

                                                <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">5k</span>+ Satisfied clients</h4>

                                                <div dir="ltr">
                                                    <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4">" Fantastic theme with a
                                                                    ton of options. If you just want the HTML to
                                                                    integrate with your project, then this is the
                                                                    package. You can find the files in the 'dist'
                                                                    folder...no need to install git and all the other
                                                                    stuff the documentation talks about. "</p>

                                                                <div>
                                                                    <h4 class="font-size-16 text-primary">Abs1981</h4>
                                                                    <p class="font-size-14 mb-0">- Skote User</p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4">" If Every Vendor on Envato
                                                                    are as supportive as Themesbrand, Development with
                                                                    be a nice experience. You guys are Wonderful. Keep
                                                                    us the good work. "</p>

                                                                <div>
                                                                    <h4 class="font-size-16 text-primary">nezerious</h4>
                                                                    <p class="font-size-14 mb-0">- Skote User</p>
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
                </div>
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text">
                                    <a href="index" class="d-block auth-logo">
                                        <img src="<?php echo e(URL::asset('assets/images/logo-light.png')); ?>" alt="" height="18" class="auth-logo-dark">
                                        <img src="<?php echo e(URL::asset('/assets/images/logo-light.png')); ?>" alt="" height="18" class="auth-logo-light">
                                    </a>
                                </div>
                                <div class="my-auto" style="padding-bottom: 180px;">

                                    <div>
                                        <img src="<?php echo e(URL::asset('assets/images/email.png')); ?>" alt=""  class="success">

                                        <h5 class="text colors">تم التحقق بنجاح !</h5>
                                    </div>


                                </div>


                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
    <!-- owl.carousel js -->
    <script src="<?php echo e(URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js')); ?>"></script>
    <!-- auth-2-carousel init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/auth-2-carousel.init.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Documents\GitHub\jadwa\resources\views/auth/passwords/success.blade.php ENDPATH**/ ?>