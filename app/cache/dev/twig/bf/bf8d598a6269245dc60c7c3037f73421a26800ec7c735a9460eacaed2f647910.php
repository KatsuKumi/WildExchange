<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_70aedbe7f72514f742d4956916793228527dcc06320a822add97712354c24e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b64ca02c82fa165af812de21de54282ee276a70cf384a1f5ebd314d5fffd08fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64ca02c82fa165af812de21de54282ee276a70cf384a1f5ebd314d5fffd08fb->enter($__internal_b64ca02c82fa165af812de21de54282ee276a70cf384a1f5ebd314d5fffd08fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b64ca02c82fa165af812de21de54282ee276a70cf384a1f5ebd314d5fffd08fb->leave($__internal_b64ca02c82fa165af812de21de54282ee276a70cf384a1f5ebd314d5fffd08fb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b77684360869fc4b1d35c7abd0f5fbbef5e543e0b23521e0950d1650a695269f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77684360869fc4b1d35c7abd0f5fbbef5e543e0b23521e0950d1650a695269f->enter($__internal_b77684360869fc4b1d35c7abd0f5fbbef5e543e0b23521e0950d1650a695269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b77684360869fc4b1d35c7abd0f5fbbef5e543e0b23521e0950d1650a695269f->leave($__internal_b77684360869fc4b1d35c7abd0f5fbbef5e543e0b23521e0950d1650a695269f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
