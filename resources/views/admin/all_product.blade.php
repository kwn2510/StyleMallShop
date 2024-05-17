@extends('admin_layout')
@section('admin_content')
<style>
    
  body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
  }
  
  /* Header styling */
  .header {
    background-color: #027833;
    padding: 10px 20px;
  }
  
  a {
    color: #fff;
  }
  
  span {
    color: #10793c;
  }

  
  .logo {
    float: left;
    font-size: 20px;
    font-weight: bold;
  }
  
  .top-nav {
    float: right;
  }
  
  /* Search bar styling */
  .search {
    width: 150px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  
  /* User dropdown styling */
  .dropdown {
    display: inline-block;
  }
  
  .dropdown-toggle {
    padding: 5px 10px;
  }
  
  .username {
    margin-right: 10px;
  }
  
  .dropdown-menu {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 3px;
    padding: 5px;
  }
  
  /* Sidebar styling */
  .container{
    display: flex;
  }
  .aside {
    flex: 1;
    width: 50%;
  }
  
  #sidebar {
    background-color: #eee;
    padding: 10px;
  }
  
  .sidebar-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .sidebar-menu li {
    margin-bottom: 10px;
  }
  
  .sidebar-menu a {
    display: block;
    padding: 10px;
    color: #333;
    text-decoration: none;
  }
  
  .sidebar-menu a:hover {
    background-color: #ddd;
  }
  
  a.active.styling-edit{
    font-size: 20px;
  }
  .sub-menu {
    position: relative;
  }
  
  .sub-menu ul {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 3px;
    padding: 5px;
  }
  
  .sub-menu:hover ul {
    display: block;
  }
  
  /* Main content styling */
  #main-content {
    padding: 20px;
    flex: 1;
  }
</style>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>Hiển Thị Sản Phẩm</h2>
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
            <th>Tên sản phẩm</th>
            <th>Giá </th>
            <th>Hình sản phẩm</th>
            <th>Danh mục</th>

            <th>Hiển thị</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($all_product as $key => $pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $pro->product_name }}</td>
            <td>{{ $pro->product_price }}</td>
            <td><img src="public/upload/product/{{ $pro->product_image }}" height="100" width="100"></td>
            <td>{{ $pro->category_name }}</td>

            <td><span class="text-ellipsis">
            <?php
            if($pro->product_status==0){
                echo '<a href="#"><span class="fa fa-thumbs-up"></span></a>';
            }else{
                echo '<a href="#"><span class="fa fa-thumbs-down"></span></a>';
            }
            ?>
            </span></td>
            
            <td>
              <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square text-success text-active"></i></a>
                <a href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>

          
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection