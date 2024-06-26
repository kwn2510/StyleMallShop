@extends('welcome')
@section('content')
                    @foreach($product_details as $key => $value)

                    <div class="product-details"><!--product-details-->
						<div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{ asset('public/upload/product/' . $value->product_image) }}" alt="" />
                            <h3>NEW</h3>
                        </div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{asset('public/frontend/images/home/sale.jpg')}}" alt=""></a>
										   <a href=""><img src="{{asset('public/frontend/images/home/sale.jpg')}}" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{asset('public/frontend/images/home/sale3.jpg')}}" alt=""></a>
										  <a href=""><img src="{{asset('public/frontend/images/home/sale5.jpg')}}" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{asset('public/frontend/images/home/sale6.jpg')}}" alt=""></a>
										  <a href=""><img src="{{asset('public/frontend/images/home/sale7.jpg')}}" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="#" class="newarrival" alt="" />
								<h1>{{$value->product_name}}</h1>
								<p>Mã SP: {{$value->product_id}}</p>

								<form action="{{URL::to('/save-cart')}}" method="POST">
									{{csrf_field()}}
								<span>
									<h2 style="text-align: center;">{{ number_format(floatval($value->product_price)).' '.'VND'}}</h2>
									<p>Số lượng: 
										<input name="qty" type="number" min="1" value="1" />
										<input name="productid_hidden" type="hidden" value="{{$value->product_id}}" />
									</p>
									<p><button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm giỏ hàng
									</button></p>
								</span>
								</form>
								<p><b>Mô tả sản phẩm :</b> {{$value->product_desc}}</p>
								<p><b>Nội dung sản phẩm:</b> {{$value->product_content}}</p>
                                <p><b>Danh mục:</b> {{$value->category_name}}</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

                    @endforeach
                    
                   
                    <div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm liên quan</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
                            @foreach($relate as $key => $lienquan)
								<a href="{{URL::to('chi-tiet-san-pham/'.$lienquan->product_id)}}" >
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{ asset('public/upload/product/' . $lienquan->product_image) }}" alt="" />
													<h2>{{ number_format(floatval($lienquan->product_price)).' '.'VND'}}</h2>
													<p>{{$lienquan->product_name}}</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
                            @endforeach
								</div>
                            
								
									
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
                    

                    <div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
							</ul>
						</div>
						<div class="tab-content">
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Admin</a></li>
										<li><a href=""><i class="fa fa-clock"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar"></i>23.04.2024</a></li>
									</ul>
									<style type="text/css">
										.style_comment{
											border: 1px solid #ddd;
											border-radius:5px;
											background:#F0F0E9;
										}
									</style>

									<form>
										@csrf
										<input type="hidden" class="comment_product_id" name="comment_product_id" value="{{$value->product_id}}">
										<div id="comment_show"></div>
									
									</form>
									
									<p><b>Viết đánh giá</b></p>
									
									<form action="#">
										<span>
											<input style="width:100%;margin-left:0;" type="text" class="comment_name" placeholder="Tên của bạn"/>
										</span>
										<textarea name="comment" class="comment_content" placeholder="Nội dung bình luận" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right send-comment">
											Gửi
										</button>
										<div id="notify_comment"></div>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->

                    
@endsection