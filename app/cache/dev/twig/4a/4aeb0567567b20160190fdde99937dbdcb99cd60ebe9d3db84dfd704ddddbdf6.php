<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f7478c5575e1c2379f8405afe623d22862b28c9465fcf8b7d152dc64a7e558b3 extends Twig_Template
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
        $__internal_950433a275446b295ab395d520c55cfdf2bbb8f5f3ec06c5391faf9dbe5eac46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950433a275446b295ab395d520c55cfdf2bbb8f5f3ec06c5391faf9dbe5eac46->enter($__internal_950433a275446b295ab395d520c55cfdf2bbb8f5f3ec06c5391faf9dbe5eac46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_950433a275446b295ab395d520c55cfdf2bbb8f5f3ec06c5391faf9dbe5eac46->leave($__internal_950433a275446b295ab395d520c55cfdf2bbb8f5f3ec06c5391faf9dbe5eac46_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
