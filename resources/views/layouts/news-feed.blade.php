<?php 
$tinchinh = $tin->shift();
?>
<section class="news-feed paddb">
    <div class="container">
        <div class="row row-margin">
            <div class="col-xs-12 col-md-6 col-sm-6 col-padding">
                <div>
                    <div class="item">
                        <div class="post-wrapper">
                            <div class="post-thumb">
                                <a href="{{$tinchinh->loaitin->theloai->TenTL_KhongDau}}/{{$tinchinh->loaitin->Ten_KhongDau}}/{{$tinchinh->TieuDe_KhongDau}}">
                                    <img class="entry-thumb-4" src="images/tintuc/{{$tinchinh->urlHinh}}" alt="" style="height: 450px">
                                </a>
                            </div>

                            <div class="post-info">
                                <span class="color-2">{{$tinchinh->loaitin->theloai->TenTL}} </span>
                                <h3 class="post-title"><a href="{{$tinchinh->loaitin->theloai->TenTL_KhongDau}}/{{$tinchinh->loaitin->Ten_KhongDau}}/{{$tinchinh->TieuDe_KhongDau}}" rel="bookmark">{{$tinchinh->TieuDe}}</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i>{{$tinchinh->create_at}}
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i></div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- right side post -->
            <div class="hidden-xs col-md-6 col-sm-6 col-padding-1">
                <section class="articale-inner">
                    <div class="row">
                        <div id="content-slide-5" class="owl-carousel">
                            <!-- item-1 -->
                            <div class="item">
                                <div class="row rn_block">

                                    @foreach($tin as $t)
                                    <div class="col-md-6 col-sm-6 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="{{$t->loaitin->theloai->TenTL_KhongDau}}/{{$t->loaitin->Ten_KhongDau}}/{{$t->TieuDe_KhongDau}}">
                                                    <img class="img-responsive" src="images/tintuc/{{$t->urlHinh}}" alt="" style="height: 150px">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#">{{$t->loaitin->theloai->tenTL}}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="{{$t->loaitin->theloai->TenTL_KhongDau}}/{{$t->loaitin->Ten_KhongDau}}/{{$t->TieuDe_KhongDau}}">{{$t->TieuDe}}</a></h4>
                                        </div>
                                        <div class="post-editor-date">
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> {{$t['create_at']}}
                                            </div>
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> {{$t['SoLanXem']}} </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>