<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Đơn hàng đang chờ xử lý</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Đơn hàng đang chờ xử lý</a></li>
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
									<th>Tên khách hàng</th>
									<th>Ngày đặt hàng</th>
									<th>Tổng tiền</th>
									<th>Hình thức thanh toán</th>
									<th>Ghi chú</th>
									<th>Trạng thái</th>
									<th>Xử lý</th>
									<th>Hủy</th>
									<th>Chi tiết</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $bill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
								<tr>
									<td><?php echo e($bi->id); ?></td>
									<td><?php echo e($bi->customer['name']); ?></td>
									<td><?php echo e($bi->date_order); ?></td>
									<td><?php echo e($bi->total); ?></td>
									<td><?php echo e($bi->payment); ?></td>
									<td><?php echo e($bi->note); ?></td>
									<td>Đang chờ xử lý</td>
									<td class="center">
										<form method="post" action="admin/bill/ban/<?php echo e($bi->id); ?>" onsubmit="return confirm('đã giao hàng')">
											<?php echo e(csrf_field()); ?>

											<button class="btn btn-primary" type="submit">Đã Giao</button>
										</form>
										
									</td>
									<td class="center">
										<form method="post" action="admin/bill/huy/<?php echo e($bi->id); ?>" onsubmit="return confirm('bạn có chắc muốn hủy?')">
											<?php echo e(csrf_field()); ?>

											<button class="btn btn-primary" type="submit">Hủy đơn</button>
										</form>
									</td>
									<td class="center"><a href="admin/bill/chitietdon/<?php echo e($bi->id); ?>"><i class="icon icon"></i> Chi tiết</a></td>
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
	      			<div class="col-sm-7"><?php echo e($bill->links()); ?></div>
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