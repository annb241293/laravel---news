<?php 
    $tinGan1 = $tinGan->splice(2);
 ?>
<div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <!-- left content inner -->
                <section class="recent_news_inner">
                    <h3 class="category-headding ">RECENT NEWS</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide">
                            <!-- item-1 -->
                            @foreach($tinGan as $tg)
                            <div class="item">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- image -->
                                    <h3><a href="{{$tg->theloai['TenTL_KhongDau']}}/{{$tg->loaitin['Ten_KhongDau']}}/{{$tg->TieuDe_KhongDau}}">{{$tg->TieuDe}}</a></h3>
                                    <div class="post-thumb">
                                        <a href="{{$tg->theloai['TenTL_KhongDau']}}/{{$tg->loaitin['Ten_KhongDau']}}/{{$tg->TieuDe_KhongDau}}">
                                            <img class="img-responsive" src="images/tintuc/{{$tg->urlHinh}}" alt="" style="height: 250px">
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i>{{$tg->create_at}}
                                        </div>
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i>{{$tg->SoLanXem}}</div>
                                    </div>
                                    <p>{{$tg->TomTat}}</p>
                                </div>
                            </div>
                            <!-- item-2 -->
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="row rn_block">
                        @foreach($tinGan1 as $tg1)
                        <div class="col-md-4 col-sm-6 padd">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- image -->
                                <div class="post-thumb">
                                    <a href="{{$tg1->theloai['TenTL_KhongDau']}}/{{$tg1->loaitin['Ten_KhongDau']}}/{{$tg1->TieuDe_KhongDau}}">
                                        <img class="img-responsive" src="images/tintuc/{{$tg1->urlHinh}}" alt="" style="height: 120px">
                                    </a>
                                </div>
                               
                            </div>
                            <div class="post-title-author-details">
                                <h4><a href="{{$tg1->theloai['TenTL_KhongDau']}}/{{$tg1->loaitin['Ten_KhongDau']}}/{{$tg1->TieuDe_KhongDau}}">{{$tg1->TieuDe}}</a></h4>
                                <div class="post-editor-date">
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> {{$tg->create_at}}
                                    </div>
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i>{{$tg->SoLanXem}}</div>
                                </div>
                            </div>
                        </div>
                      @endforeach
                    </div>
                </section>
                <!-- Politics Area
                    ============================================ -->
                <section class="politics_wrapper">
                    <h3 class="category-headding ">{{$theloai->TenTL}}</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div>
                            <?php 
                                $tin = $theloai->tin()->orderBy('idTin','desc')->take(5)->get();
                                $tinChinh = $tin->shift();

                             ?>
                            <div class="item">
                                <div class="row">
                                    <!-- main post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                            <!-- post title -->
                                            <h3><a href="{{$tinChinh->theloai['TenTL_KhongDau']}}/{{$tinChinh->loaitin['Ten_KhongDau']}}/{{$tinChinh->TieuDe_KhongDau}}">{{$tinChinh->TieuDe}}</a></h3>
                                            <!-- post image -->
                                            <div class="post-thumb">
                                                <a href="{{$tinChinh->theloai['TenTL_KhongDau']}}/{{$tinChinh->loaitin['Ten_KhongDau']}}/{{$tinChinh->TieuDe_KhongDau}}">
                                                    <img src="images/tintuc/{{$tinChinh->urlHinh}}" class="img-responsive" alt="" style="height: 200px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <!-- post comment -->
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                            <p>{{$tinChinh->TomTat}}</a></p>
                                        </div>
                                    </div>
                                    <!-- right side post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="row rn_block">
                                            @foreach($tin as $t)
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <!-- post image -->
                                                <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                                    <a href="#">
                                                        <img src="images/tintuc/{{$t->urlHinh}}" class="img-responsive" alt="" style="height: 100px">
                                                    </a>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <!-- post image -->
                                                    <h5><a href="{{$t->theloai['TenTL_KhongDau']}}/{{$t->loaitin['Ten_KhongDau']}}/{{$t->TieuDe_KhongDau}}">{{$t->TieuDe}}</a></h5>
                                                    <div class="post-editor-date">
                                                        <!-- post date -->
                                                        <div class="post-date">
                                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                                        </div>
                                                        <!-- post comment -->
                                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.Politics -->
                <div class="ads">
                    <a href="#"><img src="images/top-bannner2.jpg" class="img-responsive center-block" alt=""></a>
                </div>
            </div>
            <!-- /.left content inner -->
            @include('layouts.sidebar');
            <!-- side content end -->
        </div>
        <!-- row end -->
    </div>