@extends('layouts.app')

@section('content')
{{--  手机版顶部导航 --}}
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

<div>

  @include('layouts._other_header')

  <hr class="d-block d-sm-none" style="background: #AF6001;">

    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card login">
                    <div class="card-header text-white-50" style="border-bottom: solid 1px black;"><h4>登 录</h4></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right text-white-50"><h5>E-Mail</h5></label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right text-white-50"><h5>密码</h5></label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label text-white-50" for="remember">
                                           记住我
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="login btn btn-secondary text-white-50" >
                                        登录
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-white-50" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
