<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;
use App\Slider;
use Illuminate\Support\Facades\Redirect;
use Cart;
use App\Coupon;
// session_start();

class CheckoutController extends Controller
{
    //login_checkout
    public function login_checkout(){

       $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

       return view('pages.checkout.login_checkout')->with('category',$cate_product);
   }
   //add customer

    public function addCustomer(Request $request)
    {
        $data = array();
        $data['customer_name'] = $request->input('customer_name');
        $data['customer_email'] = $request->input('customer_email');
        $data['customer_password'] = md5($request->input('customer_password'));
        $data['customer_phone'] = $request->input('customer_phone');

            DB::table('tbl_customer')->insert($data);
            return redirect('/checkout');
    }
    //checkout
    public function checkout(){
        $cate_product = DB::table('tbl_category_product')
        ->where('category_status','0')
        ->orderby('category_id','desc')->get();

        return view('pages.checkout.show_checkout')->with('category',$cate_product);
    }

    //save checkout customer
    public function save_checkout_customer(Request $request){
    	$data = array();
    	$data['shipping_name'] = $request->shipping_name;
    	$data['shipping_phone'] = $request->shipping_phone;
    	$data['shipping_email'] = $request->shipping_email;
    	$data['shipping_notes'] = $request->shipping_notes;
    	$data['shipping_address'] = $request->shipping_address;

    	$shipping_id = DB::table('tbl_shipping')->insertGetId($data);

    	Session::put('shipping_id',$shipping_id);
    	
    	return Redirect::to('/payment');
    }
    public function payment(){
        $cate_product = DB::table('tbl_category_product')
        ->where('category_status','0')
        ->orderby('category_id','desc')->get();

        return view('pages.checkout.payment')->with('category',$cate_product);

    }

    //logout
    public function logout_checkout(){
    	Session::forget('customer_id');
    	return Redirect::to('/login-checkout');
    }

    //login customer

    public function login_customer(Request $request){
        $email = $request->email_account; 
        $password = md5($request->password_account);
        $result = DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first();
        
        
        if($result){
        
            Session::put('customer_id',$result->customer_id);
            return Redirect::to('/checkout');
        }else{
            return Redirect::to('/login-checkout');
        }
        Session::save();

    }

    //order place
    public function order_place(Request $request){

        $data = array();
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 'Đang chờ xử lý';
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        //insert order
        $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::total();
        // $order_data['order_status'] = '';
        $order_id = DB::table('tbl_order')->insertGetId($order_data);

        $order_by_id = null;

        //insert order_details
        $content = Cart::content();
        foreach($content as $v_content){
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_sales_quantity'] = $v_content->qty;
            DB::table('tbl_order_details')->insert($order_d_data);
        }
        if($data['payment_method']==1){

            echo 'Thanh toán bằng thẻ tín dụng';

        }elseif($data['payment_method']==2){
            Cart::destroy();

            $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

            $order_by_id = DB::table('tbl_order')
            ->join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')
            ->join('tbl_shipping', 'tbl_order.shipping_id', '=', 'tbl_shipping.shipping_id')
            ->join('tbl_order_details', 'tbl_order.order_id', '=', 'tbl_order_details.order_id')
            ->select('tbl_order.*', 'tbl_customer.*', 'tbl_shipping.*', 'tbl_order_details.*')
            ->first();

            $manager_order_by_id  = view('pages.checkout.handcash')->with('order_by_id',$order_by_id);

            return view('pages.checkout.handcash')->with('category',$cate_product)->with('order_by_id',$order_by_id);

        }else{
            echo 'Thẻ ghi nợ';

        }
        
        //return Redirect::to('/payment');
    }

    //order
    public function manage_order(){
        
        // // $this->AuthLogin();
        $all_order = DB::table('tbl_order')
        ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
        ->select('tbl_order.*','tbl_customer.customer_name')
        ->orderby('tbl_order.order_id','desc')->get();
        $manager_order  = view('admin.manage_order')->with('all_order',$all_order);
        return view('admin_layout')->with('admin.manage_order', $manager_order);
    }

    public function view_order($orderId){
        // $this->AuthLogin();
        $order_by_id = DB::table('tbl_order')
        ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
        ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
        ->select('tbl_order.*','tbl_customer.*','tbl_shipping.*','tbl_order_details.*')->first();

        $manager_order_by_id  = view('admin.view_order')->with('order_by_id',$order_by_id);
        return view('admin_layout')->with('admin.view_order', $manager_order_by_id);
        
        
    }

    //delete
    public function delete_order ($order_id){
        DB::table('tbl_order')->where('order_id',$order_id)->delete();
        Session::put('message', 'Xóa thành công!');
        return Redirect::to('manage-order');
    }

    // xử lý đơn hàng
    public function allow_order(Request $request){
        $data = $request->all();
        $order = Order::find($data['order_id']);
        $order->order_status = $data['order_status'];
        $order->save();
    }

    

   

}





