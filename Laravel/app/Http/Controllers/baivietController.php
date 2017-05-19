<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\baivietrequest;
use App\baiviet;
use App\bangthi;
use App\nguoidung;
use App\loaibaiviet;
use DB;

class baivietController extends Controller {
	public function dulieu (){
		$bangthi = DB::table('bangthis')->select('mabangthi','tenbangthi')->get();
		$loaibaiviet = DB::table('loaibaiviets')->select('maloaibaiviet','tenloaibaiviet')->get();
		$nguoidung = DB::table('nguoidungs')->select('tendangnhap')->where('quyen_id','1')->get();
		$baiviet = DB::table('baiviets')->join('nguoidungs','baiviets.nguoidang_id', '=' ,
			'nguoidungs.tendangnhap')->join('bangthis','baiviets.mabangthi_id', '=' ,
			'bangthis.mabangthi')->select('mabaiviet','tenbaiviet','noidung','ngaydang','ngaysoan','loaibaiviet','nguoidang_id','nguoidungs.tendangnhap','bangthis.tenbangthi','mabangthi_id','baiviets.trangthai')->get();
		return view('pages.quanlybaiviet',compact('bangthi','nguoidung','baiviet','loaibaiviet'));
	}

	/*public function getbaiviet ($mabaiviet){
		$baiviettheoid = DB::table('baiviets')->join('nguoidungs','baiviets.nguoidang_id', '=' ,'nguoidungs.tendangnhap')->join('bangthis','baiviets.mabangthi_id', '=' ,
			'bangthis.mabangthi')->select('mabaiviet','noidung','ngaydang','ngaysoan','loaibaiviet','nguoidang_id','nguoidungs.tendangnhap','bangthis.tenbangthi','mabangthi_id','baiviets.trangthai')->where('mabaiviet',$mabaiviet)->get();
		return view('pages.sua',compact('baiviettheoid'));
	
	}*/

	public function thembaiviet (baivietrequest $request) {
		$baiviet = new  baiviet;
		$baiviet->noidung = $request->noidung;
		$baiviet->ngaydang = date('d/m/Y');
		$baiviet->ngaysoan = $request->txtngaysoan;
		$baiviet->mabangthi_id = $request->cbbloaibang;
		$baiviet->loaibaiviet = $request->cbbloaibaiviet;
		$baiviet->nguoidang_id =$request->cbbnguoidang;
		$baiviet->trangthai ="1";
		$baiviet->save();
		return redirect('quanlybaiviet');

	}

}