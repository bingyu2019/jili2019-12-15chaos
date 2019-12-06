@extends('layouts.app')

@section('content')

  {{--  手机 顶部导航 --}}
  <div class="d-block d-sm-none">
    @include('layouts._xs_header')
    <br><br>
  </div>

  {{-- 手机 logo --}}
  <div class="text-center d-block d-sm-none">
    <a href="{{ route('root') }}"><img class="img-fluid mt-3" src="/images/logo/logo.jpg"></a>
  </div>

  {{--  PC logo --}}
  <div class="d-none d-sm-block">
    <a href="{{ route('root') }}"><img class="img-fluid mt-3" src="/images/logo/logo.jpg"></a>
  </div>


{{-- PC 顶部导航 --}}
    @include('layouts._lg_other_header')
{{-- 手机 显示横线 --}}
    <hr class="d-block d-sm-none" style="background: #AF6001;">



  <div class="container text-white-50">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card register">
          <div class="card-header " style="border-bottom:solid 1px #610B03; "><h4>{{ __('Register') }}</h4></div>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right"><h5>用户名</h5></label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                  @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right"><h5>{{ __('E-Mail Address') }}</h5></label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right"><h5>{{ __('Password') }}</h5></label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><h5>{{ __('Confirm Password') }}</h5></label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="captcha" class="col-md-4 col-form-label text-md-right"><h5>验证码</h5></label>

                <div class="col-md-6">
                  <input id="captcha" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" name="captcha" required>

                  <img class="thumbnail captcha mt-3 mb-2" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">

                  @if ($errors->has('captcha'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('captcha') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-secondary btn-block register text-white-50" style="height: 50px;">
                    <h4> 注  &nbsp;册</h4>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
@endsection
