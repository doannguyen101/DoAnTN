<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ketquarequest;
use App\thisinh;
use App\kithi;
use App\nguoidung;
use App\ketqua;
use DB;

class ketquaController extends Controller {
	public function dulieu (){
		$thisinh = DB::table('thisinhs')->join('nguoidungs','thisinhs.tendangnhap', '=' ,'nguoidungs.tendangnhap')->select('mathisinh','hoten')->get();

		$kithi = DB::table('kythis')->select('makythi','tenkythi')->get();

		$ketqua = DB::table('ketquas')->join('thisinhs','ketquas.mathisinh_id', '=' ,'thisinhs.mathisinh')->join('nguoidungs','thisinhs.tendangnhap', '=' ,'nguoidungs.tendangnhap')->join('kythis','ketquas.makythi_id', '=' ,'kythis.makythi')->select('nguoidungs.hoten','kythis.makythi','kythis.tenkythi','ketquas.bainop','ketquas.diemthi','ketquas.ngaynop','ketquas.ngaycham','ketquas.ghichu','ketquas.trangthai')->get();
		return view('pages.quanlyketqua',compact('ketqua','thisinh','kithi'));
	}

/*	public function getbaiviet ($mabaiviet){
		$baiviettheoid = DB::table('baiviets')->join('nguoidungs','baiviets.nguoidang_id', '=' ,'nguoidungs.tendangnhap')->join('bangthis','baiviets.mabangthi_id', '=' ,
			'bangthis.mabangthi')->select('mabaiviet','noidung','ngaydang','ngaysoan','loaibaiviet','nguoidang_id','nguoidungs.tendangnhap','bangthis.tenbangthi','mabangthi_id','baiviets.trangthai')->where('mabaiviet',$mabaiviet)->get();
		return view('pages.sua',compact('baiviettheoid'));
	
	}*/

	public function themketqua (ketquarequest $request) {
		$ketqua = new  ketqua;
		$ketqua->mathisinh_id = $request->cbbtenthisinh;
		$ketqua->makythi_id   = $request->cbbtenkythi;
		$ketqua->bainop 	  = $request->txtbainop;
		$ketqua->diemthi 	  = $request->txtdiemthi;
		$ketqua->ngaynop 	  = $request->txtngaynop;
		$ketqua->ngaycham 	  = $request->txtngaycham;
		$ketqua->ghichu		  = $request->txtghichu;
		$ketqua->trangthai 	  = "1";
		$ketqua->save();
		return redirect('quanlyketqua');

	}

}