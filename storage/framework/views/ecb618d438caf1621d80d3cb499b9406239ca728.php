<?php $__env->startSection('content'); ?>
	   <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Sửa Tin Tức</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
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
            <form role="form" action="admin/tintuc/edit/<?php echo e($news->id); ?>" method="post" >
            	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <div class="col-sm-7">
                <div class="form-group">
                  <label>Tiêu đề</label>
                  <textarea id="demo1" class="form-control " name="title" rows="2" placeholder="Tiêu Đề"><?php echo e($news->title); ?></textarea>
              	</div>
              	 <div class="form-group">
                  <label>Tóm tắt</label>
                  <textarea id="demo" class="form-control ckeditor" name="summary" rows="2" placeholder="Tóm tắt"><?php echo e($news->summary); ?></textarea>
              	</div>
                <div class="form-group">
                  <label>Nội Dung</label>
                  <textarea id="editor1" class="form-control ckeditor" name="content" rows="5" placeholder="Nội dung"><?php echo e($news->content); ?></textarea>
                </div>
                <div class="form-group">
                  <label>ảnh</label>
                   <input type="text" name="img" value="<?php echo e($news->image); ?>"><input type="file" name="img" value="<?php echo e($news->image); ?>">
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
               </div>
     		</form>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>