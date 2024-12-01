<?php $__env->startSection('content'); ?>
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href=<?php echo e(route('trang-chu')); ?>>Home</a></li>
				<li class="active">sản phẩm mới nhất</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->
<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
	<!-- ASIDE -->
				<div id="aside" class="col-md-3">

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">SẢN PHẨM KHÁC</h3>
						<!-- widget product -->
						<?php $__currentLoopData = $sp_khac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spkhac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="product product-widget" style="border-bottom: 1px solid #ccc;">
							<div class="product-thumb">
								<img src="source/image/product/<?php echo e($spkhac->image); ?>" alt="">
							</div>
							<div class="product-body">
								<h2 class="product-name"><a href="<?php echo e(route('chitietsanpham',$spkhac->id)); ?>"><?php echo e($spkhac->name); ?></a></h2>
								<h3 class="product-price">
										<?php if($spkhac->promotion_price!=0): ?>
										<span class="product-old-price" style="font-size: 18px;"><?php echo e(number_format($spkhac->promotion_price)); ?> VND</span><br>
										<del class="product-price" style="font-size: 10px;"><?php echo e(number_format($spkhac->unit_price)); ?> VND</del>
										<?php else: ?>
										<span class="product-old-price" style="font-size: 18px;"><?php echo e(number_format($spkhac->unit_price)); ?> VND</span><br><br>
										<?php endif; ?>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<!-- /widget product -->
					</div>
					<!-- /aside widget -->
				</div>
				<!-- /ASIDE -->

	<!-- MAIN -->
				<div id="main" class="col-md-9">
					<!-- store top filter -->
					<!-- /store top filter -->
					<h3 class="aside-title">SẢN PHẨM MỚI NHẤT</h3>
					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
							<?php $__currentLoopData = $sp_new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6" style="height: 500px;">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>New</span>
										</div>
										<button class="main-btn quick-view"><a href="<?php echo e(route('chitietsanpham',$new->id)); ?>"><i class="fa fa-search-plus"></i> view detail</a></button>
										<img src="source/image/product/<?php echo e($new->image); ?>" alt="" height="250px">
									</div>
									<div class="product-body">
										<h3 class="product-price">
										<?php if($new->promotion_price!=0): ?>
										<span class="product-old-price"><?php echo e(number_format($new->promotion_price)); ?> VND</span><br>
										<del class="product-price" style="font-size: 10px;"><?php echo e(number_format($new->unit_price)); ?> VND</del>
										<?php else: ?>
										<span class="product-old-price" style="font-size: 18px;"><?php echo e(number_format($new->unit_price)); ?> VND</span><br><br>
										<?php endif; ?>
									</h3>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
										<h2 class="product-name" style="font-size: 14px;"><a href="<?php echo e(route('chitietsanpham',$new->id)); ?>"><?php echo e($new->name); ?></a></h2>
										<div class="product-btns">
											<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<a href="<?php echo e(route('themgiohang',$new->id)); ?>"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button></a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<!-- /row -->
						<div class="row"><?php echo e($sp_new->links()); ?></div>
					</div>
					<!-- /STORE -->
				</div>
				<!-- /MAIN -->
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>