<?php

/* WCSWildExchangeBundle:Default:test.html.twig */
class __TwigTemplate_8c6d15991b1ebadf8bce38db92a3b666ab51ee7da63e3549e4aa111bb6280b77 extends Twig_Template
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
        $__internal_f8099e580813f7c97c722601e25df57654c3c675c8a19c041d5e33c18db90af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8099e580813f7c97c722601e25df57654c3c675c8a19c041d5e33c18db90af9->enter($__internal_f8099e580813f7c97c722601e25df57654c3c675c8a19c041d5e33c18db90af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSWildExchangeBundle:Default:test.html.twig"));

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
        
        $__internal_f8099e580813f7c97c722601e25df57654c3c675c8a19c041d5e33c18db90af9->leave($__internal_f8099e580813f7c97c722601e25df57654c3c675c8a19c041d5e33c18db90af9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f94088a769ab196c82de6a3fdc66965460395d3354aa2d7519b08a952ae6c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f94088a769ab196c82de6a3fdc66965460395d3354aa2d7519b08a952ae6c13->enter($__internal_7f94088a769ab196c82de6a3fdc66965460395d3354aa2d7519b08a952ae6c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Test Application";
        
        $__internal_7f94088a769ab196c82de6a3fdc66965460395d3354aa2d7519b08a952ae6c13->leave($__internal_7f94088a769ab196c82de6a3fdc66965460395d3354aa2d7519b08a952ae6c13_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_baf9de8e1f417bf95d3fd35b5ca53f7a486b0fc4b77cea75cf474467474c534d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf9de8e1f417bf95d3fd35b5ca53f7a486b0fc4b77cea75cf474467474c534d->enter($__internal_baf9de8e1f417bf95d3fd35b5ca53f7a486b0fc4b77cea75cf474467474c534d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "        <ul>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/blog\">Blog</a></li>
        </ul>
    ";
        
        $__internal_baf9de8e1f417bf95d3fd35b5ca53f7a486b0fc4b77cea75cf474467474c534d->leave($__internal_baf9de8e1f417bf95d3fd35b5ca53f7a486b0fc4b77cea75cf474467474c534d_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_228546cfdc4c8e52a99aa0b4f49b60f08cc116e7d2ee22c4a37fb82f0557d9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228546cfdc4c8e52a99aa0b4f49b60f08cc116e7d2ee22c4a37fb82f0557d9f7->enter($__internal_228546cfdc4c8e52a99aa0b4f49b60f08cc116e7d2ee22c4a37fb82f0557d9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_228546cfdc4c8e52a99aa0b4f49b60f08cc116e7d2ee22c4a37fb82f0557d9f7->leave($__internal_228546cfdc4c8e52a99aa0b4f49b60f08cc116e7d2ee22c4a37fb82f0557d9f7_prof);

    }

    public function getTemplateName()
    {
        return "WCSWildExchangeBundle:Default:test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  74 => 10,  68 => 9,  56 => 5,  47 => 19,  45 => 18,  40 => 15,  38 => 9,  31 => 5,  25 => 1,);
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
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Test Application{% endblock %}</title>
</head>
<body>
<div id=\"sidebar\">
    {% block sidebar %}
        <ul>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/blog\">Blog</a></li>
        </ul>
    {% endblock %}
</div>

<div id=\"content\">
    {% block body %}{% endblock %}
</div>
</body>
</html>", "WCSWildExchangeBundle:Default:test.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/test.html.twig");
    }
}
