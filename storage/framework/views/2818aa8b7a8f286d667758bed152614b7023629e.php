<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Danh mục sản phẩm </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
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
                  		</div>
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
												<th>Tên Danh Mục</th>
												<th>Tên Loại Sản Phẩm</th>
												<th>Mô Tả</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>
											<?php $__currentLoopData = $loaisp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lsp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e($lsp->id); ?></td>
												<td><?php echo e($lsp->name); ?></td>
												<td><?php echo e($lsp->product_type->name); ?></td>
												<td><?php echo e($lsp->description); ?></td>
												<td class="center"><a href="admin/loaisp/edit/<?php echo e($lsp->id); ?>"><i class="icon icon-pencil"></i> Edit</a></td>
												<td class="center"><a href="admin/loaisp/delete/<?php echo e($lsp->id); ?>"><i class="icon icon-bin"></i> Delete</a></td>
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
                  			<div class="col-sm-7"><?php echo e($loaisp->links()); ?></div>
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