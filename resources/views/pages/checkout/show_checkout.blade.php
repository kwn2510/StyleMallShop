@extends('welcome')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				  <li class="active">Thanh toán</li>
				</ol>
			</div>
			

			<div class="register-req">
				<p>Đăng ký hoặc đăng nhập để thanh toán giỏ hàng và lịch sử mua hàng!</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Thông tin</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
									{{csrf_field()}}
									<input type="text" name="shipping_name" placeholder="Họ và tên*">
									<input type="email" name="shipping_email" placeholder="Email*">
									<input type="text" name="shipping_address" placeholder="Địa chỉ *">
									<input type="text" name="shipping_phone" placeholder="Số điện thoại">
									
									<p>Ghi chú</p>
									<textarea name="shipping_notes"  placeholder="Ghi chú đơn hàng của bạn..." rows="16"></textarea>
									<input type="submit" value="Gửi" name="send_order" class="btn btn-primary btn-sm">
								</form>
							</div>
						</div>
					</div>
									
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->
@endsection