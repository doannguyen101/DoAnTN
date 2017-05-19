<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\thisinhrequest;
use App\truong;
use App\nguoidung;
use App\thisinh;
use DB;

class thisinhController extends Controller {
	public function dulieu (){
		$truong =DB::table('truongs')->select('matruong','tentruong')->get();
		$nguoidung =DB::table('nguoidungs')->select('tendangnhap')->get();
		$thisinh = DB::table('thisinhs')->join('nguoidungs','thisinhs.tendangnhap', '=' ,
			'nguoidungs.tendangnhap')->join('truongs','thisinhs.matruong_id', '=' ,
			'truongs.matruong')->select('mathisinh','thisinhs.tendangnhap','truongs.matruong','truongs.tentruong','nguoidungs.hoten','nguoidungs.mssv','nguoidungs.ngaysinh','nguoidungs.gioitinh','nguoidungs.sodienthoai','nguoidungs.lop','nguoidungs.email','nguoidungs.hinhdaidien','thisinhs.trangthai')->get();
		return view('pages.quanlythisinh',compact('thisinh','truong','nguoidung'));
	}
/*
	public function getbaiviet ($mabaiviet){
		$baiviettheoid = DB::table('baiviets')->join('nguoidungs','baiviets.nguoidang_id', '=' ,'nguoidungs.tendangnhap')->join('bangthis','baiviets.mabangthi_id', '=' ,
			'bangthis.mabangthi')->select('mabaiviet','noidung','ngaydang','ngaysoan','loaibaiviet','nguoidang_id','nguoidungs.tendangnhap','bangthis.tenbangthi','mabangthi_id','baiviets.trangthai')->where('mabaiviet',$mabaiviet)->get();
		return view('pages.sua',compact('baiviettheoid'));
	
	}*/

	public function themthisinh (thisinhrequest $request) {
		$thisinh = new  thisinh;
		$thisinh->tendangnhap = $request->cbbtendangnhap;
		$thisinh->matruong_id = $request->cbbtentruong;
		$thisinh->trangthai ="1";
		$thisinh->save();
		return redirect('quanlythisinh');

	}

}