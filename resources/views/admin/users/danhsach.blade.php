   @extends('admin.layouts.index')
   @section('content')
   <section class="content">
        
        <div class="box">
            <div class="box-header">
                <h4>Danh sách danh mục</h4>
                <div class="row">
                    <div class="col-md-4">
                        <form method="get">
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <input type="text" 
                                        value=""    
                                        name="keyword" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-info btn-flat">Search!</button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th style="width: 10px">id</th>
                        <th>Tên người dùng</th>
                        <th>Tên đăng ký</th>
                        <th>Email</th>
                        <th>Điện thoại</th>
                        <th>Giới tính</th>
                        <th>
                            <a href="admin/user/them" class="btn btn-xs btn-primary">Thêm</a>
                        </th>
                    </tr>
                    @foreach($user as $u)
                    <tr>
                        <td>{{$u['idUser']}}</td>
                        <td>{{$u['HoTen']}}</td>
                        <td>{{$u['Username']}}</td>
                        <td>{{$u['Email']}}</td>
                        <td>{{$u['Dienthoai']}}</td>
                        <td>{{$u['GioiTinh']==1?'Nam':'Nữ'}}</td>
                        <td>
                            <a href="admin/user/sua/{{$u['idUser']}}" class="btn btn-xs btn-info">Sửa</a>
                            <a href="admin/user/xoa/{{$u['idUser']}}" url="" class="btn btn-remove btn-xs btn-danger">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
    @endsection