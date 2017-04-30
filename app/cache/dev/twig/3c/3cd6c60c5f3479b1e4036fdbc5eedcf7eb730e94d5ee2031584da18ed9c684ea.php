<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f0209011828e1df97c5d7e4a98ebdb99e5e26893fa15b46cbea02f9e05d0dbf2 extends Twig_Template
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
        $__internal_f40d81601a164c414d7a666ac949cd16483bbbc973bcd17cfc27f46383cc07c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40d81601a164c414d7a666ac949cd16483bbbc973bcd17cfc27f46383cc07c2->enter($__internal_f40d81601a164c414d7a666ac949cd16483bbbc973bcd17cfc27f46383cc07c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f40d81601a164c414d7a666ac949cd16483bbbc973bcd17cfc27f46383cc07c2->leave($__internal_f40d81601a164c414d7a666ac949cd16483bbbc973bcd17cfc27f46383cc07c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
