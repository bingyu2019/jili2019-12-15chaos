@extends('layouts.app')

@section('content')

  {{--  手机 顶部导航 --}}

  <div class="d-block d-sm-none">
    @include('layouts._xs_header')
    <br><br><br><br><br><br><br><br>
  </div>

  {{-- PC 顶部导航 --}}
  @include('layouts._lg_other_header')

  <br>

  <div class="containe text-white-50">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card register" style="border: solid 1px #808000;">
          <div class="card-header"><h4>{{ __('Verify Your Email Address') }}</h4></div>

          <div class="card-body">
            @if (session('resent'))
              <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
              </div>
            @endif

            <h5>{{ __('Before proceeding, please check your email for a verification link.') }}
              {{ __('If you did not receive the email') }},</h5>
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
              @csrf
              <button type="submit"
                      class="btn btn-outline-secondary p-1 pt-2 btn-link align-baseline text-white-50 float-right"><h5>{{ __('click here to request another') }}</h5></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
