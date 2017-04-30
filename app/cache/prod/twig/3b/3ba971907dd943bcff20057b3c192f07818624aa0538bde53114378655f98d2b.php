<?php

/* WCSWildExchangeBundle:Default:inscription.html.twig */
class __TwigTemplate_1dc53a199978d5d0ff7d9da82c9ff8a0b1f43bc7bd6647a3cbb8b9f3bdfc2f44 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Inscription";
    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/formulaire.css"), "html", null, true);
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
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
        <div class=\"container-fluid paddingtop\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"wrap login\">
                        <p class=\"form-title\">
                            Coordonnées</p>
                        ";
        // line 21
        if (($context["error"] ?? null)) {
            // line 22
            echo "                            <h3>";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</h3>
                        ";
        }
        // line 24
        echo "                        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "login")));
        echo "


                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "pseudo", array()), 'errors');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "pseudo", array()), 'widget');
        echo "

                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors');
        echo "
                        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo "

                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "motDePasse", array()), "first", array()), 'errors');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "motDePasse", array()), "first", array()), 'widget');
        echo "

                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "motDePasse", array()), "second", array()), 'errors');
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "motDePasse", array()), "second", array()), 'widget');
        echo "

                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", array()), 'errors');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", array()), 'widget');
        echo "

                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prenom", array()), 'errors');
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prenom", array()), 'widget');
        echo "

                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "interet", array()), 'errors');
        echo "
                        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "interet", array()), 'widget');
        echo "

                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ecole", array()), 'errors');
        echo "
                        ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ecole", array()), 'widget');
        echo "
                        <button type=submit onclick=\"return false;\" style=\"display:none;\"></button>
                        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success btn-sm\" />
                        ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                    </div>
            </div>
        </div>
    </div>
";
    }

    // line 58
    public function block_js($context, array $blocks = array())
    {
        // line 59
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(window).scroll(function(){

            if( \$(this).scrollTop() == 0 ) {
                \$('.navbar-defaultt').addClass('x-navbar-fixed-top');
            }
            else if (\$('.navbar-defaultt').hasClass('x-navbar-fixed-top') ) {
                \$('.navbar-defaultt').removeClass('x-navbar-fixed-top');
            }

        });

        if( \$(this).scrollTop() == 0 ) {
            \$('.navbar-defaultt').addClass('x-navbar-fixed-top');
        }
        else if (\$('.navbar-defaultt').hasClass('x-navbar-fixed-top') ) {
            \$('.navbar-defaultt').removeClass('x-navbar-fixed-top');
        }
    </script>
";
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
        return array (  173 => 59,  170 => 58,  160 => 52,  154 => 49,  150 => 48,  145 => 46,  141 => 45,  136 => 43,  132 => 42,  127 => 40,  123 => 39,  118 => 37,  114 => 36,  109 => 34,  105 => 33,  100 => 31,  96 => 30,  91 => 28,  87 => 27,  80 => 24,  74 => 22,  72 => 21,  63 => 14,  60 => 13,  51 => 8,  45 => 5,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WCSWildExchangeBundle:Default:inscription.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/inscription.html.twig");
    }
}
