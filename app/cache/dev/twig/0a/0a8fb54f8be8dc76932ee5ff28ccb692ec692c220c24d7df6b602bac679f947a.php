<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_eed3eef2d31d41962fa999246cfccf11f24058589cbde9896decb179d822d784 extends Twig_Template
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
        $__internal_4da867842b18bfbe90bf430209e97325ac2efb78514cc03de501f951777b4d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da867842b18bfbe90bf430209e97325ac2efb78514cc03de501f951777b4d0e->enter($__internal_4da867842b18bfbe90bf430209e97325ac2efb78514cc03de501f951777b4d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_4da867842b18bfbe90bf430209e97325ac2efb78514cc03de501f951777b4d0e->leave($__internal_4da867842b18bfbe90bf430209e97325ac2efb78514cc03de501f951777b4d0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
