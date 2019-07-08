<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tin;
use App\loaitin;
use App\theloai;
class tinController extends Controller
{
	public function getDanhSach(){
        // lay ra tin.* va count(tin.idLT)
        // $tin = tin::withCount('tin')->get();
        // return view('admin.tin.danhsach',['tin'=>$tin]);

		$tin = tin::orderBy('idTin','desc')->paginate(15);
        // return view('admin.tin.danhsach',['tin'=>$tin]);

    	// $tin = tin::orderBy('idLT','desc')->get();
		return view('admin.tin.danhsach',['tin'=>$tin]);
	}

	public function getThem(){
		$loaitin = loaitin::all();
		return view('admin.tin.add',['loaitin'=>$loaitin]);
	}

	public function postThem(Request $request){
		$rule = ['name'=>'required|unique:tin,TieuDe',
		'anhien'=>'required|min:1|max:2',
		'img'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
		'short_detail'=>'required|min:100|max:200',
		'detail'=>'required|min:700'];
		$mess = ['required'=>'ban chua nhap',
		'unique'=>'da ton tai'
	];
	$this->validate($request,$rule,$mess);
	if ($request->hasFile('img')) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $request->file('img')->getClientOriginalExtension(); // Lấy . của file
			
			// Filename cực shock để khỏi bị trùng
			$fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
			
			// Thư mục upload
			$uploadPath = public_path('/images'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$request->file('img')->move($uploadPath, $fileName);
			$idTL = loaitin::find($request->loaitin)->theloai->idTL;
			$tin = new tin();
			$tin->TieuDe = $request->name;
			$tin->idLT = $request->loaitin;
			$tin->idTL = $idTL;
			$tin->TomTat = $request->short_detail;
			$tin->TieuDe_KhongDau = str_slug($request->name,'-');
			$tin->AnHien = $request->anhien;
			$tin->urlHinh = $fileName;
			$tin->Content = $request->detail;
			$tin->save();
			return redirect('admin/tin/danhsach')->with('thongbao','them thanh cong');
		}else{
			return redirect('admin/tin/them')->with('thongbao','file bi loi')->withInput();
		}
		
		
        // echo 'string';
	}

	public function getSua($idTin){
		$tin = tin::find($idTin);
		$loaitin = loaitin::all();
		return view('admin.tin.edit',['tin'=>$tin,'tin'=>$tin,'loaitin'=>$loaitin]);
	}

	public function postSua(Request $request,$idTin){
		$tin = tin::find($idTin);
		$rule = ['name'=>'required',
		'anhien'=>'required|min:1|max:2',
		'img'=>'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
		'short_detail'=>'required|min:100|max:200',
		'detail'=>'required|min:700'];
		$mess = ['required'=>'ban chua nhap',
		'unique'=>'da ton tai'
	];
	$this->validate($request,$rule,$mess);
if ($request->hasFile('img')) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $request->file('img')->getClientOriginalExtension(); // Lấy . của file
			
			// Filename cực shock để khỏi bị trùng
			$fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
			
			// Thư mục upload
			$uploadPath = public_path('/images'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$request->file('img')->move($uploadPath, $fileName);
			
			
		}else{
			$fileName = $tin->urlHinh;
		}
		$idTL = loaitin::find($request->loaitin)->theloai->idTL;
			$tin->TieuDe = $request->name;
			$tin->idLT = $request->loaitin;
			$tin->idTL = $idTL;
			$tin->TomTat = $request->short_detail;
			$tin->TieuDe_KhongDau = str_slug($request->name,'-');
			$tin->AnHien = $request->anhien;
			$tin->urlHinh = $fileName;
			$tin->Content = $request->detail;
			$tin->save();
			return redirect('admin/tin/danhsach')->with('thongbao','sua thanh cong');
	}
	public function getXoa($idTin){
		$tin = tin::find($idTin);
		$tin->delete();
		return redirect('admin/tin/danhsach')->with('thongbao','xoa thanh cong');
	}
}

