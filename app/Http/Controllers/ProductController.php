<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Session;
use App\Models\Comment;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    public function add_product()
    {
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        
        return view('admin.add_product')->with('cate_product', $cate_product);
    }

    public function all_product()
{
    $all_product = DB::table('tbl_product')
        ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
        ->orderby('tbl_product.product_id','desc')
        ->get()
        ->slice(0, 6);
    $manager_product = view('admin.all_product')->with('all_product', $all_product);
    return view('admin_layout')->with('admin.all_product', $manager_product);
}

    public function save_product(Request $request)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['product_status'] = $request->product_status;

        $get_image = $request->file('product_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99). '.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message', 'Thêm thành công!');
            return Redirect::to('add-product');
        }
        
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        Session::put('message', 'Thêm thành công!');
        return Redirect::to('add-product');
    }

    //edit category product
    public function edit_product($product_id){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();

        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product')->with('edit_product', $edit_product)->with('cate_product',$cate_product);

        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }

    //update
    public function update_product(Request $request, $product_id){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['product_status'] = $request->product_status;

        $get_image = $request->file('product_image');
        
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99). '.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id', $product_id)->update($data);
            Session::put('message', 'Cập nhật thành công!');
            return Redirect::to('all-product');
        }
        
        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        Session::put('message', 'Cập nhật thất bại!');
        return Redirect::to('all-product');
    }

    //delete
    public function delete_product ($product_id){
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message', 'Xóa thành công!');
        return Redirect::to('all-product');
    }
    //End admin page


    //details product
    public function details_product($product_id){
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '0')
            ->orderBy('category_id', 'desc')
            ->get();

        $details_product = DB::table('tbl_product')
        ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
        ->where('tbl_product.product_id',$product_id)
        ->get();
        
        foreach($details_product as $key => $value){
            $category_id = $value->category_id;
        }
        $related_product = DB::table('tbl_product')
        ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
        ->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();

        return view('pages.sanpham.show_details')
        ->with('category', $cate_product)
        ->with('product_details', $details_product)
        ->with('relate',$related_product);
    }

    //comment
    public function load_comment(Request $request)
    {
        $product_id = $request->product_id;
        $comment = Comment::where('comment_product_id', $product_id)->where('comment_status',0)->get();
        $comment_rep = Comment::with('product')
        ->where('comment_parent_comment','>',0)->get();
        $output = '';
    
        foreach($comment as $key => $comm) {
            $output .= '
            
            <div class="row style_comment">
										
										<div class="col-md-2">
                                        <img width="100%" src="' . asset('public/frontend/images/AVT.jpg') . '" alt="" class="img img-responsive img-thumbnail">

										</div>
										<div class="col-md-10">
											<p style="color:blue;text-align:left;">@'.$comm->comment_name.'</p>
                                            <p style="text-align:left;">'.$comm->comment_date.'</p>
											<p style="text-align:left;">'.$comm->comment.'</p>
										</div>
									</div><p></p> 
                                    ';
                                    
                                    foreach($comment_rep as $key => $rep_comment) {
                                        if($rep_comment->comment_parent_comment==$comm->comment_id){
                                            $output .= ' 
                                            <div class="row style_comment" style="margin:5px 40px;background:#EEEEEE;">
										
                                                <div class="col-md-2">
                                                <img width="80%" src="' . asset('public/frontend/images/avt-admin.jpg') . '" alt="" class="img img-responsive img-thumbnail">

                                                </div>
                                                <div class="col-md-10">
                                                    <p style="color:green;text-align:left;">@Admin</p>
                                                    <p style="text-align:left;">'.$rep_comment->comment.'</p>
                                                    <p style="text-align:left;"></p>
                                                </div>
                                            </div><br>';
                                        }
                                    }

        }
        return $output;
    }

    public function send_comment(Request $request){
        $product_id = $request->product_id;
        $comment_name = $request->comment_name;
        $comment_content = $request->comment_content;
        $comment = new Comment();
        $comment->comment = $comment_content;
        $comment->comment_name = $comment_name;
        $comment->comment_product_id = $product_id;
        $comment->comment_status = 1;
        $comment->save();
    }
    public function list_comment(){
        $comment = Comment::with('product')->orderBy('comment_status','DESC')->get();
        $comment_rep = Comment::with('product')
        ->where('comment_parent_comment','>',0)->orderBy('comment_id','DESC')->get();
        return view('admin.comment.list_comment')->with(compact('comment','comment_rep'));
    }

    public function allow_comment(Request $request){
        $data = $request->all();
        $comment = Comment::find($data['comment_id']);
        $comment->comment_status = $data['comment_status'];
        $comment->save();
    }

    public function reply_comment(Request $request){
        $data = $request->all();
        $comment = new Comment();
        $comment->comment = $data['comment'];
        $comment->comment_product_id = $data['comment_product_id'];
        $comment->comment_parent_comment = $data['comment_id'];
        $comment->comment_status = 0;
        $comment->comment_name = 'Admin';
        $comment->save();

    }
}
