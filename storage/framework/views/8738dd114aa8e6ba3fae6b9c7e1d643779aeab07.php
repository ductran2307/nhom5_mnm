<?php $__env->startSection('content'); ?>
<div class="section">
<div class="container">
	<div class="row">
		<div id="main" class="col-md-12">
					<!-- store top filter -->
					<!-- /store top filter -->
					<h3 class="aside-title">KẾT QUẢ TÌM KIẾM</h3>
					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
							<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<!-- Product Single -->
							<div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo e(route('chitietsanpham',$prd->id)); ?>">
                                                    <img src="images/product/<?php echo e($prd->image); ?>" alt="Li's Product Image">
                                                </a>
                                                <?php if($prd->new==1): ?>
                                                <span class="sticker" style="background: red;">New</span>
                                                <?php endif; ?>
                                                <?php if($prd->promotion_price > 0): ?>
                                                <span class="sticker">SALE</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="<?php echo e(route('danhmucsp',$prd->category->id)); ?>"><?php echo e($prd->category->name); ?></a>
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
                                                    <h4><a class="product_name" href="<?php echo e(route('chitietsanpham',$prd->id)); ?>"><?php echo substr($prd['name'],0,25) ?>...</a></h4>
                                                    <div class="price-box">
                                                        <?php if($prd->promotion_price==0): ?>
                                                            <span class="new-price"><?php echo e(number_format($prd->unit_price)); ?> đ</span>
                                                            <?php else: ?>
                                                            <span class="new-price new-price-2"><?php echo e(number_format($prd->promotion_price)); ?> đ</span>
                                                            <span class="old-price"><?php echo e(number_format($prd->unit_price)); ?> đ</span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                               <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="<?php echo e(route('themgiohang',$prd->id)); ?>">Thêm giỏ hàng</a></li>
                                                       <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                        <li><a href="<?php echo e(route('chitietsanpham',$prd->id)); ?>" title="xem chi tiết"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
							<!-- /Product Single -->
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-6">   
                                                   <div><?php echo e($product->links()); ?></div>
                                            </div>
                                        </div>
                                    </div>
						<!-- /row -->
					</div>
					<!-- /STORE -->
				</div>
	</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>