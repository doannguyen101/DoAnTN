<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\nguoidungrequest;
use App\nguoidung;
use App\quyen;
use DB;

class nguoidungController extends Controller {
	public function dulieu (){
		$quyen = DB::table('quyens')->select('maquyen','tenquyen')->get();

		$nguoidung = DB::table('nguoidungs')->join('quyens','nguoidungs.quyen', '=' ,'quyens.maquyen')->select('tendangnhap','matkhau','hoten','mssv','gioitinh','lop','ngaysinh','sodienthoai','email','hinhdaidien','quyens.tenquyen','nguoidungs.trangthai')->get();
		return view('pages.quanlynguoidung',compact('nguoidung','quyen'));
	}

/*	public function getbaiviet ($mabaiviet){
		$baiviettheoid = DB::table('baiviets')->join('nguoidungs','baiviets.nguoidang_id', '=' ,'nguoidungs.tendangnhap')->join('bangthis','baiviets.mabangthi_id', '=' ,
			'bangthis.mabangthi')->select('mabaiviet','noidung','ngaydang','ngaysoan','loaibaiviet','nguoidang_id','nguoidungs.tendangnhap','bangthis.tenbangthi','mabangthi_id','baiviets.trangthai')->where('mabaiviet',$mabaiviet)->get();
		return view('pages.sua',compact('baiviettheoid'));
	
	}*/

	public function themnguoidung (nguoidungrequest $request) {
		$nguoidung = new  nguoidung;
		$nguoidung->tendangnhap = $request->txttendangnhap;
		$nguoidung->matkhau = $request->txtpassword;
		$nguoidung->hoten = $request->txthoten;
		$nguoidung->mssv = $request->txtmssv;
		$nguoidung->gioitinh = $request->gioitinh;
		$nguoidung->lop = $request->txtlop;
		$nguoidung->ngaysinh = $request->txtngaysinh;
		$nguoidung->sodienthoai = $request->txtsodienthoai;
		$nguoidung->email = $request->txtemail;
		$nguoidung->hinhdaidien = $request->txthinhdaidien;
		$nguoidung->quyen = $request->cbbquyen;
		$nguoidung->trangthai = "1";
		$nguoidung->save();
		return redirect('quanlynguoidung');

	}

}