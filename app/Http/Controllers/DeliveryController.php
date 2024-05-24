<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\City;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
// session_start();
class DeliveryController extends Controller
{
	public function save_delivery(Request $request){
		$data = array();
		$data['fee_name'] = $request->fee_name;
		$data['fee_feeship'] = $request->fee_ship;

		DB::table('tbl_freeship')->insert($data);
        Session::put('message', 'Thêm thành công!');
        return Redirect::to('all-delivery');
	}
	public function all_delivery()
    {
        $all_delivery = DB::table('tbl_freeship')->get();
        $manager_delivery = view('admin.delivery.add_delivery')->with('all_delivery', $all_delivery);
        return view('admin_layout', compact('manager_delivery'));
    }
	public function update_delivery(Request $request, $fee_id){
        $data = array();
        $data['fee_id'] = $request->fee_id;
        $data['fee_feeship'] = $request->fee_feeship;
        DB::table('tbl_freeship')->where('fee_id',$fee_id)->update($data);
        Session::put('message', 'Cập nhật thành công!');
        return Redirect::to('delivery');
    }
	
    public function add_delivery(Request $request){

    	return view('admin.delivery.add_delivery');
    }
	public function delete_delivery ($fee_id){
        DB::table('tbl_freeship')->where('fee_id',$fee_id)->delete();
        Session::put('message', 'Xóa thành công!');
        return Redirect::to('all-delivery');
    }

	public function edit_delivery($fee_id){
		$edit_delivery = DB::table('tbl_feeship')->where('fee_id',$fee_id)->get();
        $manager_delivery = view('admin.edit_delivery')->with('edit_delivery', $edit_delivery);
        return view('admin_layout')->with('admin.edit_delivery', $manager_delivery);
	}

    // public function select_delivery(Request $request){
    // 	$data = $request->all();
    // 	if($data['action']){
    // 		$output = '';
    // 		if($data['action']=="city"){
    // 			$select_province = Province::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
    // 				$output.='<option>---Chọn quận huyện---</option>';
    // 			foreach($select_province as $key => $province){
    // 				$output.='<option value="'.$province->maqh.'">'.$province->name_quanhuyen.'</option>';
    // 			}

    // 		}else{

    // 			$select_wards = Wards::where('maqh',$data['ma_id'])->orderby('xaid','ASC')->get();
    // 			$output.='<option>---Chọn xã phường---</option>';
    // 			foreach($select_wards as $key => $ward){
    // 				$output.='<option value="'.$ward->xaid.'">'.$ward->name_xaphuong.'</option>';
    // 			}
    // 		}
    // 		echo $output;
    // 	}
    	
    // }
}
