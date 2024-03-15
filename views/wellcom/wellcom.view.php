<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>POS System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #000;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            position: absolute;
            /* filter: blur(15px); */
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            display: flex;
            margin: auto;
            align-items: center;
            justify-content: center;
        }

        .position-ref {
            position: relative;

        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            padding: 5%;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));            
            -webkit-backdrop-filter: blur(90px);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 32px;
        }


        .title {
            font-size: 84px;
            color: white;
        }

        .links>a {
            color: white;
            padding: 0 25px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: upបpercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body class=" text-primary">
    <div class="flex-center position-ref full-height">
        <div class="content ">
            <div class="title m-b-md text-light">
                POS Management System
            </div>
            <div class="links">
                <a href="/form_admin_signin">Admin Login</a>
                <i class="bi bi-pause" style="color: white; font-size: 20px;"></i>
                <a href="/form_staff_signin">Staff Login</a>
            </div>
        </div>
    </div>
</body>

</html>