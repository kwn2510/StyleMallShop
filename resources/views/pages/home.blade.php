@extends('welcome')
@section('content')


                    <div>
                            <a href=""><img src="{{asset('public/frontend/images/home/gioi-thieu.png')}}" width="100%"></a>
                    </div>
                    <h2 style="margin-top: 100px;" class="title text-center">Hàng mới về</h2>

                    <div class="features_items"> <!-- for you-->

                    <div class="col">
                            @foreach($new_product as $key => $product)
                            <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}" >
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="" />
                                            <h2> {{ number_format(floatval($product->product_price)).' '.'VND'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <p><button type="submit" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Thêm giỏ hàng
                                            </button></p>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                            <h2> {{ number_format(floatval($product->product_price)).' '.'VND'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <p><button type="submit" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Thêm giỏ hàng
                                            </button></p>
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

                    <h2 style="margin-top: 100px;" class="title text-center">Dành cho bạn</h2>

                    <div class="features_items"> <!-- for you-->

                        <div class="col">
                            @foreach($all_product as $key => $product)
                            <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}" >
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="" />
                                            <h2> {{ number_format(floatval($product->product_price)).' '.'VND'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <p><button type="submit" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Thêm giỏ hàng
                                            </button></p>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                            <h2> {{ number_format(floatval($product->product_price)).' '.'VND'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <p><button type="submit" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Thêm giỏ hàng
                                            </button></p>
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

                    <div>
                            <a href=""><img src="{{asset('public/frontend/images/home/foru.png')}}" width="100%"></a>
                    </div>

                    <div class="category-tab" style="margin-top: 100px;"> <!--new and trendy -->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
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
                                                    <img src="{{('public/frontend/images/home/trending1.jpg')}}" alt="" />
                                                    <h2>đ450.000</h2>
                                                    <p>Áo khoác len Cardigan</p>
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
                                                    <h2>đ230.000</h2>
                                                    <p>Áo brandy hot trend</p>
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
                                                    <h2>đ289.000</h2>
                                                    <p>Áo khoác len Cardigan</p>
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
                                                    <h2>đ250.000</h2>
                                                    <p>Chân váy thể thao</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>


@endsection