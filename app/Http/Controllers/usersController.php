<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class usersController extends Controller
{
    public function getDanhSach(){
        // lay ra user.* va count(user.idUser)
        // $user = user::withCount('user')->get();
        // return view('admin.user.danhsach',['user'=>$user]);

        $user = user::orderBy('idUser','desc')->get();
        // return view('admin.user.danhsach',['user'=>$user]);
        
    	// $user = user::orderBy('idUser','desc')->get();
    	return view('admin.users.danhsach',['user'=>$user]);
    }

    public function getThem(){
    	return view('admin.users.add');
    }

    public function postThem(Request $request){
        $rule = ['name'=>'required',
        		'username'=>'required|unique:user,Username|min:6|max:12',
    			'password'=>'required|min:6|max:12',
    			'email'=>'required|email|unique:user,Email',
    			'role'=>'required|integer'
    		];
        $mess = ['name.required'=>'ban chua nhap ten','name.unique'=>'ten da ton tai',
                'Username.required'=>'ban chua nhap ten dang ky',
                'email'=>'khong dung dinh dang',
                'role.in'=>'chi 1 hoac 2',
                'integer'=>'phai la so'
            ];
    	$this->validate($request,$rule,$mess);
        $user = new user();
        $user->HoTen = $request->name;
        $user->Email = $request->email;
        $user->Username = $request->username;
        $user->Password = hash::make($request->password);
        $user->idGroup = $request->role;
        $user->save();
        echo 'string';
        return redirect('admin/user/danhsach')->with('thongbao','Thêm thành công !!');
        // echo 'string';
    }

    public function getSua($idUser){
        $user = user::find($idUser);
        return view('admin.user.edit',['user'=>$user]);
    }

    public function postSua(Request $request,$idUser){
        $user = user::find($idUser);
        
        $rule = ['name'=>'required','Username'=>'required|min:1|max:2'];
        $mess = ['name.required'=>'ban chua nhap ten',
                'Username.required'=>'ban chua nhap an hien',
                'Username.min'=>'tu 1 den 2','Username.max'=>'tu 1 den 2'];
        $this->validate($request,$rule,$mess);
       
        $user->idTL = $request->user;
        $user->idUser = $idUser;
        $user->Ten = $request->name;
        $user->Ten_KhongDau = str_slug($request->name,'-');
        $user->Username = $request->Username;
        $user->save();
        return redirect('admin/user/danhsach')->with('thongbao','Sửa thành công !!');
    }

    public function getXoa($idUser){
        $user = user::find($idUser);
        $user->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công !!');
    }
}
