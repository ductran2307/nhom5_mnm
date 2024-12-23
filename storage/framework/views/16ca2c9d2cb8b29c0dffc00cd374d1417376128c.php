<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Người dùng</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> user</a></li>
        <li class="active">danh sách</li>
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
									<th>Full Name</th>
									<th>Email</th>
									<th>Số điện thoại</th>
									<th>Địa Chỉ</th>
									<th>Quyền</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
								<tr>
									<td><?php echo e($us->id); ?></td>
									<td><?php echo e($us->full_name); ?></td>
									<td><?php echo e($us->email); ?></td>
									<td><?php echo e($us->phone); ?></td>
									<td><?php echo e($us->address); ?></td>
									<td>
										<?php if($us->level == 1): ?>
										<?php echo e("Admin"); ?>

										<?php else: ?>
										<?php echo e("người dùng thường"); ?>

										<?php endif; ?>
									</td>
									<td class="center"><a href="admin/user/edit/<?php echo e($us->id); ?>"><i class="icon icon-pencil"></i> Edit</a></td>
									<td class="center"><a href="admin/user/delete/<?php echo e($us->id); ?>"><i class="icon icon-bin"></i> Delete</a></td>
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
	      			<div class="col-sm-7"><?php echo e($user->links()); ?></div>
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