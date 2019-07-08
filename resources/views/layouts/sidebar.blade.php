<div class="col-md-4 col-sm-4 left-padding">
                <!-- right content wrapper -->
                <div class="input-group search-area">
                    <!-- search area -->
                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
                <!-- /.search area -->
               
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Advertisement -</span>
                    <a href="#"><img src="images/ad-banner.jpg" class="img-responsive center-block" alt=""></a>
                </div>
                <div class="tab-inner">
                    <ul class="tabs">
                        <li><a href="#">PHỔ BIẾN NHẤT</a></li>
                        <li><a href="#">XEM NHIỀU NHẤT</a></li>
                    </ul>
                    <hr>
                    <!-- tabs -->
                    <div class="tab_content">
                        <div class="tab-item-inner">
                            @foreach($tin['tinMoi'] as $tm)
                            <div class="box-item wow fadeIn" data-wow-duration="1s">
                                <div class="img-thumb">
                                    <a href="{{$tm->theloai['TenTL_KhongDau']}}/{{$tm->loaitin['Ten_KhongDau']}}/{{$tm->TieuDe_KhongDau}}" rel="bookmark"><img class="entry-thumb" src="images/tintuc/{{$tm->urlHinh}}" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-1">
                                            <a href="">{{$tm->theloai->TenTL}}</a>
                                        </h6>
                                    <h3 class="td-module-title"><a href="{{$tm->theloai['TenTL_KhongDau']}}/{{$tm->loaitin['Ten_KhongDau']}}/{{$tm->TieuDe_KhongDau}}">{{$tm->TieuDe}}</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i>{{$tm->create_at}}
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> {{$tm->SoLanXem}} </div>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                        </div>
                        <!-- / tab item -->
                        <div class="tab-item-inner">
                            @foreach($tin['mostView'] as $mv)
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="images/tintuc/{{$mv->urlHinh}}" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-5">
                                            <a href="#">{{$mv->theloai->TenTL}}</a>
                                        </h6>
                                    <h3 class="td-module-title"><a href="#">{{$mv->TieuDe}}</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i>{{$mv->create_at}}
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i>{{$mv->SoLanXem}}</div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                        <!-- / tab item -->
                    </div>
                    <!-- / tab_content -->
                </div>
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Advertisement -</span>
                    <a href="#"><img src="images/ad-banner.jpg" class="img-responsive center-block" alt=""></a>
                </div>
                <!-- / tab -->
            </div>