<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d242517c5e5dc7348b1caf22f11911ae809bb7f87c5a24cf55f376ba51f89f18 extends Twig_Template
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
        $__internal_171916d953f6072a2c3c0cfef07e127abb6c83e74915724730fbcb541eeec3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171916d953f6072a2c3c0cfef07e127abb6c83e74915724730fbcb541eeec3eb->enter($__internal_171916d953f6072a2c3c0cfef07e127abb6c83e74915724730fbcb541eeec3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_171916d953f6072a2c3c0cfef07e127abb6c83e74915724730fbcb541eeec3eb->leave($__internal_171916d953f6072a2c3c0cfef07e127abb6c83e74915724730fbcb541eeec3eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
