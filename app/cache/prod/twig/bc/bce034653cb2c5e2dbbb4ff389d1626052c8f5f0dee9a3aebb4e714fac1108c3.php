<?php

/* WCSWildExchangeBundle:Default:connexion.html.twig */
class __TwigTemplate_eb5caa2ca0cd4c317cb8963d8f1e65392ce15dac9b7d4dda697e68deb71f8288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSWildExchangeBundle:Default:connexion.html.twig", 1);
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
        echo "Accueil";
    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/formulaire.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <style>
        body{
            background: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("seconnecter.jpg"), "html", null, true);
        echo "') no-repeat center fixed;
            background-size: cover;
        }
    </style>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"container paddingtop\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"pr-wrap\">
                    <div class=\"pass-reset\">
                        <label>
                            Entrer votre email</label>
                        <input type=\"email\" placeholder=\"Email\" />
                        <input type=\"submit\" value=\"Submit\" class=\"pass-reset-submit btn btn-success btn-sm\" />
                    </div>
                </div>
                <div class=\"wrap\">
                    <p class=\"form-title\">
                        Se Connecter</p>

                    <form class=\"login\" action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                        <input type=\"text\" placeholder=\"Pseudo\" name=\"_username\" value=\"\"/>
                        <input type=\"password\" placeholder=\"Mot de passe\" name=\"_password\" value=\"\"/>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"checkbox icheck-primary\">
                                        <input type=\"checkbox\" id=\"someCheckboxId1\" name=\"_remember_me\" />
                                        <label for=\"someCheckboxId1\">Se souvenir de moi</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">

                                    <div class=\"checkbox icheck-primary\">
                                        <label><a href=\"\" class=\"forgot-pass\">Mot de passe oublié?</a></label>
                                    </div>

                                </div>
                            </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                        <input type=\"submit\" value=\"Se connecter\" class=\"btn btn-success btn-sm\" />
                    </form>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 55
    public function block_js($context, array $blocks = array())
    {
        // line 56
        echo "    <script>
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
        return "WCSWildExchangeBundle:Default:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 56,  110 => 55,  97 => 46,  76 => 28,  59 => 13,  56 => 12,  47 => 7,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WCSWildExchangeBundle:Default:connexion.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/connexion.html.twig");
    }
}
