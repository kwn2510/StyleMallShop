@extends('welcome')
@section('content')
                    @foreach($category_name as $key => $name)
                    <h2 style="margin-top: 100px;" class="title text-center">{{$name->category_name}}</h2>
                    @endforeach
                    <div class="features_items"> <!-- for you-->
                        <div class="col">
                            @foreach($category_by_id as $key => $product)
                            <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}" >
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="" />
                                            <h2> {{ number_format(floatval($product->product_price)).' '.'VND'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shpping-cart">Thêm vào giỏ </i></a>
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
                            </a>
                            @endforeach 
                        </div>
                        
                    </div>


@endsection