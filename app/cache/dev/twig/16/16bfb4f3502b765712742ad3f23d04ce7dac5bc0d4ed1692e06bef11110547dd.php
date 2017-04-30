<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a0007a4833ff0a06bcbe8d8453024d9dbae360568ec027b6be07cc07d39d8626 extends Twig_Template
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
        $__internal_f1cfe44b098fb77645176cfa20830a35d83ecf347348d86762ba06448e7e7ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cfe44b098fb77645176cfa20830a35d83ecf347348d86762ba06448e7e7ff8->enter($__internal_f1cfe44b098fb77645176cfa20830a35d83ecf347348d86762ba06448e7e7ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f1cfe44b098fb77645176cfa20830a35d83ecf347348d86762ba06448e7e7ff8->leave($__internal_f1cfe44b098fb77645176cfa20830a35d83ecf347348d86762ba06448e7e7ff8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
