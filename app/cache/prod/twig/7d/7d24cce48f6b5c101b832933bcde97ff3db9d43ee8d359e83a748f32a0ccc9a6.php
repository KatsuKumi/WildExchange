<?php

/* WCSWildExchangeBundle:Default:ajout.html.twig */
class __TwigTemplate_ceb40247cd0331f5d4de2af2be128984c976570a8737b7b71fcee0b378c0c30d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSWildExchangeBundle:Default:ajout.html.twig", 1);
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
        body{
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
    <section>
        <div class=\"container paddingtop\">
            <div class=\"row\">
                <div class=\"col-page col-sm-1 col-md-12\">
                    <hgroup>
                        <h1 class=\"free\">Ajouter une question</h1>
                    </hgroup>
                    <div class=\"ajout\">

                            ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "input-group")));
        echo "
                                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'errors');
        echo "
                                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'widget');
        echo "

                                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contenu", array()), 'errors');
        echo "
                                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contenu", array()), 'widget');
        echo "
                                <button class=\"btn btn-info btn-lg\" type=\"submit\">Submit</button>
                        ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                </div>
            </div>
        </div>
        </div>
    </section>

";
    }

    // line 40
    public function block_js($context, array $blocks = array())
    {
        // line 41
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
        return "WCSWildExchangeBundle:Default:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  98 => 40,  86 => 31,  81 => 29,  77 => 28,  72 => 26,  68 => 25,  64 => 24,  52 => 14,  49 => 13,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WCSWildExchangeBundle:Default:ajout.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/ajout.html.twig");
    }
}
