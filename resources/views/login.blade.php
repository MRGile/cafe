<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Nusantara Restaurant Admin</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/5.png') }}">

    <style>
        body {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
            padding: 20px 0;
        }

        .auth-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            width: 100%;
            max-width: 440px;
        }

        .auth-header {
            background: #435ebe;
            color: #ffffff;
            padding: 32px 24px;
            text-align: center;
        }

        .auth-logo-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 28px;
            margin-bottom: 12px;
        }

        .form-control-icon {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
        }
    </style>
</head>

<body>
    <div class="container p-3">
        <div class="auth-card mx-auto">
            <!-- Auth Header -->
            <div class="auth-header text-center">
                <div class="auth-logo-icon mx-auto">
                    <i class="#" style="color:#ffffff">
                        <img src="{{ asset('assets/images/logo/5.png') }}" alt="Logo" class="img-fluid" style="width: 40px; height: 40px;">
                    </i>
                </div>
                <h4 class="fw-bold mb-1 text-white">Nusantara Restaurant</h4>
                <p class="mb-0 opacity-75 small">System Login Admin & POS Dashboard</p>
            </div>

            <!-- Auth Body / Form -->
            <div class="p-4 p-md-5">
                <h5 class="fw-bold text-dark mb-1">Selamat Datang!</h5>
                <p class="text-muted small mb-4">Masukan kredensial akun admin kamu untuk melanjutkan.</p>

                <form action="{{ route('dashboard') }}" method="GET">

                    <!-- Input Email / Username -->
                    <div class="form-group position-relative has-icon-left mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Username / Email" value="" required>
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>

                    <!-- Input Password -->
                        <div class="form-group position-relative has-icon-left mb-3">
                            <input type="password" class="form-control form-control-lg" placeholder="Kata Sandi" required>

                            <div class="form-control-icon top-50 translate-middle-y position-absolute me-7 align-items-center d-flex has-icon-left " style="left: 0; top: 50%; transform: translateY(-50%);">
                                <i class="bi bi-shield-lock" style="align-items:inherit"></i>
                            </div>
                        </div>
                    <!-- Remember & Forgot Password -->
                    <div class="d-flex align-items-center justify-content-between mb-4 small">
                        {{-- <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                            <label class="form-check-label text-muted" for="rememberMe">Lihat sandi</label>
                        </div> --}}
                        <a href="{{ route('forgot') }}" class="text-primary font-bold text-decoration-none" style="align-items: Left">Lupa Password?</a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-primary btn-lg w-100 font-bold shadow d-flex justify-content-center gap-2">
                        <i class="#" style="align-items:inherit"></i>
                        <span>
                            <b style="text-align: center">Masuk</b>
                        </span>
                    </button>
                </form>

                {{-- <!-- Footer Text -->
                <div class="text-center mt-4 pt-3 border-top small text-muted">
                    <span>Belum punya akun admin? </span>
                    <a href="{{ route('register') }}" class="text-primary font-bold text-decoration-none">Daftar Akun Baru</a>
                </div> --}}
            </div>

        </div>
    </div>

</body>
</html>

