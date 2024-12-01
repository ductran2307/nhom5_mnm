
   <!-- Begin Header Area -->
            <header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <?php if(Auth::check()): ?>
                                            <div class="ht-setting-trigger"><span><?php echo e(Auth::user()->full_name); ?></span></div>
                                            <div class="setting ht-setting">
                                                <?php if(Auth::check()): ?>
                                                    <?php if(Auth::user()->level==1): ?>
                                                    <ul class="ht-setting-list">
                                                        <li><a href="<?php echo e(route('trangchu')); ?>">Admin</a></li>
                                                        <li><a href="<?php echo e(route('logout')); ?>">Đăng xuất</a></li>
                                                    </ul>
                                                    <?php else: ?>
                                                    <ul class="ht-setting-list">
                                                        <li><a href="<?php echo e(route('logout')); ?>">Đăng xuất</a></li>
                                                    </ul>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                            <?php else: ?>
                                             <a href="<?php echo e(route('login')); ?>" class="text-uppercase" style="font-size: 12px;">Đăng Nhập</a> / <a href="<?php echo e(route('sigin')); ?>" class="text-uppercase">Đăng Ký</a>
                                            <?php endif; ?>
                                            
                                        </li>
                                        <!-- Setting Area End Here -->
                                        <!-- Begin Currency Area -->
                                        <li>
                                            <span class="currency-selector-wrapper">Currency :</span>
                                            <div class="ht-currency-trigger"><span>USD $</span></div>
                                            <div class="currency ht-currency">
                                                <ul class="ht-setting-list">
                                                    <li><a href="#">EUR €</a></li>
                                                    <li class="active"><a href="#">USD $</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Currency Area End Here -->
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class="language-selector-wrapper">Language :</span>
                                            <div class="ht-language-trigger"><span>English</span></div>
                                            <div class="language ht-language">
                                                <ul class="ht-setting-list">
                                                    <li class="active"><a href="#"><img src="source/assets/images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                                    <li><a href="#"><img src="source/assets/images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="<?php echo e(route('trang-chu')); ?>">
                                        <img src="source/assets/images/menu/logo/1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="<?php echo e(route('search')); ?>" method="get" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                        <option value="0">Tất cả</option>                                                       
                                        <option value="1">Theo tên</option>                           
                                        <option value="2">Theo giá</option>
                                    </select>
                                    <input type="text" name="key" placeholder="Bạn muốn tìm gì nhỉ :))  ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <!-- <li class="hm-wishlist">
                                            <a href="wishlist.html">
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li> -->
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                
                                                 <?php if(Session::has('cart')): ?>
                                                <span class="item-text"><?php echo e(number_format(Session('cart')->totalPrice)); ?>

                                                    <span class="cart-item-count">
                                                        <?php if(Session::has('cart')): ?>
                                                            <?php echo e(Session('cart')->totalQty); ?>

                                                        <?php else: ?> 0
                                                        <?php endif; ?>
                                                    </span>
                                                </span>
                                                <?php endif; ?> 
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <?php if(Session::has('cart')): ?>
                                                    <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a href="<?php echo e(route('chitietsanpham',$product['item']['id'])); ?>" class="minicart-product-image">
                                                            <img src="images/product/<?php echo e($product['item']['image']); ?>" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="<?php echo e(route('chitietsanpham',$product['item']['id'])); ?>"><?php echo e($product['item']['name']); ?></a></h6>
                                                            <span><?php if($product['item']['promotion_price']==0): ?>
                                                    <?php echo e(number_format($product['item']['unit_price'])); ?>

                                                <?php else: ?> <?php echo e(number_format($product['item']['promotion_price'])); ?><?php endif; ?> x <?php echo e($product['qty']); ?></span>
                                                        </div>
                                                        <a href="<?php echo e(route('xoagiohang',$product['item']['id'])); ?>" class="close">
                                                            <i class="fa fa-close"></i>
                                                        </a>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </ul>
                                                <?php if(Session::has('cart')): ?>
                                                <p class="minicart-total">Tổng tiền: <span><?php echo e(number_format(Session('cart')->totalPrice)); ?> VNĐ</span></p>
                                                <div class="minicart-button">
                                                    <a href="http://localhost/lkdt/public/dat-hang" class="li-button li-button-fullwidth li-button-sm">
                                                        <span>Đặt hàng</span>
                                                    </a>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <style type="text/css">ul.menu-main li a:after{display:none;}</style>
                                <div class="hb-menu hb-menu-2 d-xl-block">
                                    <nav>
                                        <ul class="menu-main">
                                            <li><a href="<?php echo e(route('trang-chu')); ?>">Trang chủ</a></li>
                                            <li><a href="<?php echo e(route('lienhe')); ?>">Liên hệ</a></li>
                                            <li><a href="<?php echo e(route('gioithieu')); ?>">Giới thiệu</a></li>
                                            <li><a href="<?php echo e(route('tintuc')); ?>">Tin tức</a></li>
                                            <!-- Begin Header Bottom Menu Information Area -->
                                            <li class="hb-info f-right p-0 d-sm-none d-lg-block">
                                                <span>14/79 Dương Quảng Hàm, Cầu Giấy, Hà Nội</span>
                                            </li>
                                            <!-- Header Bottom Menu Information Area End Here -->
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->