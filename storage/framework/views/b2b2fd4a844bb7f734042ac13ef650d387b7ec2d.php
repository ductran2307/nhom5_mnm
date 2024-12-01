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
							<div class="col-md-3 col-sm-6 col-xs-6" style="height: 500px;">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>NEW</span>
										</div>
										<button class="main-btn quick-view"><a href="<?php echo e(route('chitietsanpham',$prd->id)); ?>"><i class="fa fa-search-plus"></i> view detail</a></button>
										<img src="source/image/product/<?php echo e($prd->image); ?>" alt="" height="250px">
									</div>
									<div class="product-body">
										<h3 class="product-price">
										<?php if($prd->promotion_price!=0): ?>
										<span class="product-old-price"><?php echo e(number_format($prd->promotion_price)); ?> VND</span><br>
										<del class="product-price" style="font-size: 10px;"><?php echo e(number_format($prd->unit_price)); ?> VND</del>
										<?php else: ?>
										<span class="product-old-price" style="font-size: 18px;"><?php echo e(number_format($prd->unit_price)); ?> VND</span><br><br>
										<?php endif; ?>
									</h3>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
										<h2 class="product-name" style="font-size: 14px;"><a href="<?php echo e(route('chitietsanpham',$prd->id)); ?>"><?php echo e($prd->name); ?></a></h2>
										<div class="product-btns">
											<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<a href="<?php echo e(route('themgiohang',$prd->id)); ?>"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button></a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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