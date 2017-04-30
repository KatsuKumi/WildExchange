<?php

/* WCSWildExchangeBundle:Default:dashboard.html.twig */
class __TwigTemplate_3049df16bb79e04e7a53f28d7228ec5aad1d92035f719252fbd7d34bcf9bfa38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSWildExchangeBundle:Default:dashboard.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container-fluid smallpaddingtop\">
    <div id=\"menu-overlay\"></div>
    <div id=\"menu-toggle\" class=\"closed\" data-title=\"Menu\">
        <i class=\"fa fa-bars\"></i>
        <i class=\"fa fa-times\"></i>
    </div>
    <div id=\"content\">

            <div class=\"container \">
                <div class=\"row\">
                    <div class=\"col-md-12 blue\">
                        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("avatar/avatar.png"), "html", null, true);
        echo "\" class=\"avatar-160x\">

                    </div>
                </div>

                <nav id=\"tabs\">
                    <ul>
                        <li class=\"active\" data-target=\"Détails\">Détails</li>
                        <li data-target=\"Historique\">Historique</li>
                        <li data-target=\"Autre\">Autre</li>
                    </ul>
                </nav>
            </div>
        <div class=\"tab-target targeted\" id=\"Détails\">
            <p>Contenu (Détails) ICI ...</p>
            </div>
        <div class=\"tab-target\" id=\"Historique\">
            <p>Contenu (Historique) ICI ...</p>
        </div>
        <div class=\"tab-target\" id=\"Autre\">
            <p>Contenu (Autre) ICI ...</p>
        </div>
    </div>
    </div>
";
    }

    // line 44
    public function block_js($context, array $blocks = array())
    {
        // line 45
        echo "    <script>

        \$('#menu-toggle,#menu-overlay').click(function(){
            \$('body').toggleClass('open-menu');
        });

        \$('#main-nav li a').click(function(){
            \$('#main-nav li').removeClass('active');
            \$(this).parent().addClass('active')
        });

        \$('#tabs li').click(function(){
            var clickTarget = \$(this).attr('data-target');
            \$('.tab-target').removeClass('targeted');
            \$('#'+clickTarget).addClass(\"targeted\");
            \$('#tabs li').removeClass('active');
            \$(this).addClass('active')
        });

        \$('#admin-search input').on('focus',function(){
            \$('#header_logo').addClass('hidden');
        });
        \$('#admin-search input').on('blur',function(){
            \$('#header_logo').removeClass('hidden');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "WCSWildExchangeBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 45,  89 => 44,  60 => 19,  47 => 8,  44 => 7,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WCSWildExchangeBundle:Default:dashboard.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/dashboard.html.twig");
    }
}
