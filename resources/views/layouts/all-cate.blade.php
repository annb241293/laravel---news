 <section class="all-category-inner">
    <div class="container">

        <div class="row">


            @foreach($vs_theloai as $tl)
                <?php 
                    $tin = $tl->tin()->orderBy('idTin','desc')->first();
                ?>
            <div class="col-md-4 col-sm-4">
                <!-- sports -->
                <div>
                    <h3 class="category-headding ">{{$tl->TenTL}}</h3>


                    <div class="headding-border bg-color-1"></div>



                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">



                        <h3><a href="{{$tin->theloai->TenTL_KhongDau}}/{{$tin->loaitin->Ten_KhongDau}}/{{$tin->TieuDe_KhongDau}}">{{$tin['TieuDe']}}</a></h3>
                        
                        <div class="post-thumb">
                            <a href="{{$tin->theloai->TenTL_KhongDau}}/{{$tin->loaitin->Ten_KhongDau}}/{{$tin->TieuDe_KhongDau}}">
                                <img src="images/tintuc/{{$tin['urlHinh']}}" class="img-responsive" alt="" style="height: 200px">
                            </a>
                        </div>
                    </div>
                    <div class="post-title-author-details">
                        <div class="post-editor-date">
                            <!-- post date -->
                            <div class="post-date">
                                <i class="pe-7s-clock"></i>{{$tin['create_at']}}
                            </div>
                            <!-- post comment -->
                            <div class="post-author-comment"><i class="pe-7s-comment"></i>{{$tin['SoLanXem']}}</div>
                        </div>
                        <p style="min-height: 100px">{{$tin['TomTat']}}</p>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>