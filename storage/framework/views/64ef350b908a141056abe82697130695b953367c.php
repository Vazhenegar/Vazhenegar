


<section class="uza-newsletter-area">
    <div class="container" dir="rtl">
        <div class="row align-items-center justify-content-between">
            <!-- Newsletter Content -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="nl-content mb-80">
                    <h2>عضویت در خبرنامه</h2>
                    <p>برای دریافت آخرین اخبار و مطالب عضو شوید</p>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="nl-form mb-80">
                    <form action="/NewsLetterMembers" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="text" name="nl-email" value="" id="email" class="form-control"
                               value="<?php echo e(old('nl-email')); ?>" required>

                        <?php if($errors->any()): ?>
                            
                        <?php else: ?>
                            <label class="form-placeholder-label" for="email">آدرس ایمیل خود را وارد کنید</label>
                        <?php endif; ?>
                        <button type="submit">عضویت</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</section>

<?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\IndexPageElements\IndexPageNewsLetter.blade.php ENDPATH**/ ?>