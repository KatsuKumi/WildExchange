<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_55c01f7321778002cdfa87b3bdcc8ab35117dffca0a5bb778199adbe8d958663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8daa38d3873ba45ec08b354141820b1dce738537174bc92f2d136b7113afa4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8daa38d3873ba45ec08b354141820b1dce738537174bc92f2d136b7113afa4f->enter($__internal_a8daa38d3873ba45ec08b354141820b1dce738537174bc92f2d136b7113afa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8daa38d3873ba45ec08b354141820b1dce738537174bc92f2d136b7113afa4f->leave($__internal_a8daa38d3873ba45ec08b354141820b1dce738537174bc92f2d136b7113afa4f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b9b7b1db67f39cfcaed1be56926dd2160d72f27927e3543d078aeb872593e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9b7b1db67f39cfcaed1be56926dd2160d72f27927e3543d078aeb872593e54->enter($__internal_0b9b7b1db67f39cfcaed1be56926dd2160d72f27927e3543d078aeb872593e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b9b7b1db67f39cfcaed1be56926dd2160d72f27927e3543d078aeb872593e54->leave($__internal_0b9b7b1db67f39cfcaed1be56926dd2160d72f27927e3543d078aeb872593e54_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95d8ad9b9ab9a5c0a1dcb8867db9b4ad4e33bb758a371fb8cd937f41b9fd0338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d8ad9b9ab9a5c0a1dcb8867db9b4ad4e33bb758a371fb8cd937f41b9fd0338->enter($__internal_95d8ad9b9ab9a5c0a1dcb8867db9b4ad4e33bb758a371fb8cd937f41b9fd0338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_95d8ad9b9ab9a5c0a1dcb8867db9b4ad4e33bb758a371fb8cd937f41b9fd0338->leave($__internal_95d8ad9b9ab9a5c0a1dcb8867db9b4ad4e33bb758a371fb8cd937f41b9fd0338_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf11e4d31b17bb8a7592d84064518ddbdeddc11c44d1056191ce9b1c1d26de3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf11e4d31b17bb8a7592d84064518ddbdeddc11c44d1056191ce9b1c1d26de3e->enter($__internal_bf11e4d31b17bb8a7592d84064518ddbdeddc11c44d1056191ce9b1c1d26de3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bf11e4d31b17bb8a7592d84064518ddbdeddc11c44d1056191ce9b1c1d26de3e->leave($__internal_bf11e4d31b17bb8a7592d84064518ddbdeddc11c44d1056191ce9b1c1d26de3e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
