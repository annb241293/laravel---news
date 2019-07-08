
 @extends('layouts.master')
 @section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-8">
                <article class="content">
                    <div class="post-thumb">
                        <img src="images/tintuc/{{$tin->urlHinh}}" class="img-responsive post-image" alt="">
                       
                    </div>
                    <div class="date">
                        <ul>
                            <li>By<a title="" href="#"><span>Nguyen Binh An</span></a> --</li>
                            <li><a title="" href="#">{{$tin->create_at}}</a> --</li>
                            <li><a title="" href="#"><span>{{$tin->SoLanXem}} Lượt xem</span></a></li>
                        </ul>
                    </div>
                    <p>
                        {!!$tin->Content!!}
                    </p>
                       
                    <div class="related-news-inner">
                        <h3 class="category-headding ">TIN LIÊN QUAN</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div>
                                <!-- item-1 -->
                                <div class="item">
                                    <div class="row rn_block">
                                        @foreach($tinLienQuan as $tlq)
                                        <div class="col-xs-12 col-md-4 col-sm-4 padd">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                                <!-- image -->
                                                <div class="post-thumb">
                                                    <a href="">
                                                        <img class="img-responsive" src="images/tintuc/{{$tlq->urlHinh}}" alt="" style="height: 150px">
                                                    </a>
                                                </div>
                                                <div class="post-info meta-info-rn">
                                                    <div class="slide">
                                                        <a target="_blank" href="#" class="post-badge btn_five">B</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <h4><a href="{{$tlq->loaitin->theloai->TenTL_KhongDau}}/{{$tlq->loaitin->Ten_KhongDau}}/{{$tlq->TieuDe_KhongDau}}">{{$tlq->TieuDe}}</a></h4>
                                                <div class="post-editor-date">
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i>{{$tlq->create_at}}
                                                    </div>
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i>{{$tlq->SoLanXem}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- item-2 -->
                              
                            </div>
                        </div>
                    </div>
                    <!-- form
                        ============================================ -->
                    <div class="form-area">
                        <h3 class="category-headding ">BÌNH LUẬN</h3>
                        <div class="headding-border"></div>
                        <form action="" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="input">
                                            <input class="input_field" type="text" id="input-1">
                                            <label class="input_label" for="input-1">
                                                <span class="input_label_content" data-content="Your Name">Your Name</span>
                                    </label>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <span class="input">
                                            <input class="input_field" type="text" id="input-2">
                                            <label class="input_label" for="input-2">
                                                <span class="input_label_content" data-content="Your Email">Your Email</span>
                                    </label>
                                    </span>
                                </div>
                                <div class="col-sm-12">
                                    <span class="input">
                                            <textarea class="input_field" id="message"></textarea>
                                            <label class="input_label" for="message">
                                                <span class="input_label_content" data-content="Your Email">Your Message</span>
                                    </label>
                                    </span>
                                    <button type="button" class="btn btn-style">Post Your Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- comment box
                        ============================================ -->
                    <div class="comments-container">
                        <ul id="comments-list" class="comments-list">
                           
                            <li>
                                <div class="comment-main-level">
                                    <!-- Avatar -->
                                    
                                </div>
                                <!-- Respuestas de los comentarios -->
                               
                            </li>
                           
                    </div>
                </article>
            </div>
            @include('layouts.sidebar');
        </div>
    </div>
    @endsection
    @section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var CSRF_TOKEN =$('#token').val();
            $('.btn-style').click(function(){
                var name = $('#input-1').val();
                var email = $('#input-2').val();
                var content = $('#message').val();
           $.ajax({
                    /* the route pointing to the post function */
                    url: 'ajax',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token:CSRF_TOKEN,name:name, content:content},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        alert(data.msg); 
                        $('.comment-main-level').html(`<div class="comment-avatar"><img src="images/comment-01.jpg" class="img-circle" alt=""></div>
                                    <!-- Contenedor del Comentario -->
                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name by-author"><a href="#" id="nameCommentUser">${data.name}</a></h6>
                                            <span></span>
                                            <i class="fa fa-reply"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="comment-content">
                                        ${data.msg}
                                        </div>
                                    </div>`);
                    }
                }); 
            });
        });
    </script>
     @endsection