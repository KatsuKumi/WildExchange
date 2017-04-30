<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c8d0ddf5019d00bb860c25f9d00ff6ea7a6f98f9db7298c135a3b3475edc386a extends Twig_Template
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
        $__internal_746c92c095e7eff805df5adbaa86e9d885cc574b46f15393c8d5d4bf3c3e2341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746c92c095e7eff805df5adbaa86e9d885cc574b46f15393c8d5d4bf3c3e2341->enter($__internal_746c92c095e7eff805df5adbaa86e9d885cc574b46f15393c8d5d4bf3c3e2341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_746c92c095e7eff805df5adbaa86e9d885cc574b46f15393c8d5d4bf3c3e2341->leave($__internal_746c92c095e7eff805df5adbaa86e9d885cc574b46f15393c8d5d4bf3c3e2341_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
