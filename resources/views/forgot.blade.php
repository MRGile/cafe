<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password - Nusantara Restaurant Admin</title>

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
                    <i class="bi bi-key-fill"></i>
                </div>
                <h4 class="fw-bold mb-1 text-white">Nusantara Restaurant</h4>
                <p class="mb-0 opacity-75 small">Reset Kata Sandi Admin</p>
            </div>

            <!-- Auth Body / Form -->
            <div class="p-4 p-md-5">
                <h5 class="fw-bold text-dark mb-1">Lupa Kata Sandi?</h5>
                <p class="text-muted small mb-4">Masukan email terdaftar kamu. Kami akan mengirimkan tautan reset kata sandi.</p>

                <form action="{{ route('login') }}" method="GET">

                    <!-- Input Email -->
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" class="form-control form-control-lg" placeholder="Masukan Email Terdaftar" required>
                        <div class="form-control-icon">
                            <i class="bi bi-envelope" style="align-items:inherit; position: absolute; left: 0; top: 50%; transform: translateY(-50%);"></i>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary btn-lg w-100 font-bold shadow d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-send-fill"></i>
                        <span>Kirim Link Reset</span>
                    </button>
                </form>

                <!-- Footer Text -->
                <div class="text-center mt-4 pt-3 border-top small text-muted">
                    <span>Ingat kata sandi akun kamu? </span>
                    <a href="{{ route('login') }}" class="text-primary font-bold text-decoration-none">Kembali Ke Login</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
