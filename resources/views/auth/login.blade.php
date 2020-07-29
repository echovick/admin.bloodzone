<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('images/Bloodzoneicon.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{ asset('fonts/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-secondary">
    <div id="app">
        <main class="py-4">
            <div class="container mt-2">
                <div class="row justify-content-center mb-5">
                    <img src="{{ asset('images/logo/bloodzone_logo01.png') }}" alt="bloodzone logo" style="width:15%;">
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card shadow">
                            <div class="card-header font-weight-bold" style="text-align:center;">
                                {{ __('Bloodzone Admin Login') }}
                            </div>
                            @if (Auth::user())
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <a href="\home" class="btn btn-block btn-danger text-light">
                                            {{ __('Back To Dashboard') }}
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input id="admin_id" type="text" placeholder="Admin ID"
                                                       class="form-control form-control-sm @error('admin_id') is-invalid @enderror"
                                                       name="admin_id" value="{{ old('admin_id') }}" required
                                                       autocomplete="admin_id" autofocus>

                                                @error('admin_id')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="position-relative">
                                                    <input id="password" type="password" placeholder="Password"
                                                           class="form-control form-control-sm @error('password') is-invalid @enderror"
                                                           name="password" required autocomplete="current-password">
                                                    <a type="button" title="show password text" class="show-password position-absolute" style="z-index: 100;right: 5px;top: 5px;font-size: 14px">
                                                        <i class="fas fa-eye text-muted"></i>
                                                    </a>
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-block btn-danger">
                                                    {{ __('Login') }}
                                                </button>
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

<!-- Core plugin JavaScript-->
<script src="{{ asset('jquery/jquery-3.4.1.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/user.js') }}"></script>

</html>
