<?php

/* WCSWildExchangeBundle:Default:questions.html.twig */
class __TwigTemplate_d3b7e9988a5178fe76feabe37b859150eda001fcd06e41720d817f1049f01ddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSWildExchangeBundle:Default:questions.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Questions";
    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        // line 6
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
        <style>
            body {
                background: url('";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("questions.jpg"), "html", null, true);
        echo "') no-repeat center fixed;
                background-size: cover;
            }
        </style>
    ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <section class=\"content paddingtop\">

                <div class=\"col-md-12\">
                    <div class=\"panel panel-default panelbg\">
                        <h1>Questions</h1>
                        <div class=\"panel-body\">
                            <div class=\"pull-right\">
                                <div class=\"btn-group\">
                                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutpage", array("tag" => ($context["tag"] ?? null))), "html", null, true);
        echo "\">
                                        <button type=\"button\" class=\"btn btn-default btn-filter\" data-target=\"all\">Ajouter
                                        une question
                                    </button>
                                    </a>
                                </div>
                            </div>
                            <div class=\"table-container\">
                                <table class=\"table table-filter\">
                                    <tbody>
                                    <tr data-status=\"Resolu\">
                                        <td>

                                            <div class=\"ckbox\">
                                                <ul>
                                                    <li>
                                                        <span class=\"input-group-btn\">
                                                                <button type=\"button\" class=\"btn btn-danger btn-number\" data-type=\"minus\" data-field=\"quant[2]\">
                                                                     <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>132</span>
                                                    </li>
                                                    <li>
                                                        <span class=\"input-group-btn\">
                                                            <button type=\"button\" class=\"btn btn-success btn-number\" data-type=\"plus\" data-field=\"quant[2]\">
                                                                <span class=\"glyphicon glyphicon-plus\"></span>
                                                            </button>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>
                                        </td>
                                        <td>
                                            <div class=\"media\">
                                                <a href=\"#\" class=\"pull-left\">
                                                    <img src=\"https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg\"
                                                         class=\"media-photo\">
                                                </a>
                                                <div class=\"media-body\">
                                                    <span class=\"media-meta pull-right\">13 février 2017</span>
                                                    <h4 class=\"title\">
                                                        Formulaire de connexion Symfony
                                                        <span class=\"pull-right resolu\">(Résolu)</span>
                                                    </h4>
                                                    <p class=\"summary\">Comment faire fonctionner un formulaire de
                                                        connexion avec symfony?...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status=\"Resolu\">
                                        <td>

                                            <div class=\"ckbox \">
                                                <ul>
                                                    <li>
                                                        <span class=\"input-group-btn\">
                                                        <button type=\"button\" class=\"btn btn-danger btn-number\" data-type=\"minus\" data-field=\"quant[2]\">
                                                             <span class=\"glyphicon glyphicon-minus\"></span>
                                                        </button>
                                                    </span>
                                                    </li>
                                                    <li>
                                                        <span>132</span>
                                                    </li>
                                                    <li>
                                                        <span class=\"input-group-btn\">
                                                            <button type=\"button\" class=\"btn btn-success btn-number\" data-type=\"plus\" data-field=\"quant[2]\">
                                                                <span class=\"glyphicon glyphicon-plus\"></span>
                                                            </button>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>
                                        </td>
                                        <td>
                                            <div class=\"media\">
                                                <a href=\"#\" class=\"pull-left\">
                                                    <img src=\"https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg\"
                                                         class=\"media-photo\">
                                                </a>
                                                <div class=\"media-body\">
                                                    <span class=\"media-meta pull-right\">13 février 2017</span>
                                                    <h4 class=\"title\">
                                                        Formulaire de connexion Symfony
                                                        <span class=\"pull-right resolu\">(Résolu)</span>
                                                    </h4>
                                                    <p class=\"summary\">Comment faire fonctionner un formulaire de
                                                        connexion avec symfony?...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status=\"Resolu\">
                                        <td>

                                            <div class=\"ckbox \">
                                                <ul>
                                                    <li>
                                                        <span class=\"input-group-btn\">
                                                        <button type=\"button\" class=\"btn btn-danger btn-number\" data-type=\"minus\" data-field=\"quant[2]\">
                                                             <span class=\"glyphicon glyphicon-minus\"></span>
                                                        </button>
                                                    </span>
                                                    </li>
                                                    <li>
                                                        <span>132</span>
                                                    </li>
                                                    <li>
                                                        <span class=\"input-group-btn\">
                                                            <button type=\"button\" class=\"btn btn-success btn-number\" data-type=\"plus\" data-field=\"quant[2]\">
                                                                <span class=\"glyphicon glyphicon-plus\"></span>
                                                            </button>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>
                                        </td>
                                        <td>
                                            <div class=\"media\">
                                                <a href=\"#\" class=\"pull-left\">
                                                    <img src=\"https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg\"
                                                         class=\"media-photo\">
                                                </a>
                                                <div class=\"media-body\">
                                                    <span class=\"media-meta pull-right\">13 février 2017</span>
                                                    <h4 class=\"title\">
                                                        Formulaire de connexion Symfony
                                                        <span class=\"pull-right resolu\">(Résolu)</span>
                                                    </h4>
                                                    <p class=\"summary\">Comment faire fonctionner un formulaire de
                                                        connexion avec symfony?...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status=\"Resolu\">
                                        <td>

                                            <div class=\"ckbox \">
                                                <ul>
                                                    <li>
                                                        <span class=\"input-group-btn\">
                                                        <button type=\"button\" class=\"btn btn-danger btn-number\" data-type=\"minus\" data-field=\"quant[2]\">
                                                             <span class=\"glyphicon glyphicon-minus\"></span>
                                                        </button>
                                                    </span>
                                                    </li>
                                                    <li>
                                                        <span>132</span>
                                                    </li>
                                                    <li>
                                                        <span class=\"input-group-btn\">
                                                            <button type=\"button\" class=\"btn btn-success btn-number\" data-type=\"plus\" data-field=\"quant[2]\">
                                                                <span class=\"glyphicon glyphicon-plus\"></span>
                                                            </button>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>
                                        </td>
                                        <td>
                                            <div class=\"media\">
                                                <a href=\"#\" class=\"pull-left\">
                                                    <img src=\"https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg\"
                                                         class=\"media-photo\">
                                                </a>
                                                <div class=\"media-body\">
                                                    <span class=\"media-meta pull-right\">13 février 2017</span>
                                                    <h4 class=\"title\">
                                                        Formulaire de connexion Symfony
                                                        <span class=\"pull-right resolu\">(Résolu)</span>
                                                    </h4>
                                                    <p class=\"summary\">Comment faire fonctionner un formulaire de
                                                        connexion avec symfony?...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=\"content-footer\">
                        <p>
                            En voir plus
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </div>
";
    }

    // line 239
    public function block_js($context, array $blocks = array())
    {
        // line 240
        echo "    <script>
        \$(window).scroll(function () {

            if (\$(this).scrollTop() == 0) {
                \$('.navbar-defaultt').addClass('x-navbar-fixed-top');
            }
            else if (\$('.navbar-defaultt').hasClass('x-navbar-fixed-top')) {
                \$('.navbar-defaultt').removeClass('x-navbar-fixed-top');
            }

        });

        if (\$(this).scrollTop() == 0) {
            \$('.navbar-defaultt').addClass('x-navbar-fixed-top');
        }
        else if (\$('.navbar-defaultt').hasClass('x-navbar-fixed-top')) {
            \$('.navbar-defaultt').removeClass('x-navbar-fixed-top');
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "WCSWildExchangeBundle:Default:questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 240,  287 => 239,  73 => 28,  59 => 16,  56 => 15,  47 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WCSWildExchangeBundle:Default:questions.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/questions.html.twig");
    }
}
