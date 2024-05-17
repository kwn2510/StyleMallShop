@extends('welcome')
@section('content')

                    <div class="sale_items"> <!--sale-->
                        <h2 class="title text-center" style="margin-top: 100px;">Ưu đãi trong tháng</h2>
                        <div id="sale-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/sale.jpg')}}" alt="" />
                                                    <h2>đ150.000</h2>
                                                    <h3 style="color:gray; text-decoration: line-through;">đ250.000</h3>
                                                    <p>Set đồ tiểu thư màu xanh ngọc có nơ đính đá</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/sale2.jpg')}}" alt="" />
                                                    <h2>đ150.000</h2>
                                                    <h3 style="color:gray; text-decoration: line-through;">đ250.000</h3>
                                                    <p>Set đồ tiểu thư màu xanh ngọc có nơ đính đá</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/sale3.jpg')}}" alt="" />
                                                    <h2>đ150.000</h2>
                                                    <h3 style="color:gray; text-decoration: line-through;">đ250.000</h3>
                                                    <p>Set đồ tiểu thư màu xanh ngọc có nơ đính đá</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/sale5.jpg')}}" alt="" />
                                                    <h2>đ150.000</h2>
                                                    <h3 style="color:gray; text-decoration: line-through;">đ250.000</h3>
                                                    <p>Set đồ tiểu thư màu xanh ngọc có nơ đính đá</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/sale6.jpg')}}" alt="" />
                                                    <h2>đ150.000</h2>
                                                    <h3 style="color:gray; text-decoration: line-through;">đ250.000</h3>
                                                    <p>Set đồ tiểu thư màu xanh ngọc có nơ đính đá</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/sale7.jpg')}}" alt="" />
                                                    <h2>đ150.000</h2>
                                                    <h3 style="color:gray; text-decoration: line-through;">đ250.000</h3>
                                                    <p>Set đồ tiểu thư màu xanh ngọc có nơ đính đá</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left sale-item-control" href="#sale-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right sale-item-control" href="#sale-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>	
                        </div>
                    </div><!--end sale-->


                    <h2 style="margin-top: 100px;" class="title text-center">Dành cho bạn</h2>

                    <div class="features_items"> <!-- for you-->

                        <div class="image_foryou">
                            <img src="{{URL::to('public/upload/product/home/foru.png')}}" alt="" class="image_foryou">
                        </div>
                        <div class="col">
                            @foreach($all_product as $key => $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="" />
                                            <h2> {{ number_format(floatval($product->product_price)).' '.'VND'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shpping-cart">Thêm vào giỏ </i></a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                            <h2> {{ number_format(floatval($product->product_price)).' '.'VND'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shpping-cart">Thêm vào giỏ </i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square">Yêu thích</i></a></li>
                                            <li><a href="#"><i class="fa fa-plus-square">Chia sẻ</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>



                    <div class="category-tab" style="margin-top: 100px;"> <!--new and trendy -->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#new_products" data-toggle="tab">New Products</a></li>
								<li><a href="#trending_products" data-toggle="tab">Trendy Products</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="#new_products">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/new5.jpg')}}" alt="" />
                                                    <h2>đ450.000</h2>
                                                    <p>Áo khoác len Cardigan</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/new6.jpg')}}" alt="" />
                                                    <h2>đ230.000</h2>
                                                    <p>Áo brandy hot trend</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/new2.jpg')}}" alt="" />
                                                    <h2>đ289.000</h2>
                                                    <p>Áo khoác len Cardigan</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/new7.jpg')}}" alt="" />
                                                    <h2>đ250.000</h2>
                                                    <p>Chân váy thể thao</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="#trending_products">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/trending1.jpg')}}" alt="" />
                                                    <h2>đ315.000</h2>
                                                    <p>Set áo sơ mi bèo mix chân váy đen</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/trending2.jpg')}}" alt="" />
                                                    <h2>đ150.000</h2>
                                                    <p>Set hai dây phối ren ôm dáng thời trang</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/trending3.jpg')}}" alt="" />
                                                    <h2>đ279.000</h2>
                                                    <p>Đầm tay phồng hoa nhí</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/home/trending4.jpg')}}" alt="" />
                                                    <h2>đ210.000</h2>
                                                    <p>Quần ống suông kaki</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection