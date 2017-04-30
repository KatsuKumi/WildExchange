<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fb3750bfd55db4b454f63233378f4fca23f5c0cb46ed279909ee83d5b3f4cea0 extends Twig_Template
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
        $__internal_561878198bcc65acc074bfe38ec2adeb1d380061cae003ac374663aaf11196e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561878198bcc65acc074bfe38ec2adeb1d380061cae003ac374663aaf11196e3->enter($__internal_561878198bcc65acc074bfe38ec2adeb1d380061cae003ac374663aaf11196e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_561878198bcc65acc074bfe38ec2adeb1d380061cae003ac374663aaf11196e3->leave($__internal_561878198bcc65acc074bfe38ec2adeb1d380061cae003ac374663aaf11196e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
