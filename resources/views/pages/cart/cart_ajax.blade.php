@extends('welcome')
@section('content')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				  <li class="active">Giỏ hàng của bạn</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="description">Tên sp</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					
                        @php
                            print_r(Session::get('cart'));
                        @endphp
						<tr>
							<td class="cart_description">
								<h4><a href=""></a></h4>
							</td>
							<td class="cart_price">
								<p></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="" method="POST">
									
									<input class="cart_quantity_input" type="text" name="cart_quantity" value=""  >
									<input type="hidden" value="" name="rowId_cart" class="form-control">
									<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						
					</tbody>
				</table>
			</div>
			
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
		
			<div class="row">
			
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tổng <span></span></li>
							<li>Phí vận chuyển <span></span></li>
							<li>Thành tiền <span></span></li>
						</ul>
						{{-- 	<a class="btn btn-default update" href="">Update</a> --}}
							  
								<?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){

                                ?>
                                <a class="btn btn-default check_out" href="">Thanh toán</a>
                                
                                <?php
                                    }else{
                                ?>
                                <a class="btn btn-default check_out" href="">Thanh toán</a>
                                <?php
                                    }
                                ?>
                                
                                
							

					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->


@endsection