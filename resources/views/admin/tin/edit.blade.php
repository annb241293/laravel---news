  @extends('admin.layouts.index')
  @section('content')
  <section class="content">


    <form action="admin/tin/sua/{{$tin->idTin}}" method="post" enctype="multipart/form-data">
      <div class="box row">
        <div class="col-md-6">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label for="name">Tiêu đề</label>
            <input id="name" type="text" name="name" placeholder="Nhập tên danh mục" class="form-control" value="{{$tin->TieuDe}}">
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

              <option value="{{$lt['idTL']}}" selected="{{old('loaitin')==$lt['idLT']?'selected':''}}">{{$lt['Ten']}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="image">Ảnh tiêu đề</label>
          <input name="img" type="file" id="image">

            <img src="images/{{$tin->urlHinh}}" alt="" style="width: 100%">   

          @if($errors->has('img'))
          <div class="alert alert-danger">
            {{$errors->first('img')}}
          </div>
          @endif
                
        </div>
        <div class="form-group" style="clear: both">
          <label for="short_detail">Miêu tả ngắn</label>
          <div>
         <textarea rows="4" class="form-control" id="short_detail" name="short_detail">{{$tin->TomTat}}</textarea>
          </div>
          @if($errors->has('short_detail'))
          <div class="alert alert-danger">
            {{$errors->first('short_detail')}}
          </div>
          @endif          
        </div>

        <div class="form-group">
          <label for="anhien">Ẩn hiện</label>
          <input id="anhien" type="text" name="anhien" placeholder="Nhập an hien danh mục" class="form-control" value="{{$tin->AnHien}}">
          @if($errors->has('anhien'))
          <div class="alert alert-danger">
            {{$errors->first('anhien')}}
          </div>
          @endif
        </div>
        
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label for="detail">Nội dung</label>
        <div>
          <textarea id="detail" class="form-control ckeditor" name="detail">{!!$tin->Content!!}</textarea>
        </div>
        @if($errors->has('detail'))
        <div class="alert alert-danger">
          {{$errors->first('detail')}}
        </div>
        @endif   
      </div>
      </div>

    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
      <button type="reset" class="btn btn-sm btn-primary">Làm mới</button>
    </div>
  </form>


</section>
@endsection