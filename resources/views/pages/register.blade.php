    @extends('layouts.master')
    @section('content')
    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1> Registration</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="home-style-one.html" title="">Home</a></li>
                            <li><a href="#" title="">Registration</a></li>
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
                    <div class="register-form-inner">
                        @if(session('thongbao'))
                        <div class="alert alert-success" style="width: 50%; margin: 0 auto;text-align:center">{{session('thongbao')}}</div>
                        @endif
                        <h3 class="category-headding ">REGISTER NOW!</h3>
                        <div class="headding-border bg-color-1"></div>
                        <form action="Dang-Ky" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                            <label>Username<sup>*</sup></label>
                            
                            <input type="text" class="form-control" name="name" placeholder="Username" value="{{old('name')}}">
                            @if($errors->has('name'))
                            <div class="alert alert-danger">
                                {{$errors->first('name')}}
                            </div>
                            @endif
                            <label>Email <sup>*</sup></label>
                            
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                            @if($errors->has('email'))
                            <div class="alert alert-danger">
                                {{$errors->first('email')}}
                            </div>
                            @endif
                            <label>Password <sup>*</sup></label>
                            
                            <input type="password" class="form-control" name="pass" placeholder="Write Your Password Here ...">
                            @if($errors->has('pass'))
                            <div class="alert alert-danger">
                                {{$errors->first('pass')}}
                            </div>
                            @endif
                            <label>Repeat Password <sup>*</sup></label>

                            <input type="password" class="form-control" name="pass_confirmation" placeholder="Rewrite Your Password Here ...">
                              @if($errors->has('pass_confirmation'))
                    <div class="alert alert-danger">
                        {{$errors->first('pass_confirmation')}}
                    </div>
                    @endif
                            <button type="submit" class="btn btn-style">Register Now!</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection

