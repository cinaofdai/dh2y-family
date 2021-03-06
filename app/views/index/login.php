<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>DH2Y家族管理系统 - 登录</title>
    <meta name="keywords" content="DH2Y家族管理系统">
    <meta name="description" content="DH2Y家族管理系统，不怕家族庞大而记不住家族的成员">
    <link href="{{STATUS.MAIN__CSS}}/bootstrap.min.css"  rel="stylesheet">
    <link href="{{STATUS.MAIN__CSS}}/font-awesome.min.css-v=4.4.0.css" rel="stylesheet">
    <link href="{{STATUS.MAIN__CSS}}/animate.min.css" rel="stylesheet">
    <link href="{{STATUS.MAIN__CSS}}/style.min.css" rel="stylesheet">
    <link href="{{STATUS.MAIN__CSS}}/login.min.css" rel="stylesheet">
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>

</head>

<body class="signin">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-7">
            <div class="signin-info">
                <div class="logopanel m-b">
                    <h1>[ DH2Y-家族管理]</h1>
                </div>
                <div class="m-b"></div>
                <h4>欢迎使用 <strong>DH2Y+ 家族管理平台</strong></h4>
                <ul class="m-b">
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 表哥今年生的儿子忘记叫什么了？</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 堂叔的儿子忘记叫什么了？</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 姑姑的孙子忘记叫什么了？</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 爸妈的生日忘记了？</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 什么这些怎么能不知道,家族管理系统帮你搞定!</li>
                </ul>
                <strong>还没有账号？ <a href="#">立即注册成为族长&raquo;</a></strong>
            </div>
        </div>
        <div class="col-sm-5">
            <form method="post" action="/index/login">
                <h4 class="no-margins">族长登录：</h4>
                <p class="m-t-md">
                    {% if error %}
                        <span style="color: red">{{error}}</span>
                    {% else %}
                        登录到DH2Y家族管理后台
                    {% endif %}
                </p>
                <input type="text" name="user[name]" class="form-control uname" placeholder="用户名" />
                <input type="password" name="user[password]" class="form-control pword m-b" placeholder="密码" />
                <a href="">忘记密码了？</a>
                <button class="btn btn-success btn-block">登录</button>
            </form>
        </div>
    </div>
    <div class="signup-footer">
        <div class="pull-left">
            &copy; 2016 All Rights Reserved. DH2Y
        </div>
    </div>
</div>
</body>

</html>