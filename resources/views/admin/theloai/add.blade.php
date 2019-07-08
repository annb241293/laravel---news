   @extends('admin.layouts.index')
   @section('content')
   <section class="content">
        
        <div class="box row">
            <div class="col-md-6">
                <form action="admin/theloai/them" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" name="name" placeholder="Nhập tên danh mục" class="form-control" value="{{old('name')}}">
                        @if($errors->has('name'))
                            <div class="alert alert-danger">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="">an hien</label>
                        <input type="text" name="anhien" placeholder="Nhập tên danh mục" class="form-control" value="{{old('anhien')}}">
                        @if($errors->has('anhien'))
                            <div class="alert alert-danger">
                                {{$errors->first('anhien')}}
                            </div>
                        @endif
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        <button type="reset" class="btn btn-sm btn-primary">Huy</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
    @endsection