<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Tin Tức </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Danh sách</a></li>
        <li class="active">Tin Tức</li>
      </ol>
    </section>
    <br>
			<!-- Main content -->
			<!-- <div class="content-wrapper"> -->
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
                  <!-- /.box-header -->
                  <div class="box-body">
                  		<div class="row">
                  			<div class="col-sm-12">
				<!-- Task manager table -->
				<div class="panel panel-flat" style="width: 100%; border: 1px solid grey;">
					<?php if(session('thongbao')): ?>
	    		<div class="alert alert-success">
	    			<?php echo e(session('thongbao')); ?>

	    		</div>
	    	<?php endif; ?>
					<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tiêu đề</th>
									<th>Tóm tắt</th>
									<th>Nội Dung</th>
									<th>Image</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tintuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($tintuc->id); ?></td>
									<td ><?php echo e(substr($tintuc->title,0,100)); ?>...</td>
									<td><?php echo substr($tintuc['summary'],0,100);?>...</td>
									<td><?php echo substr($tintuc['content'],0,300);?>...</td>
									<td><img src="source/image/news/<?php echo e($tintuc->image); ?>" width="250px" height="150px;"></td>
									<td class="center"><a href="admin/tintuc/edit/<?php echo e($tintuc->id); ?>"><i class="icon icon-pencil"></i> Edit</a></td>
									<td class="center"><a href="admin/tintuc/delete/<?php echo e($tintuc->id); ?>"><i class="icon icon-bin"></i> Delete</a></td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
				</div>
              </div>
              <div class="row">
	      			<!-- <div class="col-sm-5">
	      				<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">showing 1 to 1 of 1 entries</div>
	      			</div> -->
	      			<div class="col-sm-7"><?php echo e($news->links()); ?></div>
               </div>
				<!-- /task manager table -->

			</div>
			<!-- /main content -->

		</div>
	</div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>