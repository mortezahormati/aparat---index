<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/style.css">
    <style>
        @font-face {
            font-family: iranSans;
            src: url("assets/fonts/IRANSansXFaNum-Regular.ttf");
        }
        body {
            margin: 0px;
            font-family: iranSans, sans-serif, serif;
            font-size: 14px;
            box-sizing: border-box;
            max-width: 100%;
            background-color: rgb(250, 250, 250);
            overflow-x: hidden;
            background-image: url('upload/bg.webp');
            background-size: cover;
            background-position: 100% 100%;
            background-repeat: no-repeat;
        }
        .logo img {
            vertical-align: middle;
            filter: contrast(0);
            opacity: 0.8;
            user-select: none;
            transition: all 200ms ease 0s;
        }
    </style>
</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-5">
                <h2 class="heading-section logo">
                    <img src="upload/aparat_logo_type_fa.svg" style="height: 30px" alt="">
                    <img src="upload/aparat_logo.svg" style="height: 30px"  alt="">

                </h2>
            </div>
            <div class="col-md-5 text-right mb-5">
                <a href="index.php" class="btn  btn-outline-dark btn-sm">
                   <span style="font-size: 14px">
                       بازگشت
                   </span>
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="wrap">
                    <div class="login-wrap p-3 mb-2">
                        <div class="row">
                            <a href="register.php" style="font-size: 12px;margin-left: 11px;" class="btn btn-sm btn-danger ">
                                ایجاد حساب کاربری
                            </a>
                            <span class="ml-5 mt-2" style="font-size: 12px">:اگر در آپارات حساب کاربری ندارید، ثبت نام کنید</span>

                        </div>
                        <hr>
                        <div class="row text-right float-right">
                            <span class="mr-4" style="font-size: 12px">:اگر در آپارات حساب کاربری دارید، وارد شوید</span>
                        </div>

                            <form action="#" class="signin-form mt-4" style="direction: ltr">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control text-right" placeholder="نام کاربری یا ایمیل" required>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" placeholder="رمز عبور" class="form-control text-right" required>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-danger rounded submit px-3">ورود</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">یادآوری
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">رمز عبورت رو فراموش کردی ؟ </a>
                                    </div>
                                </div>
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/jquery.min.js"></script>
<script src="assets/popper.js"></script>
<script src="assets/bootstrap.min.js"></script>
<script src="assets/main.js"></script>

</body>
</html>