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


  <div style="height: 600px;">

    @include('layouts._lg_other_header')

    <hr class="d-block d-sm-none" style="background: #AF6001;">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card register">
            <div class="card-header text-white-50" style="border-bottom: solid 1px #5F2C0D;"><h4>注 册</h4></div>

            <div class="card-body">
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right text-white-50"><h5>用户名</h5></label>

                  <div class="col-md-6">
                    <input id="name" type="text"
                           class="form-control @error('name') is-invalid @enderror" name="name"
                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email"
                         class="col-md-4 col-form-label text-md-right text-white-50"><h5>E-Mail</h5></label>

                  <div class="col-md-6">
                    <input id="email" type="email"
                           class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email">

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
                           required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="password-confirm"
                         class="col-md-4 col-form-label text-md-right text-white-50"><h5>确认密码</h5></label>

                  <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control"
                           name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>

                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-secondary register text-white-50">
                      注册
                    </button>
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
