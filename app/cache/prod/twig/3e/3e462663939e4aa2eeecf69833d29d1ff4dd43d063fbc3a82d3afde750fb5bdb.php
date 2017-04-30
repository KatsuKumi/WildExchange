<?php

/* WCSWildExchangeBundle:Default:tags.html.twig */
class __TwigTemplate_71f33ee777debe0db9a3b835646805374061ad4edd13782c60cd1396872d4988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSWildExchangeBundle:Default:tags.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"container-fluid smallpaddingtop\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                <p class=tagstitle> TAGS</p>
            </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 14
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("questionpage", array("tag" => $this->getAttribute($context["value"], "nom", array()))), "html", null, true);
            echo "\">

                <div class=\"col-md-6 col-sm-6 col-xs-12 \">
                    <div class=\"img-responsive\" style=\"background-image: url(";
            // line 17
            echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["value"], "imageurl", array())), array("
" => "", "" => "", " " => "")), "html", null, true);
            echo ");\">
                        <div class=\"centertext\">
                            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "nom", array()), "html", null, true);
            echo "
                        </div>
                    </div>
                </div>
                </a>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "WCSWildExchangeBundle:Default:tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  60 => 19,  54 => 17,  47 => 14,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WCSWildExchangeBundle:Default:tags.html.twig", "/home/oem/www/html/WildExchange/src/WCS/WildExchangeBundle/Resources/views/Default/tags.html.twig");
    }
}
