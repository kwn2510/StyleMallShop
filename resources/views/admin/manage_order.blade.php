@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>Đơn hàng</h2>
    </div>
    <div id="notify_order"></div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên khách hàng</th>
            <th>Thành tiền</th>
            <th>Tình trạng</th>

            <th>Hiển thị</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($all_order as $key => $order)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->order_total }}</td>

            <td>
              @if($order->order_status==1)
                    <input type="button" data-order_status="0" data-order_id="{{$order->order_id}}"  id="{{$order->shipping_id}}"
                     class="btn btn-primary order_duyet_btn" value="Đang giao">
              @else
                    <input type="button" data-order_status="1" data-order_id="{{$order->order_id}}" 
                    id="{{$order->shipping_id}}" class="btn btn-danger order_duyet_btn" value="Đang xử lý">

              @endif
             </td>
           
            
            <td>
              <a href="{{URL::to('/view-order/'.$order->order_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square text-success text-active"></i></a>
                <a href="{{URL::to('/delete-order/'.$order->order_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>

          
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection