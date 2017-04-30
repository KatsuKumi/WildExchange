<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0a8ae55d8253876d7aa84e08e6cc24d4f1257ff665c1e96980b51345a1db0893 extends Twig_Template
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
        $__internal_ac23b8ca52675ffbb158cbc3dda0b433f535c3299b5ad51beed7ac9e73e181ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac23b8ca52675ffbb158cbc3dda0b433f535c3299b5ad51beed7ac9e73e181ac->enter($__internal_ac23b8ca52675ffbb158cbc3dda0b433f535c3299b5ad51beed7ac9e73e181ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ac23b8ca52675ffbb158cbc3dda0b433f535c3299b5ad51beed7ac9e73e181ac->leave($__internal_ac23b8ca52675ffbb158cbc3dda0b433f535c3299b5ad51beed7ac9e73e181ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
