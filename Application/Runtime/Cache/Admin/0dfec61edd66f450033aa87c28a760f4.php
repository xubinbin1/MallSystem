<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>登录页面</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="/MallSystem/Public/Static/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="/MallSystem/Public/Static/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="/MallSystem/Public/Static/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="/MallSystem/Public/Admin/css/style.css" rel="stylesheet" />
   <link href="/MallSystem/Public/Admin/css/style-responsive.css" rel="stylesheet" />
   <link href="/MallSystem/Public/Admin/css/style-default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="index.html">
            <img class="center" alt="logo" src="/MallSystem/Public/Admin/img/logo.png">
        </a>
        <!-- END LOGO -->
    </div>
    <div class="login-wrap">
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>登录</span>
            </div>
        </div>
        <div class="metro double-size green">
            <form action="index.html">
                <div class="input-append lock-input">
                    <input type="text" class="" placeholder="Username">
                </div>
            </form>
        </div>
        <div class="metro double-size yellow">
            <form action="index.html">
                <div class="input-append lock-input">
                    <input type="password" class="" placeholder="Password">
                </div>
            </form>
        </div>
        <div class="metro single-size terques login">
            <form action="index.html">
                <button type="submit" class="btn login-btn">
                    登录
                    <i class=" icon-long-arrow-right"></i>
                </button>
            </form>
        </div>
        <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> 记住密码
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="javascript:;">忘记密码?</a>
            </div>
        </div>
    </div>
</body>
<!-- END BODY -->
</html>