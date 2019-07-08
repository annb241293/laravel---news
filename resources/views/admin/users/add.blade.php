   @extends('admin.layouts.index')
   @section('content')
   <section class="content">
        
        <div class="box row">
            <div class="col-md-6">
                <form action="admin/user/them" method="post">
                  
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input id="name" type="text" name="name" placeholder="Nhập tên danh mục" class="form-control" value="{{old('name')}}">
                        @if($errors->has('name'))
                            <div class="alert alert-danger">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="username">Tên đăng ký</label>
                        <input id="username" type="text" name="username" placeholder="Nhập tên danh mục" class="form-control" value="{{old('username')}}">
                        @if($errors->has('username'))
                            <div class="alert alert-danger">
                                {{$errors->first('username')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email" placeholder="Nhập tên danh mục" class="form-control" value="{{old('email')}}">
                        @if($errors->has('email'))
                            <div class="alert alert-danger">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input id="password" type="text" name="password" placeholder="Nhập tên danh mục" class="form-control" value="{{old('password')}}">
                        @if($errors->has('password'))
                            <div class="alert alert-danger">
                                {{$errors->first('password')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="role">Nhóm</label>
                        <input id="role" type="text" name="role" placeholder="Nhập tên danh mục" class="form-control" value="{{old('role')}}">
                        @if($errors->has('role'))
                            <div class="alert alert-danger">
                                {{$errors->first('role')}}
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