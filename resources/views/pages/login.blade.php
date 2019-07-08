 @extends('layouts.master')
    @section('content')
    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Login </h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="home-style-one.html" title="">Home</a></li>
                            <li><a href="#" title="">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="login-reg-inner">
        <div class="container">
            <div class="row">
                <div class="center-block" style="width: 50%">
                    <div class="login-form-inner">
                        @if(session('thongbao'))
                        <div class="alert alert-success" style="width: 50%; margin: 0 auto;text-align:center">{{session('thongbao')}}</div>
                        @endif
                        <h3 class="category-headding ">LOGIN TO YOUR ACCOUNT</h3>
                        <div class="headding-border bg-color-1"></div>
                        <form action="Dang-Nhap" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                            <label>Email <sup>*</sup></label>
                            <input type="text" class="form-control" id="name_email" name="email" placeholder="Email" value="{{old('email')}}">
                            @if($errors->has('email'))
                            <div class="alert alert-danger">
                                {{$errors->first('email')}}
                            </div>
                            @endif
                            <label>Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="*******">
                            @if($errors->has('pass'))
                            <div class="alert alert-danger">
                                {{$errors->first('pass')}}
                            </div>
                            @endif
                            <label class="checkbox-inline">
                                <input type="checkbox" value="on">Remember me</label>
                            <button type="submit" class="btn btn-style">Login</button>
                            <div class="foeget"><a href="#">Forget username/password?</a></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="social_icon">
                                        <div class="social_icon_box social_icon_box_1">
                                            <div class="icon facebook-icon"></div>
                                            <span class="social_info">Login with facebook</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="social_icon">
                                        <div class="social_icon_box social_icon_box_2">
                                            <div class="icon twitter-icon"></div>
                                            <span class="social_info">Login with twitter</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    @endsection

  