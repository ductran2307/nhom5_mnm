<?php $__env->startSection('content'); ?>
	   <section class="content-header">
      <h1>
        Sản Phẩm
        <small><?php echo e($product->name); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Sản phẩm</a></li>
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
            <form role="form" action="admin/sanpham/edit/<?php echo e($product->id); ?>" method="post" >
            	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Tên Sản Phẩm</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm" value="<?php echo e($product->name); ?>">
                </div>
                <div class="form-group">
                  <label>Loại sản phẩm</label>
                  <select class="form-control" name="type_products" id="type_products">
                    <?php $__currentLoopData = $loaisp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lsp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option
                      <?php if($product->id_type == $lsp->id): ?>
                      <?php echo e("selected"); ?>

                      <?php endif; ?>
                       value="<?php echo e($lsp->id); ?>"><?php echo e($lsp->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Danh mục sản phẩm</label>
                  <select class="form-control" name="category" id="category">
                    <?php $__currentLoopData = $danhmuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option 
                      <?php if($product->id_category == $dm->id): ?>
                      <?php echo e("selected"); ?>

                      <?php endif; ?>
                      value="<?php echo e($dm->id); ?>"><?php echo e($dm->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nhà cung cấp</label>
                  <select class="form-control" name="supplier" id="supplier">
                    <?php $__currentLoopData = $nhacc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option 
                      <?php if($product->id_supplier == $ncc->id): ?>
                      <?php echo e("selected"); ?>

                      <?php endif; ?>
                      value="<?php echo e($ncc->id); ?>"><?php echo e($ncc->name_supplier); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Mô Tả</label>
                  <textarea id="editor1" class="form-control ckeditor" name="des" rows="3" placeholder="Mô tả" ><?php echo e($product->description); ?></textarea>
                </div>
                  </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Thông số sản phẩm</label>
                  <textarea name="parameter" rows="2" class="form-control" placeholder="Nhập thông số"> <?php echo e($product->Parameter); ?></textarea>
                </div>
                <div class="form-group">
                  <label>Xuất xứ</label>
                  <textarea name="origin" class="form-control" rows="2" placeholder="Nhập xuất xứ">
          		<?php echo e($product->origin); ?>

                  </textarea>
                </div>
              
                <div class="form-group">
                  <label>Chất liệu</label>
                  <textarea name="material" class="form-control" rows="2" placeholder="Nhập chất liệu"><?php echo e($product->material); ?></textarea>
                </div>
                <div class="form-group">
                  <label>giá gốc</label>
                  <input type="text" name="unit_price" class="form-control" placeholder="Nhập giá gốc" value="<?php echo e($product->unit_price); ?>">
                </div>
                <div class="form-group">
                  <label>giá khuyến mãi</label>
                  <input type="text" name="promotion_price" class="form-control" placeholder="Nhập giá khuyến mãi" value="<?php echo e($product->promotion_price); ?>">
                </div>
                <div class="form-group">
                  <label>ảnh sản phẩm</label>
                  <img src="source/image/product/<?php echo e($product->image); ?>" width="100px" height="100px">
                  <input type="file" name="img" value="<?php echo e($product->image); ?>">
                </div>
                <div class="form-group">
                  <label>Đơn vị</label>
                  <input type="text" name="unit" class="form-control" placeholder="Nhập đơn vị" value="<?php echo e($product->unit); ?>">
                </div>
                <div class="form-group">
                  <label>Mới</label>
                 <select class="form-control" name="new">
                 	<option value="0" <?php if($product->new == 0): ?> <?php echo e("selected"); ?> <?php endif; ?> /> Không</option>
                    <option value="1" <?php if($product->new == 1): ?> <?php echo e("selected"); ?> <?php endif; ?> /> Mới</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-default">Edit</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
            </div>   
     		</form>
     </div>
      <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Bình luận </small>
      </h1>
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
          <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Người dùng</th>
                  <th>Nội dung</th>
                  <th>ngày đăng</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $product->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="border: 1px">
                  <td><?php echo e($cm->id); ?></td>
                  <td><?php echo e($cm->user->full_name); ?></td>
                  <td><?php echo e($cm->content); ?></td>
                  <td><?php echo e($cm->created_at); ?></td>
                  <td class="center"><a href="admin/comment/delete/<?php echo e($cm->id); ?>/<?php echo e($product->id); ?>"><i class="icon icon-bin"></i> Delete</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        <!-- /task manager table -->

   </div>
      <!-- /main content -->

    </div>
  </div>
</div>
</section>
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
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>