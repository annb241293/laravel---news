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
                        <th>Tên tiêu đề</th>
                        <th>Ảnh đại diện</th>
                        <th>Loại tin</th>
                        <th>Thể loại</th>
                        <th>Lượt xem</th>
                        <th>Ẩn/hiện</th>
                        <th>
                            <a href="admin/tin/them" class="btn btn-xs btn-primary">Thêm</a>
                        </th>
                    </tr>
                    @foreach($tin as $t)
                    <tr>
                        <td>{{$t['idTin']}}</td>
                        <td>{{$t['TieuDe']}}</td>
                        <td><img src="images/{{$t['urlHinh']}}" alt="" style="width: 150px"></td>
                        <td>{{$t->loaitin->Ten}}</td>
                        <td>{{$t->loaitin->theloai->TenTL}}</td>
                        <td>{{$t->SoLanXem}}</td>
                        <td>{{$t['AnHien']}}</td>
                        <td>
                            <a href="admin/tin/sua/{{$t['idTin']}}" class="btn btn-xs btn-info">Sửa</a>
                            <a href="admin/tin/xoa/{{$t['idTin']}}" url="" class="btn btn-remove btn-xs btn-danger">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="text-align: center;">
                {{ $tin->links() }}
            </div>
        </div>

    </section>
    @endsection