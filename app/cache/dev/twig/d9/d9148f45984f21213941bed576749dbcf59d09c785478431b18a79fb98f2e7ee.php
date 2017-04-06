<?php

/* WCSWildExchangeBundle:Default:inscription.html.twig */
class __TwigTemplate_6f1dc16423d0ebed649f3ccfcbf91d9ab8fdffe93bc3c335b206dbde7553bcda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSWildExchangeBundle:Default:inscription.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47f869d91648f2a3a9a7590356a31badc46f3e0468bd5ec2b5624402466ecb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f869d91648f2a3a9a7590356a31badc46f3e0468bd5ec2b5624402466ecb7f->enter($__internal_47f869d91648f2a3a9a7590356a31badc46f3e0468bd5ec2b5624402466ecb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSWildExchangeBundle:Default:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47f869d91648f2a3a9a7590356a31badc46f3e0468bd5ec2b5624402466ecb7f->leave($__internal_47f869d91648f2a3a9a7590356a31badc46f3e0468bd5ec2b5624402466ecb7f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_164b84ab661a9d2f08d5200595d90498731f51afad4eea006f555f4cc64c7282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164b84ab661a9d2f08d5200595d90498731f51afad4eea006f555f4cc64c7282->enter($__internal_164b84ab661a9d2f08d5200595d90498731f51afad4eea006f555f4cc64c7282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil";
        
        $__internal_164b84ab661a9d2f08d5200595d90498731f51afad4eea006f555f4cc64c7282->leave($__internal_164b84ab661a9d2f08d5200595d90498731f51afad4eea006f555f4cc64c7282_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_b50d477b94b96e9c7803ffae7288d8bb5c2dcb8e5199fb6d75890c4109f8e5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50d477b94b96e9c7803ffae7288d8bb5c2dcb8e5199fb6d75890c4109f8e5f5->enter($__internal_b50d477b94b96e9c7803ffae7288d8bb5c2dcb8e5199fb6d75890c4109f8e5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("seconnecter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
        <style>
            body{
                background: url('";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("seconnecter.jpg"), "html", null, true);
        echo "') no-repeat center fixed;
                background-size: cover;
            }
        </style>
    ";
        
        $__internal_b50d477b94b96e9c7803ffae7288d8bb5c2dcb8e5199fb6d75890c4109f8e5f5->leave($__internal_b50d477b94b96e9c7803ffae7288d8bb5c2dcb8e5199fb6d75890c4109f8e5f5_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7e941f0a3f256b677ca92d1fbd9feb01a693656dba0384416f130a823e123c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e941f0a3f256b677ca92d1fbd9feb01a693656dba0384416f130a823e123c0->enter($__internal_f7e941f0a3f256b677ca92d1fbd9feb01a693656dba0384416f130a823e123c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"wrap login\">
                        <p class=\"form-title\">
                            Coordonnées</p>
                        ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "login")));
        echo "

                        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pseudo", array()), 'errors');
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pseudo", array()), 'widget');
        echo "

                        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "

                        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motDePasse", array()), "first", array()), 'errors');
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motDePasse", array()), "first", array()), 'widget');
        echo "

                        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motDePasse", array()), "second", array()), 'errors');
        echo "
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motDePasse", array()), "second", array()), 'widget');
        echo "

                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "

                        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "

                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "interet", array()), 'errors');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "interet", array()), 'widget');
        echo "

                        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "IDEcole", array()), 'errors');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "IDEcole", array()), 'widget');
        echo "

                        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success btn-sm\" />
                        ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f7e941f0a3f256b677ca92d1fbd9feb01a693656dba0384416f130a823e123c0->leave($__internal_f7e941f0a3f256b677ca92d1fbd9feb01a693656dba0384416f130a823e123c0_prof);

    }

    // line 54
    public function block_js($context, array $blocks = array())
    {
        $__internal_29dc199ef28dbb7ba23c65e76790b28424a4279925756d2e3518059fd03ac460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29dc199ef28dbb7ba23c65e76790b28424a4279925756d2e3518059fd03ac460->enter($__internal_29dc199ef28dbb7ba23c65e76790b28424a4279925756d2e3518059fd03ac460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 55
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_29dc199ef28dbb7ba23c65e76790b28424a4279925756d2e3518059fd03ac460->leave($__internal_29dc199ef28dbb7ba23c65e76790b28424a4279925756d2e3518059fd03ac460_prof);

    }

    public function getTemplateName()
    {
        return "WCSWildExchangeBundle:Default:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 55,  184 => 54,  171 => 48,  165 => 45,  161 => 44,  156 => 42,  152 => 41,  147 => 39,  143 => 38,  138 => 36,  134 => 35,  129 => 33,  125 => 32,  120 => 30,  116 => 29,  111 => 27,  107 => 26,  102 => 24,  98 => 23,  93 => 21,  84 => 14,  78 => 13,  66 => 8,  60 => 5,  55 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% extends 'base.html.twig' %}
    {% block title %}Acceuil{% endblock %}
    {% block style %}
        <link href=\"{{ asset('seconnecter.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
        <link href=\"{{ asset('bootstrap-tagsinput.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
        <style>
            body{
                background: url('{{ asset('seconnecter.jpg') }}') no-repeat center fixed;
                background-size: cover;
            }
        </style>
    {% endblock %}
    {% block body %}

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"wrap login\">
                        <p class=\"form-title\">
                            Coordonnées</p>
                        {{ form_start(form, { 'attr' : { 'class': 'login' } }) }}

                        {{ form_errors(form.pseudo) }}
                        {{ form_widget(form.pseudo  ) }}

                        {{ form_errors(form.email) }}
                        {{ form_widget(form.email) }}

                        {{ form_errors(form.motDePasse.first) }}
                        {{ form_widget(form.motDePasse.first) }}

                        {{ form_errors(form.motDePasse.second) }}
                        {{ form_widget(form.motDePasse.second) }}

                        {{ form_errors(form.nom) }}
                        {{ form_widget(form.nom) }}

                        {{ form_errors(form.prenom) }}
                        {{ form_widget(form.prenom) }}

                        {{ form_errors(form.interet) }}
                        {{ form_widget(form.interet) }}

                        {{ form_errors(form.IDEcole) }}
                        {{ form_widget(form.IDEcole) }}

                        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success btn-sm\" />
                        {{ form_end(form) }}
                    </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block js %}
    <script src=\"{{ asset('bootstrap-tagsinput.min.js') }}\"></script>
{% endblock %}", "WCSWildExchangeBundle:Default:inscription.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/inscription.html.twig");
    }
}
