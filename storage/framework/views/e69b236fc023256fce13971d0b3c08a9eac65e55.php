    
    <?php $__env->startSection('content'); ?>
        <section class="error_area">
            <div class="container">
                <div class="error_inner">
                    <div class="error_inner_text">
                        <h3>404</h3>
                        <h4>Oops! That page can’t be found</h4>
                        <h5>Sorry, but the page you are looking for does not existing</h5>
                        <a class="pink_btn" href="index">Go to home page</a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Error Main Area =================-->
        
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>