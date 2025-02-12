<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Login and Signup Form </title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container forms">
        <div class="row">
            <div class="col">
                <div id="alert-container">
                    @if (session()->has('success'))
                    <div class="alert success">
                        <span>{{ session('success') }}</span>
                        <button class="close-btn" onclick="this.parentElement.style.display='none'">×</button>
                    </div>
                    @endif

                    @if (session()->has('loginError'))
                    <div class="alert error">
                        <span>{{ session('loginError') }}</span>
                        <button class="close-btn" onclick="this.parentElement.style.display='none'">×</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form id="formAuthentication" action="/login" method="POST">
                    @csrf
                    <div class="field input-field">
                        <input type="username" class="input @error('username') is-invalid @enderror" id="username" name="username" autofocus>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="password" id="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>
                    <div class="field button-field">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- JavaScript -->
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
