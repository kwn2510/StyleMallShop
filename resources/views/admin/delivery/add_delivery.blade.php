@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm vận chuyển
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                            <form role="form" action="{{URL::to('/save-delivery')}}" method="post">
                                    @csrf 
                             
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Khu vực</label>
                                    <input type="text" name="fee_name" class="form-control fee_ship" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phí vận chuyển</label>
                                    <input type="text" name="fee_ship" class="form-control fee_ship" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                               
                                <button type="submit" name="add_delivery" class="btn btn-info add_delivery">Thêm phí vận chuyển</button>
                                </form>
                            </div>
                            
                        </div>
                    </section>

            </div>
@endsection