@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2>Cập nhật danh mục sản phẩm</h2>
            </header>
            <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">',$message,'</span>';
                Session::put('message',null);
            }
            ?>
            <div class="panel-body">
                @foreach($edit_category_product as $key => $edit_value)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục sản phẩm</label>
                            <input type="text" value="{{$edit_value->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <textarea style="resize: none" row=5 type="text" name="category_product_desc" class="form-control" id="exampleInputPassword1" >{{$edit_value->category_desc}}</textarea>
                        </div>
                        
                        <button type="submit" name="add_category_product" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection