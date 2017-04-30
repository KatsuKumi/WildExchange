<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3606a3bf9f76be5b9b285b6517148850e1131873b8a87996130231e00e8a8443 extends Twig_Template
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
        $__internal_e4fe1ad69375deb42d9971fcfa277b1a029cfb9887984a3f26ed36d594530c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fe1ad69375deb42d9971fcfa277b1a029cfb9887984a3f26ed36d594530c7f->enter($__internal_e4fe1ad69375deb42d9971fcfa277b1a029cfb9887984a3f26ed36d594530c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e4fe1ad69375deb42d9971fcfa277b1a029cfb9887984a3f26ed36d594530c7f->leave($__internal_e4fe1ad69375deb42d9971fcfa277b1a029cfb9887984a3f26ed36d594530c7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
