 
<?php $__env->startSection('content'); ?>
<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href=<?php echo e(route('trang-chu')); ?>>Home</a></li>
				<li class="active"> / Tin Tức</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- MAIN -->
				<div id="main" class="col-md-8">
					<!-- store top filter -->
					<!-- /store top filter -->
					<h3 class="aside-title">Tin Tức</h3>
					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row" style="margin-left: 5px; font-family: 'Quicksand', sans-serif;">
							<?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="news">
									<a href="<?php echo e(route('chitiettin',$news->id)); ?>"><h4><?php echo $news['title'] ?></h4></a>
									<a href="<?php echo e(route('chitiettin',$news->id)); ?>"><img src="images/tintuc/<?php echo e($news->image); ?>" width="250" height="150px;"></a>
									<?php echo substr($news['summary'],0,500); ?>
								</div>
								<hr style="margin: 0">
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<!-- /row -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>