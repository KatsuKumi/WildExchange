<?php

/* WCSWildExchangeBundle:Default:reponses.html.twig */
class __TwigTemplate_4d6cbe06852705a2838fe112e09eafa163615d368dcea967af091ffabff50a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSWildExchangeBundle:Default:reponses.html.twig", 1);
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
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <style>
        body {
            background: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("questions.jpg"), "html", null, true);
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
    <div class=\"container\">
        <div class=\"row\">

            <section class=\"content paddingtop\">

                <div class=\"col-md-12\">

                    <div class=\"panel panel-default panelbg\">
                        <h1>Réponses</h1>
                            <ul class=\"chat\">
                                <li class=\"left\"><span class=\"chat-img pull-left\">
                            <img src=\"https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg\"
                                 class=\"media-photo\">
                        </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <strong class=\"primary-font\">Jack Sparrow</strong> <small class=\"pull-right text-muted\">
                                                <span class=\"glyphicon glyphicon-time\"></span>12 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\"><span class=\"chat-img pull-right\">
                            <img src=\"https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg\"
                                 class=\"media-photo\">
                        </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <small class=\" text-muted\"><span class=\"glyphicon glyphicon-time\"></span>13 mins ago</small>
                                            <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\"><span class=\"chat-img pull-right\">
                            <img src=\"https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg\"
                                 class=\"media-photo\">
                        </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <small class=\" text-muted\"><span class=\"glyphicon glyphicon-time\"></span>13 mins ago</small>
                                            <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\"><span class=\"chat-img pull-right\">
                            <img src=\"https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg\"
                                 class=\"media-photo\">
                        </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <small class=\" text-muted\"><span class=\"glyphicon glyphicon-time\"></span>15 mins ago</small>
                                            <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>

                                <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Ajouter une réponse...\" />
                                <span class=\"input-group-btn\">
                            <button class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
                                Send</button>
                        </span>

                    </div>
                </div>
</div>
    </div>

";
    }

    // line 100
    public function block_js($context, array $blocks = array())
    {
        // line 101
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
        return "WCSWildExchangeBundle:Default:reponses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 101,  140 => 100,  52 => 14,  49 => 13,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WCSWildExchangeBundle:Default:reponses.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/reponses.html.twig");
    }
}
