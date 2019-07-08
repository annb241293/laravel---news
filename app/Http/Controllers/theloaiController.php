<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;

class theloaiController extends Controller
{
    public function getDanhSach(){
        // lay ra theloai.* va count(loaitin.idTL)
        // $theloai = theloai::withCount('loaitin')->get();
        // return view('admin.theloai.danhsach',['theloai'=>$theloai]);

        // $loaitin = loaitin::with('theloai:idTL,TenTL')->get();
        // return view('admin.theloai.danhsach',['theloai'=>$loaitin]);
        
    	$theloai = theloai::orderBy('idTL','desc')->get();
    	return view('admin.theloai.danhsach',['theloai'=>$theloai]);
    }

    public function getThem(){
    	return view('admin.theloai.add');
    }

    public function postThem(Request $request){
        $rule = ['name'=>'required|unique:theloai,TenTL','anhien'=>'required|min:1|max:2'];
        $mess = ['name.required'=>'ban chua nhap ten','name.unique'=>'ten da ton tai',
                'anhien.required'=>'ban chua nhap an hien',
                'anhien.min'=>'tu 1 den 2','anhien.max'=>'tu 1 den 2'];
    	$this->validate($request,$rule,$mess);
        $theloai = new theloai();
        $theloai->TenTL = $request->name;
        $theloai->TenTL_KhongDau = str_slug($request->name,'-');
        $theloai->AnHien = $request->anhien;
        $theloai->save();
        return redirect('admin/theloai/danhsach')->with('thongbao','Thêm thành công !!');
        // echo 'string';
    }

    public function getSua($idTL){
        $theloai = theloai::find($idTL);
        return view('admin.theloai.edit',['theloai'=>$theloai,'idTL'=>$idTL]);
    }

    public function postSua(Request $request,$idTL){
        $theloai = theloai::find($idTL);
        $rule = ['name'=>'required','anhien'=>'required|min:1|max:2'];
        $mess = ['name.required'=>'ban chua nhap ten',
                'anhien.required'=>'ban chua nhap an hien',
                'anhien.min'=>'tu 1 den 2','anhien.max'=>'tu 1 den 2'];
        $this->validate($request,$rule,$mess);
        $theloai->TenTL = $request->name;
        $theloai->TenTL_KhongDau = str_slug($request->name,'-');
        $theloai->AnHien = $request->anhien;
        $theloai->save();
        return redirect('admin/theloai/danhsach')->with('thongbao','Sửa thành công !!');
    }

    public function getXoa($idTL){
        $theloai = theloai::find($idTL)->delete();
        return redirect('admin/theloai/danhsach')->with('thongbao','Xóa thành công !!');
    }
}
