<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_72c1df6eb2414d5145a3bc94711900ac9136b6186e3289eab455cd4d2ec7f72e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f10eb9dc2938a77f393d7520d2778684cee4e95b4990c2e9c01c93232c437ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f10eb9dc2938a77f393d7520d2778684cee4e95b4990c2e9c01c93232c437ba->enter($__internal_3f10eb9dc2938a77f393d7520d2778684cee4e95b4990c2e9c01c93232c437ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_3f10eb9dc2938a77f393d7520d2778684cee4e95b4990c2e9c01c93232c437ba->leave($__internal_3f10eb9dc2938a77f393d7520d2778684cee4e95b4990c2e9c01c93232c437ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
