@extends('layouts.app')

@section('content')

<section class="h-75 bg-secondary">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-6">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="/login" method="post">
                  @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>
                  @if ($content != NULL)
                  <div class="notification is-danger is-light">
                    {{ $content }}
                  </div>
                  @endif
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="login_user" class="form-control form-control-lg" name="email" value="user001@gmail.com"/>
                    <label class="form-label" for="login_user">{{ __('Email Address') }}</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="login_pw" class="w-100 form-control form-control-lg" name="password" value="pw001"/>
                    <label class="w-100 form-label" for="login_pw">{{ __('Password') }}</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="w-100 btn btn-dark btn-lg btn-block" type="submit">{{ __('Login') }}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
