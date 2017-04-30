<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4f783a8abfd6d492eb1a3b6635c227c11adb927caddf8ef3a47f6767766bfd0b extends Twig_Template
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
        $__internal_4228094b2d02adee666d32f768bcd8c006d761e663677e9a4f769b8cd8323ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4228094b2d02adee666d32f768bcd8c006d761e663677e9a4f769b8cd8323ef5->enter($__internal_4228094b2d02adee666d32f768bcd8c006d761e663677e9a4f769b8cd8323ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4228094b2d02adee666d32f768bcd8c006d761e663677e9a4f769b8cd8323ef5->leave($__internal_4228094b2d02adee666d32f768bcd8c006d761e663677e9a4f769b8cd8323ef5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
