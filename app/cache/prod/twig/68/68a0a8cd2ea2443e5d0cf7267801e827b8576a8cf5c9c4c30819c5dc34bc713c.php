<?php

/* base.html.twig */
class __TwigTemplate_4f0ccafbe69e8dafc899dd4f96ce2365564281c863c246c4be3aa4d532b3a8a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title></title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"minimum-scale=1, maximum-scale=1, width=device-width\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
    <link href=\"https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css\" rel=\"stylesheet\">
    <link href=\"http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\" type=\"text/css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icheck-bootstrap.min.css"), "html", null, true);
        echo "\" />

    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dialog.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dialog-jim.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/snap.svg-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <style>
        @font-face {
            font-family: wcsfont;
            src: url('";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Alwyn Regular.ttf"), "html", null, true);
        echo "');
        }
        @font-face {
            font-family: wcsfont;
            src: url('";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Alwyn Bold.ttf"), "html", null, true);
        echo "');
            font-weight: bold;
        }
        body{
            font-family: \"Open Sans\", sans-serif;
        }
    </style>
    <title>Wild Exchange - ";
        // line 35
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 36
        $this->displayBlock('style', $context, $blocks);
        // line 37
        echo "</head>
<body>

<nav class=\"navbar navbar-defaultt\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                <img src= \"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("logoBlue.png"), "html", null, true);
        echo "\" ><div class=\"navbar-titre\">Wild exchange</div>
            </a>

        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a class=\"accueil\" href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tagspage");
        echo "\">Explorer</a></li>
                ";
        // line 58
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 59
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle navbar-avatar\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><img class=\"avatar-16x\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "getAvatarURL", array(), "method")), "html", null, true);
            echo "\"><span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Bonjour, ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo " !</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilpage", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mon profil</a></li>
                            <li><a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardpage");
            echo "\">Dashboard</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Se déconnecter</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 71
            echo "                    <li><a class=\"accueil\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connectionpage");
            echo "\">Se connecter</a></li>
                    <li><a class=\"accueil\" href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscriptionpage");
            echo "\">S'inscrire</a></li>
                ";
        }
        // line 74
        echo "                </li>

            </ul>
        </div>
    </div>
</nav>




                                                    <!-- Ceci est un Trou Noir -->




<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dialogFx.js"), "html", null, true);
        echo "\"></script>
";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flash_messages"]) {
            // line 92
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 93
                echo "
        <div class=\"container\">
            <div class=\"content\">
                <header class=\"codrops-header\">
                    <div class=\"button-wrap\"><button data-dialog=\"somedialog\" class=\"trigger\" id=\"flash-";
                // line 97
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" style=\"display:none;\">Open Dialog</button></div>
                </header>
                <div id=\"somedialog\" class=\"dialog\">
                    <div class=\"dialog__overlay\"></div>
                    <div class=\"dialog__content\">
                        <div class=\"morph-shape\" data-morph-open=\"M199.5,100c0,54.955-44.768,99.5-100,99.5s-100-44.545-100-99.5c0-54.956,44.769-99.5,100-99.5
\tS199.5,45.044,199.5,100z\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" height=\"100%\" viewBox=\"0 0 200 200\" preserveAspectRatio=\"xMidYMid meet\">
                                <path d=\"M199.5,100c0,0.552-44.768,1-100,1s-100-0.448-100-1s44.769-1,100-1S199.5,99.448,199.5,100z\"></path>
                            </svg>
                        </div>
                        <div class=\"dialog-inner\">
                            <h2>";
                // line 109
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "</h2><div><button class=\"action\" data-dialog-close>Fermer</button></div>
                        </div>
                    </div>
                </div>
            </div><!-- /content -->
        </div><!-- /container -->

        <script>
            (function() {

                var dlgtrigger = document.querySelector( '[data-dialog]' ),

                    somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
                    // svg..
                    morphEl = somedialog.querySelector( '.morph-shape' ),
                    s = Snap( morphEl.querySelector( 'svg' ) ),
                    path = s.select( 'path' ),
                    initialPath = path.attr('d'),
                    steps = {
                        open : morphEl.getAttribute( 'data-morph-open' )
                    },
                    dlg = new DialogFx( somedialog, {
                        onOpenDialog : function( instance ) {
                            // reset path
                            morphEl.querySelector( 'svg > path' ).setAttribute( 'd', initialPath );
                            // animate path
                            path.stop().animate( { 'path' : steps.open }, 300, mina.easein );
                        }
                    } );

                dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
                document.getElementById('flash-";
                // line 140
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "').click();
            })();
        </script>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

";
        // line 149
        $this->displayBlock('js', $context, $blocks);
        // line 150
        echo "</body>
<footer>

    <div class=\"copyright\">
        <div class=\"container\">
            <p>Suivez-nous sur vos réseaux favoris</p>
            <p>
                <a href=\"http://www.github.com\"><i class=\"fa fa-github fa-3x\" aria-hidden=\"true\"></i></a>
                <a href=\"http://www.facebook.com\"><i class=\"fa fa-facebook-official fa-3x\" aria-hidden=\"true\"></i></a>
                <a href=\"http://www.twitter.com\"><i class=\"fa fa-twitter-square fa-3x\" aria-hidden=\"true\"></i></a>
                <a href=\"http://www.linkedin.com\"><i class=\"fa fa-linkedin-square fa-3x\" aria-hidden=\"true\"></i></a>
                <a href=\"http://www.youtube.com\"><i class=\"fa fa-youtube fa-3x\" aria-hidden=\"true\"></i></a>
                <a href=\"http://www.instagram.com\"><i class=\"fa fa-instagram fa-3x\" aria-hidden=\"true\"></i></a>
            </p>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>La Wild Code School</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"https://wildcodeschool.fr/questcequela-wildcodeschool/\"> Le concept</a></li>
                    <li><a href=\"https://wildcodeschool.fr/nos-formations-initiation-approfondissement-developpeur/\"> Notre programme</a></li>
                    <li><a href=\"https://wildcodeschool.fr/candidat/\"> Comment candidater</a></li>
                    <li><a href=\"https://wildcodeschool.fr/faq/\"> FAQ</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>Nos écoles</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"https://wildcodeschool.fr/la-loupe/\"> La Loupe</a></li>
                    <li><a href=\"https://wildcodeschool.fr/fontainebleau/\"> Fontainebleau</a></li>
                    <li><a href=\"https://wildcodeschool.fr/orleans/\"> Orléans</a></li>
                    <li><a href=\"https://wildcodeschool.fr/bordeaux/\"> Bordeaux</a></li>
                    <li><a href=\"https://wildcodeschool.fr/lyon/\"> Lyon</a></li>
                    <li><a href=\"https://wildcodeschool.fr/toulouse/\"> Toulouse</a></li>
                    <li><a href=\"https://wildcodeschool.fr/paris/\"> Paris</a></li>
                    <li><a href=\"https://wildcodeschool.fr/lille/\"> Lille</a></li>
                    <li><a href=\"https://wildcodeschool.fr/strasbourg/\"> Starsbourg</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>Plan du site</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"> Accueil</a></li>
                    <li><a href=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardpage");
        echo "\"> Dashboard</a></li>
                    <li><a href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscriptionpage");
        echo "\"> Inscription</a></li>
                    <li><a href=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connectionpage");
        echo "\"> Se connecter</a></li>
                    <li><a href=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tagspage");
        echo "\"> Tags</a></li>
                    <li><a href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forgetpage");
        echo "\"> Mot de Passe oublié</a> </li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>Notre blog</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"https://wildcodeschool.fr/blog/android-ios-application-mobile-entretien/\"> > Android versus iOS : entretien avec deux experts
                            <br/><small><em>avril 13, 2017</em></small></a></li>
                    <li><a href=\"https://wildcodeschool.fr/blog/hackathon-wild-code-school/\"> > Vie de l’école – retour sur le hackathon de mars à la Wild Code School
                            <br/><small><em>avril 11, 2017</em></small></a></li>
                    <li><a href=\"https://wildcodeschool.fr/blog/formation-courte-code/\"> > La Wild Code School propose de nouvelles formations adaptées à tous les besoins
                            <br/><small><em>avril 10, 2017</em></small></a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>À propos</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"https://wildcodeschool.fr/contact/\"> Nous contacter</a></li>
                    <li><a href=\"https://wildcodeschool.fr/equipe/\"> Notre équipe</a></li>
                    <li><a href=\"https://wildcodeschool.fr/offres-emplois/\"> Offres d'emploi</a></li>
                    <li><a href=\"https://wildcodeschool.fr/recruter-un-developpeur/\"> Recruter un développeur</a></li>
                    <li><a href=\"https://wildcodeschool.fr/developper-un-projet/\"> Développer un projet</a></li>
                    <li><a href=\"https://wildcodeschool.fr/nous-soutenir/\"> Nous soutenir</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom \">
                <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lightLogo-1.png"), "html", null, true);
        echo "\" class=\"avatar-32x\">
            </div>
        </div>
    </div>
    <div class=\"ligne_footer\"></div>

    <div class=\"copyright\">
        <div class=\"container\">
            <p>Made with love by Wild Code School</p>
        </div>
    </div>

</footer>
</html>
";
    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
    }

    // line 36
    public function block_style($context, array $blocks = array())
    {
    }

    // line 145
    public function block_body($context, array $blocks = array())
    {
    }

    // line 149
    public function block_js($context, array $blocks = array())
    {
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
        return array (  402 => 149,  397 => 145,  392 => 36,  387 => 35,  368 => 225,  339 => 199,  335 => 198,  331 => 197,  327 => 196,  323 => 195,  319 => 194,  273 => 150,  271 => 149,  266 => 146,  264 => 145,  250 => 140,  216 => 109,  201 => 97,  195 => 93,  190 => 92,  186 => 91,  182 => 90,  178 => 89,  161 => 74,  156 => 72,  151 => 71,  144 => 67,  139 => 65,  135 => 64,  130 => 62,  125 => 60,  122 => 59,  120 => 58,  116 => 57,  106 => 50,  102 => 49,  88 => 37,  86 => 36,  82 => 35,  72 => 28,  65 => 24,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  41 => 15,  36 => 13,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/oem/www/html/WildExchange/app/Resources/views/base.html.twig");
    }
}
