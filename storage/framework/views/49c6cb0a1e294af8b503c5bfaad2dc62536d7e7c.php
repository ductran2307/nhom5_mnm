	
	<?php $__env->startSection('content'); ?>
		 <!--================End Main Header Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text">
                    <h3>Chi tiết sản phẩm</h3>
                    <ul>
                        <li><a href="<?php echo e(route('trang-chu')); ?>">Home</a></li>
                        <li><a href="product-details.html"><?php echo e($sanpham->name); ?></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Details Area =================-->
        <section class="product_details_area p_100">
            <div class="container">
                <div class="row product_d_price">
                    <div class="col-lg-6">
                        <div class="product_img"><img class="img-fluid" src="images/product/<?php echo e($sanpham->image); ?>" alt="<?php echo e($sanpham->name); ?>"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product_details_text">
                            <h4><?php echo e($sanpham->name); ?></h4>
                            <?php echo $sanpham['description'] ?>
                            <h5>Đơn giá :
                                <?php if($sanpham->promotion_price==0): ?>
                                <span class="new-price"><?php echo e(number_format($sanpham->unit_price)); ?> VND</span>
                                <?php else: ?>
                                <span class="new-price new-price-2"><?php echo e(number_format($sanpham->promotion_price)); ?> VND</span>
                              <?php endif; ?>
                            </h5>
                            <!-- <div class="quantity_box">
                                <label for="quantity">Số lượng :</label>
                                <input type="number" placeholder="1" id="quantity">
                            </div> -->
                            <a class="pink_more" href="<?php echo e(route('themgiohang',$sanpham->id)); ?>">Thêm giỏ hàng</a>
                        </div>
                    </div>
                </div>
                <div class="product_tab_area">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mô tả</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Đánh giá (<?php echo e(count($comment)); ?>)</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <?php echo $sanpham['description'] ?>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <div class="product-reviews">
                                <div class="product-details-comment-block">
                                    <div class="review-btn">
                                        <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Viết đánh giá!</a>
                                    </div>
                                    <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <div class="comment-author-infos pt-25">
                                        <span><?php echo e($cmt->name); ?></span>
                                        <em><?php echo e($cmt->created_at); ?></em>
                                        <p><?php echo e($cmt->content); ?></p>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Begin Quick View | Modal Area -->
                                    <div class="modal fade modal-wrapper" id="mymodal" >
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h3 class="review-page-title">Viết đánh giá của bạn</h3>
                                                    <div class="modal-inner-area row">
                                                        <div class="col-lg-6">
                                                           <div class="li-review-product">
                                                               <img src="images/product/<?php echo e($sanpham->image); ?>" alt="Li's Product">
                                                               <div class="li-review-product-desc">
                                                                   <p class="li-product-name"><?php echo e($sanpham->name); ?></p>
                                                               </div>
                                                           </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="li-review-content">
                                                                <!-- Begin Feedback Area -->
                                                                <div class="feedback-area">
                                                                    <div class="feedback">
                                                                        <h3 class="feedback-title">Phản hồi của bạn</h3>
                                                                        <form method="post">
                                                                          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                                            <p class="feedback-form">
                                                                                <label for="feedback">Đánh giá</label>
                                                                                <textarea id="feedback" name="comment" cols="45" rows="3" aria-required="true"></textarea>
                                                                            </p>
                                                                            <p class="feedback-form-author">
                                                                                <label for="author">Tên<span class="required">*</span>
                                                                                </label></br>
                                                                                <input id="author" name="author" value="" size="30" aria-required="true" type="text" width="84%">
                                                                            </p>
                                                                            <p class="feedback-form-author feedback-form-email">
                                                                                <label for="email">Email<span class="required">*</span>
                                                                                </label></br>
                                                                                <input id="email" name="email" value="" size="30" aria-required="true" type="text"  width="84%">
                                                                            </p>
                                                                                <div class="feedback-btn pb-15">
                                                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">Đóng</a>
                                                                                    <button class="btn btn-primary" style="border-radius: 0;width: 85px; padding: 2px;">Gửi</button> 
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- Feedback Area End Here -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <!-- Quick View | Modal Area End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Details Area =================-->
        
        <!--================Similar Product Area =================-->
        <section class="similar_product_area p_100">
            <div class="container">
                <div class="main_title">
                    <h2>Sản phẩm tương tự</h2>
                </div>
                <div class="row similar_product_inner">
                    <?php $__currentLoopData = $sp_tuongtu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>">
                                        <img src="images/product/<?php echo e($lt->image); ?>" alt="">
                                    </a>
                                </div>
                                <div class="cake_text">
                                    <h4>
                                        <?php if($lt->promotion_price==0): ?>
                                            <?php echo e(number_format($lt->unit_price)); ?> đ
                                        <?php else: ?>
                                            <?php echo e(number_format($lt->promotion_price)); ?> đ
                                        <?php endif; ?>
                                    </h4>
                                    <a href="<?php echo e(route('chitietsanpham',$lt->id)); ?>"><h3><?php echo substr($lt['name'],0,25) ?>...</h3></a>
                                    <a class="pest_btn" href="<?php echo e(route('themgiohang',$lt->id)); ?>">Thêm giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <!--================End Similar Product Area =================-->
        
        <style type="text/css">
            a.review-links {
                background: #242424;
                color: #ffffff;
                width: 205px;
                height: 40px;
                line-height: 40px;
            }
            a.review-links:hover {
                background: #fed700;
            }

            .review-content {
    position: relative;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem;
    outline: 0;
}
.review-body {
    position: relative;
    padding: 15px;
}
#li-comment-wrap {
    overflow: hidden;
    color: #333;
    text-align: left;
}
.review-page-title {
    padding: 10px;
    font-size: 13px;
    color: #ffffff;
    text-transform: uppercase;
    background: #333;
}
.li-review-product {
    padding: 15px;
}
.li-review-product img {
    border: 1px solid #ebebeb;
}
.li-review-product-desc {
    line-height: 18px;
    color: #6f6f6f;
}
.li-product-name {
    padding: 10px 0 5px;
    font-size: 13px;
    color: #000;
}
.feedback-area .br-theme-fontawesome-stars .br-widget a {
    font-size: 14px;
}
.feedback-area .br-theme-fontawesome-stars .br-widget a.br-active:after {
  color: #fed700;
}
.feedback-area .br-theme-fontawesome-stars .br-widget a.br-selected::after {
    color: #fed700;
}
.feedback-area textarea, .feedback-area input {
    background: #fff;
    border: 1px solid #ebebeb;
    font-size: 14px;
}
.feedback-btn {
    position: relative;
}
.feedback-btn .close, 
.feedback-btn a {
    background: #242424;
    color: #fff !important;
    width: 80px;
    font-size: 14px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    left: 110px;
    right: auto;
    top: 0;
    display: block;
    transition: all 0.3s ease-in-out;
}
.feedback-btn .close:hover,
.feedback-btn a:hover {
    background: #fed700;
}
.modal-dialog {
    max-width: 876px;
    margin: 1.75rem auto;
}
        </style>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>