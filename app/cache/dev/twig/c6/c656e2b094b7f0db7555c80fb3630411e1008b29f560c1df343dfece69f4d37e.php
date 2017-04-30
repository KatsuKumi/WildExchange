<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_b78a21f1523e3b51d06d7c9551148eb343b3fb29969d535a0f3e351de9bd36d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ab402948db5a9c9392d11e281e001dd34cdc5f44bd6ff56f51d5e4847c3eabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab402948db5a9c9392d11e281e001dd34cdc5f44bd6ff56f51d5e4847c3eabb->enter($__internal_7ab402948db5a9c9392d11e281e001dd34cdc5f44bd6ff56f51d5e4847c3eabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ab402948db5a9c9392d11e281e001dd34cdc5f44bd6ff56f51d5e4847c3eabb->leave($__internal_7ab402948db5a9c9392d11e281e001dd34cdc5f44bd6ff56f51d5e4847c3eabb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04d76de4004902d938a5ab892e72067594780703f5d7b421d210b11948f11bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d76de4004902d938a5ab892e72067594780703f5d7b421d210b11948f11bd8->enter($__internal_04d76de4004902d938a5ab892e72067594780703f5d7b421d210b11948f11bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_04d76de4004902d938a5ab892e72067594780703f5d7b421d210b11948f11bd8->leave($__internal_04d76de4004902d938a5ab892e72067594780703f5d7b421d210b11948f11bd8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_13db5a40b9d7207063b862649958aca5007f9879931040f7ccbf8237704d6859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13db5a40b9d7207063b862649958aca5007f9879931040f7ccbf8237704d6859->enter($__internal_13db5a40b9d7207063b862649958aca5007f9879931040f7ccbf8237704d6859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_13db5a40b9d7207063b862649958aca5007f9879931040f7ccbf8237704d6859->leave($__internal_13db5a40b9d7207063b862649958aca5007f9879931040f7ccbf8237704d6859_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaee8168737d860522082303bcca6851c29e2620002ddebc350aec174dcb3874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaee8168737d860522082303bcca6851c29e2620002ddebc350aec174dcb3874->enter($__internal_aaee8168737d860522082303bcca6851c29e2620002ddebc350aec174dcb3874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_aaee8168737d860522082303bcca6851c29e2620002ddebc350aec174dcb3874->leave($__internal_aaee8168737d860522082303bcca6851c29e2620002ddebc350aec174dcb3874_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_10715f937fa9eb9826797bbe709d98eb4db44192cc79ae8f638ccbc75cedabf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10715f937fa9eb9826797bbe709d98eb4db44192cc79ae8f638ccbc75cedabf5->enter($__internal_10715f937fa9eb9826797bbe709d98eb4db44192cc79ae8f638ccbc75cedabf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_10715f937fa9eb9826797bbe709d98eb4db44192cc79ae8f638ccbc75cedabf5->leave($__internal_10715f937fa9eb9826797bbe709d98eb4db44192cc79ae8f638ccbc75cedabf5_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/oem/www/html/WildExchange/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
