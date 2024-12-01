<?php $__env->startSection('content'); ?>
	   <section class="content-header">
      <h1>
        DANH MỤC
        <small><?php echo e($danhmuc->name); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <br>
    <div class="box-body" style="width: 500px;">
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
            <form role="form" action="admin/danhmuc/edit/<?php echo e($danhmuc->id); ?>" method="post">
            	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form-group">
                  <label>Tên Danh Mục</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục" value="<?php echo e($danhmuc->name); ?>">
                </div>
                <div class="form-group">
                  <label>Mô Tả</label>
                  <input type="text" class="form-control" name="des"  placeholder="Mô tả" value="<?php echo e($danhmuc->description); ?>">
                </div>
                <div class="form-group">
                  <label>ảnh</label>
                  <input type="text" name="img" value="<?php echo e($danhmuc->image); ?>"><input type="file" name="img" value="<?php echo e($danhmuc->image); ?>">
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
     		</form>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>