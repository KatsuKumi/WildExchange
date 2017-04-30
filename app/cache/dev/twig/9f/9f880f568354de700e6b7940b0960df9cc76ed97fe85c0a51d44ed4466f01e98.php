<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2091727c28ec5a1ad47b0a397ed2353b800f88274912b739bbc92e2a7dd9782c extends Twig_Template
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
        $__internal_3afb7cc440257549894da14bf69ef55ee941048091ade519203a4945007688ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afb7cc440257549894da14bf69ef55ee941048091ade519203a4945007688ec->enter($__internal_3afb7cc440257549894da14bf69ef55ee941048091ade519203a4945007688ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3afb7cc440257549894da14bf69ef55ee941048091ade519203a4945007688ec->leave($__internal_3afb7cc440257549894da14bf69ef55ee941048091ade519203a4945007688ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
