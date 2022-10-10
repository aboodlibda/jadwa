

<?php $__env->startSection('title'); ?> <?php echo e('إنشاء مستخدم'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
<<<<<<< Updated upstream
        <?php $__env->slot('li_1'); ?> مشاريع <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> إنشاء مشروع <?php $__env->endSlot(); ?>
=======
        <?php $__env->slot('li_1'); ?> المستخدمين <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> إنشاء مستخدم <?php $__env->endSlot(); ?>
>>>>>>> Stashed changes
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
<<<<<<< Updated upstream
                    <h4 class="card-title mb-4">قم بإدخال البيانات  </h4>

                    <form action="<?php echo e(route('projects.store')); ?>" method="POST" enctype="multipart/form-data">
=======
                    <h4 class="card-title mb-4">قم بإدخال بيانات المستخدم</h4>

                    <form action="<?php echo e(route('projects.store')); ?>" method="POST">
>>>>>>> Stashed changes
                        <?php echo csrf_field(); ?>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="name" class="form-label">الإسم</label>
=======
                                    <label for="formrow-name-input" class="form-label">الإسم</label>
>>>>>>> Stashed changes
                                    <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
<<<<<<< Updated upstream
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>" id="name" placeholder="قم بإدخال الاسم">
=======
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>" id="formrow-name-input" placeholder="قم بإدخال الاسم">
>>>>>>> Stashed changes
                                    <?php $__errorArgs = ['name'];
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
                            </div>

<<<<<<< Updated upstream
       
  
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="country" class="form-label">country </label>
=======
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="formrow-idea-input" class="form-label">idea </label>
                                    <input type="text" name="idea" class="form-control <?php $__errorArgs = ['idea'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('idea')); ?>" id="formrow-idea-input" placeholder="قم بإدخال  ">
                                    <?php $__errorArgs = ['idea'];
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
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="formrow-country-input" class="form-label">country </label>
>>>>>>> Stashed changes
                                    <input type="text" name="country"  class="form-control <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>" value="<?php echo e(old('country')); ?>" is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
<<<<<<< Updated upstream
unset($__errorArgs, $__bag); ?>" id="country" placeholder="قم بإدخال  ">
=======
unset($__errorArgs, $__bag); ?>" id="formrow-country-input" placeholder="قم بإدخال  ">
>>>>>>> Stashed changes
                                    <?php $__errorArgs = ['country'];
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
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="city" class="form-label">city </label>
=======
                                    <label for="formrow-city-input" class="form-label">city </label>
>>>>>>> Stashed changes
                                    <input type="text" name="city"  class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>" value="<?php echo e(old('city')); ?>" is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="formrow-city-input" placeholder="قم بإدخال  ">
                                    <?php $__errorArgs = ['city'];
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
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="vat" class="form-label">vat </label>
=======
                                    <label for="formrow-vat-input" class="form-label">vat </label>
>>>>>>> Stashed changes
                                    <input type="number" name="vat"  class="form-control <?php $__errorArgs = ['vat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>" value="<?php echo e(old('vat')); ?>" is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="formrow-vat-input" placeholder="قم بإدخال  ">
                                    <?php $__errorArgs = ['vat'];
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
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="currency" class="form-label">currency</label>
=======
                                    <label for="formrow-currency-input" class="form-label">currency</label>
>>>>>>> Stashed changes
                                    <input type="text" name="currency" class="form-control <?php $__errorArgs = ['currency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('currency')); ?>" id="currency" placeholder="قم بإدخال ">
                                    <?php $__errorArgs = ['currency'];
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
                            </div>

<<<<<<< Updated upstream
                                     
                         <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="formrow-logo-input" class="form-label"> صورة المشروع  </label>
                                <input type="file" class="form-control <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="logo" id="formrow-logo-input" value="<?php echo e(old('logo')); ?>" >
                                <?php $__errorArgs = ['logo'];
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
                        </div>

=======
>>>>>>> Stashed changes
                        </div>

                        <div class="row">

                         

                         

                            <div class="col-lg-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="development_duration" class="form-label">development_duration</label>
                                    <input type="number" name="development_duration" class="form-control" id="development_duration" value="<?php echo e(old('development_duration')); ?>" >
=======
                                    <label for="formrow-development_duration-input" class="form-label">development_duration</label>
                                    <input type="number" name="development_duration" class="form-control" id="formrow-development_duration-input" value="<?php echo e(old('development_duration')); ?>" >
>>>>>>> Stashed changes
                                    <?php $__errorArgs = ['development_duration'];
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
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="number_days_year" class="form-label">number_days_year</label>
                                    <input type="number" name="number_days_year" class="form-control" id="number_days_year" value="<?php echo e(old('number_days_year')); ?>" >
=======
                                    <label for="formrow-number_days_year-input" class="form-label">number_days_year</label>
                                    <input type="number" name="number_days_year" class="form-control" id="formrow-number_days_year-input" value="<?php echo e(old('number_days_year')); ?>" >
>>>>>>> Stashed changes
                                    <?php $__errorArgs = ['number_days_year'];
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
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="start_date" class="form-label">start_date </label>
=======
                                    <label for="formrow-start_date-input" class="form-label">start_date </label>
>>>>>>> Stashed changes
                                    <input type="date" class="form-control <?php $__errorArgs = ['start_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
<<<<<<< Updated upstream
unset($__errorArgs, $__bag); ?>" id="start_date" name="start_date" value="<?php echo e(old('start_date')); ?>"
=======
unset($__errorArgs, $__bag); ?>" id="formrow-start_date-input" name="start_date"
>>>>>>> Stashed changes
                                          required>
                                    <?php $__errorArgs = ['start_date'];
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
                            </div>

                        </div>

                        <div class="row">

                               

                                <div class="col-lg-4">
                                    <div class="mb-3">
<<<<<<< Updated upstream
                                        <label for="study_duration" class="form-label">study_duration</label>
                                        <!-- All countries -->
                                        <select id="study_duration" class="form-select" name="study_duration">
=======
                                        <label for="formrow-study_duration-input" class="form-label">study_duration</label>
                                        <!-- All countries -->
                                        <select id="formrow-study_duration-input" class="form-select" name="study_duration">
>>>>>>> Stashed changes
                                            <option selected disabled hidden>-- إختر --</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>

                                  

                            <div class="col-lg-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="project_type_id" class="form-label">project_type_id</label>
                                    <!-- All countries -->
                                    <select id="project_type_id" class="form-select" name="project_type_id">
=======
                                    <label for="formrow-project_type_id-input" class="form-label">project_type_id</label>
                                    <!-- All countries -->
                                    <select id="formrow-project_type_id-input" class="form-select" name="project_type_id">
>>>>>>> Stashed changes
                                        <option selected disabled hidden>-- إختر --</option>
                                        <?php $__currentLoopData = $protype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="owner_id" class="form-label">owner_id</label>
                                    <!-- All countries -->
                                    <select id="owner_id" class="form-select" name="owner_id">
=======
                                    <label for="formrow-owner_id-input" class="form-label">owner_id</label>
                                    <!-- All countries -->
                                    <select id="formrow-owner_id-input" class="form-select" name="owner_id">
>>>>>>> Stashed changes
                                        <option selected disabled hidden>-- إختر --</option>
                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"> <?php echo e($item->name); ?></option>    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            </div>

                      
                           
                        </div>

                      <div class="row">
<<<<<<< Updated upstream
                  
      
                  

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="idea" class="form-label">idea </label>
                                <textarea id="elm1" name="idea" class="form-control <?php $__errorArgs = ['idea'];
=======
                          
                          
                         <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="formrow-logo-input" class="form-label"> صورة المشروع  </label>
                                <input type="file" class="form-control <?php $__errorArgs = ['logo'];
>>>>>>> Stashed changes
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
<<<<<<< Updated upstream
unset($__errorArgs, $__bag); ?>" ><?php echo e(old('idea')); ?></textarea>

                                
                                <?php $__errorArgs = ['idea'];
=======
unset($__errorArgs, $__bag); ?>" name="logo" id="formrow-logo-input" value="<?php echo e(old('logo')); ?>">
                                <?php $__errorArgs = ['logo'];
>>>>>>> Stashed changes
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
<<<<<<< Updated upstream
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
=======
                                   <strong><?php echo e($message); ?></strong>
                               </span>
>>>>>>> Stashed changes
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                      </div>

                        <div class="text-center">
                            <button type="submit" value="submit" class="btn btn-success w-lg">حفظ</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>
<?php $__env->stopSection(); ?>



<<<<<<< Updated upstream
      
<?php $__env->startSection('script'); ?>
<!--tinymce js-->
<script src="<?php echo e(asset('assets/libs/tinymce/tinymce.min.js')); ?>"></script>

<!-- init js -->
<script src="<?php echo e(asset('assets/js/pages/form-editor.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>            
=======
                  
>>>>>>> Stashed changes
                    
                                   

                    


              


<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Documents\GitHub\jadwa\resources\views/admin/projects/create.blade.php ENDPATH**/ ?>