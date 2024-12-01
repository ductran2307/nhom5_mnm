	<?php $__env->startSection('content'); ?>
	<div class="container">
		<div id="content">
			<form action="<?php echo e(route('dathang')); ?>" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="row"><div class="alert alert-info"><h2><?php if(Session::has('thongbao')): ?><?php echo e(Session::get('thongbao')); ?><?php endif; ?><h2></div></div>
				<div class="row">
					<div class="col-md-6">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Đặt Hàng</h3>
							</div>
							<div class="form-group form-block">
								<label class="label" style="color: #000;">Họ tên</label>
								<input class="input" type="text" name="name" placeholder="Họ Tên" required="required" 
								<?php if(Auth::check()): ?>
								value="<?php echo e(Auth::user()->full_name); ?>"
								<?php endif; ?>>
							</div>
							<div class="form-group form-block" style="border: 1px solid #ccc; padding: 10px;">
							<label>giới tính</label>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>
						</div>
							<div class="form-group form-block">
								<label class="label" style="color: #000;">Email</label>
								<input class="input" type="email" name="email" placeholder="expample@gmail.com" required="required"
								<?php if(Auth::check()): ?>
								value="<?php echo e(Auth::user()->email); ?>"
								<?php endif; ?>>
							</div>
							<div class="form-group form-block">
								<label class="label" style="color: #000;">Địa chỉ</label>
								<input class="input" type="text" name="address" placeholder="Địa Chỉ" required="required"
								<?php if(Auth::check()): ?>
								value="<?php echo e(Auth::user()->address); ?>"
								<?php endif; ?>>
							</div>
							<div class="form-group form-block">
								<label class="label" style="color: #000;">Số điện thoại</label>
								<input class="input" type="tel" name="phone" placeholder="Telephone" required="required"
								<?php if(Auth::check()): ?>
								value="<?php echo e(Auth::user()->phone); ?>"
								<?php endif; ?>>
							</div>
							<div class="form-group ">
								<textarea id="notes" name="notes" cols="70" rows="5">Ghi Chú</textarea>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn Hàng Của Bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
										<?php if(Session::has('cart')): ?>
										<?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

											<div class="media">
												<img width="25%" src="source/image/product/<?php echo e($cart['item']['image']); ?>" alt="" class="pull-left">
												<div class="media-body">
													<p class="font-large"><?php echo e($cart['item']['name']); ?></p>
													<span class="color-gray your-order-info">Đơn giá: <?php echo e(number_format($cart['price'])); ?> VND</span>
													<br><span class="color-gray your-order-info">Số Lượng: <?php echo e($cart['qty']); ?></span>
												</div>
											</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
									</div>
									<div class="clearfix"></div>
							</div>
							<div class="your-order-item">
								<div class="pull-left"><p class="your-order-f18">Tổng Tiền: </p></div>
								<div class="pull-right"><h4 class="color-black"><?php if(Session::has('cart')): ?><?php echo e(number_format($totalPrice)); ?><?php else: ?> 0 <?php endif; ?> VND</h4></div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Hình Thức Thanh Toán</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payment_method" id="payments-1" checked value="COD">
								<label for="payments-1">Thanh Toán Khi Nhận Hàng</label>
								<div class="caption">
									<p>Cửa hàng sẽ gửi đến địa chỉ của bạn, bạn vui lòng xem hàng rồi thanh toán tiền cho nhân viên giao hàng.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payment_method" id="payments-2" value="ATM">
								<label for="payments-2">Chuyển Khoản</label>
								<div class="caption">
									<p>chuyển tiền đến số tài khoản sau:
										<br>-Số tài khoản: 123 456 789
										<br>-Chủ TK: ĐỖ VĂN TUYỂN
										<br>-Ngân Hàng Vietinbank, chi nhánh Mỹ Hào - Hưng Yên.
										<p>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center"><button type="submit" class="beta-btn primary" href="#">Đặt Hàng <i class="fa fa-chevron-right"></i></button>
						</div>
				</div>
			</form>
		</div>
	</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>