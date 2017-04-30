<?php

/* WCSWildExchangeBundle::test.html.twig */
class __TwigTemplate_df83604afe284ed6df59d9de9ed0623c161d1cdd3c1c42c80bf33ec2ca34cf4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
<div id=\"sidebar\">
    ";
        // line 9
        $this->displayBlock('sidebar', $context, $blocks);
        // line 15
        echo "</div>

<div id=\"content\">
    ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "</div>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "        <ul>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/blog\">Blog</a></li>
        </ul>
    ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "WCSWildExchangeBundle::test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  59 => 10,  56 => 9,  50 => 5,  44 => 19,  42 => 18,  37 => 15,  35 => 9,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WCSWildExchangeBundle::test.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/test.html.twig");
    }
}
