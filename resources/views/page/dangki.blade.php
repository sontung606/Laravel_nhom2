@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Đăng kí</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb">
				<a href="index.html">Home</a> / <span>Đăng kí</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="login-page">
	<div class="form">
		@if(Session::has('thanhcong'))
		<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
		@endif
		<form action="{{route('signin')}}" method="post" class="login-form">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $err)
				{{$err}}
				@endforeach
			</div>
			@endif
			<input type="email" name="email" required placeholder="Email">
			<input type="text" name="fullname" required placeholder="Họ tên">
			<input type="text" name="address" required placeholder="Địa chỉ">
			<input type="text" name="phone" required placeholder="Điện thoại">
			<input type="password" name="password" required placeholder="Mật khẩu">
			<input type="password" name="re_password" required placeholder="Nhập lại mật khẩu">
			<button type="submit" class="btn btn-primary">Register</button>
			<p class="message">Đã có tài khoản ? <a href="/dang-nhap">Đăng nhập</a></p>
		</form>
	</div>
</div>
<!--
			<form action="{{route('signin')}}" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>
					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}
							@endforeach
						</div>
					@endif
					@if(Session::has('thanhcong'))
						<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
					@endif
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" name="email" required>
						</div>

						<div class="form-block">
							<label for="your_last_name">Fullname*</label>
							<input type="text" name="fullname" required>
						</div>

						<div class="form-block">
							<label for="adress">Address*</label>
							<input type="text" name="address" value="Street Address" required>
						</div>


						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" name="phone" required>
						</div>
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="password" name="password" required>
						</div>
						<div class="form-block">
							<label for="phone">Re password*</label>
							<input type="password" name="re_password" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
<!-- .container -->
@endsection