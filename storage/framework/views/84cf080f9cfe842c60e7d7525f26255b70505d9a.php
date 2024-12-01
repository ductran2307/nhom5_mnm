<?php $__env->startSection('content'); ?>
        <!--================End Main Header Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text">
                    <h3><?php echo e($loai_sp->name); ?></h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html"><?php echo e($loai_sp->name); ?></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Area =================-->
        <section class="product_area p_100">
            <div class="container">
                <div class="row product_inner_row">
                    <div class="col-lg-9">
                       <!--  <div class="row m0 product_task_bar"> 
                            <div class="product_task_inner"> 
                                <div class="float-left">
                                    <a class="active" href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                    <span>Showing 1 - 10 of 55 results</span>
                                </div>
                               
                            </div>
                        </div> -->
                        <div class="row product_item_inner">
                            <?php $__currentLoopData = $sp_loai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-4 col-6">
                                <div class="cake_feature_item">
                                    <div class="cake_img">
                                        <a href="<?php echo e(route('chitietsanpham',$spl->id)); ?>">
                                            <img src="images/product/<?php echo e($spl->image); ?>" style="max-height: 200px;" alt="">
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
                                       <div><?php echo e($sp_loai->links()); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product_left_sidebar">
                            <form action="<?php echo e(route('search')); ?>" method="get" class="hm-searchbox">
                                <aside class="left_sidebar search_widget">
                                    <div class="input-group">
                                        <input type="text" name="key" class="form-control" placeholder="Enter Search Keywords">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="icon icon-Search"></i></button>
                                        </div>
                                    </div>
                                </aside>
                            </form>
                            <aside class="left_sidebar p_catgories_widget">
                                <div class="p_w_title">
                                    <h3>Danh mục sản phẩm</h3>
                                </div>
                                <ul class="list_style">
                                    <?php $__currentLoopData = $loai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  
                                        <li><a href="<?php echo e(route('loaisanpham',$l->id)); ?>"><?php echo e($l->name); ?></a></li>
                               
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </aside>
                    <!--         <aside class="left_sidebar p_price_widget">
                                <div class="p_w_title">
                                    <h3>Filter By Price</h3>
                                </div>
                                <div class="filter_price">
                                    <div id="slider-range"></div>
                                    <label for="amount">Price range:</label>
                                    <input type="text" id="amount" readonly />
                                    <a href="#">Filter</a>
                                </div>
                            </aside> -->
                            <aside class="left_sidebar p_sale_widget">
                                <div class="p_w_title">
                                    <h3>Sản phẩm mới</h3>
                                </div>
                                <?php $__currentLoopData = $sp_moi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="images/product/<?php echo e($spk->image); ?>" alt="<?php echo e($spk->name); ?>" width="105px" height="95px">
                                    </div>
                                    <div class="media-body">
                                        <a href="<?php echo e(route('chitietsanpham',$spk->id)); ?>"><h4 style="white-space: nowrap;"><?php echo substr($spk['name'],0,15) ?>...</h4></a>
                                        <ul class="list_style">
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        </ul>
                                        <h5>
                                            <?php if($spk->promotion_price==0): ?>
                                                <?php echo e(number_format($spk->unit_price)); ?> đ
                                                <?php else: ?>
                                             <?php echo e(number_format($spk->promotion_price)); ?> đ
                                            <?php endif; ?>
                                        </h5>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Area =================-->
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>