<?php $__env->startSection('content'); ?>
<div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="<?php echo e(route('trang-chu')); ?>">Trang chủ</a></li>
                            <li class="active"><?php echo e($loai_sp->name); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Banner Area -->
                            <div class="single-banner shop-page-banner">
                                <a href="#">
                                    <img src="images/bg-banner/2.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                            <!-- Li's Banner Area End Here -->
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar mt-30">
                                <div class="shop-bar-inner">
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                            <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                            <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <div class="toolbar-amount">
                                        <span>Showing 1 to 9 of 15</span>
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                                <div class="product-select-box">
                                    <div class="product-short">
                                        <p>Sort By:</p>
                                        <select class="nice-select">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- product-select-box end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            	<div class="row">
                                            		<?php $__currentLoopData = $sp_loai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                	<div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="<?php echo e(route('chitietsanpham',$spl->id)); ?>">
                                                                <img src="images/product/<?php echo e($spl->image); ?>" alt="Li's Product Image">
                                                            </a>
                                                             	<?php if($spl->new==1): ?>
							                                                <span class="sticker" style="background: red;">New</span>
							                                                <?php endif; ?>
							                                                <?php if($spl->promotion_price > 0): ?>
							                                                <span class="sticker">SALE</span>
							                                                <?php endif; ?>
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="<?php echo e(route('danhmucsp',$spl->category->id)); ?>"><?php echo e($spl->category->name); ?></a>
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
                                                                <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$spl->id)); ?>"><?php echo substr($spl['name'],0,25) ?>...</a></h4>
                                                                <div class="price-box">
                                                                    <?php if($spl->promotion_price==0): ?>
						                                                            <span class="new-price"><?php echo e(number_format($spl->unit_price)); ?> đ</span>
						                                                            <?php else: ?>
						                                                            <span class="new-price new-price-2"><?php echo e(number_format($spl->promotion_price)); ?> đ</span>
						                                                            <span class="old-price"><?php echo e(number_format($spl->unit_price)); ?> đ</span>
						                                                        <?php endif; ?>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$spl->id)); ?>">Thêm giỏ hàng</a></li>
                                                                    <li><a href="<?php echo e(route('chitietsanpham',$spl->id)); ?>" title="quick view" class="quick-view-btn"> <i class="fa fa-eye"></i></a></li>
                                                                   
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
                                    <div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-6">   
                                                   <div><?php echo e($sp_loai->links()); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>