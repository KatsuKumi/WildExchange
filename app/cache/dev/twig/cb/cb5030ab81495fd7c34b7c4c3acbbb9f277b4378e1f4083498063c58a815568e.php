<?php

/* base.html.twig */
class __TwigTemplate_62aecb6286512c78ca3fc7beef99199df700f5d907c7ac6b9a18eff8ae4e95e6 extends Twig_Template
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
        $__internal_d951ccb0f284aa3663a31c58681984387770c9204d102b7c0cbdae6c3eda4e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d951ccb0f284aa3663a31c58681984387770c9204d102b7c0cbdae6c3eda4e03->enter($__internal_d951ccb0f284aa3663a31c58681984387770c9204d102b7c0cbdae6c3eda4e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title></title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\"/>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
    <link href=\"https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css\" rel=\"stylesheet\">
    <link href=\"http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <title>Wild Exchange - ";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 14
        $this->displayBlock('style', $context, $blocks);
        // line 15
        echo "</head>
<body>

<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Wild exchange</a>
            <img src= \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("logoBlue.png"), "html", null, true);
        echo "\" >
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"accueil\"><a href=\"#\">Accueil</a></li>
                <li><a href=\"#\">Explorer</a></li>
                ";
        // line 35
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 36
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" daxta-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Utilisateur<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Hello!</a></li>
                            <li><a href=\"#\">Mon profil</a></li>
                            <li><a href=\"#\">Dashboard</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Se déconnecter</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 49
            echo "                    <li><a href=\"#\">Se connecter</a></li>
                ";
        }
        // line 51
        echo "
            </ul>
        </div>
    </div>
</nav>

";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
";
        // line 60
        $this->displayBlock('js', $context, $blocks);
        // line 61
        echo "</body>
<footer>

    <div class=\"copyright\">
        <div class=\"container\">
            <p>Suivez-nous sur vos reseaux favoris</p>
            <p><i class=\"fa fa-github fa-3x\" aria-hidden=\"true\"></i> <i class=\"fa fa-facebook-official fa-3x\" aria-hidden=\"true\"></i> <i class=\"fa fa-twitter-square fa-3x\" aria-hidden=\"true\"></i><i class=\"fa fa-linkedin-square fa-3x\" aria-hidden=\"true\"></i><i class=\"fa fa-youtube fa-3x\" aria-hidden=\"true\"></i><i class=\"fa fa-instagram fa-3x\" aria-hidden=\"true\"></i>
            </p>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>La Wild Code School</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"#\"> Le concept</a></li>
                    <li><a href=\"#\"> Notre programme</a></li>
                    <li><a href=\"#\"> Comment candidater</a></li>
                    <li><a href=\"#\"> FAQ</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>Nos écoles</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"#\"> La Loupe</a></li>
                    <li><a href=\"#\"> Fontainebleau</a></li>
                    <li><a href=\"#\"> Orléans</a></li>
                    <li><a href=\"#\"> Bordeaux</a></li>
                    <li><a href=\"#\"> Lyon</a></li>
                    <li><a href=\"#\"> Toulouse</a></li>
                    <li><a href=\"#\"> Paris</a></li>
                    <li><a href=\"#\"> Lille</a></li>
                    <li><a href=\"#\"> Starsbourg</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>Plan du site</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"#\"> Accueil</a></li>
                    <li><a href=\"#\"> Dashboard</a></li>
                    <li><a href=\"#\"> Profil</a></li>
                    <li><a href=\"#\"> Inscription</a></li>
                    <li><a href=\"#\"> Se connecter</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>Notre blog</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"#\"> La Loupe</a></li>
                    <li><a href=\"#\"> Fontainebleau</a></li>
                    <li><a href=\"#\"> Orléans</a></li>
                    <li><a href=\"#\"> Bordeaux</a></li>
                    <li><a href=\"#\"> Lyon</a></li>
                    <li><a href=\"#\"> Toulouse</a></li>
                    <li><a href=\"#\"> Paris</a></li>
                    <li><a href=\"#\"> Lille</a></li>
                    <li><a href=\"#\"> Starsbourg</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>A propos</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"#\"> Nous contacter</a></li>
                    <li><a href=\"#\"> Notre programme</a></li>
                    <li><a href=\"#\"> Offres d'emploi</a></li>
                    <li><a href=\"#\"> Recruter un développeur</a></li>
                    <li><a href=\"#\"> Développer un projet</a></li>
                    <li><a href=\"#\"> Nous soutenir</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lightLogo-1.png"), "html", null, true);
        echo "\">
            </div>
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
        
        $__internal_d951ccb0f284aa3663a31c58681984387770c9204d102b7c0cbdae6c3eda4e03->leave($__internal_d951ccb0f284aa3663a31c58681984387770c9204d102b7c0cbdae6c3eda4e03_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a9a75eb4ecfa873d7dd642d07e68e84bd1c00ff72836162dad1ec4a43049f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9a75eb4ecfa873d7dd642d07e68e84bd1c00ff72836162dad1ec4a43049f04->enter($__internal_6a9a75eb4ecfa873d7dd642d07e68e84bd1c00ff72836162dad1ec4a43049f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6a9a75eb4ecfa873d7dd642d07e68e84bd1c00ff72836162dad1ec4a43049f04->leave($__internal_6a9a75eb4ecfa873d7dd642d07e68e84bd1c00ff72836162dad1ec4a43049f04_prof);

    }

    // line 14
    public function block_style($context, array $blocks = array())
    {
        $__internal_5b2fbc4f7322af8e0f0ddd93101416310f52fcd590ae0f359f05c8e6c4678011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2fbc4f7322af8e0f0ddd93101416310f52fcd590ae0f359f05c8e6c4678011->enter($__internal_5b2fbc4f7322af8e0f0ddd93101416310f52fcd590ae0f359f05c8e6c4678011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_5b2fbc4f7322af8e0f0ddd93101416310f52fcd590ae0f359f05c8e6c4678011->leave($__internal_5b2fbc4f7322af8e0f0ddd93101416310f52fcd590ae0f359f05c8e6c4678011_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bbe73355bdec18e1bb8e61237827916fa020d7d712c35a5d59f16f5d64c56b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbe73355bdec18e1bb8e61237827916fa020d7d712c35a5d59f16f5d64c56b3->enter($__internal_9bbe73355bdec18e1bb8e61237827916fa020d7d712c35a5d59f16f5d64c56b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9bbe73355bdec18e1bb8e61237827916fa020d7d712c35a5d59f16f5d64c56b3->leave($__internal_9bbe73355bdec18e1bb8e61237827916fa020d7d712c35a5d59f16f5d64c56b3_prof);

    }

    // line 60
    public function block_js($context, array $blocks = array())
    {
        $__internal_0c67ec7acc4284268a4564cbc370ad1e4fa71f048acb963b1001930af1480d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c67ec7acc4284268a4564cbc370ad1e4fa71f048acb963b1001930af1480d1c->enter($__internal_0c67ec7acc4284268a4564cbc370ad1e4fa71f048acb963b1001930af1480d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_0c67ec7acc4284268a4564cbc370ad1e4fa71f048acb963b1001930af1480d1c->leave($__internal_0c67ec7acc4284268a4564cbc370ad1e4fa71f048acb963b1001930af1480d1c_prof);

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
        return array (  241 => 60,  230 => 57,  219 => 14,  208 => 13,  184 => 132,  111 => 61,  109 => 60,  105 => 58,  103 => 57,  95 => 51,  91 => 49,  76 => 36,  74 => 35,  64 => 28,  49 => 15,  47 => 14,  43 => 13,  39 => 12,  26 => 1,);
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
<html lang=\"en\">

<head>
    <title></title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\"/>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
    <link href=\"https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css\" rel=\"stylesheet\">
    <link href=\"http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <title>Wild Exchange - {% block title %}{% endblock %}</title>
    {% block style %}{% endblock %}
</head>
<body>

<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Wild exchange</a>
            <img src= \"{{ asset('logoBlue.png') }}\" >
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"accueil\"><a href=\"#\">Accueil</a></li>
                <li><a href=\"#\">Explorer</a></li>
                {% if app.user %}
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" daxta-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Utilisateur<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Hello!</a></li>
                            <li><a href=\"#\">Mon profil</a></li>
                            <li><a href=\"#\">Dashboard</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Se déconnecter</a></li>
                        </ul>
                    </li>
                {% else %}
                    <li><a href=\"#\">Se connecter</a></li>
                {% endif %}

            </ul>
        </div>
    </div>
</nav>

{% block body %}{% endblock %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
{% block js %}{% endblock %}
</body>
<footer>

    <div class=\"copyright\">
        <div class=\"container\">
            <p>Suivez-nous sur vos reseaux favoris</p>
            <p><i class=\"fa fa-github fa-3x\" aria-hidden=\"true\"></i> <i class=\"fa fa-facebook-official fa-3x\" aria-hidden=\"true\"></i> <i class=\"fa fa-twitter-square fa-3x\" aria-hidden=\"true\"></i><i class=\"fa fa-linkedin-square fa-3x\" aria-hidden=\"true\"></i><i class=\"fa fa-youtube fa-3x\" aria-hidden=\"true\"></i><i class=\"fa fa-instagram fa-3x\" aria-hidden=\"true\"></i>
            </p>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>La Wild Code School</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"#\"> Le concept</a></li>
                    <li><a href=\"#\"> Notre programme</a></li>
                    <li><a href=\"#\"> Comment candidater</a></li>
                    <li><a href=\"#\"> FAQ</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>Nos écoles</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"#\"> La Loupe</a></li>
                    <li><a href=\"#\"> Fontainebleau</a></li>
                    <li><a href=\"#\"> Orléans</a></li>
                    <li><a href=\"#\"> Bordeaux</a></li>
                    <li><a href=\"#\"> Lyon</a></li>
                    <li><a href=\"#\"> Toulouse</a></li>
                    <li><a href=\"#\"> Paris</a></li>
                    <li><a href=\"#\"> Lille</a></li>
                    <li><a href=\"#\"> Starsbourg</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>Plan du site</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"#\"> Accueil</a></li>
                    <li><a href=\"#\"> Dashboard</a></li>
                    <li><a href=\"#\"> Profil</a></li>
                    <li><a href=\"#\"> Inscription</a></li>
                    <li><a href=\"#\"> Se connecter</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>Notre blog</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"#\"> La Loupe</a></li>
                    <li><a href=\"#\"> Fontainebleau</a></li>
                    <li><a href=\"#\"> Orléans</a></li>
                    <li><a href=\"#\"> Bordeaux</a></li>
                    <li><a href=\"#\"> Lyon</a></li>
                    <li><a href=\"#\"> Toulouse</a></li>
                    <li><a href=\"#\"> Paris</a></li>
                    <li><a href=\"#\"> Lille</a></li>
                    <li><a href=\"#\"> Starsbourg</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\"><u>A propos</u></h6>
                <ul class=\"footer-ul\">
                    <li><a href=\"#\"> Nous contacter</a></li>
                    <li><a href=\"#\"> Notre programme</a></li>
                    <li><a href=\"#\"> Offres d'emploi</a></li>
                    <li><a href=\"#\"> Recruter un développeur</a></li>
                    <li><a href=\"#\"> Développer un projet</a></li>
                    <li><a href=\"#\"> Nous soutenir</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <img src=\"{{ asset('lightLogo-1.png') }}\">
            </div>
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
", "base.html.twig", "/home/oem/www/html/WildExchange/app/Resources/views/base.html.twig");
    }
}
