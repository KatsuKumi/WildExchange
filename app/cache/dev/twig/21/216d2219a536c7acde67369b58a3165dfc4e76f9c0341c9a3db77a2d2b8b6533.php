<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_eafb2c4095f8bb5e5412d7a218cc54c4503e427be79892f6ac3f44e576319559 extends Twig_Template
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
        $__internal_72da0db78739b36feb6b2d33b03b22a7ebd984773dff4a32f0a4462e5419c1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72da0db78739b36feb6b2d33b03b22a7ebd984773dff4a32f0a4462e5419c1c7->enter($__internal_72da0db78739b36feb6b2d33b03b22a7ebd984773dff4a32f0a4462e5419c1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_72da0db78739b36feb6b2d33b03b22a7ebd984773dff4a32f0a4462e5419c1c7->leave($__internal_72da0db78739b36feb6b2d33b03b22a7ebd984773dff4a32f0a4462e5419c1c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
