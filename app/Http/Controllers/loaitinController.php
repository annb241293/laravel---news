<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaitin;
use App\theloai;

class loaitinController extends Controller
{
    public function getDanhSach(){
        // lay ra loaitin.* va count(loaitin.idLT)
        // $loaitin = loaitin::withCount('loaitin')->get();
        // return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);

        $loaitin = loaitin::orderBy('idLT','desc')->get();
        // return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);
        
    	// $loaitin = loaitin::orderBy('idLT','desc')->get();
    	return view('admin.loaitin.danhsach',['loaitin'=>$loaitin,]);
    }

    public function getThem(){
        
    	return view('admin.loaitin.add');
    }

    public function postThem(Request $request){
        $rule = ['name'=>'required|unique:loaitin,Ten','anhien'=>'required|min:1|max:2',];
        $mess = ['name.required'=>'ban chua nhap ten','name.unique'=>'ten da ton tai',
                'anhien.required'=>'ban chua nhap an hien',
                'anhien.min'=>'tu 1 den 2','anhien.max'=>'tu 1 den 2'];
    	$this->validate($request,$rule,$mess);
        $loaitin = new loaitin();
        $loaitin->idTL = $request->theloai;
        $loaitin->Ten = $request->name;
        $loaitin->Ten_KhongDau = str_slug($request->name,'-');
        $loaitin->AnHien = $request->anhien;
        $loaitin->save();
        return redirect('admin/loaitin/danhsach')->with('thongbao','Thêm thành công !!');
        // echo 'string';
    }

    public function getSua($idLT){
        $loaitin = loaitin::find($idLT);
        $theloai = theloai::all();
        return view('admin.loaitin.edit',['loaitin'=>$loaitin,'idLT'=>$idLT,'theloai'=>$theloai]);
    }

    public function postSua(Request $request,$idLT){
        $loaitin = loaitin::find($idLT);
        
        $rule = ['name'=>'required','anhien'=>'required|min:1|max:2'];
        $mess = ['name.required'=>'ban chua nhap ten',
                'anhien.required'=>'ban chua nhap an hien',
                'anhien.min'=>'tu 1 den 2','anhien.max'=>'tu 1 den 2'];
        $this->validate($request,$rule,$mess);
       
        $loaitin->idTL = $request->theloai;
        $loaitin->idLT = $idLT;
        $loaitin->Ten = $request->name;
        $loaitin->Ten_KhongDau = str_slug($request->name,'-');
        $loaitin->AnHien = $request->anhien;
        $loaitin->save();
        return redirect('admin/loaitin/danhsach')->with('thongbao','Sửa thành công !!');
    }

    public function getXoa($idLT){
        $loaitin = loaitin::find($idLT);
        $loaitin->delete();
        return redirect('admin/loaitin/danhsach')->with('thongbao','Xóa thành công !!');
    }
}
