<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('newAssets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/css/demo2/style.css')}}">
    <link rel="shortcut icon" href="{{asset('newAssets/images/favicon.jpg')}}" />

</head>
<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                {{--  <div class="col-md-4 pe-md-0">
                                    <img src="{{asset('newAssets/images/login-link.jpg')}}">
                                  <div class="auth-side-wrapper"></div>
                                </div>  --}}
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        {{--  @if($setting != Null)
                                            <h1 class="noble-ui-logo logo-light d-block mb-2">{{ $setting->title ?? "" }}</h1>
                                        @endif  --}}
                                        <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                                        <form class="forms-sample" action="{{route('login')}}" method="POST">
                                            @csrf
                                            <div>
                                                {{--  @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <x-alert type="danger" message="{{$error}}"></x-alert>
                                                    @endforeach
                                                @endif  --}}
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password">
                                            </div>
                                            {{-- <div class="form-check mb-3">
                                                <input type="checkbox" id="checkbox1" name="active" value="1" class='form-check-input'>
                                                <label class="form-check-label" for="checkbox1">
                                                    Remember me
                                                </label>
                                            </div> --}}
                                            <div>
                                                <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                                            </div>


                                            {{-- <a href="{{ route('password.request') }}" class='float-end'>
                                                <small>Forgot password?</small>
                                            </a> --}}
                                        </form>

                                            <div class="pt-2">
                                                <a href="{{ route('register') }}"  class="btn btn-info me-2 mb-2 mb-md-0 text-white">Register</a>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('newAssets/vendors/core/core.js')}}"></script>
    <script src="{{asset('newAssets/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('newAssets/js/template.js')}}"></script>

</body>
</html>
