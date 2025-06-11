
<?php echo $__env->make('auth.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Main Start -->
    <main class="main my-4 p-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="login-img">
                        <img class="img-fluid" src="<?php echo e(asset('assets/frontend/images/login.png')); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-txt ms-5 text-center w-100">
                        <h3><?php echo e(get_phrase('Congratulations')); ?></h3>
<h4><?php echo e(get_phrase('Your Verification is Done')); ?></h4>
<h5><?php echo e(get_phrase('Now Explore')); ?></h5>

                    </div>
                </div>
            </div>

        </div> <!-- container end -->
    </main>
    <!-- Main End -->

<?php echo $__env->make('auth.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onesoit.com/public_html/resources/views/dashboard.blade.php ENDPATH**/ ?>