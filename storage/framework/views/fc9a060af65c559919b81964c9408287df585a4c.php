<?php $__env->startSection('content'); ?>
<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href=<?php echo e(route('trang-chu')); ?>>Home</a></li>
				<li class="active">Chi Tiết Tin Tức</li>
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
				<div id="main" class="col-md-7">
					<!-- store top filter -->
					<!-- /store top filter -->
					<h3 class="aside-title">Tin Tức</h3>
					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row" style="margin-left: 5px;font-family: 'Quicksand', sans-serif;">
								<div class="news" style="height: ">
									<a href=""><h4><?php echo $tintuc['title'] ?></h4></a>
									<b><?php echo $tintuc['summary']; ?></b><br>
									<?php echo $tintuc['content']; ?><!-- <?php echo e($tintuc->content); ?> -->
									<br>
								</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /MAIN -->
			<!-- 	<div class="col-md-4" style="margin-left: 50px;">
					<h3 class="aside-title">Tin Tức Khác</h3>
					<div id="store">
						<!-- row -->
						<!-- <div class="row">
							<ul style="list-style-type: disc;">
								<?php $__currentLoopData = $tintuc_khac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ttk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<a href="<?php echo e(route('chitiettin',$ttk->id)); ?>"><li><?php echo e($ttk->title); ?></li></a><br>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div> -->
						<!-- /row -->
					</div>
				</div> -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>