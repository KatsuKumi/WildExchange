<?php

/* WCSWildExchangeBundle:Default:index.html.twig */
class __TwigTemplate_916a99c6a6c80f4b93974320f1e3d72f79dffa57ff3fb7669d0b3127e097eaf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSWildExchangeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d713761fdad37f178f3dcf9460173ddcfce5c11d55436a59e8cb3bf335569fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d713761fdad37f178f3dcf9460173ddcfce5c11d55436a59e8cb3bf335569fe2->enter($__internal_d713761fdad37f178f3dcf9460173ddcfce5c11d55436a59e8cb3bf335569fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSWildExchangeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d713761fdad37f178f3dcf9460173ddcfce5c11d55436a59e8cb3bf335569fe2->leave($__internal_d713761fdad37f178f3dcf9460173ddcfce5c11d55436a59e8cb3bf335569fe2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48e833823e510df4898113d890c608f8778f37831e43ff2b589aeca38c5b8b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e833823e510df4898113d890c608f8778f37831e43ff2b589aeca38c5b8b7d->enter($__internal_48e833823e510df4898113d890c608f8778f37831e43ff2b589aeca38c5b8b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_48e833823e510df4898113d890c608f8778f37831e43ff2b589aeca38c5b8b7d->leave($__internal_48e833823e510df4898113d890c608f8778f37831e43ff2b589aeca38c5b8b7d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_67478b12f6160faa0dfb3158bd148722219decc71fb097a0f23624442a5785ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67478b12f6160faa0dfb3158bd148722219decc71fb097a0f23624442a5785ea->enter($__internal_67478b12f6160faa0dfb3158bd148722219decc71fb097a0f23624442a5785ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_67478b12f6160faa0dfb3158bd148722219decc71fb097a0f23624442a5785ea->leave($__internal_67478b12f6160faa0dfb3158bd148722219decc71fb097a0f23624442a5785ea_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d36cbf1c91b769ac8930fd1385991b8558e9f67835f5205c58a80646f36b48cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36cbf1c91b769ac8930fd1385991b8558e9f67835f5205c58a80646f36b48cb->enter($__internal_d36cbf1c91b769ac8930fd1385991b8558e9f67835f5205c58a80646f36b48cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d36cbf1c91b769ac8930fd1385991b8558e9f67835f5205c58a80646f36b48cb->leave($__internal_d36cbf1c91b769ac8930fd1385991b8558e9f67835f5205c58a80646f36b48cb_prof);

    }

    public function getTemplateName()
    {
        return "WCSWildExchangeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  47 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}{% endblock %}
{% block title %}Accueil{% endblock %}

{% block body %}
{% endblock %}", "WCSWildExchangeBundle:Default:index.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/index.html.twig");
    }
}
