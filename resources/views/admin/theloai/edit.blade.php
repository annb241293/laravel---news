  @extends('admin.layouts.index')
  @section('content')
  <section class="content">

    <div class="box row">
        <div class="col-md-6">
            <form action="admin/theloai/sua/{{$idTL}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="name" value="{{$theloai->TenTL}}" placeholder="Nhập tên danh mục" class="form-control">
                    @if($errors->has('name'))
                    <div class="alert alert-danger">
                        {{$errors->first('name')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">an hien</label>
                    <input type="text" name="anhien" value="{{$theloai->AnHien}}" placeholder="Nhập an hien danh mục" class="form-control">
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