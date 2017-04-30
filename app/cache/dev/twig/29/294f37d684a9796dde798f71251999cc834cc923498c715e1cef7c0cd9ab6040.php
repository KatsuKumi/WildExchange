<?php

/* SensioDistributionBundle:Configurator:steps.html.twig */
class __TwigTemplate_ab0adc6f725425b1781840bfe8f1eeb2cfc0376d8c5bd648828a0957f3d46ceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7054597aa55de4a6b6ec53c45f2c654a4868571a8ae384e31eb44c3d7bdc4f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7054597aa55de4a6b6ec53c45f2c654a4868571a8ae384e31eb44c3d7bdc4f4e->enter($__internal_7054597aa55de4a6b6ec53c45f2c654a4868571a8ae384e31eb44c3d7bdc4f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:steps.html.twig"));

        // line 1
        echo "<div class=\"symfony-block-steps\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["count"] ?? $this->getContext($context, "count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "
      ";
            // line 4
            if (($context["i"] == (($context["index"] ?? $this->getContext($context, "index")) + 1))) {
                // line 5
                echo "          <span class=\"selected\">Step ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span>
      ";
            } else {
                // line 7
                echo "          <span>Step ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span>
      ";
            }
            // line 9
            echo "
      ";
            // line 10
            if (($context["i"] != ($context["count"] ?? $this->getContext($context, "count")))) {
                // line 11
                echo "        &gt;
      ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
        
        $__internal_7054597aa55de4a6b6ec53c45f2c654a4868571a8ae384e31eb44c3d7bdc4f4e->leave($__internal_7054597aa55de4a6b6ec53c45f2c654a4868571a8ae384e31eb44c3d7bdc4f4e_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 13,  51 => 11,  49 => 10,  46 => 9,  40 => 7,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"symfony-block-steps\">
    {% for i in 1..count %}

      {% if i == index + 1 %}
          <span class=\"selected\">Step {{ i }}</span>
      {% else %}
          <span>Step {{ i }}</span>
      {% endif %}

      {% if i != count %}
        &gt;
      {% endif %}
    {% endfor %}
</div>
", "SensioDistributionBundle:Configurator:steps.html.twig", "/home/oem/www/html/WildExchange/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/steps.html.twig");
    }
}
