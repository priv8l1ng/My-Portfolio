
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/app-assets/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/template-login/iofrm-style.css?v=1.1">
    <link rel="stylesheet" type="text/css" href="css/template-login/iofrm-theme11.css?v=1.1">
    {{-- <link rel="stylesheet" href="css/custom1.css">
    <link rel="stylesheet" href="css/skins/skin1.css"> --}}
</head>
<body>
    <div id="pre-load">
        <div class="load-circle"></div>
    </div>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <a href="/">
                            <img class="img-fluid" src="{{asset('public/img/goodeva-technology-logo.png')}}" alt="Logo">
                        </a>
                        <p>Silahkan Anda login terlebih dahulu..</p>
                        <div class="page-links">
                            <a href="login" class="active">Login</a><a href="register">Register</a>
                        </div>
                        @if(session()->has('success'))
                            <div class="d-block alert alert-success alert-dismissible fade show" role="alert">
                                {{session('success')}}
                            </div>
                        @endif
                        @if(session()->has('login_error'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('login_error')}}
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('error')}}
                            </div>
                        @endif
                        <form action="/login" method="post">
                            @csrf
                            @error('email')
                            <div class="d-block invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="E-mail Address" value="{{ old('email') }}" required>
                            @error('password')
                            <div class="d-block invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="/">Kembali Ke Home?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="http://brandio.io/envato/iofrm/html/js/jquery.min.js"></script>
<script src="http://brandio.io/envato/iofrm/html/js/popper.min.js"></script>
<script src="http://brandio.io/envato/iofrm/html/js/bootstrap.min.js"></script>
<script src="http://brandio.io/envato/iofrm/html/js/main.js"></script>
</body>
</html>