<?php $__env->startSection('content'); ?>
	   <section class="content-header">
      <h1>
        Sửa Người Dùng
        <small><?php echo e($user->full_name); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>user</a></li>
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
            <form role="form" action="admin/user/edit/<?php echo e($user->id); ?>" method="post" >
            	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="col-md-5">
                <div class="form-group">
                  <label>Họ Tên Người Dùng</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên người dùng" value="<?php echo e($user->full_name); ?>">
                </div>
               <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Nhập địa chỉ eamil" value="<?php echo e($user->email); ?>" readonly="">
                </div>
                <div class="form-group">
                	<input type="checkbox" name="change_password" id="check_pass">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control password" placeholder="Đổi mật khẩu" disabled="">
                </div>
                <div class="form-group">
                  <label>Re Password</label>
                  <input type="password" name="re_password" class="form-control password" placeholder="Nhập lại mật khẩu" disabled="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                  <label>Số điện thoại</label>
                  <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại" value="<?php echo e($user->phone); ?>">
                </div>
                <div class="form-group">
                  <label>Địa chỉ</label>
                  <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ" value="<?php echo e($user->address); ?>">
                </div>
                <div class="form-group">
                  <label>Quyền</label>
                 <select class="form-control" name="level">
                      <option value="0" 
                      	<?php if($user->level == 0): ?>
                      	<?php echo e("selected"); ?> 
                      	<?php endif; ?> > Người dùng thường</option>
                      <option value="1" 
                      	<?php if($user->level == 1): ?>
                      	<?php echo e("selected"); ?> 
                      	<?php endif; ?> >Admin</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
            </div>   
     		</form>
     </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script>
		$(document).ready(function(){
			$("#type_products").change(function(){
				var id_type = $(this).val();
				$.get("admin/ajax/loaisp/"+id_type,function(data){
					$("#category").html(data);
				});
			});

			$("#check_pass").change(function(){
				if($(this).is(":checked"))
				{
					$(".password").removeAttr('disabled');
				}
				else
				{
					$(".password").attr('disabled','');
				}
			})
		});


	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>