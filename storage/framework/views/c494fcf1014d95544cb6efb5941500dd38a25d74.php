<?php $__env->startSection('PageTitle', 'استخدام مترجم'); ?>

<?php $__env->startSection('content'); ?>

    
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <h1 class="title">استخدام مترجم</h1>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="<?php echo e(asset('images/core-img/curve-5.png')); ?>" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <section class="employment-area section-padding-50">
        <div class="container" dir="rtl">
            <div class="row justify-content-between">
                <!-- employment Form -->
                <div class="col-12 col-lg-12">
                    <div class="employment-form mb-50">
                        <div class="mb-50">
                            <h4>فرم درخواست همکاری
                                <br>
                                لطفا در صورتی که فرصت کافی دارید فرم زیر را تکمیل و در آزمون آنلاین شرکت کنید.
                                <br>
                                بدیهی است به فرم هایی که بصورت ناقص ارسال شده باشند یا در آزمون شرکت نکرده باشند پاسخی
                                داده نخواهد شد.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="employment-form mb-40">
                    <form action="/TranslatorEmployment" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <?php echo e(csrf_field()); ?>

                            
                            <div class="col-12">
                                <p class="mb-30">
                                    اطلاعات فردی
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('FirstName')): ?>
                                        <input type="text" class="wrong-field form-control mb-30" name="FirstName"
                                               value="<?php echo e(old('FirstName')); ?>" required>
                                    <?php else: ?>
                                        <input type="text" class="form-control mb-30" name="FirstName"
                                               value="<?php echo e(old('FirstName')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="FirstName"> نام</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('LastName')): ?>
                                        <input type="text" class="wrong-field form-control mb-30" name="LastName"
                                               value="<?php echo e(old('LastName')); ?>" required>
                                    <?php else: ?>
                                        <input type="text" class="form-control mb-30" name="LastName"
                                               value="<?php echo e(old('LastName')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="LastName">نام خانوادگی</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('BirthDate')): ?>
                                        <input type="text" class="wrong-field form-control mb-30 DatePicker"
                                               id="BirthDate" name="BirthDate" value="<?php echo e(old('BirthDate')); ?>"
                                               required>
                                    <?php else: ?>
                                        <input type="text" class="form-control mb-30 DatePicker"
                                               id="BirthDate" name="BirthDate" value="<?php echo e(old('BirthDate')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="BirthDate">تاریخ تولد</label>
                                    <input class="form-control" name="BirthDateAlt" id="BirthDateAlt"
                                           value="<?php echo e(old('BirthDateAlt')); ?>" type="hidden"
                                           readonly/>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <div class="FormRadioBox">
                                        <?php if($errors->has('Gender')): ?>
                                            <fieldset class="r-pill wrong-field">
                                                <?php else: ?>
                                                    <fieldset class="r-pill">
                                                        <?php endif; ?>
                                                        <label class="mb-30" dir="rtl">جنسیت:</label>
                                                        <div class="r-pill__group">
                                                <span class="r-pill__item">
                                                    <?php if(($errors->any()) && (old('Gender')==1)): ?>
                                                        <input type="radio" name="Gender" value="1" id=r1 checked>
                                                    <?php else: ?>
                                                        <input type="radio" name="Gender" value="1" id=r1>
                                                    <?php endif; ?>
                                                    <label for="r1">مرد</label>
                                                </span>
                                                            <span class="r-pill__item">
                                                    <?php if(($errors->any()) && (old('Gender')==0) && (old('Gender')!=null)): ?>
                                                                    <input type="radio" name="Gender" value="0" id="r2"
                                                                           checked>
                                                                <?php else: ?>
                                                                    <input type="radio" name="Gender" value="0" id="r2">
                                                                <?php endif; ?>
                                                    <label for="r2">زن</label>
                                                </span>
                                                        </div>
                                                    </fieldset>
                                            </fieldset>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('Email')): ?>
                                        <input type="text" class="wrong-field form-control mb-30" name="Email"
                                               id="email" value="<?php echo e(old('Email')); ?>" required>
                                    <?php else: ?>
                                        <input type="text" class="form-control mb-30" name="Email" id="email"
                                               value="<?php echo e(old('Email')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="Email">ایمیل</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('Password')): ?>
                                        <input type="password" class="wrong-field form-control mb-30" name="Password"
                                               value="<?php echo e(old('Password')); ?>" required>
                                    <?php else: ?>
                                        <input type="password" class="form-control mb-30" name="Password"
                                               value="<?php echo e(old('Password')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="Password">رمز عبور</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('Password')): ?>
                                        <input type="password" class=" wrong-field form-control mb-30"
                                               name="Password_confirmation" value="<?php echo e(old('Password_confirmation')); ?>"
                                               required>
                                    <?php else: ?>
                                        <input type="password" class="form-control mb-30" name="Password_confirmation"
                                               value="<?php echo e(old('Password_confirmation')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="Password_confirmation">تکرار رمز
                                        عبور</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('FixNumber')): ?>
                                        <input type="number" class="wrong-field form-control mb-30" name="FixNumber"
                                               value="<?php echo e(old('FixNumber')); ?>" required>
                                    <?php else: ?>
                                        <input type="number" class="form-control mb-30" name="FixNumber"
                                               value="<?php echo e(old('FixNumber')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="FixNumber"> تلفن ثابت با کد
                                        شهرستان</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('MobileNumber')): ?>
                                        <input type="number" class="wrong-field form-control mb-30" name="MobileNumber"
                                               value="<?php echo e(old('MobileNumber')); ?>" required>
                                    <?php else: ?>
                                        <input type="number" class="form-control mb-30" name="MobileNumber"
                                               value="<?php echo e(old('MobileNumber')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="MobileNumber">تلفن همراه</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <select class="form-control mb-30" name="State" id="State" required>
                                        <option value=""></option>
                                        <script>
                                            let states =<?php echo json_encode($states, 15, 512) ?>;//for using states array in js to populate select box
                                        </script>
                                    </select>
                                    <label class="form-placeholder-label" for="State">استان محل سکونت</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <select class="form-control mb-30" name="City" id="City" required>
                                        <option value=""></option>
                                    </select>
                                    <label class="form-placeholder-label" for="City">شهر محل سکونت</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('Address')): ?>
                                        <input type="text" class="wrong-field form-control mb-30" name="Address"
                                               value="<?php echo e(old('Address')); ?>" required>
                                    <?php else: ?>
                                        <input type="text" class="form-control mb-30" name="Address"
                                               value="<?php echo e(old('Address')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="Address">آدرس</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <p class="mb-30">
                                    اطلاعات تحصیلی
                                </p>
                            </div>

                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('Degree')): ?>
                                        <input type="text" class="wrong-field form-control mb-30" name="Degree"
                                               value="<?php echo e(old('Degree')); ?>" required>
                                    <?php else: ?>
                                        <input type="text" class="form-control mb-30" name="Degree"
                                               value="<?php echo e(old('Degree')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="Degree">آخرین مدرک تحصیلی</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('GraduationDate')): ?>
                                        <input type="text" class="wrong-field form-control mb-30 DatePicker"
                                               id="GraduationDate" name="GraduationDate"
                                               value="<?php echo e(old('GraduationDate')); ?>"
                                               required>
                                    <?php else: ?>
                                        <input type="text" class="form-control mb-30 DatePicker" name="GraduationDate"
                                               id="GraduationDate" value="<?php echo e(old('GraduationDate')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="GraduationDate">تاریخ فارغ
                                        التحصیلی</label>
                                    <input class="form-control" name="GraduationDateAlt" id="GraduationDateAlt"
                                           value="<?php echo e(old('GraduationDateAlt')); ?>" type="hidden"
                                           readonly/>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <?php if($errors->has('GraduationField')): ?>
                                        <input type="text" class="wrong-field form-control mb-30" name="GraduationField"
                                               value="<?php echo e(old('GraduationField')); ?>" required>
                                    <?php else: ?>
                                        <input type="text" class="form-control mb-30" name="GraduationField"
                                               value="<?php echo e(old('GraduationField')); ?>" required>
                                    <?php endif; ?>
                                    <label class="form-placeholder-label" for="GraduationField">رشته / گرایش</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <p class="mb-30">
                                    سوابق کاری
                                </p>
                            </div>

                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <textarea class="form-control mb-30" name="Resume" rows="8"
                                              cols="80"><?php echo e(old('Resume')); ?></textarea>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <p class="mb-30">
                                    زبان ها
                                </p>
                            </div>
                            <?php if($errors->has('UserSelectedLangs')): ?>
                                <div class="col-12 wrong-field">
                                    <?php else: ?>
                                        <div class="col-12">
                                            <?php endif; ?>
                                            <div class="row">
                                                <div class="col-3 form-group">
                                                    <select class="form-control mb-30" name="source_lang"
                                                            onchange="SL(this)" required>
                                                        <option value="<?php echo e(old('source_lang')); ?>"></option>
                                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option
                                                                value="<?php echo e($language->id); ?>"><?php echo e($language->LanguageName); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <label class="form-placeholder-label" for="source_lang">زبان
                                                        مبدا</label>
                                                </div>

                                                <div class="col-3 form-group">
                                                    <select class="form-control mb-30" name="dest_lang"
                                                            onchange="DL(this)" required>
                                                        <option value="<?php echo e(old('dest_lang')); ?>"></option>
                                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option
                                                                value=" <?php echo e($language->id); ?>"><?php echo e($language->LanguageName); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <label class="form-placeholder-label" for="dest_lang">زبان
                                                        مقصد</label>
                                                </div>
                                                <button type="submit" class="btn lang-btn btn-2 fa fa-check"
                                                        id="lang-btn" onclick="add_to_list()" disabled></button>
                                            </div>
                                        </div>
                                </div>

                                <div class="col-12">
                                    <div class="col-7">
                                        <div class="form-group" id="selected_lang">
                                            
                                            <script>
                                                let UserSelectedLangs = <?php echo json_encode(old('UserSelectedLangs'), 15, 512) ?>;//for language pairs that may user selected before
                                            </script>
                                            
                                        </div>
                                    </div>
                                </div>

                                

                                <?php if($errors->has('TranslationFields')): ?>
                                    <div class="col-12 wrong-field">
                                        <?php else: ?>
                                            <div class="col-12">
                                                <?php endif; ?>
                                                <p class="mb-30">
                                                    زمینه ها
                                                </p>
                                            </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-4">
                                                <div class="form-group" id="translation_fields1">
                                                    
                                                    <?php for($i=0; $i<14; $i++): ?>
                                                        <label class="pure-material-checkbox"><input
                                                                name="TranslationFields[]"
                                                                value="<?php echo e($translation_fields[$i]->FieldName); ?>"
                                                                type="checkbox"><span><?php echo e($translation_fields[$i]->FieldName); ?></span></label>
                                                        <br>
                                                    <?php endfor; ?>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group" id="translation_fields2">
                                                    
                                                    <?php for($i=14; $i<count($translation_fields); $i++): ?>
                                                        <label class="pure-material-checkbox"><input
                                                                name="TranslationFields[]"
                                                                value="<?php echo e($translation_fields[$i]->FieldName); ?>"
                                                                type="checkbox"><span><?php echo e($translation_fields[$i]->FieldName); ?></span></label>
                                                        <br>
                                                    <?php endfor; ?>

                                                </div>
                                            </div>

                                            <script>
                                                let old_tf =<?php echo json_encode(old('TranslationFields'), 15, 512) ?>; //for populate and select translation fields that user may selected before --}
                                            </script>

                                        </div>
                                    </div>

                                    

                                    <div class="col-12">
                                        <p class="mb-30">
                                            ارسال مدارک <br>
                                            مدارک شناسایی (شناسنامه یا کارت ملی) و مدارک تحصیلی خود را در یک فایل زیپ
                                            (zip, rar) ارسال کنید.
                                        </p>
                                    </div>

                                    <div class="col-12">
                                        <?php if($errors->has('UserDocuments')): ?>
                                            <div class="wrong-field col-4 form-group">
                                                <?php else: ?>
                                                    <div class="col-4 form-group">
                                                        <?php endif; ?>
                                                        <input type="file" name="UserDocuments">
                                                    </div>
                                            </div>
                                    </div>

                                    

                                    

                                    <div class="col-12">
                                        <div class="col-4 form-group">
                                            <label class="pure-material-checkbox">
                                                <input type="checkbox" name="tos" required>
                                                <?php if($errors->has('tos')): ?>
                                                    <span class="wrong-field"><a href="/tos" target="blank">قوانین و مقررات </a>را
                                        مطالعه کردم و
                                        موافقم.</span>
                                                <?php else: ?>
                                                    <span><a href="/tos" target="blank">قوانین و مقررات </a>را مطالعه کردم و
                                        موافقم.</span>
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 mb-30">
                                        <button type="submit" class="btn uza-btn btn-2 mt-15">مرحله
                                            بعد
                                        </button>
                                    </div>
                                    
                                    <div class="col-12">
                                        <?php if($errors->any()): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($error); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                        </div>
                    </form>
                </div>
            </div>
        </div>

    

    <!-- Form Background Pattern -->
        <div class="employment-area-bg-pattern">
            <img src="<?php echo e(asset('images/core-img/curve-2.png')); ?>" alt="">
        </div>
    </section>
    <!-- ***** employment Area End ***** -->

    
    <?php echo $__env->make('scripts.CoreScripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('scripts.DatePicker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('scripts.StateCity', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('scripts.TranslationFields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('scripts.TranslationLanguages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.layout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/TranslatorEmployment.blade.php ENDPATH**/ ?>