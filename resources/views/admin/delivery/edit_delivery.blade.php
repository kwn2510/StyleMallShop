@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2>Cập phí vận chuyển</h2>
            </header>
            <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">',$message,'</span>';
                Session::put('message',null);
            }
            ?>
            <div class="panel-body">
                @foreach($edit_delivery as $key => $edit_value)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-delivery/'.$edit_value->fee_id)}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn thành phố</label>
                                      <select name="city" id="city" class="form-control input-sm m-bot15 choose city">
                                    
                                            <option value="">--Chọn tỉnh thành phố--</option>
                                        @foreach($city as $key => $ci)
                                            <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                        @endforeach
                                            
                                    </select>
                        </div>
                        <div class="form-group">
                                    <label for="exampleInputEmail1">Phí vận chuyển</label>
                                    <input type="text" name="fee_ship" class="form-control fee_ship" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        
                        <button type="submit" name="add_delivery" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection