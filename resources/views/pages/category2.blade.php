 @extends('layouts.master')
 @section('content')
 <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Tin {{$loaitin->Ten}} </h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="/" title="">Home</a></li>
                            <li><a href="{{$loaitin->theloai->TenTL_KhongDau}}/{{$loaitin->Ten_KhongDau}}" title="">{{$loaitin->Ten}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php 
                    $tin = $loaitin->tin()->orderBy('idTin','desc')->paginate(10);
                 ?>
                @foreach($tin as $t)
                <div class="col-sm-6 post-style1">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                        <!-- post image -->
                        <a href="#"><img src="images/tintuc/{{$t->urlHinh}}" class="img-responsive" alt="" style="height: 200px;"></a>
                        <div class="post-info meta-info-rn">
                            <div class="slide">
                                <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                            </div>
                        </div>
                    </div>
                    <!-- post title -->
                    <h4 style="height: 50px"><a href="{{$loaitin->theloai->TenTL_KhongDau}}/{{$loaitin->Ten_KhongDau}}/{{$t->TieuDe_KhongDau}}">{{$t->TieuDe}}</a></h4>
                    <div class="post-title-author-details">
                        <div class="date">
                            <ul>
                                <li><img src="images/comment-01.jpg" class="img-responsive" alt=""></li>
                                <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                <li><a title="" href="#">{{$t->create_at}}</a> --</li>
                            </ul>
                        </div>
                        <p style="height: 80px">{{$t->TomTat}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            
           @include('layouts.sidebar');
        </div>
        <!-- pagination -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                        {{ $tin->render() }}
                    
                </div>
                <div class="col-sm-12">
                    <div class="banner">
                        <img src="images/top-bannner2.jpg" class="img-responsive center-block" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection