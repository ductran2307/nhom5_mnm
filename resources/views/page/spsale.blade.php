@extends('master')
@section('content')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href={{route('trang-chu')}}>Home</a></li>
				<li class="active">sản phẩm giảm giá</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- MAIN -->
				<div id="main" class="col-md-9">
					<!-- store top filter -->
					<!-- /store top filter -->
					<h3 class="aside-title">Sản phảm giảm giá</h3>
					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
							@foreach($sp_sale as $sale)
							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6" style="height: 500px;">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>New</span>
										</div>
										<button class="main-btn quick-view"><a href="{{route('chitietsanpham',$sale->id)}}"><i class="fa fa-search-plus"></i> view detail</a></button>
										<img src="source/image/product/{{$sale->image}}" alt="" height="250px">
									</div>
									<div class="product-body">
										<h3 class="product-price">
										@if($sale->promotion_price!=0)
										<span class="product-old-price">{{number_format($sale->promotion_price)}} VND</span><br>
										<del class="product-price" style="font-size: 10px;">{{number_format($sale->unit_price)}} VND</del>
										@else
										<span class="product-old-price" style="font-size: 18px;">{{number_format($sale->unit_price)}} VND</span><br><br>
										@endif
									</h3>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
										<h2 class="product-name" style="font-size: 14px;"><a href="{{route('chitietsanpham',$sale->id)}}">{{$sale->name}}</a></h2>
										<div class="product-btns">
											<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<a href="{{route('themgiohang',$sale->id)}}"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button></a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							@endforeach
						</div>
						<!-- /row -->
						<div class="row">{{$sp_sale->links()}}</div>
					</div>
					<!-- /STORE -->
				</div>
				<!-- /MAIN -->
@endsection