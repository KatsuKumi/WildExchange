<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dfb843c4314f96e29d65a075a3dab2eb0321961837e2668991cfe625ef3f2ac9 extends Twig_Template
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
        $__internal_24896ad9b9073bf2acfc2d3c6e3af6277ce3354c35fd34bbb9b3a53a6a994ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24896ad9b9073bf2acfc2d3c6e3af6277ce3354c35fd34bbb9b3a53a6a994ae1->enter($__internal_24896ad9b9073bf2acfc2d3c6e3af6277ce3354c35fd34bbb9b3a53a6a994ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_24896ad9b9073bf2acfc2d3c6e3af6277ce3354c35fd34bbb9b3a53a6a994ae1->leave($__internal_24896ad9b9073bf2acfc2d3c6e3af6277ce3354c35fd34bbb9b3a53a6a994ae1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
