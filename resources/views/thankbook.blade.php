<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Book Now - Nusantara Restaurant</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/5.png') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('asst/vendor/bootstrap/css/bootstrap.min.css') }}"
          rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('asst/css/main.css') }}" rel="stylesheet">


    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Inter", sans-serif;
            overflow-x: hidden;
        }


        /* =====================================================
           BACKGROUND
        ===================================================== */

        .reservation-page {
            min-height: 100vh;

            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.52),
                    rgba(0, 0, 0, 0.68)
                ),
                url("{{ asset('asst/img/3.jpeg') }}")
                center center / cover no-repeat;

            background-attachment: fixed;

            display: flex;
            align-items: center;
            justify-content: center;

            position: relative;
        }


        /* =====================================================
           TOP MENU
           ONLY HOME + BOOK NOW
        ===================================================== */

        .reservation-menu {
            position: fixed;

            top: 25px;
            right: 30px;

            display: flex;
            gap: 10px;

            z-index: 9999;
        }


        .menu-icon {
            width: 45px;
            height: 45px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-decoration: none;

            color: #fff;

            background: rgba(20, 20, 20, 0.45);

            border: 1px solid rgba(255, 255, 255, 0.3);

            border-radius: 50%;

            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);

            box-shadow:
                0 5px 20px rgba(0, 0, 0, 0.3);

            transition: 0.3s ease;
        }


        .menu-icon i {
            font-size: 18px;
        }


        .menu-icon:hover {
            color: #fff;

            background: rgba(0, 0, 0, 0.75);

            transform: translateY(-3px);
        }


        .menu-icon.active {
            background: #00a63c;

            border-color: #00a63c;
        }


        .menu-icon.active:hover {
            background: #00c94a;
        }


        /* =====================================================
           MAIN WRAPPER
        ===================================================== */

        .reservation-wrapper {
            width: 100%;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 90px 20px 40px;
        }


        /* =====================================================
           RESERVATION CARD
        ===================================================== */

        .reservation-card {
            width: 100%;
            max-width: 470px;

            padding: 45px 40px 35px;

            position: relative;

            text-align: center;

            background: rgba(25, 25, 25, 0.48);

            border: 1px solid rgba(255, 255, 255, 0.18);

            border-radius: 4px;

            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.55);

            color: #fff;
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .reservation-logo {
            width: 76px;
            height: 76px;

            position: absolute;

            top: -38px;
            left: 50%;

            transform: translateX(-50%);

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(255, 255, 255, 0.95);

            border: 4px solid rgba(255, 255, 255, 0.9);

            border-radius: 50%;

            overflow: hidden;

            box-shadow:
                0 5px 20px rgba(0, 0, 0, 0.5);
        }


        .reservation-logo img {
            width: 58px;
            height: 58px;

            object-fit: contain;

            border-radius: 50%;
        }


        /* =====================================================
           TITLE
        ===================================================== */

        .reservation-card h2 {
            margin: 5px 0 7px;

            color: #fff;

            font-size: 21px;

            font-weight: 700;

            letter-spacing: 1px;
        }


        .reservation-subtitle {
            margin: 0 0 25px;

            color: rgba(255, 255, 255, 0.65);

            font-size: 11px;

            font-weight: 400;
        }


        /* =====================================================
           FORM
        ===================================================== */

        .reservation-form {
            width: 100%;
        }


        /* =====================================================
           INPUT
        ===================================================== */

        .input-box {
            width: 100%;

            position: relative;

            margin-bottom: 13px;
        }


        .input-box i {
            position: absolute;

            left: 13px;
            top: 50%;

            transform: translateY(-50%);

            color: rgba(255, 255, 255, 0.65);

            font-size: 13px;

            z-index: 2;

            pointer-events: none;
        }


        .input-box input,
        .input-box select,
        .input-box textarea {

            width: 100%;

            outline: none;

            border: none;

            border-bottom: 1px solid rgba(255, 255, 255, 0.28);

            border-radius: 0;

            background: rgba(0, 0, 0, 0.25);

            color: #fff;

            font-family: "Inter", sans-serif;

            font-size: 11px;

            transition: 0.3s ease;
        }


        .input-box input,
        .input-box select {
            height: 40px;

            padding: 10px 12px 10px 38px;
        }


        .input-box textarea {
            min-height: 70px;

            padding: 12px 12px 12px 38px;

            resize: none;
        }


        .input-box input::placeholder,
        .input-box textarea::placeholder {
            color: rgba(255, 255, 255, 0.55);
        }


        .input-box input:focus,
        .input-box select:focus,
        .input-box textarea:focus {

            border-bottom-color: #00b843;

            background: rgba(0, 0, 0, 0.4);
        }


        /* =====================================================
           DATE / TIME
        ===================================================== */

        .input-box input[type="date"],
        .input-box input[type="time"] {
            color-scheme: dark;
        }


        /* =====================================================
           SELECT
        ===================================================== */

        .input-box select {
            appearance: none;

            cursor: pointer;
        }


        .input-box select option {
            background: #222;

            color: #fff;
        }


        /* =====================================================
           DATE + TIME
        ===================================================== */

        .input-row {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 10px;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .reservation-button {
            width: 100%;
            height: 40px;

            margin-top: 8px;

            border: none;

            border-radius: 20px;

            background: #00a63c;

            color: #fff;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 0.7px;

            cursor: pointer;

            transition: 0.3s ease;
        }


        .reservation-button i {
            margin-right: 6px;
        }


        .reservation-button:hover {
            background: #00c94a;

            transform: translateY(-2px);

            box-shadow:
                0 5px 20px rgba(0, 180, 60, 0.35);
        }


        /* =====================================================
           FORM STATUS
        ===================================================== */

        .loading,
        .error-message,
        .sent-message {
            display: none;

            margin-top: 12px;

            font-size: 11px;
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 576px) {

            .reservation-menu {
                top: 15px;
                right: 15px;
            }


            .menu-icon {
                width: 40px;
                height: 40px;
            }


            .menu-icon i {
                font-size: 16px;
            }


            .reservation-wrapper {
                padding: 85px 15px 30px;
            }


            .reservation-card {
                max-width: 100%;

                padding: 42px 22px 30px;
            }


            .reservation-card h2 {
                font-size: 18px;
            }


            .input-row {
                grid-template-columns: 1fr;

                gap: 0;
            }

        }

    </style>

</head>


<body class="reservation-page">

    <!-- =====================================================
         FLOATING MENU
         HOME + BOOK NOW ONLY
    ===================================================== -->

    <div class="reservation-menu">

        <!-- HOME -->
        <a href="{{ url('/utama') }}"
           class="menu-icon"
           title="Home">

            <i class="bi bi-house-fill"></i>

        </a>


        <!-- BOOK NOW -->
        {{-- <a href="#reservation-form"
           class="menu-icon active"
           title="Book Now">

            <i class="bi bi-calendar-check-fill"></i>

        </a> --}}

    </div>



    <!-- =====================================================
         RESERVATION
    ===================================================== -->

    <main class="reservation-wrapper">


        <div class="reservation-card">


            <!-- LOGO -->

            <div class="reservation-logo">

                <img src="{{ asset('assets/images/logo/5.png') }}"
                     alt="Nusantara Restaurant">

            </div>



            <!-- TITLE -->

            <h2>Thank You for Your Reservation</h2>

            <p class="reservation-subtitle">
                Thank you for making a reservation with us.
            </p>
            <p class="reservation-subtitle">
                Your reservation has been successfully submitted.
                We’re excited to welcome you and look forward to serving you.
            </p>
            <p>
                <b>
                    <i>
                        See you soon, and enjoy your dining experience! 🍽️
                    </i>
                </b>
            </p>
    <!-- =====================================================
         ONLY BOOTSTRAP JS
    ===================================================== -->

    <script src="{{ asset('asst/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
