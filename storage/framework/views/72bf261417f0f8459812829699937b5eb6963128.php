<?php $__env->startSection('content'); ?>
<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="http://localhost/noithat/public/index">Home</a></li>
				<li class="active">Tin Tức</li>
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
						<div class="row">
							<?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="news" style="height:700px; ">
									<a href="<?php echo e(route('chitiettin',$news->id)); ?>"><h4><?php echo e($news->title); ?></h4></a>
									<a href="<?php echo e(route('chitiettin',$news->id)); ?>"><img src="source/image/news/<?php echo e($news->image); ?>" width="798px" height="548px;"></a>
									<h1></h1>
									<?php echo substr($news['summary'],0,500); ?><a href="<?php echo e(route('chitiettin',$news->id)); ?>"><h4 style="float: right; border: 1px solid #EC870E; background: #EC870E; color: white; padding: 5px;">Xem Chi Tiết</h4></a>
								</div><hr>
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