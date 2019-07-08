<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\loaitin;
use App\tin;
use App\comment;
use App\user;
use Validator;
use Illuminate\Support\Facades\Auth;



class homeController extends Controller
{
	public function dangNhap(){
		return view('pages.login');
	}
	public function dangKy(){
		return view('pages.register');
	}
	public function lienHe(){
		return view('pages.contact');
	}

	public function getTrangChu(){
    	$tinGan = tin::inRandomOrder()->take(5)->get();
    	$theloai = theloai::inRandomOrder()->first();
    	
		$tin = tin::orderBy('idTin','desc')->take(5)->get();
		return view('pages.index',compact('tin','tinGan','mostView','theloai'));

	}
	public function getCate($theloai){
		$idTL = theloai::where('TenTL_KhongDau',$theloai)->value('idTL');
		$theloai = theloai::find($idTL);

		return view('pages.category',['theloai'=>$theloai]);
	}
	public function getCateLoaiTin($theloai,$loaitin){
		$idLT = loaitin::where('Ten_KhongDau',$loaitin)->value('idLT');
		$loaitin = loaitin::find($idLT);

		return view('pages.category2',['loaitin'=>$loaitin]);
	}
	public function getTin($theloai,$loaitin,$tin){

		$idTin = tin::where('TieuDe_KhongDau',$tin)->value('idTin');
		$tin = tin::find($idTin);
		$idLT = loaitin::where('Ten_KhongDau',$loaitin)->value('idLT');
		$tinLienQuan = loaitin::find($idLT)->tin()->where('idTin','<>',$idTin)->inRandomOrder()->take(3)->get();
		// dd($tinLienQuan);

		// dd($tinLienQuan1);
		return view('pages.details',['tin'=>$tin,'tinLienQuan'=>$tinLienQuan]);
	}
	public function postDangNhap(Request $req){
		$rule = ['email'=>'required',
				'pass'=>'required'];
				$mess = ['required'=>':attribute không được để trống'];
		$validator = validator::make($req->all(),$rule,$mess);
		if($validator->fails()){
			return redirect('Dang-Nhap')->withErrors($validator)->withInput();
		} 
		$email = $req->email;
		$password = $req->pass;
		// dd(Auth::attempt(['Email'=>$email,'password'=>$password,'idGroup'=>0 ]));
		if(Auth::attempt(['Email'=>$email,'password'=>$password,'idGroup'=>0 ])){
			return redirect('/');
		}else if(Auth::attempt(['Email'=>$email,'password'=>$password,'idGroup'=>1])){
			return redirect('admin/index');
		}else {
			return redirect('Dang-Nhap')->with('thongbao','Tài khoản hoặc mật khẩu không đúng');
		}

	}
	public function postDangKy(Request $req){
		$rule = ['name'=>'required|min:6|max:50',
				'pass'=>'required|min:6|max:50',
				'email'=>'required|email|unique:user,Email',
				'pass_confirmation'=>'required|same:pass'];
		$mess = ['required'=>' :attribute không được để trống',
				'min'=>' :attribute phải trên :min ký tự',
			 	'max'=>' :attribute tối đa :max ký tự',
			 	'email'=>':attribute chưa đúng định dạng',
			 	'same'=>'sai mật khẩu',
			 	'unique'=>':attribute đã tồn tại'];
		$validator = Validator::make($req->all(),$rule,$mess);
		if($validator->fails()){
			return redirect('Dang-Ky')->withErrors($validator)->withInput();
		}
		$user = new user();
		$user->Username = $req->name;
		$user->Password = bcrypt($req->pass);
		$user->idGroup = 0;
		$user->Email = $req->email;
		$user->RandomKey = $req->_token;
		$user->save();
		return redirect('Dang-Ky')->with('thongbao','Đăng ký thành công !!!');

	}
	public function logOut(){
		Auth::logout();
		return redirect('/');
	}
}