@extends('admin_layout')
@section('admin_content')

<style>
    .management-title {
        font-weight: bold;
        text-align: center;
    }
    h3 {
        text-align: center;
    }
    p{
        text-align: center;
    }
    a {
        color: green;
        font-weight: bold;
    }
    h5 {
        text-align: left;
    }
    .tips {
        display: flex;
        margin-left: 70px;
    }
</style>
<h2 class="management-title">Trang quản lý </h2>
<h3>Shop bán hàng Style Mall</h3>
<p>Đặng Thị Minh Phượng - Nguyễn Thùy Linh</p>
<div class="tips">
    <div class="tip">
        <div class="">
            <img src="public/frontend/images/admin/danh-muc.png" width="30%">
            <h5><a href="{{URL::to('/all-category-product')}}">Danh Mục</a><h5>
        </div>
        <div class="">
            <img src="public/frontend/images/admin/add-danh-muc.png" width="30%">
            <h5><a href="{{URL::to('/add-category-product')}}">Thêm Danh Mục</a><h5>
        </div>
    </div>
    <div class="tip">
        <div class="">
            <img src="public/frontend/images/admin/san-pham.png" width="30%">
            <h5><a href="{{URL::to('/all-category-product')}}">Sản Phẩm</a><h5>
        </div>
        <div class="">
            <img src="public/frontend/images/admin/add-san-pham.png" width="30%">
            <h5><a href="{{URL::to('/add-category-product')}}">Thêm Sản Phẩm</a><h5>
        </div>
    </div>
    <div class="tip">
        <div class="">
            <img src="public/frontend/images/admin/don-hang.png" width="30%">
            <h5><a href="{{URL::to('/all-category-product')}}">Đơn Hàng</a><h5>
        </div>
    </div>
    <div class="tip">
        <div class="">
            <img src="public/frontend/images/admin/cmt.png" width="30%">
            <h5><a href="{{URL::to('/all-category-product')}}">Bình Luận</a><h5>
        </div>
    </div>
</div>


@endsection