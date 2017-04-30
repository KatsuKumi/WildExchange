<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1d399ea7d3ad5bb81d49bf211b07658edf32c85c2e7e9359cdf2edf04df00494 extends Twig_Template
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
        $__internal_d7d3fbd54aad0f57f31a3bbe0e2faee58a65e4937acc5d28273c08704d9bba9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d3fbd54aad0f57f31a3bbe0e2faee58a65e4937acc5d28273c08704d9bba9b->enter($__internal_d7d3fbd54aad0f57f31a3bbe0e2faee58a65e4937acc5d28273c08704d9bba9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d7d3fbd54aad0f57f31a3bbe0e2faee58a65e4937acc5d28273c08704d9bba9b->leave($__internal_d7d3fbd54aad0f57f31a3bbe0e2faee58a65e4937acc5d28273c08704d9bba9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
