<!doctype html>
<html lang="zxx">

<head>
    <!--=========================*
                Met Data
    *===========================-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gelr Bootstrap 4 Admin Template">
    <title>ورود به پنل مدیریت راسان</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
    <link rel="stylesheet" href="/assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/admin/css/style.css">
    <link rel="stylesheet" href="/assets/admin/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/admin/css/fontawsome.css">
    <link rel="stylesheet" href="/assets/admin/css/font-awesome.min.css">



</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="/admin/login">
                <div class="login-form-body">
                    <div class="text-center mx-auto">
                        <img src="/assets/admin/images/rassan-logo-en.png" class="mb-5" alt="Logo">
                    </div>
                    <div>
                        @include("admin.layout.errors")
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            <i class="ti-mobile"></i>
                            موبایل
                        </label>
                        <input name="mobile" class="form-control ltr text-center" type="text" id="exampleInputEmail1">
                        @error('mobile') <span class="text-danger error">{{ $message }}</span>@enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">
                            <i class="ti-lock"></i>
                            رمزعبور
                        </label>
                        <input name="password" class="form-control ltr text-center" type="password" id="exampleInputPassword1">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror

                    </div>

                    <div class="row mb-4 rmber-area">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox primary-checkbox mr-sm-2">
                                <input name="remember_me" type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">مرا به خاطر بسپار</label>
                            </div>
                        </div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit" class="btn btn-primary">تایید <i class="ti-arrow-right"></i></button>
                    </div>
                </div>
                @csrf
            </form>

            <div class="login100-more" style="background-image: url('/assets/admin/images/admin-background.jpg');">
            </div>
        </div>
    </div>
</div>

<script src="/assets/admin/js/jquery.min.js"></script>
<script src="/assets/admin/js/bootstrap.min.js"></script>
</body>

</html>
