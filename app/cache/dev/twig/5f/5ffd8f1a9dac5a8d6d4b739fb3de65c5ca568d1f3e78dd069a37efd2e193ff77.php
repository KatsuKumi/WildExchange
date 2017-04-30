<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_337169e485820c24a1c8020ff7dd19412ad3ffe1aa865fd8e60dec9fabb7b1d5 extends Twig_Template
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
        $__internal_be391be93ccb0c138ba974b560f98a4aa149c566b6f914a180fc6fbe72fc33f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be391be93ccb0c138ba974b560f98a4aa149c566b6f914a180fc6fbe72fc33f8->enter($__internal_be391be93ccb0c138ba974b560f98a4aa149c566b6f914a180fc6fbe72fc33f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_be391be93ccb0c138ba974b560f98a4aa149c566b6f914a180fc6fbe72fc33f8->leave($__internal_be391be93ccb0c138ba974b560f98a4aa149c566b6f914a180fc6fbe72fc33f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
