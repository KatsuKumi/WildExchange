<?php

/* base.html.twig */
class __TwigTemplate_48e43b77777ef50bd0bbd120db7f46b1cdfb3a5a39fa847ed54e4cc2fc6a4a2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_991f979bbbfdf51762b90c3968d23e68cb9b919f2bfb41c26d1b65a156ae1a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991f979bbbfdf51762b90c3968d23e68cb9b919f2bfb41c26d1b65a156ae1a66->enter($__internal_991f979bbbfdf51762b90c3968d23e68cb9b919f2bfb41c26d1b65a156ae1a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style src=\"style.css\"></style>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"navbar\">

        </div>
        <div id=\"content\">
            ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        </div>
        <div id=\"footer\">

        </div>
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>

";
        
        $__internal_991f979bbbfdf51762b90c3968d23e68cb9b919f2bfb41c26d1b65a156ae1a66->leave($__internal_991f979bbbfdf51762b90c3968d23e68cb9b919f2bfb41c26d1b65a156ae1a66_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b5d0df82b44ebdfa565ca9de62c238628be33e118ccb1cac06bec78c2beb6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5d0df82b44ebdfa565ca9de62c238628be33e118ccb1cac06bec78c2beb6f1->enter($__internal_2b5d0df82b44ebdfa565ca9de62c238628be33e118ccb1cac06bec78c2beb6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2b5d0df82b44ebdfa565ca9de62c238628be33e118ccb1cac06bec78c2beb6f1->leave($__internal_2b5d0df82b44ebdfa565ca9de62c238628be33e118ccb1cac06bec78c2beb6f1_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a98268d3d00762f0bad80192ab90990d503622efc441043145fd590dc56baf7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98268d3d00762f0bad80192ab90990d503622efc441043145fd590dc56baf7d->enter($__internal_a98268d3d00762f0bad80192ab90990d503622efc441043145fd590dc56baf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a98268d3d00762f0bad80192ab90990d503622efc441043145fd590dc56baf7d->leave($__internal_a98268d3d00762f0bad80192ab90990d503622efc441043145fd590dc56baf7d_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fdd79c2f0402865246094ad1fcceb00d2cf6533934fa6f49cbafbc37de6e5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdd79c2f0402865246094ad1fcceb00d2cf6533934fa6f49cbafbc37de6e5cb->enter($__internal_3fdd79c2f0402865246094ad1fcceb00d2cf6533934fa6f49cbafbc37de6e5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
            ";
        
        $__internal_3fdd79c2f0402865246094ad1fcceb00d2cf6533934fa6f49cbafbc37de6e5cb->leave($__internal_3fdd79c2f0402865246094ad1fcceb00d2cf6533934fa6f49cbafbc37de6e5cb_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_845eb8168618ad12a6e272fa35c0b76bf3c35f05f664fa6bdefd34cdbc6f0ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845eb8168618ad12a6e272fa35c0b76bf3c35f05f664fa6bdefd34cdbc6f0ed5->enter($__internal_845eb8168618ad12a6e272fa35c0b76bf3c35f05f664fa6bdefd34cdbc6f0ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_845eb8168618ad12a6e272fa35c0b76bf3c35f05f664fa6bdefd34cdbc6f0ed5->leave($__internal_845eb8168618ad12a6e272fa35c0b76bf3c35f05f664fa6bdefd34cdbc6f0ed5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 22,  99 => 16,  93 => 15,  82 => 7,  70 => 5,  60 => 23,  58 => 22,  52 => 18,  50 => 15,  39 => 8,  37 => 7,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <style src=\"style.css\"></style>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div id=\"navbar\">

        </div>
        <div id=\"content\">
            {% block body %}

            {% endblock %}
        </div>
        <div id=\"footer\">

        </div>
        {% block javascripts %}{% endblock %}
    </body>
</html>

", "base.html.twig", "/home/oem/www/html/WildExchange/app/Resources/views/base.html.twig");
    }
}
