<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="wap-font-scale" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=9, IE=8;IE=7, IE=EDGE, chrome=1">

    <link  rel='stylesheet' href="{{ mix('css/app.css') }}"/>
    <link  rel='stylesheet' href="{{ mix('css/login.css') }}"/>

    <title>礼物233-选择困难症的福音</title>
</head>
<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>礼物233网</strong> 登录</h1>
                    <div class="description">
                        <p>
                            <a href="#"><strong>liwu233</strong>.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>登录</h3>
                            <p>请输入用户名密码进行登录</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">用户名</label>
                                <input type="text" name="form-username" placeholder="用户名..." class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">密码</label>
                                <input type="password" name="form-password" placeholder="密码..." class="form-password form-control" id="form-password">
                            </div>
                            <button type="submit" class="btn">登录</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{ mix('js/login.js') }}"></script>

<script>

    jQuery(document).ready(function() {
        /*
         Fullscreen background
         */
        $.backstretch('storage/images/login.jpg');
    });

</script>

</body>
</html>