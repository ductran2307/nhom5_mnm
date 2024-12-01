<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Sản phẩm </small>
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
									<th>STT</th>
									<th>ID</th>
									<th>Tên</th>
									<!-- <th>Tên Loại</th>
									<th>Tên Danh Mục</th> -->
									<!-- <th>Xuất Xứ</th> -->
									<th>giá gốc</th>
									<th>giá KM</th>
									<th>imge</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr style="border: 1px">
									<td><?php echo e($loop->iteration); ?></td>
									<td><?php echo e($pr->id); ?></td>
									<td><?php echo e($pr->name); ?></td>
									<!-- <td><?php echo e($pr->id_type); ?></td>
									<td><?php echo e($pr->id_category); ?></td> -->
									<!-- <td><?php echo e($pr->origin); ?></td> -->
									<td><?php echo e($pr->unit_price); ?></td>
									<td><?php echo e($pr->promotion_price); ?></td>
									<td><img src="source/image/product/<?php echo e($pr->image); ?>" width="50px" height="50px;"></td>
									<td class="center"><a href="admin/sanpham/edit/<?php echo e($pr->id); ?>"><i class="icon icon-pencil"></i> Edit</a></td>
									<td class="center">
										<form method="post" action="admin/sanpham/huy/<?php echo e($pr->id); ?>" onsubmit="return confirm('bạn có chắc muốn hủy?')">
											<?php echo e(csrf_field()); ?>

											<button class="btn btn-primary" type="submit">Xóa</button>
										</form>
									</td>
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
                  			<div class="col-sm-7"><?php echo e($product->links()); ?></div>
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