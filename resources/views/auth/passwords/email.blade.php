@extends('layouts.app')

@section('content')

{{--  手机 顶部导航 --}}
<div class="d-block d-sm-none">
  @include('layouts._xs_header')
  <br><br><br><br><br>
</div>


{{-- PC 顶部导航 --}}
  @include('layouts._lg_other_header')

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card login" style="border: solid 1px #5d561b;">
          <div class="card-header">{{ __('Reset Password') }}</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
              @csrf

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right text-white-50"><h5>@ E-Mail</h5></label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                         value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="login btn btn-secondary text-white-50">
                    发送重置密码链接
{{--                    {{ __('Send Password Reset Link') }}--}}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
