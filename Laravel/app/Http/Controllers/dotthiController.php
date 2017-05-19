<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\dotthirequest;
use App\dotthi;
use DB;

class dotthiController extends Controller {
	public function dulieu (){
		$dotthi = DB::table('dotthis')->select('madotthi','tendotthi','thoigianbatdau','thoigianketthuc','trangthai')->get();
		return view('pages.quanlydotthi',compact('dotthi'));
	}

/*	public function getbaiviet ($mabaiviet){
		$baiviettheoid = DB::table('baiviets')->join('nguoidungs','baiviets.nguoidang_id', '=' ,'nguoidungs.tendangnhap')->join('bangthis','baiviets.mabangthi_id', '=' ,
			'bangthis.mabangthi')->select('mabaiviet','noidung','ngaydang','ngaysoan','loaibaiviet','nguoidang_id','nguoidungs.tendangnhap','bangthis.tenbangthi','mabangthi_id','baiviets.trangthai')->where('mabaiviet',$mabaiviet)->get();
		return view('pages.sua',compact('baiviettheoid'));
	
	}*/

	public function themdotthi (dotthirequest $request) {
		$dotthi = new  dotthi;
		$dotthi->tendotthi = $request->txttendotthi;
		$dotthi->thoigianbatdau = $request->txtthoigianbatdau;
		$dotthi->thoigianketthuc = $request->txtthoigianketthuc;
		$dotthi->trangthai = "1";
		$dotthi->save();
		return redirect('quanlydotthi');

	}

}