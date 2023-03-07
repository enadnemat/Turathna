<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Turathna - Admin Login </title>

    <!-- Bootstrap -->
    <link href="{{asset('admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin_assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin_assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('admin_assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin_assets/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{route('admin.login')}}" method="post">
                    @csrf
                    <h1>Login Form</h1>
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div>
                        <input class="btn btn-default submit" value="Log in" type="submit">
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
