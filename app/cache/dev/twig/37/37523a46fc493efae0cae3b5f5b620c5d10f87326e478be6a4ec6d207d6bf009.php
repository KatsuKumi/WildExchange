<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c1e4d3c6ab4a1f217284d6bc99e967a24bb4b6cd3111e89f6d52019e3844ca87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0613bfbdea36b5bcc02a790b700f157574828c0cb561a51115c189f0bbdeabcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0613bfbdea36b5bcc02a790b700f157574828c0cb561a51115c189f0bbdeabcc->enter($__internal_0613bfbdea36b5bcc02a790b700f157574828c0cb561a51115c189f0bbdeabcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0613bfbdea36b5bcc02a790b700f157574828c0cb561a51115c189f0bbdeabcc->leave($__internal_0613bfbdea36b5bcc02a790b700f157574828c0cb561a51115c189f0bbdeabcc_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1c42ee2df58d6f5c49e181657976d0cb0772e31c0599a0954772f942d9567269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c42ee2df58d6f5c49e181657976d0cb0772e31c0599a0954772f942d9567269->enter($__internal_1c42ee2df58d6f5c49e181657976d0cb0772e31c0599a0954772f942d9567269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1c42ee2df58d6f5c49e181657976d0cb0772e31c0599a0954772f942d9567269->leave($__internal_1c42ee2df58d6f5c49e181657976d0cb0772e31c0599a0954772f942d9567269_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3591b7b82748c4d75e4d589ded98ca1d50e63f2a7ec6b993275951133a600b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3591b7b82748c4d75e4d589ded98ca1d50e63f2a7ec6b993275951133a600b9c->enter($__internal_3591b7b82748c4d75e4d589ded98ca1d50e63f2a7ec6b993275951133a600b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3591b7b82748c4d75e4d589ded98ca1d50e63f2a7ec6b993275951133a600b9c->leave($__internal_3591b7b82748c4d75e4d589ded98ca1d50e63f2a7ec6b993275951133a600b9c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  69 => 35,  63 => 34,  52 => 29,  46 => 27,  40 => 26,  33 => 1,  31 => 12,  30 => 11,  29 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
