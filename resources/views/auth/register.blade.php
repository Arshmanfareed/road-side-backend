<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('backend_assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('backend_assets/images/favicon.png') }}" type="image/x-icon">
    <title>Register | Road Side Rescue</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('backend_assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/responsive.css') }}">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('frontend_assets/images/vector.png') }}" alt="looginpage"></div>
        <div class="col-xl-7 p-0">
          <div class="login-card login-dark">
            <div>
              <div>
                <a class="logo text-start" href="{{ route('frontendhome') }}">
                        {{ config('app.name') }}
                </a>
        </div>
              <div class="login-main">
                <form method="post" action="{{ route('register') }}" class="theme-form">
                    @csrf
                  <h4>{{ __('Register') }}</h4>
                  <p>Enter your personal details to create account</p>
                  <div class="form-group">
                    <label class="col-form-label pt-0">{{ __('Name') }}</label>
                    <div class="row g-2">
                      <div class="col-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      </div>

                      @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">{{ __('Password') }}</label>
                    <div class="form-input position-relative">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      <div class="show-hide"><span class="show"></span></div>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">{{ __('Confirm Password') }}</label>
                    <div class="form-input position-relative">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      <div class="show-hide"><span class="show"></span></div>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="role" class="col-form-label">{{ __('Role') }}</label>
                    <div class="form-input position-relative">
                    <div class="col-md-12">
                        <select id="role" class="form-select @error('role') is-invalid @enderror" name="role" required>
                            <option value="">Select Role</option>
                            <!-- <option value="admin">Admin</option> -->
                            <option value="vendor">Vendor</option>
                            <option value="user">User</option>
                        </select>
                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>
                </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>
                    </div>
                    <button class="btn btn-primary btn-block w-100" type="submit"> {{ __('Register') }}</button>
                  </div>
                  <h6 class="text-muted mt-4 or">Or signup with</h6>
                  <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div>
                  <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="{{ route('adminlogin') }}">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ asset('backend_assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('backend_assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('backend_assets/js/icons/feather-icon/feather.min.js') }}"></script>
      <script src="{{ asset('backend_assets/js/icons/feather-icon/feather-icon.js') }}"></script>
      <script src="{{ asset('backend_assets/js/config.js') }}"></script>
      <script src="{{ asset('backend_assets/js/script.js') }}"></script>
      <script src="{{ asset('backend_assets/js/script1.js') }}"></script>
    </div>
  </body>
</html>

