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
                        <th>Tên thể loại</th>
                        
                        <th>Ẩn/Hiện</th>
                        <th>
                            <a href="admin/theloai/them" class="btn btn-xs btn-primary">Thêm</a>
                        </th>
                    </tr>
                    @foreach($theloai as $tl)
                    <tr>
                        <td>{{$tl['idTL']}}</td>
                        <td>{{$tl['TenTL']}}</td>
                        
                        <td>{{$tl['AnHien']}}</td>
                        <td>
                            <a href="admin/theloai/sua/{{$tl['idTL']}}" class="btn btn-xs btn-info">Sửa</a>
                            <a href="admin/theloai/xoa/{{$tl['idTL']}}" url="" class="btn btn-remove btn-xs btn-danger">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
    @endsection