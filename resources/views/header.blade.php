<head>
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<script src="dist/js/bootstrap.min.js"></script>
</head>
<div id="header">
	>
	<!-- .header-top-->
	<div class="container beta-relative">
		<div class="pull-left">
			<a href="/	" id="logo"><img style="vertical-align:middle" src="source/assets/dest/images/gear.jpg" width="200px" alt=""></a>
			<h1 style="display: inline;  text-align: center"> TD Shop </h1>
			</a>

		</div>
		<div class="pull-right beta-components space-left ov">
			<div class="beta-comp">
				<div class="cart">
					<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif) <i class="fa fa-chevron-down"></i></div>
					<div class="beta-dropdown cart-body">
						@if(Session::has('cart'))
						@foreach($product_cart as $product)
						<div class="cart-item">
							<a class="cart-item-delete" href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-times"></i></a>
							<div class="media">
								<a class="pull-left" href="#"><img src="source/image/product/{{$product['item']['image']}}" alt=""></a>
								<div class="media-body">
									<span class="cart-item-title">{{$product['item']['name']}}</span>
									<span class="cart-item-amount">{{$product['qty']}}*<span>@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} @else {{number_format($product['item']['promotion_price'])}}@endif</span></span>
								</div>
							</div>
						</div>
						@endforeach
						<div class="cart-caption">
							<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">@if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif đồng</span></div>
							<div class="clearfix"></div>

							<div class="center">
								<div class="space10">&nbsp;</div>
								<a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
							</div>
						</div>

						@endif
					</div>
				</div> <!-- .cart -->
			</div>
		</div>
		<div class="clearfix"></div>
		<br>
	</div> <!-- .container -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
			<ul class="navbar-nav ml-auto text-center">
				<li class="nav-item active">
					<a class="nav-link" href="/chuot">Chuột</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/banphim">Bàn phím</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/manhinh">Màn hình</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/tainghe">Tai Nghe</a>
				</li>
			</ul>
		</div>
		<div class="mx-auto my-2 order-0 order-md-1 position-relative">
			<a class="mx-auto" href="#">
				<img src="source/assets/dest/images/computer_support_100px.png" class="rounded-circle">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
			<ul class="navbar-nav mr-auto text-center">
				<li class="nav-item">
				@if(Auth::check())
						<li class="nav-item active"><a class="nav-link" href="">Chào bạn {{Auth::user()->full_name}}</a></li>
						<li class="nav-item active"><a class="nav-link" href="/dang-xuat">Đăng xuất</a></li>
						<li class="nav-item active"><a class="nav-link" href="/admin">Trang quản trị</a></li>
					@else
						<li class="nav-item active"><a class="nav-link" href="{{route('signin')}}">Đăng kí</a></li>
						<li class="nav-item active"><a class="nav-link"href="/dang-nhap">Đăng nhập</a></li>
					@endif
				</li>
			</ul>
		</div>
	</nav>
</div> <!-- #header -->