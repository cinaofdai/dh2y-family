<?php

/* index/index.php */
class __TwigTemplate_b10e64444aec65ed9d340e4b8994f91d358eb00027ee191c3ae4e607f67c5d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">

    <title>DH2Y家族管理系统 - 登录</title>
    <meta name=\"keywords\" content=\"H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台\">
    <meta name=\"description\" content=\"H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["STATUS"]) ? $context["STATUS"] : null), "MAIN__CSS", array()), "html", null, true);
        echo "/bootstrap.min.css\"  rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["STATUS"]) ? $context["STATUS"] : null), "MAIN__CSS", array()), "html", null, true);
        echo "/font-awesome.min.css-v=4.4.0.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["STATUS"]) ? $context["STATUS"] : null), "MAIN__CSS", array()), "html", null, true);
        echo "/animate.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["STATUS"]) ? $context["STATUS"] : null), "MAIN__CSS", array()), "html", null, true);
        echo "/style.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["STATUS"]) ? $context["STATUS"] : null), "MAIN__CSS", array()), "html", null, true);
        echo "/login.min.css\" rel=\"stylesheet\">
    <!--[if lt IE 8]>
    <meta http-equiv=\"refresh\" content=\"0;ie.html\" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>

</head>

<body class=\"signin\">
<div class=\"signinpanel\">
    <div class=\"row\">
        <div class=\"col-sm-7\">
            <div class=\"signin-info\">
                <div class=\"logopanel m-b\">
                    <h1>[ DH2Y-家族管理]</h1>
                </div>
                <div class=\"m-b\"></div>
                <h4>欢迎使用 <strong>DH2Y+ 家族管理平台</strong></h4>
                <ul class=\"m-b\">
                    <li><i class=\"fa fa-arrow-circle-o-right m-r-xs\"></i> 表哥今年生的儿子忘记叫什么了？</li>
                    <li><i class=\"fa fa-arrow-circle-o-right m-r-xs\"></i> 堂叔的儿子忘记叫什么了？</li>
                    <li><i class=\"fa fa-arrow-circle-o-right m-r-xs\"></i> 姑姑的孙子忘记叫什么了？</li>
                    <li><i class=\"fa fa-arrow-circle-o-right m-r-xs\"></i> 爸妈的生日忘记了？</li>
                    <li><i class=\"fa fa-arrow-circle-o-right m-r-xs\"></i> 什么这些怎么能不知道,家族管理系统帮你搞定!</li>
                </ul>
                <strong>还没有账号？ <a href=\"#\">立即注册成为族长&raquo;</a></strong>
            </div>
        </div>
        <div class=\"col-sm-5\">
            <form method=\"post\" action=\"http://www.zi-han.net/theme/hplus/index.html\">
                <h4 class=\"no-margins\">族长登录：</h4>
                <p class=\"m-t-md\">登录到DH2Y家族管理后台</p>
                <input type=\"text\" class=\"form-control uname\" placeholder=\"用户名\" />
                <input type=\"password\" class=\"form-control pword m-b\" placeholder=\"密码\" />
                <a href=\"\">忘记密码了？</a>
                <button class=\"btn btn-success btn-block\">登录</button>
            </form>
        </div>
    </div>
    <div class=\"signup-footer\">
        <div class=\"pull-left\">
            &copy; 2016 All Rights Reserved. DH2Y
        </div>
    </div>
</div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">

    <title>DH2Y家族管理系统 - 登录</title>
    <meta name=\"keywords\" content=\"H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台\">
    <meta name=\"description\" content=\"H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术\">
    <link href=\"{{STATUS.MAIN__CSS}}/bootstrap.min.css\"  rel=\"stylesheet\">
    <link href=\"{{STATUS.MAIN__CSS}}/font-awesome.min.css-v=4.4.0.css\" rel=\"stylesheet\">
    <link href=\"{{STATUS.MAIN__CSS}}/animate.min.css\" rel=\"stylesheet\">
    <link href=\"{{STATUS.MAIN__CSS}}/style.min.css\" rel=\"stylesheet\">
    <link href=\"{{STATUS.MAIN__CSS}}/login.min.css\" rel=\"stylesheet\">
    <!--[if lt IE 8]>
    <meta http-equiv=\"refresh\" content=\"0;ie.html\" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>

</head>

<body class=\"signin\">
<div class=\"signinpanel\">
    <div class=\"row\">
        <div class=\"col-sm-7\">
            <div class=\"signin-info\">
                <div class=\"logopanel m-b\">
                    <h1>[ DH2Y-家族管理]</h1>
                </div>
                <div class=\"m-b\"></div>
                <h4>欢迎使用 <strong>DH2Y+ 家族管理平台</strong></h4>
                <ul class=\"m-b\">
                    <li><i class=\"fa fa-arrow-circle-o-right m-r-xs\"></i> 表哥今年生的儿子忘记叫什么了？</li>
                    <li><i class=\"fa fa-arrow-circle-o-right m-r-xs\"></i> 堂叔的儿子忘记叫什么了？</li>
                    <li><i class=\"fa fa-arrow-circle-o-right m-r-xs\"></i> 姑姑的孙子忘记叫什么了？</li>
                    <li><i class=\"fa fa-arrow-circle-o-right m-r-xs\"></i> 爸妈的生日忘记了？</li>
                    <li><i class=\"fa fa-arrow-circle-o-right m-r-xs\"></i> 什么这些怎么能不知道,家族管理系统帮你搞定!</li>
                </ul>
                <strong>还没有账号？ <a href=\"#\">立即注册成为族长&raquo;</a></strong>
            </div>
        </div>
        <div class=\"col-sm-5\">
            <form method=\"post\" action=\"http://www.zi-han.net/theme/hplus/index.html\">
                <h4 class=\"no-margins\">族长登录：</h4>
                <p class=\"m-t-md\">登录到DH2Y家族管理后台</p>
                <input type=\"text\" class=\"form-control uname\" placeholder=\"用户名\" />
                <input type=\"password\" class=\"form-control pword m-b\" placeholder=\"密码\" />
                <a href=\"\">忘记密码了？</a>
                <button class=\"btn btn-success btn-block\">登录</button>
            </form>
        </div>
    </div>
    <div class=\"signup-footer\">
        <div class=\"pull-left\">
            &copy; 2016 All Rights Reserved. DH2Y
        </div>
    </div>
</div>
</body>

</html>", "index/index.php", "D:\\data\\wwwroot\\mysoft\\dh2y-family\\app\\views\\index\\index.php");
    }
}
