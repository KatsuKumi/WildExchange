<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_eef51e07559d6bdde8b19ab10c56940e48d54af9ba049bf580593f08863a7459 extends Twig_Template
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
        $__internal_e15ae069847fed01a78b6085336fe1b9dd7ad25a53ea2d0919072b8cdf5b1ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15ae069847fed01a78b6085336fe1b9dd7ad25a53ea2d0919072b8cdf5b1ccf->enter($__internal_e15ae069847fed01a78b6085336fe1b9dd7ad25a53ea2d0919072b8cdf5b1ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e15ae069847fed01a78b6085336fe1b9dd7ad25a53ea2d0919072b8cdf5b1ccf->leave($__internal_e15ae069847fed01a78b6085336fe1b9dd7ad25a53ea2d0919072b8cdf5b1ccf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
