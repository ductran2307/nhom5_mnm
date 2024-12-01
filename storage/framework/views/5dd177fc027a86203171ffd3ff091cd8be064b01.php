<?php $__env->startSection('content'); ?>
 <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="source/assets/img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="source/assets/img/home-slider/slider-1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    </li>
                    <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="source/assets/img/home-slider/slider-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="source/assets/img/home-slider/slider-2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                        <!-- LAYERS -->
                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_bakery_area">
            <div class="container">
                <div class="welcome_bakery_inner p_100">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="main_title">
                                <h2>BÁNH NGỌT</h2>
                                <p>Còn gì tuyệt vời hơn khi kết hợp thưởng thức đồ uống của bạn cùng với những chiếc bánh ngọt ngon tinh tế được làm thủ công ngay tại bếp bánh của Highlands Coffee.</p>
                            </div>
                            <div class="welcome_left_text">
                                <p> Những chiếc bánh của chúng tôi mang hương vị đặc trưng của ẩm thực Việt và còn là sự Tận Tâm, gửi gắm mà chúng tôi dành cho Quý khách hàng.</p>
                                <a class="pink_btn" href="<?php echo e(route('loaisanpham',36)); ?>">Khám phá ngay</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="welcome_img">
                                <img class="img-fluid" src="source/assets/img/cake-feature/welcome-right.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cake_feature_inner">
                    <div class="main_title">
                        <h2>Bánh nổi bật của chúng tôi</h2>
                        <h5> Lựa chọn và thưởng thức</h5>
                    </div>
                    <div class="cake_feature_slider owl-carousel">
                        <?php $__currentLoopData = $spnoibat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spnb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <a href="<?php echo e(route('chitietsanpham',$spnb->id)); ?>">
                                        <img src="images/product/<?php echo e($spnb->image); ?>" alt="<?php echo e($spnb->name); ?>">
                                    </a>
                                </div>
                                <div class="cake_text">
                                    <?php if($spnb->promotion_price==0): ?>
                                    <h4><?php echo e(number_format($spnb->unit_price)); ?> đ</h4>
                                    <?php else: ?>
                                    <h4><?php echo e(number_format($spnb->promotion_price)); ?> đ</h4>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('chitietsanpham',$spnb->id)); ?>"><h3 style="white-space: nowrap;"><?php echo e($spnb->name); ?></h3></a>
                                    <a class="pest_btn" href="<?php echo e(route('themgiohang',$spnb->id)); ?>">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Welcome Area =================-->
        
        <!--================Special Recipe Area =================-->
        <section class="special_recipe_area">
            <div class="container">
                <div class="special_recipe_slider owl-carousel">
                    <?php $__currentLoopData = $danhmuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <div class="media">
                            <div class="d-flex">
                                <img src="images/product/<?php echo e($dm->image); ?>" alt="">
                            </div>
                            <div class="media-body">
                                <h4><?php echo e($dm->name); ?></h4>
                                <p><?php echo e($dm->description); ?></p>
                                <a class="w_view_btn" href="<?php echo e(route('loaisanpham',$dm->id)); ?>">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <!--================End Special Recipe Area =================-->
        
        <!--================Service Area =================-->
        <section class="service_area">
            <div class="container">
                <div class="single_w_title">
                    <h2>Dịch vụ chúng tôi cung cấp</h2>
                </div>
                <div class="row service_inner">
                    <div class="col-lg-4 col-6">
                        <div class="service_item">
                            <i class="flaticon-food-2"></i>
                            <h4>Bánh kỷ niệm</h4>
                            <p>Những chiếc bánh kem cưới hay bánh gato cưới kỷ niệm ngày cưới đều được tạo hình ngọt ngào và cực kỳ tinh tế để ngày trọng đại của bạn thêm ngọt ngào và nhiều ý nghĩa.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="service_item">
                            <i class="flaticon-food-1"></i>
                            <h4>Bánh sinh nhật</h4>
                            <p>Những mẫu bánh sinh nhật đẹp nhất thường được tạo hình phong phú và hấp dẫn, với những phác họa vô cùng độc đáo, tinh tế từ hoa và bánh sinh nhật đẹp kết hợp với nhau.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="service_item">
                            <i class="flaticon-food"></i>
                            <h4>Bánh sự kiện</h4>
                            <p>Trong cuộc đời mỗi người đều trải qua những khoảnh khắc, những sự kiện khác nhau, mỗi một cột mốc là một dấu ấn kỷ niệm ta có mặt trên thế giới này.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Service Area =================-->
        
        <!--================Discover Menu Area =================-->
        <section class="discover_menu_area">
            <div class="discover_menu_inner">
                <div class="container">
                    <div class="main_title">
                        <h2>Khám phá menu chúng tôi</h2>
                        <h5>Cùng thưởng thức các loại bánh ngọt có trong thực đơn</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="discover_item_inner">
                                <?php $stt=1 ?>
                                <?php $__currentLoopData = $listmenu1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lm1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="discover_item">
                                    <h4><?php echo e($lm1->name); ?></h4>
                                    <p><?php echo e($lm1->description); ?><span> (<?php echo $stt++ ?>)</span></p>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="discover_item_inner">
                                <?php $stt=7 ?>
                                <?php $__currentLoopData = $listmenu2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lm1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="discover_item">
                                    <h4><?php echo e($lm1->name); ?></h4>
                                    <p><?php echo e($lm1->description); ?><span>(<?php echo $stt++ ?>)</span></p>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Discover Menu Area =================-->
        
        
        <!--================Latest News Area =================-->
        <section class="latest_news_area p_100">
            <div class="container">
                <div class="main_title">
                    <h2>Blog mới nhất</h2>
                    <h5>Chia sẻ cách làm bánh ngọt </h5>
                </div>
                <div class="row latest_news_inner">
                    <div class="col-lg-4 col-md-6">
                        <div class="l_news_image">
                            <div class="l_news_img">
                                <img class="img-fluid" src="images/tintuc/<?php echo e($blogfirst->image); ?>" alt="">
                            </div>
                            <div class="l_news_hover">
                                <a href="<?php echo e(route('chitiettin',$blogfirst->id)); ?>"><h5><?php echo e($blogfirst->created_at); ?></h5></a>
                                <a href="<?php echo e(route('chitiettin',$blogfirst->id)); ?>"><h4><?php echo $blogfirst['title'] ?></h4></a>
                            </div>
                        </div>
                    </div>
                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="l_news_item">
                            <div class="l_news_img">
                                <img class="img-fluid" src="images/tintuc/<?php echo e($bl->image); ?>" alt="">
                            </div>
                            <div class="l_news_text">
                                <a href="<?php echo e(route('chitiettin',$bl->id)); ?>"><h5><?php echo e($bl->created_at); ?></h5></a>
                                <a href="<?php echo e(route('chitiettin',$bl->id)); ?>"><h4><?php echo $bl['title'] ?></h4></a>
                                <p><?php echo substr($bl['summary'],0,255) ?>...</p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <!--================End Latest News Area =================-->
        
      
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>