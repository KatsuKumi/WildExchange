<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_51007e57e312b31fa62cc288406dac91e0fda040ce3016f71b89319b641ad51d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2af8e1053a95e97200018f6fdc7d2cb41f01a92e35ec0b054d98840b469dbe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af8e1053a95e97200018f6fdc7d2cb41f01a92e35ec0b054d98840b469dbe9e->enter($__internal_2af8e1053a95e97200018f6fdc7d2cb41f01a92e35ec0b054d98840b469dbe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af8e1053a95e97200018f6fdc7d2cb41f01a92e35ec0b054d98840b469dbe9e->leave($__internal_2af8e1053a95e97200018f6fdc7d2cb41f01a92e35ec0b054d98840b469dbe9e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c4f6416ce13dc45b164fd1b8f791a03b9ce44289711fe1d9f869b01187efb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4f6416ce13dc45b164fd1b8f791a03b9ce44289711fe1d9f869b01187efb29->enter($__internal_7c4f6416ce13dc45b164fd1b8f791a03b9ce44289711fe1d9f869b01187efb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7c4f6416ce13dc45b164fd1b8f791a03b9ce44289711fe1d9f869b01187efb29->leave($__internal_7c4f6416ce13dc45b164fd1b8f791a03b9ce44289711fe1d9f869b01187efb29_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_29df62de8718720f80eb7af887551bb10a6095c2d9e1e8b8b85bfb5a3d9b0201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29df62de8718720f80eb7af887551bb10a6095c2d9e1e8b8b85bfb5a3d9b0201->enter($__internal_29df62de8718720f80eb7af887551bb10a6095c2d9e1e8b8b85bfb5a3d9b0201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_29df62de8718720f80eb7af887551bb10a6095c2d9e1e8b8b85bfb5a3d9b0201->leave($__internal_29df62de8718720f80eb7af887551bb10a6095c2d9e1e8b8b85bfb5a3d9b0201_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
