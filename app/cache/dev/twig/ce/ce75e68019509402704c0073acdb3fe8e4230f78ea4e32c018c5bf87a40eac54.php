<?php

/* WCSWildExchangeBundle:Default:index.html.twig */
class __TwigTemplate_6bef4c7f7a210f1ba9787a4924109f147d527a9bcc11fce46c110f33ccae8214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSWildExchangeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef532b21eb9dc9086e95c5df2e070730667b12fe10db9c129701383eff47f7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef532b21eb9dc9086e95c5df2e070730667b12fe10db9c129701383eff47f7d6->enter($__internal_ef532b21eb9dc9086e95c5df2e070730667b12fe10db9c129701383eff47f7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSWildExchangeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef532b21eb9dc9086e95c5df2e070730667b12fe10db9c129701383eff47f7d6->leave($__internal_ef532b21eb9dc9086e95c5df2e070730667b12fe10db9c129701383eff47f7d6_prof);

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
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}", "WCSWildExchangeBundle:Default:index.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/index.html.twig");
    }
}
