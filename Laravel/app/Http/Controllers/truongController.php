<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\truongrequest;
use App\truong;
use DB;

class truongController extends Controller {
	public function dulieu (){
		$truong = DB::table('truongs')->select('matruong','tentruong','trangthai')->get();
			return view('pages.quanlytruong',compact('truong'));
	}

/*	public function getbangthi ($mabaiviet){
		$baiviettheoid = DB::table('baiviets')->join('nguoidungs','baiviets.nguoidang_id', '=' ,'nguoidungs.tendangnhap')->join('bangthis','baiviets.mabangthi_id', '=' ,
			'bangthis.mabangthi')->select('mabaiviet','noidung','ngaydang','ngaysoan','loaibaiviet','nguoidang_id','nguoidungs.tendangnhap','bangthis.tenbangthi','mabangthi_id','baiviets.trangthai')->where('mabaiviet',$mabaiviet)->get();
		return view('pages.sua',compact('baiviettheoid'));
	
	}
*/
	public function themtruong (truongrequest $request) {
		$truong = new  truong;
		$truong->tentruong = $request->txttentruong;
		$truong->trangthai = "1";
		$truong->save();
		return redirect('quanlytruong');

	}

}