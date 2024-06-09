@extends('welcome')
@section('content')
<div class="">
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>Địa chỉ nhận hàng</h2>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            
          <tr>
            <td>{{$order_by_id->customer_name}}</td>
            <td>{{$order_by_id->customer_phone}}</td>
            <td>{{$order_by_id->shipping_address}}</td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>Chi tiết đơn hàng</h2>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            
          <tr>
            <td>{{$order_by_id->product_name}}</td>
            <td>{{$order_by_id->product_sales_quantity}}</td>
            <td>{{$order_by_id->product_price}}</td>
            <td>{{$order_by_id->product_price*$order_by_id->product_sales_quantity}}</td>
          </tr>

        </tbody>
      </table>
    </div>
</div>

<div class="review-payment">
                    <h3>Chúng tôi xin bày tỏ lòng biết ơn chân thành vì đã lựa chọn sản phẩm thời trang của chúng 
                        tôi tại <span style="color: #047449; font-weight: bold;">StyleMall</span>. Điều này chứng tỏ sự tin tưởng và sự đánh giá cao từ phía bạn đối với 
                        chất lượng và phong cách mà chúng tôi mang đến. </h3>
                    <h3>Chúng tôi cam kết tiếp tục cung cấp những 
                        sản phẩm thời trang tuyệt vời, đáp ứng sự mong đợi của bạn và mang lại sự tự tin và phong 
                        cách đặc trưng cho bạn. Một lần nữa, chân thành cảm ơn bạn đã lựa chọn <span style="color: #047449; font-weight: bold;">StyleMall</span> làm điểm
                         đến thời trang của mình <span style="color: red;">&#x2764;</span></h3>
                
</div>
        
@endsection