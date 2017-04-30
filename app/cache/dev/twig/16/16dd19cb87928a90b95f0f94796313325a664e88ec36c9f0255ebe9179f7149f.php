<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_dc84e406a8b3c74316f7f474196e0599907bf51d8ef9dd39b22d9f1aa9277d4a extends Twig_Template
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
        $__internal_c38f36dbda5e80010910be1934d22d44a9a5437c7fe00a4f7f09b9d2e800177f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38f36dbda5e80010910be1934d22d44a9a5437c7fe00a4f7f09b9d2e800177f->enter($__internal_c38f36dbda5e80010910be1934d22d44a9a5437c7fe00a4f7f09b9d2e800177f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c38f36dbda5e80010910be1934d22d44a9a5437c7fe00a4f7f09b9d2e800177f->leave($__internal_c38f36dbda5e80010910be1934d22d44a9a5437c7fe00a4f7f09b9d2e800177f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
