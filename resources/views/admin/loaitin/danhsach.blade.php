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
            
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th style="width: 10px">id</th>
                        <th>Tên loại tin</th>
                        <th>Thể loại</th>
                        <th>Ẩn/hiện</th>
                        <th>
                            <a href="admin/loaitin/them" class="btn btn-xs btn-primary">Thêm</a>
                        </th>
                    </tr>
                    @foreach($loaitin as $lt)
                    <tr>
                        <td>{{$lt['idLT']}}</td>
                        <td>{{$lt['Ten']}}</td>
                        <td>{{$lt->theloai['TenTL']}}</td>
                        <td>{{$lt['AnHien']}}</td>
                        <td>
                            <a href="admin/loaitin/sua/{{$lt['idLT']}}" class="btn btn-xs btn-info">Sửa</a>
                            <a href="admin/loaitin/xoa/{{$lt['idLT']}}" url="" class="btn btn-remove btn-xs btn-danger">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
    @endsection