<?php $__env->startSection('content'); ?>
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Cart</h3>
        			<ul>
        				<li><a href="index.html">Home</a></li>
        				<li><a href="cart.html">Cart</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Cart Table Area =================-->
        <section class="cart_table_area p_100">
        	<div class="container">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th scope="col">ảnh sản phẩm</th>
								<th scope="col">Tên sản phẩm</th>
								<th scope="col">Đơn giá</th>
								<th scope="col">Số lượng</th>
								<th scope="col">Tổng tiền</th>
								<!-- <th scope="col">Cập nhật</th> -->
								<th scope="col">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php if(Session::has('cart')): ?>
								<?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td>
										<img src="images/product/<?php echo e($product['item']['image']); ?>" alt="" width="150px" height="150px">
									</td>
									<td><?php echo e($product['item']['name']); ?></td>
									<td>
										<?php if($product['item']['promotion_price']==0): ?>
											<?php echo e(number_format($product['item']['unit_price'])); ?>

										<?php else: ?> <?php echo e(number_format($product['item']['promotion_price'])); ?>

										<?php endif; ?>
									</td>
									<td>
										<input type="number" id="quanty-item-<?php echo e($product['item']['id']); ?>" onchange="SaveListItemCart(<?php echo e($product['item']['id']); ?>)" name="product_numb" class="product_select" value="<?php echo e($product['qty']); ?>">
									</td>
									<td><?php echo e(number_format($product['price'])); ?></td>
									<td style="display: none;"><a class="udc" href="<?php echo e(route('giohang')); ?>"  onclick="SaveListItemCart(<?php echo e($product['item']['id']); ?>)"><i class="fa fa-save"/></a></td>
									<td><a href="<?php echo e(route('xoagiohang',$product['item']['id'])); ?>">X</a></td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
       			<div class="row cart_total_inner">
        			<div class="col-lg-7"></div>
        			<div class="col-lg-5">
        				<div class="cart_total_text">
        					<?php if(Session::has('cart')): ?>
        					<div class="cart_head">
        						Tổng giỏ hàng
        					</div>
        					<div class="sub_total">
        						<h5>Tổng số phụ <span><?php echo e(number_format(Session('cart')->totalPrice)); ?> VND</span></h5>
        					</div>
        					<div class="total">
        						<h4>Tổng tiền <span><?php echo e(number_format(Session('cart')->totalPrice)); ?> VND</span></h4>
        					</div>
        					<?php endif; ?>
        					<div class="cart_footer">
        						<a class="pest_btn" href="<?php echo e(route('dathang')); ?>">Đặt hàng</a>
        					</div>

        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Cart Table Area =================-->
        <style type="text/css">
        	.nice-select.product_select{
        		display: none!important;
        	}
        	.product_select{
        		display: block!important;
        		width: 100%!important;
        	}
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js"></script>
          <script type="text/javascript">
                function SaveListItemCart(id){
                    $.ajax({
                        url: 'Save-Item-List-Cart/'+id+'/'+$("#quanty-item-"+id).val(),
                        type: 'GET',
                    }).done(function(){
                        alertify.success('cập nhật giỏ hàng thành công!!');
                        setTimeout(function() { 
				    		window.location.href = $(".udc")[0].href; 
				 		}, 500);
                    });
                }
            // function RenderListCart(response){
            //     $("#list-cart").empty();
            //     $("#list-cart").html(response);
            // }
        </script>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>