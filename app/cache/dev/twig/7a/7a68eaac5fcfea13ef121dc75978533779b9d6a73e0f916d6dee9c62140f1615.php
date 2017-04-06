<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f1f08eb08fe35da3df8827115262082c9d978c85b8d432a7c5cea3841ca082e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_2d06ec56c4d3c5c3ff5654446351ba6c0bb795c3035f5d6c5e252a8451ab405d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d06ec56c4d3c5c3ff5654446351ba6c0bb795c3035f5d6c5e252a8451ab405d->enter($__internal_2d06ec56c4d3c5c3ff5654446351ba6c0bb795c3035f5d6c5e252a8451ab405d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d06ec56c4d3c5c3ff5654446351ba6c0bb795c3035f5d6c5e252a8451ab405d->leave($__internal_2d06ec56c4d3c5c3ff5654446351ba6c0bb795c3035f5d6c5e252a8451ab405d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc2358800e4748b51a6884ce1e690a678873145954405cc01044caff52dcd866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2358800e4748b51a6884ce1e690a678873145954405cc01044caff52dcd866->enter($__internal_fc2358800e4748b51a6884ce1e690a678873145954405cc01044caff52dcd866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc2358800e4748b51a6884ce1e690a678873145954405cc01044caff52dcd866->leave($__internal_fc2358800e4748b51a6884ce1e690a678873145954405cc01044caff52dcd866_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_855bc9d70dcf3e41187df92df73ae35c0b2bae06982cdf80ae223c853879a847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855bc9d70dcf3e41187df92df73ae35c0b2bae06982cdf80ae223c853879a847->enter($__internal_855bc9d70dcf3e41187df92df73ae35c0b2bae06982cdf80ae223c853879a847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_855bc9d70dcf3e41187df92df73ae35c0b2bae06982cdf80ae223c853879a847->leave($__internal_855bc9d70dcf3e41187df92df73ae35c0b2bae06982cdf80ae223c853879a847_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_438e8f7a28f26719bdfa68d2c69f703ac4281b16d0566f9f003ebcf13bac3a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438e8f7a28f26719bdfa68d2c69f703ac4281b16d0566f9f003ebcf13bac3a42->enter($__internal_438e8f7a28f26719bdfa68d2c69f703ac4281b16d0566f9f003ebcf13bac3a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_438e8f7a28f26719bdfa68d2c69f703ac4281b16d0566f9f003ebcf13bac3a42->leave($__internal_438e8f7a28f26719bdfa68d2c69f703ac4281b16d0566f9f003ebcf13bac3a42_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
