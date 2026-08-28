<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Admin - Nusantara Restaurant</title>
    
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
            max-width: 480px;
        }

        .auth-header {
            background: #435ebe;
            color: #ffffff;
            padding: 28px 24px;
            text-align: center;
        }

        .auth-logo-icon {
            width: 56px;
            height: 56px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 26px;
            margin-bottom: 10px;
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
            
            <!-- Header -->
            <div class="auth-header text-center">
                <div class="auth-logo-icon mx-auto">
                    <i class="bi bi-cup-hot-fill"></i>
                </div>
                <h4 class="fw-bold mb-1 text-white">Nusantara Restaurant</h4>
                <p class="mb-0 opacity-75 small">Pendaftaran Akun Baru Admin & POS System</p>
            </div>

            <!-- Form Body -->
            <div class="p-4 p-md-5">
                <h5 class="fw-bold text-dark mb-1">Buat Akun Baru</h5>
                <p class="text-muted small mb-4">Lengkapi data kamu di bawah untuk membuat akun pengelola restoran.</p>

                <form action="{{ route('dashboard') }}" method="GET">
                    
                    <!-- Input Nama Lengkap -->
                    <div class="form-group position-relative has-icon-left mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Nama Lengkap" required>
                        <div class="form-control-icon">
                            <i class="bi bi-person-badge"></i>
                        </div>
                    </div>

                    <!-- Input Email -->
                    <div class="form-group position-relative has-icon-left mb-3">
                        <input type="email" class="form-control form-control-lg" placeholder="Email (misal: admin@resto.com)" required>
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>

                    <!-- Input Username -->
                    <div class="form-group position-relative has-icon-left mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Username (misal: lizam_admin)" required>
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>

                    <!-- Input Password -->
                    <div class="form-group position-relative has-icon-left mb-3">
                        <input type="password" class="form-control form-control-lg" placeholder="Kata Sandi" required>
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>

                    <!-- Input Konfirmasi Password -->
                    <div class="form-group position-relative has-icon-left mb-3">
                        <input type="password" class="form-control form-control-lg" placeholder="Konfirmasi Kata Sandi" required>
                        <div class="form-control-icon">
                            <i class="bi bi-check2-circle"></i>
                        </div>
                    </div>

                    <!-- Checkbox Terms -->
                    <div class="form-check mb-4 small">
                        <input class="form-check-input" type="checkbox" id="agreeTerms" required checked>
                        <label class="form-check-label text-muted" for="agreeTerms">
                            Saya menyetujui <a href="#" class="text-primary font-bold text-decoration-none">Syarat & Ketentuan</a> restoran.
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary btn-lg w-100 font-bold shadow d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-person-plus-fill"></i>
                        <span>Daftar Akun Sekarang</span>
                    </button>
                </form>

                <!-- Footer Text -->
                <div class="text-center mt-4 pt-3 border-top small text-muted">
                    <span>Sudah memiliki akun admin? </span>
                    <a href="{{ route('login') }}" class="text-primary font-bold text-decoration-none">Login Di Sini</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
