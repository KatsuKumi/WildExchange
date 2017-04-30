<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a185dabed577e221dfa7c6bb6e33519dc5b41803f7e6fda22db5a30ae79eb4c6 extends Twig_Template
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
        $__internal_caef959eb06c564977a8ac4ecca8c7206b18c8d85af69083cfdcfcc8f02e93b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caef959eb06c564977a8ac4ecca8c7206b18c8d85af69083cfdcfcc8f02e93b7->enter($__internal_caef959eb06c564977a8ac4ecca8c7206b18c8d85af69083cfdcfcc8f02e93b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_caef959eb06c564977a8ac4ecca8c7206b18c8d85af69083cfdcfcc8f02e93b7->leave($__internal_caef959eb06c564977a8ac4ecca8c7206b18c8d85af69083cfdcfcc8f02e93b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
