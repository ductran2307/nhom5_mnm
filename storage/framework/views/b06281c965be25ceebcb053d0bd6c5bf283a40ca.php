<?php $__env->startSection('content'); ?>
	   <section class="content-header">
      <h1>
        Thêm
        <small>Nhà Cung Cấp</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Nhà cung cấp</a></li>
        <li class="active">Add</li>
      </ol>
    </section>
    <br>
    <div class="box-body" style="width: 1500px;">
	    	<?php if(count($errors)>0): ?>
	    		<div class="alert alert-danger">
	    			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    				<?php echo e($err); ?><br>
	    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    		</div>
	    	<?php endif; ?>

	    	<?php if(session('thongbao')): ?>
	    		<div class="alert alert-success">
	    			<?php echo e(session('thongbao')); ?>

	    		</div>
	    	<?php endif; ?>
            <form role="form" action="admin/nhacungcap/add" method="post">
            	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <div class="col-sm-7">
                <div class="form-group">
                  <label>Tên Nhà cung cấp</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên nhà cung cấp">
                </div>
                 <div class="form-group">
                  <label>Địa chỉ</label>
                  <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
                </div>
                 <div class="form-group">
                  <label>Số điện thoại</label>
                  <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại">
                </div>
                 <div class="form-group">
                  <label>email</label>
                  <input type="text" name="email" class="form-control" placeholder="Nhập email">
                </div>
                 <div class="form-group">
                  <label>Mô tả</label>
                 <textarea id="editor1" class="form-control ckeditor" name="description" rows="3" placeholder="Mô tả"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Thêm</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
               </div>
     		</form>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>