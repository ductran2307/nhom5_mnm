<?php $__env->startSection('content'); ?>
 <!-- Begin Slider With Category Menu Area -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Category Menu Area -->
                        <div class="col-lg-3">
                            <!--Category Menu Start-->
                            <div class="category-menu">
                                <div class="category-heading">
                                    <h2 class="categories-toggle"><span>Danh mục</span></h2>
                                </div>
                                <div id="cate-toggle" class="category-menu-list">
                                    <ul>
                                        <?php $__currentLoopData = $loaisp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lsp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="right-menu"><a href="<?php echo e(route('loaisanpham',$lsp->id)); ?>"><?php echo e($lsp->name); ?></a>
                                            <ul class="cat-mega-menu">
                                                <?php $__currentLoopData = $lsp->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="right-menu cat-mega-title"><a href="<?php echo e(route('danhmucsp',$ct->id)); ?>"><?php echo e($ct->name); ?></a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <li class="right-menu" style="background: #fed700"><a href="#">Nhà cung cấp</a>
                                            <ul class="cat-mega-menu">
                                                <?php $__currentLoopData = $nhacc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="right-menu cat-mega-title"><a href="<?php echo e(route('danhmucsphang',$ncc->id)); ?>"><?php echo e($ncc->name); ?></a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Category Menu End-->
                        </div>
                        <!-- Category Menu Area End Here -->
                        <!-- Begin Slider Area -->
                        <div class="col-lg-9">
                            <div class="slider-area pt-sm-30 pt-xs-30">
                                <div class="slider-active owl-carousel">
                                    <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-02 bg-4" style="background-image: url(./<?php echo e($sl->image); ?>); background-size: cover; ">
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Category Menu Area End Here -->
            <!-- Begin Li's Static Banner Area -->
            <div class="li-static-banner pt-20 pt-sm-30 pt-xs-30">
                <div class="container">
                    <div class="row">
                        <?php $__currentLoopData = $hangsx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hsx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-2 col-md-4">
                            <div class="single-banner pb-xs-30">
                                <a href="<?php echo e(route('danhmuchsx',$hsx->id)); ?>">
                                    <img src="images/hangsanxuat/<?php echo e($hsx->image); ?>" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <!-- Li's Static Banner Area End Here -->
              <section class="product-area li-laptop-product Special-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Sản phẩm mới</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="special-product-active owl-carousel">
                                    <?php $__currentLoopData = $new_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="<?php echo e(route('chitietsanpham',$new->id)); ?>">
                                                        <img src="images/product/<?php echo e($new->image); ?>" alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker">NEW</span>
                                                </div>
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$new->id)); ?>"><?php echo substr($new['name'],0,25) ?>...</a></h4>
                                                        <div class="price-box">
                                                            <?php if($new->promotion_price==0): ?>
                                                            <span class="new-price"><?php echo e(number_format($new->unit_price)); ?> VND</span>
                                                            <?php else: ?>
                                                            <span class="new-price new-price-2"><?php echo e(number_format($new->promotion_price)); ?> VND</span>
                                                            <span class="old-price"><?php echo e(number_format($new->unit_price)); ?> VND</span>
                                                            
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="countersection">
                                                            <div class="li-countdown"></div>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$new->id)); ?>">Thêm giỏ hàng</a></li>
                                                           <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                            <li><a href="<?php echo e(route('chitietsanpham',$new->id)); ?>" title="xem chi tiết" class="quick-view-btn"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Begin Li's Special Product Area -->
            <section class="product-area li-laptop-product Special-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Sản phẩm khuyến mãi</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="special-product-active owl-carousel">
                                    <?php $__currentLoopData = $sanpham_khuyenmai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="<?php echo e(route('chitietsanpham',$spkm->id)); ?>">
                                                        <img src="images/product/<?php echo e($spkm->image); ?>" alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker">SALE</span>
                                                </div>
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$spkm->id)); ?>"><?php echo substr($spkm['name'],0,25) ?>...</a></h4>
                                                        <div class="price-box">
                                                            <?php if($spkm->promotion_price==0): ?>
                                                            <span class="new-price"><?php echo e(number_format($spkm->unit_price)); ?> VND</span>
                                                            <?php else: ?>
                                                            <span class="new-price new-price-2"><?php echo e(number_format($spkm->promotion_price)); ?> VND</span>
                                                            <span class="old-price"><?php echo e(number_format($spkm->unit_price)); ?> VND</span>
                                                            
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="countersection">
                                                            <div class="li-countdown"></div>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$spkm->id)); ?>">Thêm giỏ hàng</a></li>
                                                           <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                            <li><a href="<?php echo e(route('chitietsanpham',$spkm->id)); ?>" title="xem chi tiết" class="quick-view-btn"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Special Product Area End Here -->
            <!-- Begin Li's Laptops Product | Home V2 Area -->
            <section class="product-area li-laptop-product li-laptop-product-2 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>CPU - Bộ vi xử lý</span>
                                </h2>
                            </div>
                            <div class="li-banner-2 pt-15">
                                <div class="row">
                                    <!-- Begin Single Banner Area -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-banner">
                                            <a href="<?php echo e(route('danhmucsp',38)); ?>">
                                                <img src="slide8.jpg" alt="Li's Static Banner">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Banner Area End Here -->
                                    <!-- Begin Single Banner Area -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-banner pt-xs-30">
                                            <a href="<?php echo e(route('danhmucsp',38)); ?>">
                                                <img src="slide9.png" alt="Li's Static Banner">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Banner Area End Here -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php $__currentLoopData = $cpuvxl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>">
                                                    <img src="images/product/<?php echo e($lt->image); ?>" alt="Li's Product Image">
                                                </a>
                                                <?php if($lt->new==1): ?>
                                                <span class="sticker" style="background: red;">New</span>
                                                <?php endif; ?>
                                                <?php if($lt->promotion_price > 0): ?>
                                                <span class="sticker">SALE</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="<?php echo e(route('danhmucsp',$lt->category->id)); ?>"><?php echo e($lt->category->name); ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$lt->id)); ?>"><?php echo substr($lt['name'],0,25) ?>...</a></h4>
                                                    <div class="price-box">
                                                        <?php if($lt->promotion_price==0): ?>
                                                            <span class="new-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                            <?php else: ?>
                                                            <span class="new-price new-price-2"><?php echo e(number_format($lt->promotion_price)); ?> đ</span>
                                                            <span class="old-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                               <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$lt->id)); ?>">Thêm giỏ hàng</a></li>
                                                       <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                        <li><a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>" title="xem chi tiết"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptops Product | Home V2 Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            <section class="product-area li-laptop-product li-tv-audio-product-2 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Mainboard - Bo mạch chủ</span>
                                </h2>
                            </div>
                            <div class="li-banner-2 pt-15">
                                <div class="row">
                                    <!-- Begin Single Banner Area -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-banner">
                                            <a href="<?php echo e(route('danhmucsp',39)); ?>">
                                                <img src="slide8.jpg" alt="Li's Static Banner">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Banner Area End Here -->
                                    <!-- Begin Single Banner Area -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-banner pt-xs-30">
                                            <a href="<?php echo e(route('danhmucsp',39)); ?>">
                                                <img src="slide9.png" alt="Li's Static Banner">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Banner Area End Here -->
                                </div>
                            </div>
                            <div class="row">
                                 <div class="product-active owl-carousel">
                                    <?php $__currentLoopData = $mainboard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>">
                                                    <img src="images/product/<?php echo e($lt->image); ?>" alt="Li's Product Image">
                                                </a>
                                                <?php if($lt->new==1): ?>
                                                <span class="sticker" style="background: red;">New</span>
                                                <?php endif; ?>
                                                <?php if($lt->promotion_price > 0): ?>
                                                <span class="sticker">SALE</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                             <a href="<?php echo e(route('danhmucsp',$lt->category->id)); ?>"><?php echo e($lt->category->name); ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$lt->id)); ?>"><?php echo substr($lt['name'],0,25) ?>...</a></h4>
                                                    <div class="price-box">
                                                        <?php if($lt->promotion_price==0): ?>
                                                            <span class="new-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                            <?php else: ?>
                                                            <span class="new-price new-price-2"><?php echo e(number_format($lt->promotion_price)); ?> đ</span>
                                                            <span class="old-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                               <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$lt->id)); ?>">Thêm giỏ hàng</a></li>
                                                       <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                        <li><a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>" title="xem chi tiết"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            <section class="product-area li-laptop-product li-tv-audio-product-2 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>RAM - Bộ nhớ</span>
                                </h2>
                            </div>
                            <div class="li-banner-2 pt-15">
                                <div class="row">
                                    <!-- Begin Single Banner Area -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-banner">
                                            <a href="<?php echo e(route('danhmucsp',40)); ?>">
                                                <img src="slide10.jpg" alt="Li's Static Banner">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Banner Area End Here -->
                                    <!-- Begin Single Banner Area -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-banner pt-xs-30">
                                            <a href="<?php echo e(route('danhmucsp',40)); ?>">
                                                <img src="slide11.jpg" alt="Li's Static Banner">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Banner Area End Here -->
                                </div>
                            </div>
                            <div class="row">
                                 <div class="product-active owl-carousel">
                                    <?php $__currentLoopData = $ram; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>">
                                                    <img src="images/product/<?php echo e($lt->image); ?>" alt="Li's Product Image">
                                                </a>
                                                <?php if($lt->new==1): ?>
                                                <span class="sticker" style="background: red;">New</span>
                                                <?php endif; ?>
                                                <?php if($lt->promotion_price > 0): ?>
                                                <span class="sticker">SALE</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                             <a href="<?php echo e(route('danhmucsp',$lt->category->id)); ?>"><?php echo e($lt->category->name); ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$lt->id)); ?>"><?php echo substr($lt['name'],0,25) ?>...</a></h4>
                                                    <div class="price-box">
                                                        <?php if($lt->promotion_price==0): ?>
                                                            <span class="new-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                            <?php else: ?>
                                                            <span class="new-price new-price-2"><?php echo e(number_format($lt->promotion_price)); ?> đ</span>
                                                            <span class="old-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                               <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$lt->id)); ?>">Thêm giỏ hàng</a></li>
                                                       <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                        <li><a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>" title="xem chi tiết"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's Smart Phone Product Area -->
            <section class="product-area li-laptop-product li-smart-phone-product-2 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                         <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>VGA - Card màn hình</span>
                                </h2>
                            </div>
                            <div class="li-banner-2 pt-15">
                                <div class="row">
                                    <!-- Begin Single Banner Area -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-banner">
                                            <a href="hihi">
                                                <img src="slide8.jpg" alt="Li's Static Banner">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Banner Area End Here -->
                                    <!-- Begin Single Banner Area -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-banner pt-xs-30">
                                            <a href="hihi">
                                                <img src="slide9.png" alt="Li's Static Banner">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Banner Area End Here -->
                                </div>
                            </div>
                            <div class="row">
                                 <div class="product-active owl-carousel">
                                    <?php $__currentLoopData = $card; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>">
                                                    <img src="images/product/<?php echo e($lt->image); ?>" alt="Li's Product Image">
                                                </a>
                                                <?php if($lt->new==1): ?>
                                                <span class="sticker" style="background: red;">New</span>
                                                <?php endif; ?>
                                                <?php if($lt->promotion_price > 0): ?>
                                                <span class="sticker">SALE</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                             <a href="<?php echo e(route('danhmucsp',$lt->category->id)); ?>"><?php echo e($lt->category->name); ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$lt->id)); ?>"><?php echo substr($lt['name'],0,25) ?>...</a></h4>
                                                    <div class="price-box">
                                                        <?php if($lt->promotion_price==0): ?>
                                                            <span class="new-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                            <?php else: ?>
                                                            <span class="new-price new-price-2"><?php echo e(number_format($lt->promotion_price)); ?> đ</span>
                                                            <span class="old-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                               <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$lt->id)); ?>">Thêm giỏ hàng</a></li>
                                                       <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                        <li><a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>" title="xem chi tiết"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Smart Phone Product Area End Here -->
            <!-- Begin Li's Static Home Area -->
            <div class="li-static-home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Static Home Image Area -->
                            <div class="li-static-home-image" style="background-image: url(slide12.png)"></div>
                            <!-- Li's Static Home Image Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Li's Trending Product | Home V2 Area -->
            <section class="product-area li-trending-product li-trending-product-2 pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Tab Menu Area -->
                        <div class="col-lg-12">
                            <div class="li-product-tab li-trending-product-tab">
                                <h2>
                                    <span>Sản phẩm khác</span>
                                </h2>
                                <ul class="nav li-product-menu li-trending-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#home1"><span>PSU -Nguồn</span></a></li>
                                   <li><a data-toggle="tab" href="#home2"><span>Case máy tính</span></a></li>
                                   <li><a data-toggle="tab" href="#home3"><span>Tản nhiệt</span></a></li>
                                   <li><a data-toggle="tab" href="#home4"><span>Ổ cứng</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                            <div class="tab-content li-tab-content li-trending-product-content">
                                <div id="home1" class="tab-pane show fade in active">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                            <?php $__currentLoopData = $nguon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>">
                                                            <img src="images/product/<?php echo e($lt->image); ?>" alt="Li's Product Image">
                                                        </a>
                                                        <?php if($lt->new==1): ?>
                                                        <span class="sticker" style="background: red;">New</span>
                                                        <?php endif; ?>
                                                        <?php if($lt->promotion_price > 0): ?>
                                                        <span class="sticker">SALE</span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                     <a href="<?php echo e(route('danhmucsp',$lt->category->id)); ?>"><?php echo e($lt->category->name); ?></a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$lt->id)); ?>"><?php echo substr($lt['name'],0,25) ?>...</a></h4>
                                                            <div class="price-box">
                                                                <?php if($lt->promotion_price==0): ?>
                                                                    <span class="new-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                                    <?php else: ?>
                                                                    <span class="new-price new-price-2"><?php echo e(number_format($lt->promotion_price)); ?> đ</span>
                                                                    <span class="old-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                       <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$lt->id)); ?>">Thêm giỏ hàng</a></li>
                                                               <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                                <li><a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>" title="xem chi tiết"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="home2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                            <?php $__currentLoopData = $case; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>">
                                                            <img src="images/product/<?php echo e($lt->image); ?>" alt="Li's Product Image">
                                                        </a>
                                                        <?php if($lt->new==1): ?>
                                                        <span class="sticker" style="background: red;">New</span>
                                                        <?php endif; ?>
                                                        <?php if($lt->promotion_price > 0): ?>
                                                        <span class="sticker">SALE</span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                     <a href="<?php echo e(route('danhmucsp',$lt->category->id)); ?>"><?php echo e($lt->category->name); ?></a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$lt->id)); ?>"><?php echo substr($lt['name'],0,25) ?>...</a></h4>
                                                            <div class="price-box">
                                                                <?php if($lt->promotion_price==0): ?>
                                                                    <span class="new-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                                    <?php else: ?>
                                                                    <span class="new-price new-price-2"><?php echo e(number_format($lt->promotion_price)); ?> đ</span>
                                                                    <span class="old-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                       <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$lt->id)); ?>">Thêm giỏ hàng</a></li>
                                                               <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                                <li><a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>" title="xem chi tiết"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="home3" class="tab-pane fade">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                           <?php $__currentLoopData = $tannhiet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>">
                                                            <img src="images/product/<?php echo e($lt->image); ?>" alt="Li's Product Image">
                                                        </a>
                                                        <?php if($lt->new==1): ?>
                                                        <span class="sticker" style="background: red;">New</span>
                                                        <?php endif; ?>
                                                        <?php if($lt->promotion_price > 0): ?>
                                                        <span class="sticker">SALE</span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                     <a href="<?php echo e(route('danhmucsp',$lt->category->id)); ?>"><?php echo e($lt->category->name); ?></a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$lt->id)); ?>"><?php echo substr($lt['name'],0,25) ?>...</a></h4>
                                                            <div class="price-box">
                                                                <?php if($lt->promotion_price==0): ?>
                                                                    <span class="new-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                                    <?php else: ?>
                                                                    <span class="new-price new-price-2"><?php echo e(number_format($lt->promotion_price)); ?> đ</span>
                                                                    <span class="old-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                       <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$lt->id)); ?>">Thêm giỏ hàng</a></li>
                                                               <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                                <li><a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>" title="xem chi tiết"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="home4" class="tab-pane fade">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                           <?php $__currentLoopData = $ocung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>">
                                                            <img src="images/product/<?php echo e($lt->image); ?>" alt="Li's Product Image">
                                                        </a>
                                                        <?php if($lt->new==1): ?>
                                                        <span class="sticker" style="background: red;">New</span>
                                                        <?php endif; ?>
                                                        <?php if($lt->promotion_price > 0): ?>
                                                        <span class="sticker">SALE</span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                     <a href="<?php echo e(route('danhmucsp',$lt->category->id)); ?>"><?php echo e($lt->category->name); ?></a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$lt->id)); ?>"><?php echo substr($lt['name'],0,25) ?>...</a></h4>
                                                            <div class="price-box">
                                                                <?php if($lt->promotion_price==0): ?>
                                                                    <span class="new-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                                    <?php else: ?>
                                                                    <span class="new-price new-price-2"><?php echo e(number_format($lt->promotion_price)); ?> đ</span>
                                                                    <span class="old-price"><?php echo e(number_format($lt->unit_price)); ?> đ</span>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                       <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$lt->id)); ?>">Thêm giỏ hàng</a></li>
                                                               <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                                <li><a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>" title="xem chi tiết"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Menu Content Area End Here -->
                        </div>
                        <!-- Tab Menu Area End Here -->
                    </div>
                </div>
            </section>
         <style type="text/css">
             .right-menu.cat-mega-title{
                width: 50%!important;
             }
         </style>
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>