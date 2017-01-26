<?php

/* /layout/layout.php */
class __TwigTemplate_2f045e95fc0efe59e37bc24fa8ef27520553aca7bc609139257b305233f6f56d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<body>
<header>头部</header>

<content>
    ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "</content>

<footer>尾部</footer>
</body>
</html>";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
    }

    public function getTemplateName()
    {
        return "/layout/layout.php";
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  38 => 7,  30 => 9,  28 => 7,  20 => 1,);
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
<body>
<header>头部</header>

<content>
    {% block content %}
    {% endblock %}
</content>

<footer>尾部</footer>
</body>
</html>", "/layout/layout.php", "D:\\data\\wwwroot\\mysoft\\dh2y-family\\app\\views\\layout\\layout.php");
    }
}
