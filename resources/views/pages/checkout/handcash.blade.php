@extends('welcome')
@section('content')
<section id="cart_items">
		<div class="container">
            <form action="{{URL::to('/order-place')}} mrthod="POST">
                <div class="review-payment">
                    <h3>Chúng tôi xin bày tỏ lòng biết ơn chân thành vì đã lựa chọn sản phẩm thời trang của chúng 
                        tôi tại <span style="color: #047449; font-weight: bold;">StyleMall</span>. Điều này chứng tỏ sự tin tưởng và sự đánh giá cao từ phía bạn đối với 
                        chất lượng và phong cách mà chúng tôi mang đến. </h3>
                    <h3>Chúng tôi cam kết tiếp tục cung cấp những 
                        sản phẩm thời trang tuyệt vời, đáp ứng sự mong đợi của bạn và mang lại sự tự tin và phong 
                        cách đặc trưng cho bạn. Một lần nữa, chân thành cảm ơn bạn đã lựa chọn <span style="color: #047449; font-weight: bold;">StyleMall</span> làm điểm
                         đến thời trang của mình <span style="color: red;">&#x2764;</span></h3>
                
                </div>
            </form>
			
		</div>
	</section> <!--/#cart_items-->
@endsection