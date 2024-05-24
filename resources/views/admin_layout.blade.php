<!DOCTYPE html>
<head>
    <title>ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <!-- Custom CSS -->
    <link href="{{asset('public/backend/css/css.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
    <script src="{{asset('public/backend/js/morris.js')}}"></script>
</head>
<body>
    <section >
    <!--header start-->
        <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="{{URL::to('/trang-chu')}}" class="logo">
                QUẢN LÝ
            </a>
        </div>
        <!--logo end-->
        <div class="top-nav clearfix">
            
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="images/2.png">
                        <span class="username">Acount</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
            
            </ul>
        </div>
        </header>
    

        <div>
            <aside class="aside" style="margin: 20px;">
                <div id="sidebar" class="nav-collapse">
                    <!-- sidebar menu start-->
                    <div class="leftside-navigation">
                        <ul class="sidebar-menu" id="nav-accordion">
                            <li>
                                <a class="active" href="index.html">
                                    <i class="fa fa-dashboard"></i>
                                    <span>Tổng quan</span>
                                </a>
                            </li>
                            
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fa fa-book"></i>
                                    <span>Danh mục</span>
                                </a>
                                <ul class="sub">
                                    <li><a href="{{URL::to('/add-category-product')}}">Thêm danh mục sản phẩm</a></li>
                                    <li><a href="{{URL::to('/all-category-product')}}">Hiển thị danh mục sản phẩm</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fa fa-book"></i>
                                    <span>Sản phẩm</span>
                                </a>
                                <ul class="sub">
                                    <li><a href="{{URL::to('/add-product')}}">Thêm sản phẩm</a></li>
                                    <li><a href="{{URL::to('/all-product')}}">Hiển thị sản phẩm</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fa fa-book"></i>
                                    <span>Đơn hàng</span>
                                </a>
                                <ul class="sub">
                                    <li><a href="{{URL::to('/manage-order')}}">Quản lý đơn hàng</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fa fa-book"></i>
                                    <span>Đánh giá</span>
                                </a>
                                <ul class="sub">
                                    <li><a href="{{URL::to('/comment')}}">Hiển thị đánh giá</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fa fa-book"></i>
                                    <span>Vận chuyển</span>
                                </a>
                                <ul class="sub">
                                    <li><a href="{{URL::to('/add-delivery')}}">Quản lý vận chuyển</a></li>
                                    <li><a href="{{URL::to('/all-delivery')}}">Hiển thị phí vận chuyển</a></li>
                                    
                                
                                </ul>
                            </li>
                            
                        </ul>            
                    </div>
                    <!-- sidebar menu end-->
                </div>
            </aside>
        
            <section id="main-content">
                <section class="wrapper">
                    @yield('admin_content')
                </section>
                    
                
            </section>
        </div>

    </section>
    <!--main content end-->
    </section>
    <script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('public/backend/js/scripts.js')}}"></script>
    <script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
    <!-- morris JavaScript -->	

    <script type="text/javascript">
        $('.comment_duyet_btn').click(function(){
            var comment_status = $(this).data('comment_status');
            var comment_id = $(this).data('comment_id');
            var comment_product_id = $(this).attr('id');

            if(comment_status==0){
                var alert = 'Duyệt thành công';
            }else{
                var alert = 'Không duyệt thành công';
            }
            
            $.ajax({
                url:"{{url('/allow-comment')}}",
                method:"POST",
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },
                data:{comment_status:comment_status,comment_id:comment_id,comment_product_id:comment_product_id},
                success:function(data){
                    location.reload();
                    $('#notify_comment').html('<span class="text text-alert">'+alert+'</span>')

                }
            })
        });
        $('.btn-reply-comment').click(function(){
            var comment_id = $(this).data('comment_id');

            var comment = $('.reply_comment_'+comment_id).val();
            
            var comment_product_id = $(this).data('product_id');

            // alert(comment);
            // alert(comment_id);
            // alert(comment_product_id);

            $.ajax({
                url:"{{url('/reply-comment')}}",
                method:"POST",
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },
                data:{comment:comment,comment_id:comment_id,comment_product_id:comment_product_id},
                success:function(data){
                    $('.reply_comment_'+comment_id).val('');
                    $('#notify_comment').html('<span class="text text-alert">Trả lời thành công</span>')

                }
            })
        });
    </script>

   
        <!-- //calendar -->
</body>
</html>