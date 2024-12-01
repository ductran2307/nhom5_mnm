<?php $__env->startSection('content'); ?>
<style type="text/css">
        .table h4{
          color: #660FC7;
        }
        .table tr:first-child h5{
          display: inline;
        }
        .table tr:first-child p{
          display: inline;
        }
      </style>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-10">
        <h4><b>chi tiết hóa đơn: </b> <?php echo e($bill->id); ?></h4>
        <table class="table m-auto">
          <tr>
            <td colspan="2"><p>Họ và tên khách hàng: </p><h4 id="ho"><?php echo e($bill->customer->name); ?></h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>Địa chỉ:</p><h4 id="diachi"><?php echo e($bill->customer->address); ?></h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>SĐT:</p><h4 id="sdt"><?php echo e($bill->customer->phone_number); ?></h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>Email:</p><h4 id="sdt"><?php echo e($bill->customer->email); ?></h4></td>
          </tr>
          <tr>
              <td colspan="2"><p>Ngày mua hàng:</p><h4 id="sdt"><?php echo e($bill->customer->created_at); ?></h4></td>
          </tr>
        </table>
        <br>
        <table class="table table-bordered">
          <h4>Danh sách sản phẩm đã mua</h4>
              <thead>
                <tr>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>ảnh sản phẩm</th>
                  <th>Đơn giá</th>
                  <th>Xuất xứ</th>
                  <th>Bảo hành</th>
                  <th>Số lượng</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $bill_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <tr>
                  <td><?php echo e($bills->id_product); ?></td>
                  <td><?php echo e($bills->product->name); ?></td>
                  <td><img src="images/product/<?php echo e($bills->product->image); ?>" width="100px" height="100px"></td>
                  <td><?php echo e(number_format($bills->unit_price)); ?> VND</td>
                  <td><?php echo e($bills->product->origin); ?></td>
                  <td><?php echo e($bills->product->guarantee); ?> tháng</td>
                  <td><?php echo e($bills->quantity); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
            <h3>Tổng tiền : <?php echo e(number_format($bill->total)); ?> VND</h3>
            <br>
            <button class="print-bill btn btn-success" onclick="window.print()"><i class="fa fa-save"></i> In hóa đơn</button>
    </div>
  </div>
</div>
       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>