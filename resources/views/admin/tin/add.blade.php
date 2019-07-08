  @extends('admin.layouts.index')
  @section('content')
  <section class="content">

    <div class="box row">
      <div class="col-md-6">
        <form action="admin/tin/them" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label for="name">Tiêu đề</label>
            <input id="name" type="text" name="name" placeholder="Nhập tên danh mục" class="form-control" value="{{old('name')}}">
            @if($errors->has('name'))
            <div class="alert alert-danger">
              {{$errors->first('name')}}
            </div>
            @endif
          </div>
          <div class="form-group">
            <label for="loaitin">Loại tin</label>
            <div>
             <select class="form-control" name="loaitin" id="loaitin">
              @foreach($loaitin as $lt)

              <option value="{{$lt['idTL']}}">{{$lt['Ten']}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
        <label for="image">Ảnh tiêu đề</label>
        <input name="img" type="file" id="image" class="form-control">
        @if($errors->has('img'))
            <div class="alert alert-danger">
              {{$errors->first('img')}}
            </div>
            @endif          
      </div>
      <div class="form-group">
        <label for="short_detail">Miêu tả ngắn</label>
        <div>
          <textarea class="form-control" id="short_detail" name="short_detail">{{old('short_detail')}}</textarea>
        </div>
        @if($errors->has('short_detail'))
            <div class="alert alert-danger">
              {{$errors->first('short_detail')}}
            </div>
            @endif          
      </div>
      <div class="form-group">
        <label for="detail">Nội dung</label>
        <div>
          <textarea rows="5" class="form-control" id="detail" name="detail">{{old('detail')}}</textarea>
        </div>
         @if($errors->has('detail'))
            <div class="alert alert-danger">
              {{$errors->first('detail')}}
            </div>
            @endif   
      </div>
      <div class="form-group">
        <label for="anhien">Ẩn hiện</label>
        <input id="anhien" type="text" name="anhien" placeholder="Nhập an hien danh mục" class="form-control" value="{{old('anhien')}}">
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