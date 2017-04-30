<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_85a12441648ed9a24882c436cfb0df38c32403d0ccbb639bb65e6283e199a1be extends Twig_Template
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
        $__internal_0c425aa5a87ed47afb63c54864d1dd17d5f192edc791d7533d620cba14d11747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c425aa5a87ed47afb63c54864d1dd17d5f192edc791d7533d620cba14d11747->enter($__internal_0c425aa5a87ed47afb63c54864d1dd17d5f192edc791d7533d620cba14d11747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0c425aa5a87ed47afb63c54864d1dd17d5f192edc791d7533d620cba14d11747->leave($__internal_0c425aa5a87ed47afb63c54864d1dd17d5f192edc791d7533d620cba14d11747_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
