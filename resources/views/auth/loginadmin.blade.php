<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Halaman Admin</title>
    <!-- CSS files -->
    <link href="{{ asset('tabler/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/demo.min.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
            background: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
            color: #333;
        }

        .card {
            border-radius: 16px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 16px;
        }

        .btn-primary {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .input-group-text {
            background-color: transparent;
            border: none;
        }

        .navbar-brand img {
            height: 48px;
        }

        .form-footer {
            margin-top: 20px;
        }

        .container-tight {
            max-width: 400px;
        }

        .page-center {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            max-width: 150px;
        }
    </style>
</head>
<body>
    <script src="{{ asset('tabler/dist/js/demo-theme.min.js') }}"></script>
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg d-none d-lg-block">
                    <img src="{{ asset('tabler/static/illustrations/undraw_secure_login_pdn4.svg') }}" height="300" class="d-block mx-auto" alt="">
                </div>
                <div class="col-lg">
                    <div class="container-tight">
                        
                    
                        <div class="card card-md">
                            <div class="card-body">
                                <div class="logo-container">
                            <img src="{{ asset('assets/img/login/logospsp.png') }}" alt="Logo">
                        </div>
                                <h2 class="h2 text-center mb-4">Login Halaman Admin</h2>
                                @if (Session::get('warning'))
                                <div class="alert alert-warning">
                                    <p>{{ Session::get('warning') }}</p>
                                </div>
                                @endif
                                <form action="/prosesloginadmin" method="post" autocomplete="off" novalidate>
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email </label>
                                        <div class="input-group input-group-flat">
                                            <input type="email" name="email" class="form-control" placeholder="your@email.com" autocomplete="off">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M3 8l9 6l9 -6l-9 -6z" />
                                                    <path d="M3 8l9 6l9 -6" />
                                                    <path d="M3 16l9 6l9 -6" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">
                                            Password
                                            <span class="form-label-description">
                                                <a href="./forgot-password.html">I forgot password</a>
                                            </span>
                                        </label>
                                        <div class="input-group input-group-flat">
                                            <input type="password" name="password" class="form-control" placeholder="Your password" autocomplete="off">
                                            <span class="input-group-text">
                                                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                        <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <span class="form-check-label">Lupa Pasword Tanya Rozi Aja Biar Cepat</span>
                                        </label>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('tabler/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('tabler/dist/js/demo.min.js') }}" defer></script>
</body>
</html>
