<?php

/* WCSWildExchangeBundle:Default:index.html.twig */
class __TwigTemplate_e79d5016cfcf5fa838c66d3baa6ca4c0c4cac22600b9b30e5d68197d1e1afbde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSWildExchangeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        .image{
            background: url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("accueil1.jpg"), "html", null, true);
        echo "') no-repeat center fixed;
            background-size: cover;
            background-position: 0 100%;
            min-height: 500px;
        }
    </style>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"container-fluid image\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                <p class=largetitle> WILD EXCHANGE</p>
                <p class=\"slogan\"> Echangez sans chaussures</p>
               <div class=\"span12\">
                <form id=\"custom-search-form\" class=\"form-search form-horizontal pull-right\">
                    <div class=\"input-append span12\">
                        <div class=\"searchdiv\">
                            <input type=\"text\" class=\"search-query\" placeholder=\"Rechercher\">
                            <button type=\"submit\" class=\"btn\"><i class=\"glyphicon glyphicon-search\"></i></button>
                        </div>
                    </div>
                </form>
               </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                <p class=\"presentation\">Une plateforme d'échange collaborative fiable et puissante.</br>
                    </br>
                    Wild Exchange est un site web proposant des questions et réponses sur un large choix de thèmes
                    concernant la programmation informatique.</br>
                    </br>
                    Il fait partie du réseau de sites Wild Code School .</p>
            </div>
        </div>
    </div>

    <section class=\"publication-blog-home\">
        <div class=\"container-fluid\">
            <div class=\"\">
                <h2>Questions</h2>
                <div class=\"row-page row\">
                    <div class=\"col-page col-sm-8 col-md-6\">
                        <a href=\"\" class=\"black fond-publication-home\">
                            <div class=\"img-publication-principal-home\">
                                <img class=\"\" src=\"http://i.imgur.com/YRQbAsN.jpg\">
                            </div>
                            <div class=\"contenu-publication-principal-home\">
                                <h3>Problème d'installation PHP</h3>
                                <p>Comment installer PHP sous Linux?<span>...</span></p>
                            </div>
                            <div class=\"lien-blog-home\">
                                <span>En savoir plus</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-page col-sm-4 col-md-3\">
                        <a href=\"\"  class=\"fond-publication-home\">
                            <div class=\"img-publication-home\">
                                <img class=\"img-responsive\" src=\"http://i.imgur.com/e4beVh0.jpg\">
                            </div>
                            <div class=\"contenu-publication-home\">
                                <h3>Balise lien HTML</h3>
                                <p>Comment insérer un lien en HTML?<span>...</span></p>
                            </div>
                            <div class=\"lien-blog-home\">
                                <span>En savoir plus</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-page col-sm-4 col-md-3\">
                        <a href=\"\" class=\"fond-publication-home\">
                            <div class=\"img-publication-home\">
                                <img class=\"img-responsive\" src=\"https://f4.bcbits.com/img/0001454268_10.jpg\">
                            </div>
                            <div class=\"contenu-publication-home\">
                                <h3>Framework</h3>
                                <p>Qu'est ce qu'un framework?<span>...</span></p>
                            </div>
                            <div class=\"lien-blog-home\">
                                <span>En savoir plus</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-page col-sm-4 col-md-3\">
                        <a href=\"\" class=\"fond-publication-home\">
                            <div class=\"img-publication-home\">
                                <img class=\"img-responsive\" src=\"http://store.btgrubu.com/image/cache/data/ide/phpstorm-500x500.png\">
                            </div>
                            <div class=\"contenu-publication-home\">
                                <h3>PhpStorm</h3>
                                <p>Comment changer l'apparence de PhpStorm?<span>...</span></p>
                            </div>
                            <div class=\"lien-blog-home\">
                                <span>En savoir plus</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"hidden-sm col-page col-sm-4 col-md-3\">
                        <a href=\"\" class=\"fond-publication-home\">
                            <div class=\"img-publication-home\">
                                <img class=\"img-responsive\" src=\"http://www.cmsobserver.com/wp-content/uploads/2013/11/drupal-8-symfony-2-01-300x300.png\">
                            </div>
                            <div class=\"contenu-publication-home\">
                                <h3>Symfony</h3>
                                <p>Comment creer un Bundle avec symfony?<span>...</span></p>
                            </div>
                            <div class=\"lien-blog-home\">
                                <span>En savoir plus </span>
                            </div>
                        </a>
                    </div>
                    <div class=\"hidden-sm col-page col-sm-4 col-md-3\">
                        <a href=\"\" class=\"fond-publication-home\">
                            <div class=\"img-publication-home\">
                                <img class=\"img-responsive\" src=\"http://www.ssquares.co.in/wp-content/uploads/2017/01/symfony-development-ssquares.png\">
                            </div>
                            <div class=\"contenu-publication-home\">
                                <h3>Formulaire de connexion Symfony</h3>
                                <p>Comment faire fonctionner un formulaire de connexion avec symfony?<span>...</span></p>
                            </div>
                            <div class=\"lien-blog-home\">
                                <span>En savoir plus </span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-page col-sm-4 col-md-3\">
                        <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscriptionpage");
        echo "\" class=\"toutes-les-publication-home\">
                            <span>Rejoignez-nous pour en voir plus!</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 144
    public function block_js($context, array $blocks = array())
    {
        // line 145
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
        return "WCSWildExchangeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 145,  187 => 144,  174 => 135,  51 => 14,  48 => 13,  37 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WCSWildExchangeBundle:Default:index.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/index.html.twig");
    }
}
