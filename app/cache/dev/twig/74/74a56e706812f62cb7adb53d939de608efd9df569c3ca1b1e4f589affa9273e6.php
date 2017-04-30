<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e4cc6f963d1da8f10db496a4c0b2a0a594c22e9f5308a2ea51b23ddb642de166 extends Twig_Template
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
        $__internal_7c6ea2f23d71c76f748397466d602f027ff16a2b8928808de86051c1c2ddb021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6ea2f23d71c76f748397466d602f027ff16a2b8928808de86051c1c2ddb021->enter($__internal_7c6ea2f23d71c76f748397466d602f027ff16a2b8928808de86051c1c2ddb021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7c6ea2f23d71c76f748397466d602f027ff16a2b8928808de86051c1c2ddb021->leave($__internal_7c6ea2f23d71c76f748397466d602f027ff16a2b8928808de86051c1c2ddb021_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
