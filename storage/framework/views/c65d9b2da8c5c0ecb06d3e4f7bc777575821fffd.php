	<?php $__env->startSection('content'); ?>
	  <!--Checkout Area Strat-->
            <div class="checkout-area pt-60 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-accordion">
                            		
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <form  action="<?php echo e(route('dathang')); ?>" method="post">
                            	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            	<div class="alert alert-info"><h2><?php if(Session::has('thongbao')): ?><?php echo e(Session::get('thongbao')); ?><?php endif; ?><h2></div>
                                <div class="checkbox-form">
                                    <h3>Chi tiết hóa đơn</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Họ và tên <span class="required">*</span></label>
                                                <input placeholder="họ tên" type="text" name="name" required="required"
                                                <?php if(Auth::check()): ?>
																								value="<?php echo e(Auth::user()->full_name); ?>"
																								<?php endif; ?>>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
	                                        <div class="checkout-form-list">
																						<label>Giới tính</label>
																						<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 5%"><span style="margin-right: 5%">Nam</span>
																						<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 5%"><span>Nữ</span>
																					</div>
																				</div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input placeholder="Địa chỉ" name="address" type="text" required="required"
                                                <?php if(Auth::check()): ?>
																								value="<?php echo e(Auth::user()->address); ?>"
																								<?php endif; ?>>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ Email<span class="required">*</span></label>
                                                <input placeholder="" name="email" type="email" required="required"
                                                <?php if(Auth::check()): ?>
																								value="<?php echo e(Auth::user()->email); ?>"
																								<?php endif; ?>>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone  <span class="required">*</span></label>
                                                <input type="tel" placeholder="Telephone" name="phone" required="required"
                                                <?php if(Auth::check()): ?>
																							value="<?php echo e(Auth::user()->phone); ?>"
																							<?php endif; ?>>
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Ghi chú</label>
                                                <textarea id="notes" name="notes" cols="20" rows="6" placeholder="Ghi chú thêm"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Đơn Hàng Của Bạn</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Sản phẩm</th>
                                                <th class="cart-product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php if(Session::has('cart')): ?>
																						<?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="cart_item">
                                              <td class="cart-product-name" style="text-align: left;"><img width="25%" src="images/product/<?php echo e($cart['item']['image']); ?>" alt="" class="pull-left"> <?php echo e($cart['item']['name']); ?><strong class="product-quantity"> × <span style="color: red;"><?php echo e($cart['qty']); ?></span> </strong></td>
                                              <td class="cart-product-total"><span class="amount"><?php echo e(number_format($cart['price'])); ?> VND</span></td>  
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr class="order-total">
                                                <th>Tổng tiền</th>
                                                <td><strong><span class="amount"><?php if(Session::has('cart')): ?><?php echo e(number_format($totalPrice)); ?><?php else: ?> 0 <?php endif; ?> VND</span></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div id="accordion">
                                          <div class="card">
                                            <div class="card-header" id="#payment-1">
                                              <h5 class="panel-title">
                                              	<input type="radio" name="payment_method" id="payments-1" checked value="COD" style="width: auto;height: auto;">
                                                <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Thanh Toán Khi Nhận Hàng
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Cửa hàng sẽ gửi đến địa chỉ của bạn, bạn vui lòng xem hàng rồi thanh toán tiền cho nhân viên giao hàng.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" id="#payment-2">
                                              <h5 class="panel-title">
                                              	<input type="radio" name="payment_method" id="payments-2" value="ATM" style="width: auto;height: auto;">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Chuyển Khoản
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>chuyển tiền đến số tài khoản sau:
																								<br>-Số tài khoản: 123 456 789
																								<br>-Chủ TK: ĐỖ VĂN TUYỂN
																								<br>-Ngân Hàng Vietinbank, chi nhánh Mỹ Hào - Hưng Yên.
																								<p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input value="Đặt hàng" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Checkout Area End-->
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>