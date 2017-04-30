<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_205c03fcd38f0bc2823a6cedde9d353edef0e9581af75e312c5ae53d2dba39d2 extends Twig_Template
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
        $__internal_9f23fa32086c189068c5dd914f8fcfa24b380bad67218bb61111f32a3ed96a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f23fa32086c189068c5dd914f8fcfa24b380bad67218bb61111f32a3ed96a2e->enter($__internal_9f23fa32086c189068c5dd914f8fcfa24b380bad67218bb61111f32a3ed96a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9f23fa32086c189068c5dd914f8fcfa24b380bad67218bb61111f32a3ed96a2e->leave($__internal_9f23fa32086c189068c5dd914f8fcfa24b380bad67218bb61111f32a3ed96a2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
