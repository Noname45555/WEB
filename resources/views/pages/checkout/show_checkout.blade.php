@extends('layout')
@section('content')
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				<li class="active">Thanh toán giỏ hàng</li>
			</ol>
		</div>
		<div class="register-req">
			<p>Đăng ký và đăng nhập để có thể thanh toán và xem lịch sử đơn hàng</p>
		</div>
		<!--/register-req-->

		<div class="shopper-informations">
			<div class="row">
				<div class="col-sm-12 clearfix">
					<div class="bill-to">
						<p>Điền thông tin đơn hàng</p>
						<div class="form-one">
							<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
								{{csrf_field()}}
								<input type="text" name="shipping_email" placeholder="Email">
								<input type="text" name="shipping_name" placeholder="Họ và tên">
								<input type="text" name="shipping_address" placeholder="Địa chỉ">
								<input type="text" name="shipping_phone" placeholder="Số điện thoại">
								<p>Ghi chú đơn hàng</p>
								<textarea name="shipping_note" placeholder="Ghi chú đơn hàng" rows="16"></textarea>
								<input type="submit" value="Gửi" name="send_order" class="btn btn-primary btn-sm">
							</form>
						</div>

					</div>
				</div>
				<div class="col-sm-4">
					<div class="order-message">
					
					</div>
				</div>
			</div>
		</div>
		<div class="review-payment">
			<h2><a href="{{URL::to('/gio-hang')}}">Xem lại giỏ hàng</a></h2>
		</div>
	</div>
</section>
<!--/#cart_items-->
@endsection