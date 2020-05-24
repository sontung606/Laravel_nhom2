@extends('master')
@section('content')
<head>
<style>
	p{
		font-family: Roboto ;
	}
</style>
</head>

<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<div class="bannercontainer" >
	    <div class="banner" >
				<ul>
				@foreach($slide as $sl)
					<!-- THE FIRST SLIDE -->
					<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 50%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
		            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
						<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
						</div>
					</div>

		        </li>
		        @endforeach
				</ul>
			</div>
		</div>

		<div class="tp-bannertimer"></div>
	</div>
</div>
<!--slider-->

{{--</div>--}}
<div class="container">
	<br>
<div class="beta-comp">
			<form style="width: 1000px" role="search" method="get" id="searchform" action="/">
				<input type="text" value="" name="s" id="s" placeholder="Nhập sản phảm bạn muốn mua..." />
				<button class="fa fa-search" type="submit" id="searchsubmit"></button>
			</form>
		</div>
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
					
						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Chuột</h4>
							<div class="beta-products-details">
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($chuot as $item)
									<div class="col-sm-3" style="margin-bottom: 10px;">
										<div class="single-item">
											@if($item->promotion_price!=0)
												<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
											@endif
											<div class="single-item-header">
												<a href="{{route('chitietsanpham',$item->id)}}"><img src="source/image/product/{{$item->image}}" alt="" height="250px"></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$item->name}}</p>
												<p class="single-item-price"  style="font-size: 18px">
													@if($item->promotion_price==0)
														<span class="flash-sale">{{number_format($item->unit_price)}} đồng</span>
													@else
														<span class="flash-del">{{number_format($item->unit_price)}} đồng</span>
														<span class="flash-sale">{{number_format($item->promotion_price)}} đồng</span>
													@endif
												</p>
											</div>
											<div class="single-item-caption" style="margin-top: 5px;">
												<a class="add-to-cart pull-left" href="{{route('themgiohang',$item->id)}}"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{route('chitietsanpham',$item->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
							<br>
							<a  style="color: #fff" href="/chuot">
							<button style="   background-color: #e67e22  " class="btn btn-square btn-lg btn-filled-green" > Xem tất cả</button>
							</a>
							<br>
						</div> <!-- .beta-products-list -->
						<br>
						<div class="beta-products-list">
							<h4>tai nghe</h4>
							<div class="beta-products-details">
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($tainghe as $item)
									<div class="col-sm-3" style="margin-bottom: 10px;">
										<div class="single-item">
											@if($item->promotion_price!=0)
												<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
											@endif
											<div class="single-item-header">
												<a href="{{route('chitietsanpham',$item->id)}}"><img src="source/image/product/{{$item->image}}" alt="" height="250px"></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$item->name}}</p>
												<p class="single-item-price"  style="font-size: 18px">
													@if($item->promotion_price==0)
														<span class="flash-sale">{{number_format($item->unit_price)}} đồng</span>
													@else
														<span class="flash-del">{{number_format($item->unit_price)}} đồng</span>
														<span class="flash-sale">{{number_format($item->promotion_price)}} đồng</span>
													@endif
												</p>
											</div>
											<div class="single-item-caption" style="margin-top: 5px;">
												<a class="add-to-cart pull-left" href="{{route('themgiohang',$item->id)}}"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{route('chitietsanpham',$item->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
							<br>
							<a  style="color: #fff" href="/tainghe">
							<button style="   background-color: #e67e22  " class="btn btn-square btn-lg btn-filled-green" > Xem tất cả</button>
							</a>
							<br>
						</div>
						<div class="beta-products-list">
						<br>
							<h4>Bàn phím</h4>
							<div class="beta-products-details">
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($banphim as $item)
									<div class="col-sm-3" style="margin-bottom: 10px;">
										<div class="single-item">
											@if($item->promotion_price!=0)
												<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
											@endif
											<div class="single-item-header">
												<a href="{{route('chitietsanpham',$item->id)}}"><img src="source/image/product/{{$item->image}}" alt="" height="250px"></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$item->name}}</p>
												<p class="single-item-price"  style="font-size: 18px">
													@if($item->promotion_price==0)
														<span class="flash-sale">{{number_format($item->unit_price)}} đồng</span>
													@else
														<span class="flash-del">{{number_format($item->unit_price)}} đồng</span>
														<span class="flash-sale">{{number_format($item->promotion_price)}} đồng</span>
													@endif
												</p>
											</div>
											<div class="single-item-caption" style="margin-top: 5px;">
												<a class="add-to-cart pull-left" href="{{route('themgiohang',$item->id)}}"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{route('chitietsanpham',$item->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
							<br>
							<a  style="color: #fff" href="/banphim">
							<button style="   background-color: #e67e22  " class="btn btn-square btn-lg btn-filled-green" > Xem tất cả</button>
							</a>
							<br>
						</div>
						<div class="beta-products-list">
						<br>
							<h4>Màn hình</h4>
							<div class="beta-products-details">
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($manhinh as $item)
									<div class="col-sm-3" style="margin-bottom: 10px;">
										<div class="single-item">
											@if($item->promotion_price!=0)
												<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
											@endif
											<div class="single-item-header">
												<a href="{{route('chitietsanpham',$item->id)}}"><img src="source/image/product/{{$item->image}}" alt="" height="250px"></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$item->name}}</p>
												<p class="single-item-price"  style="font-size: 18px">
													@if($item->promotion_price==0)
														<span class="flash-sale">{{number_format($item->unit_price)}} đồng</span>
													@else
														<span class="flash-del">{{number_format($item->unit_price)}} đồng</span>
														<span class="flash-sale">{{number_format($item->promotion_price)}} đồng</span>
													@endif
												</p>
											</div>
											<div class="single-item-caption" style="margin-top: 5px;">
												<a class="add-to-cart pull-left" href="{{route('themgiohang',$item->id)}}"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{route('chitietsanpham',$item->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
							<br>
							<a  style="color: #fff" href="/manhinh">
							<button style="   background-color: #e67e22  " class="btn btn-square btn-lg btn-filled-green" > Xem tất cả</button>
							</a>
							<br>
						</div>
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
@endsection