<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a3527eea17290191b7f4a9bd57b43b0cf4de39c6f26ef651a0e488bf2e799d55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_6b549ef44e8b650ff61833a09c687dcd6c1e29b294647d3df92583766b10aa25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b549ef44e8b650ff61833a09c687dcd6c1e29b294647d3df92583766b10aa25->enter($__internal_6b549ef44e8b650ff61833a09c687dcd6c1e29b294647d3df92583766b10aa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b549ef44e8b650ff61833a09c687dcd6c1e29b294647d3df92583766b10aa25->leave($__internal_6b549ef44e8b650ff61833a09c687dcd6c1e29b294647d3df92583766b10aa25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_841b0a6bc6bae88ae2806d90cc52a1eb738332788cf97504d54ebdd5af15f224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841b0a6bc6bae88ae2806d90cc52a1eb738332788cf97504d54ebdd5af15f224->enter($__internal_841b0a6bc6bae88ae2806d90cc52a1eb738332788cf97504d54ebdd5af15f224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_841b0a6bc6bae88ae2806d90cc52a1eb738332788cf97504d54ebdd5af15f224->leave($__internal_841b0a6bc6bae88ae2806d90cc52a1eb738332788cf97504d54ebdd5af15f224_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20d5e37537449eba1b9b2306fb506e77783b936471b135c3564be74efe3939dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d5e37537449eba1b9b2306fb506e77783b936471b135c3564be74efe3939dc->enter($__internal_20d5e37537449eba1b9b2306fb506e77783b936471b135c3564be74efe3939dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20d5e37537449eba1b9b2306fb506e77783b936471b135c3564be74efe3939dc->leave($__internal_20d5e37537449eba1b9b2306fb506e77783b936471b135c3564be74efe3939dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96abbe070ce18aa273ead2b050af46738bb2a821da10a83ff2816d85b47ee141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96abbe070ce18aa273ead2b050af46738bb2a821da10a83ff2816d85b47ee141->enter($__internal_96abbe070ce18aa273ead2b050af46738bb2a821da10a83ff2816d85b47ee141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_96abbe070ce18aa273ead2b050af46738bb2a821da10a83ff2816d85b47ee141->leave($__internal_96abbe070ce18aa273ead2b050af46738bb2a821da10a83ff2816d85b47ee141_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
