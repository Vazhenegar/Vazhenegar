

<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <?php switch(session('PageTitle')):
                    case ('TranslationServices'): ?>
                    <h1 class="title">خدمات ترجمه</h1>
                    <?php break; ?>

                    <?php case ('TranslatorEmployment'): ?>
                    <h1 class="title">استخدام مترجم</h1>
                    <?php break; ?>

                    <?php case ('ContactUs'): ?>
                    <h1 class="title">تماس با ما</h1>
                    <?php break; ?>

                    <?php case ('Faq'): ?>
                    <h1 class="title">سوالات متداول</h1>
                    <?php break; ?>

                    <?php case ('AboutUs'): ?>
                    <h1 class="title">درباره ما</h1>
                    <?php break; ?>

                    <?php case ('TOS'): ?>
                    <h1 class="title">قوانین و مقررات همکاری با مجموعه واژه نگار</h1>
                    <?php break; ?>

                <?php endswitch; ?>

            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="<?php echo e(asset('images/core-img/curve-5.png')); ?>" alt="">
    </div>
</div>
<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\vazhenegar\SharedParts\PageHeadSection.blade.php ENDPATH**/ ?>