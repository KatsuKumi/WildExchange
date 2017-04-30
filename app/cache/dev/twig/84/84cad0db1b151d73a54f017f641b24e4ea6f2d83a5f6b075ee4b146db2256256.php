<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b9546534f01916f0a7d821abf12f151c2a1d7e03d7dcc6c75e248070f6c04ce1 extends Twig_Template
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
        $__internal_1b7a7341504f366cb25148763122cefdbb87d31bd13c8f229d6dceb5097204bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7a7341504f366cb25148763122cefdbb87d31bd13c8f229d6dceb5097204bc->enter($__internal_1b7a7341504f366cb25148763122cefdbb87d31bd13c8f229d6dceb5097204bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1b7a7341504f366cb25148763122cefdbb87d31bd13c8f229d6dceb5097204bc->leave($__internal_1b7a7341504f366cb25148763122cefdbb87d31bd13c8f229d6dceb5097204bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
