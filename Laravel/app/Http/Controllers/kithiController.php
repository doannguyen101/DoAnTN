<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\kithirequest;
use App\kithi;
use App\bangthi;
use DB;

class kithiController extends Controller {
	public function dulieu (){
		$kithi = DB::table('kythis')->join('bangthis','kythis.mabangthi', '=' ,'bangthis.mabangthi')->select('makythi','tenkythi','kythis.mabangthi','bangthis.tenbangthi','thoigianbatdau','thoigianketthuc','kythis.trangthai')->get();
		$bangthi = DB::table('bangthis')->select('mabangthi','tenbangthi')->get();

			return view('pages.quanlykithi',compact('kithi','bangthi'));
	}

/*	public function getbangthi ($mabaiviet){
		$baiviettheoid = DB::table('baiviets')->join('nguoidungs','baiviets.nguoidang_id', '=' ,'nguoidungs.tendangnhap')->join('bangthis','baiviets.mabangthi_id', '=' ,
			'bangthis.mabangthi')->select('mabaiviet','noidung','ngaydang','ngaysoan','loaibaiviet','nguoidang_id','nguoidungs.tendangnhap','bangthis.tenbangthi','mabangthi_id','baiviets.trangthai')->where('mabaiviet',$mabaiviet)->get();
		return view('pages.sua',compact('baiviettheoid'));
	
	}
*/
	public function themkithi (kithirequest $request) {
		$kithi = new  kithi;
		$kithi->tenkythi = $request->txttenkithi;
		$kithi->mabangthi = $request->cbbtenbangthi;
		$kithi->thoigianbatdau = $request->txtthoigianbatdau;
		$kithi->thoigianketthuc = $request->txtthoigianketthuc;
		$kithi->trangthai = "1";
		$kithi->save();
		return redirect('quanlykithi');

	}

}