  @extends('admin.layouts.index')
   @section('content')
  <section class="content">
        
        <div class="box row">
            <div class="col-md-6">
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="">
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" name="name" value="" placeholder="Nhập tên danh mục" class="form-control">
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <img src="#" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="file" name="image" class="form-control">
                      
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả ngắn</label>
                        <textarea name="short_desc" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        <a href="#" class="btn btn-sm btn-danger">Hủy</a>
                    </div>
                </form>
            </div>
        </div>

    </section>
    @endsection