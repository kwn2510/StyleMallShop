<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HOME</title>


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v20.0" nonce="WDMJ51hD"></script>
    <!--CSS-->
    <link href="{{asset('public/frontend/css/main1.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/product.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/cart.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/checkout.css')}}" rel="stylesheet">

     <!-- Liên kết thư viện jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
     <!-- Liên kết thư viện Bootstrap (bao gồm carousel) -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <!---->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <!-- Liên kết đến tệp CSS của Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

     <!-- Liên kết file JavaScript riêng -->
     <script src="{{asset('public/frontend/js/script.js')}}"></script>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!---->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
   

</head>
<body>
    <header id="header">
        <div class="header_top"> <!--heder-top-->
            <div class="container">
                <div class="row">
                    <div class="row1">
                        <div class="logo">
                            <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/images/home/logo.png')}}" alt="" class="img_logo"></a>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="shop-menu">
                            <ul class="nav navbar-nav">
                                
                                <!--thanh toán-->
                                <?php
                                $customer_id = Session::get('customer_id');
                                $shipping_id = Session::get('shipping_id');
                                if ($customer_id != NULL) {
                                ?>
                                    <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-lock"> Thanh toán</i></a></li>
                                <?php
                                } elseif ($customer_id != NULL && $shipping_id != NULL) {
                                ?>
                                    <li><a href="{{URL::to('/payment')}}"><i class="fa fa-lock"> Thanh toán</i></a></li>
                                <?php
                                } else {
                                ?>
                                    <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"> Thanh toán</i></a></li>
                                <?php
                                }
                                ?>
                                <!--giỏ hàng-->
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){

                                ?>
                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"> Giỏ hàng</i></a></li>
                                
                                <?php
                                    }else{
                                ?>
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-shopping-cart"> Giỏ hàng</i></a></li>
                                <?php
                                    }
                                ?>
                                
                                
                                <!--đăng nhập/đăng xuất-->
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){

                                ?>
                                <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"> Đăng xuất</i></a></li>
                                
                                <?php
                                    }else{
                                ?>
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"> Đăng nhập</i></a></li>
                                <?php
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
                            <li><a href="{{URL::to('/show-cart')}}" class="active">Giỏ hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8">
                    <form action="{{URL::to('/tim-kiem')}}" method="POST" class="navbar-form navbar-right">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm" class="form-control" />
                            <span class="input-group-btn">
                                <button type="submit" name="search_items" class="btn btn-default btn-sm">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            </div>
        </div>

    </header>

    <!--slide-->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="margin-top: 30px;">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                            <li data-target="#slider-carousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset('public/frontend/images/home/SALE.png')}}" alt="" class="girl img-responsive" />
                            </div>
                            <div class="item">
                                <img src="{{asset('public/frontend/images/home/home1.png')}}" alt="" class="girl img-responsive" />
                            </div>
                            <div class="item">
                                <img src="{{asset('public/frontend/images/home/home2.png')}}" alt="" class="girl img-responsive" />
                            </div>
                            <div class="item">
                                <img src="{{asset('public/frontend/images/home/img-home4.png')}}" alt="" class="girl img-responsive" />
                            </div>
                        </div>
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar" style="margin-top: 100px;">
                        <h2 class="small_title">Danh Mục</h2>
                        <div class="panel-group category-products" id="accordian">
                            @foreach($category as $key => $cate)
                            <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
                            @endforeach
                        </div>

                        <div class="trendy">
                            <h2 class="small_title">Trendy</h2>
                            <div class="trendy-name">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Classic</h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Feminine</h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Sporty</h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Chic</h4>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    @yield('content')

                </div>

            </div>
        </div>
    </section>
  

    <footer id="footer"> <!--footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div style="float: center;" class="fb-page" data-href="https://www.facebook.com/hi.carrotgarden" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/hi.carrotgarden" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/hi.carrotgarden">Carrot Garden</a>
                        </blockquote>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Liên Hệ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"><i class="fa fa-phone">0398 514 436</i></a></li>
                                <li><a href="#"><i class="fa fa-envelope">stylemall@gmail.com</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Hỗ Trợ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Hướng dẫn mua hàng</a></li>
                                <li><a href="#">Chăm sóc khách hàng</a></li>
                                <li><a href="#">Phản hồi khiếu nại</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 col-sm-offset-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.170589942782!2d105.7794095!3d21.0658478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552b7855dd8d%3A0xb019f0d1e1bdd275!2zMzQ3IMSQLiBD4buVIE5odeG6vywgQ-G7lSBOaHXhur8sIELhuq9jIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1717927037555!5m2!1svi!2s" 
                        width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
			<div class="container">
				<div class="row">
                    <div class="pull-left"><h4>Copyright © 2024 StyleMallShop</h4></div>
				</div>
			</div>
		</div>
    </footer>

    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/frontend/js/login.js" class=""></script>
    
    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(`.add-to-cart`).click(function(){
                var id= $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                
                
                $.ajax({
                    url:'{!! url('/add-cart-ajax') !!}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,
                        cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token
                    },
                    success:function(data){
                        swal({
                            title: "Đã thêm sản phẩm vào giỏ hàng",
                            text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                            showCancelButton: true,
                            cancelButtonText: "quot;Xem tiếp",
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "Đi đến giỏ hàng",
                            closeOnConfirm: false
                            },
                            function() {
                            window.location.href = &quot;{{url('/gio-hang')}};
                        });
                    }
                });

            });
        });
    </script>



   
    <script type="text/javascript">
    $(document).ready(function(){
        // Mã JavaScript/AJAX ở đây
        load_comment();

        function load_comment(){
            var product_id = $('input[name="comment_product_id"]').val();
            var _token = $('input[name="_token"]').val();
            
            $.ajax({
                url: "{{ url('/load-comment') }}",
                method: "POST",
                data: { product_id: product_id, _token: _token },
                success: function(data){
                    $('#comment_show').html(data);
                },
                error: function(xhr, status, error){
                    console.log(xhr.responseText);
                }
            });
        }

        $('.send-comment').click(function(){
            var product_id = $('.comment_product_id').val();
            var comment_name = $('.comment_name').val();
            var comment_content = $('.comment_content').val();
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url: "{{ url('/send-comment') }}",
                method: "POST",
                data: { product_id: product_id, comment_name: comment_name, comment_content: comment_content, _token: _token },
                success: function(data){
                    $('#notify_comment').html('<p class="text text-success">Thêm thành công! Đánh giá của bạn đang chờ duyệt</p>')
                    load_comment();
                    $('#notify_comment').fadeOut(5000);
                    $('.comment_name').val('');
                    $('.comment_content').val('');
                }
            });
        });
    });
</script>
    


</body>
</html>