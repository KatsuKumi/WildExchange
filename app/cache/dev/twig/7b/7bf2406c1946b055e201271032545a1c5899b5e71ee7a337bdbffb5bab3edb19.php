<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8518ffb5a4ab2a6f2d08712b5a5d3550c6e98d3b72afc5f12fc777ada12e252b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e328b0a258913ad52d1e1575682903dffebeac243dcac54a496fd0aca0564b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e328b0a258913ad52d1e1575682903dffebeac243dcac54a496fd0aca0564b8b->enter($__internal_e328b0a258913ad52d1e1575682903dffebeac243dcac54a496fd0aca0564b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e328b0a258913ad52d1e1575682903dffebeac243dcac54a496fd0aca0564b8b->leave($__internal_e328b0a258913ad52d1e1575682903dffebeac243dcac54a496fd0aca0564b8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f668dceab3f1515c0e9c838124ad1a07ec22e0bf208cfa80e5e496d860b5d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f668dceab3f1515c0e9c838124ad1a07ec22e0bf208cfa80e5e496d860b5d15->enter($__internal_9f668dceab3f1515c0e9c838124ad1a07ec22e0bf208cfa80e5e496d860b5d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9f668dceab3f1515c0e9c838124ad1a07ec22e0bf208cfa80e5e496d860b5d15->leave($__internal_9f668dceab3f1515c0e9c838124ad1a07ec22e0bf208cfa80e5e496d860b5d15_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f1a8f0f74b9f67e7b596d05c6493b7dff08ce6eb94aaee2e44c9602815db5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1a8f0f74b9f67e7b596d05c6493b7dff08ce6eb94aaee2e44c9602815db5cd->enter($__internal_0f1a8f0f74b9f67e7b596d05c6493b7dff08ce6eb94aaee2e44c9602815db5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0f1a8f0f74b9f67e7b596d05c6493b7dff08ce6eb94aaee2e44c9602815db5cd->leave($__internal_0f1a8f0f74b9f67e7b596d05c6493b7dff08ce6eb94aaee2e44c9602815db5cd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7295a0aef48372dc609dd2ee9b9d48a1425dabc00fb1fd116703a0c31f72b6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7295a0aef48372dc609dd2ee9b9d48a1425dabc00fb1fd116703a0c31f72b6d7->enter($__internal_7295a0aef48372dc609dd2ee9b9d48a1425dabc00fb1fd116703a0c31f72b6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7295a0aef48372dc609dd2ee9b9d48a1425dabc00fb1fd116703a0c31f72b6d7->leave($__internal_7295a0aef48372dc609dd2ee9b9d48a1425dabc00fb1fd116703a0c31f72b6d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
