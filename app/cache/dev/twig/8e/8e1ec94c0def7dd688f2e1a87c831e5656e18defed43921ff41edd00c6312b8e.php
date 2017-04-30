<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_51736df1c368823f65f5aa970d67b090fa956d39874a6dfccca8efb7b56ef692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle:Configurator:form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0736a9022f71e0539300a80c8574aaf29b00daf167d0c6546f0dad9cf3b63cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0736a9022f71e0539300a80c8574aaf29b00daf167d0c6546f0dad9cf3b63cbd->enter($__internal_0736a9022f71e0539300a80c8574aaf29b00daf167d0c6546f0dad9cf3b63cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0736a9022f71e0539300a80c8574aaf29b00daf167d0c6546f0dad9cf3b63cbd->leave($__internal_0736a9022f71e0539300a80c8574aaf29b00daf167d0c6546f0dad9cf3b63cbd_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_54f2e835a8d5f328de08e9757712802e9c0fb150f3cfcd75b74d0f39749d4242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f2e835a8d5f328de08e9757712802e9c0fb150f3cfcd75b74d0f39749d4242->enter($__internal_54f2e835a8d5f328de08e9757712802e9c0fb150f3cfcd75b74d0f39749d4242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_54f2e835a8d5f328de08e9757712802e9c0fb150f3cfcd75b74d0f39749d4242->leave($__internal_54f2e835a8d5f328de08e9757712802e9c0fb150f3cfcd75b74d0f39749d4242_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_755827b83db9c9f0f9a6ec587cf0257f129dffccdd3553a252e8bf8762cc7cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755827b83db9c9f0f9a6ec587cf0257f129dffccdd3553a252e8bf8762cc7cc3->enter($__internal_755827b83db9c9f0f9a6ec587cf0257f129dffccdd3553a252e8bf8762cc7cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_755827b83db9c9f0f9a6ec587cf0257f129dffccdd3553a252e8bf8762cc7cc3->leave($__internal_755827b83db9c9f0f9a6ec587cf0257f129dffccdd3553a252e8bf8762cc7cc3_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4191d899653e6ee1119a28fcc970106b6a1928b23d68efa93c0ab7a4971336f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4191d899653e6ee1119a28fcc970106b6a1928b23d68efa93c0ab7a4971336f3->enter($__internal_4191d899653e6ee1119a28fcc970106b6a1928b23d68efa93c0ab7a4971336f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_4191d899653e6ee1119a28fcc970106b6a1928b23d68efa93c0ab7a4971336f3->leave($__internal_4191d899653e6ee1119a28fcc970106b6a1928b23d68efa93c0ab7a4971336f3_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{% block form_rows %}
    <div class=\"symfony-form-errors\">
        {{ form_errors(form) }}
    </div>
    {% for child in form %}
        {{ form_row(child) }}
    {% endfor %}
{% endblock %}

{% block form_row %}
    <div class=\"symfony-form-row\">
        {{ form_label(form) }}
        <div class=\"symfony-form-field\">
            {{ form_widget(form) }}
            <div class=\"symfony-form-errors\">
                {{ form_errors(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block form_label %}
    {% if label is empty %}
        {% set label = name|humanize %}
    {% endif %}
    <label for=\"{{ id }}\">
        {{ label|trans }}
        {% if required %}
            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        {% endif %}
    </label>
{% endblock %}
", "SensioDistributionBundle:Configurator:form.html.twig", "/home/oem/www/html/WildExchange/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/form.html.twig");
    }
}
