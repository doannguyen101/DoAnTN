<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\bangthirequest;
use App\bangthi;
use DB;

class bangthiController extends Controller {
	public function dulieu (){
		$bangthi = DB::table('bangthis')->select('mabangthi','tenbangthi','trangthai')->get();
			return view('pages.quanlybangthi',compact('bangthi'));
	}

/*	public function getbangthi ($mabaiviet){
		$baiviettheoid = DB::table('baiviets')->join('nguoidungs','baiviets.nguoidang_id', '=' ,'nguoidungs.tendangnhap')->join('bangthis','baiviets.mabangthi_id', '=' ,
			'bangthis.mabangthi')->select('mabaiviet','noidung','ngaydang','ngaysoan','loaibaiviet','nguoidang_id','nguoidungs.tendangnhap','bangthis.tenbangthi','mabangthi_id','baiviets.trangthai')->where('mabaiviet',$mabaiviet)->get();
		return view('pages.sua',compact('baiviettheoid'));
	
	}
*/
	public function thembangthi (bangthirequest $request) {
		$bangthi = new  bangthi;
		$bangthi->tenbangthi = $request->txttenbang;
		$bangthi->trangthai = "1";
		$bangthi->save();
		return redirect('quanlybangthi');

	}

}