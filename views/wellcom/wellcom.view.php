<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<<<<<<< HEAD
=======
<?php 
session_destroy();
?>
>>>>>>> 93859432f13413f70483c0d9f68f8a072a687688
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

        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body class="bg-light text-primary">
    <div class="flex-center position-ref full-height ">
        <div class="content">
            <div class="title m-b-md">
                POS Management System
            </div>

            <div class="links">
                <!-- For more projects: Visit NetGO+  -->

                <a href="/form_admin_signin">Admin Login</a>  |
                <a href="/form_staff_signin">Staff Login</a>

                <!-- <div class="mt-5">
                    <a href="/form_admin_signup">Create Account</a>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>