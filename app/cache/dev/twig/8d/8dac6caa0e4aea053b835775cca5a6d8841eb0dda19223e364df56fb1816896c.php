<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ecaf9cc90a68f8033f10191496a6539eaab67dfb9bddf0108b1aeac53352a749 extends Twig_Template
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
        $__internal_10c737ab0ac797560ee27cdcc5978efa7b6d5f3c8ef198076c5ec3509a6da75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c737ab0ac797560ee27cdcc5978efa7b6d5f3c8ef198076c5ec3509a6da75e->enter($__internal_10c737ab0ac797560ee27cdcc5978efa7b6d5f3c8ef198076c5ec3509a6da75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_10c737ab0ac797560ee27cdcc5978efa7b6d5f3c8ef198076c5ec3509a6da75e->leave($__internal_10c737ab0ac797560ee27cdcc5978efa7b6d5f3c8ef198076c5ec3509a6da75e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
