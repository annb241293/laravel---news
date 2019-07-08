  @extends('admin.layouts.index')
  @section('content')
  <section class="content">

    <div class="box row">
        <div class="col-md-6">
            <form action="admin/loaitin/sua/{{$idLT}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="name">Tên loại tin</label>
                    <input id="name" type="text" name="name" value="{{$loaitin->Ten}}" placeholder="Nhập tên danh mục" class="form-control">
                    @if($errors->has('name'))
                    <div class="alert alert-danger ">
                        {{$errors->first('name')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="theloai">Thể loại</label>
                    <div>
                         <select class="form-control" name="theloai" id="theloai">
                            @foreach($theloai as $tl)

                          <option value="{{$tl['idTL']}}">{{$tl['TenTL']}}</option>
                          @endforeach
                      </select>
                    </div>
          </div>

          <div class="form-group">
            <label for="anhien">Ẩn hiện</label>
            <input id="anhien" type="text" name="anhien" value="{{$loaitin->AnHien}}" placeholder="Nhập an hien danh mục" class="form-control">
            @if($errors->has('anhien'))
            <div class="alert alert-danger">
                {{$errors->first('anhien')}}
            </div>
            @endif
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
            <button type="reset" class="btn btn-sm btn-primary">huy</button>
        </div>
    </form>
</div>
</div>

</section>
@endsection