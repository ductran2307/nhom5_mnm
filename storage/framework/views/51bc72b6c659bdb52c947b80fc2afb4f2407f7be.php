<?php $__env->startSection('content'); ?>
        <!--================End Main Header Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text">
                    <h3>Kết quả tìm kiếm</h3>
                    <ul>
                        <li><a href="index">Home</a></li>
                        <li><a href="search">KẾT QUẢ TÌM KIẾM</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Area =================-->
        <section class="product_area p_100">
            <div class="container">
                <div class="row product_inner_row">
                    <div class="col-lg-12">
                        <div class="row m0 product_task_bar"> 
                            <div class="product_task_inner"> 
                                <div class="float-left">
                                    <a class="active" href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                    <span>Showing 1 - 10 of 55 results</span>
                                </div>
                               
                            </div>
                        </div>
                        <div class="row product_item_inner">
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="cake_feature_item">
                                    <div class="cake_img">
                                        <a href="<?php echo e(route('chitietsanpham',$spl->id)); ?>">
                                            <img src="images/product/<?php echo e($spl->image); ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="cake_text">
                                        <h4>
                                             <?php if($spl->promotion_price==0): ?>
                                                <?php echo e(number_format($spl->unit_price)); ?> đ
                                                <?php else: ?>
                                             <?php echo e(number_format($spl->promotion_price)); ?> đ
                                            <?php endif; ?>
                                        </h4>
                                        <a href="<?php echo e(route('chitietsanpham',$spl->id)); ?>">
                                            <h3 style="white-space: nowrap;"><?php echo e($spl->name); ?></h3>
                                        </a>
                                        <a class="pest_btn" href="<?php echo e(route('themgiohang',$spl->id)); ?>">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">   
                                       <div><?php echo e($product->links()); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Area =================-->
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>