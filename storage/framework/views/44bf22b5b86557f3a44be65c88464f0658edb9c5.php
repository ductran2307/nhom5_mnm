<?php $__env->startSection('content'); ?>
	   <section class="content-header">
      <h1>
        Sửa
        <small><?php echo e($slide->name); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Slide</a></li>
        <li class="active">Edit</li>
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
            <form role="form" action="admin/slide/edit/<?php echo e($slide->id); ?>" method="post">
            	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <div class="col-sm-7">
                <div class="form-group">
                  <label>Tên Slide</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục" value="<?php echo e($slide->name); ?>">
                </div>
                 <div class="form-group">
                  <label>Link</label>
                  <input type="text" name="link" class="form-control" placeholder="Nhập link" value="<?php echo e($slide->link); ?>">
                </div>
                <div class="form-group">
                  <label>ảnh slide</label>
                  <p><img src="source/image/slide/<?php echo e($slide->image); ?>" width="100px" height="50px"></p>
                  <input type="file" name="img">
                </div>
                <div class="form-group">
                  <label>Mô Tả</label>
                  <textarea id="editor1" class="form-control" name="des" rows="3" placeholder="Mô tả"><?php echo e($slide->description); ?></textarea>
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
               </div>
     		</form>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>