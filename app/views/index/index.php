<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_001z27klwvobt9.css"  media="all">
    <link rel="stylesheet" href="{{STATUS.FAMILY__CSS}}/layui.css"  media="all">
    <link rel="stylesheet" href="{{STATUS.FAMILY__CSS}}/main.css"  media="all">

</head>
<body>
<div class="header">
    <div class="main">
        <a class="logo" href="/" title="DH2Y家族管理">DH2Y家族管理云</a>
        <div class="nav">
            <a href="javascript:alert('敬请期待')"><i class="iconfont icon-wenda"></i>文档</a>
            <a href="https://github.com/cinaofdai/dh2y-family" target="_blank"><i class="iconfont icon-shezhi"></i>开源代码</a>
            <a href="/index/memberLogin"><i class="iconfont icon-tishilian"></i>族人登录</a>
        </div>
        <div class="nav-user">
            <a class="unlogin" href="/user/login"><i class="iconfont icon-touxiang"></i></a>
            <span>
                <a href="/index/login">族长登录</a>
                <a href="/index/register">注册</a>
            </span>
            <p class="out-login">
                <a href="http://fly.layui.com:8098/app/qq" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq" title="QQ登入"></a>
                <a href="http://fly.layui.com:8098/app/weibo/" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-weibo" title="微博登入"></a>
            </p>
        </div>
    </div>
</div>
<div class="site-banner">
    <div class="site-banner-bg" style="background-image: url('{{STATUS.FAMILY__IMAGE}}/banner1.jpg'); background-color: #080018;">
    </div>
</div>

<script src="{{STATUS.FAMILY__ROOT}}/layui.js" charset="utf-8"></script>
</body>
</html>
