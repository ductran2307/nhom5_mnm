<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Slide</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> silde</a></li>
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
                  	<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  		<!-- <div class="row">
                  			<div class="col-sm-6">
                  				<div class="dataTables_length" id="example1_length">
                  					<label>show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                  						<option value="10">10</option>
                  						<option value="15">15</option>
                  						<option value="20">20</option>
                  					</select> entries
                  				</label>
                  				</div>
                  			</div> -->
                  			<div class="col-sm-6">
                  				<div id="example1_filter" class="dataTables_filter">
                  					<label>Search
                  						<input type="Search" class="form-control input-sm" name="" placeholder aria-controls="example1">
                  					</label>
                  				</div>
                  			</div>
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
									<th>Name</th>
									<th>Link</th>
									<th>Image</th>
									<th>Mô Tả</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
								<tr>
									<td><?php echo e($sl->id); ?></td>
									<td><?php echo e($sl->name); ?></td>
									<td><?php echo e($sl->link); ?></td>
									<td><img src="source/image/slide/<?php echo e($sl->image); ?>" width="100px" height="50px;"></td>
									<td><?php echo e($sl->description); ?></td>
									<td class="center"><a href="admin/slide/edit/<?php echo e($sl->id); ?>"><i class="icon icon-pencil"></i> Edit</a></td>
									<td class="center"><a href="admin/slide/delete/<?php echo e($sl->id); ?>"><i class="icon icon-bin"></i> Delete</a></td>
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
	      			<div class="col-sm-7"><?php echo e($slide->links()); ?></div>
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