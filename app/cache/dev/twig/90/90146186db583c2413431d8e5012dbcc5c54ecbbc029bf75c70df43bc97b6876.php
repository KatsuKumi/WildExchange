<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3db35bbadbb47719c9f0bf933b405dac507779714eeb7dbb54255fdb087797a9 extends Twig_Template
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
        $__internal_e8dc77f802ef170a3e9b17fe4e0709a3eb30c76324d61935972f6758a7b780ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8dc77f802ef170a3e9b17fe4e0709a3eb30c76324d61935972f6758a7b780ab->enter($__internal_e8dc77f802ef170a3e9b17fe4e0709a3eb30c76324d61935972f6758a7b780ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e8dc77f802ef170a3e9b17fe4e0709a3eb30c76324d61935972f6758a7b780ab->leave($__internal_e8dc77f802ef170a3e9b17fe4e0709a3eb30c76324d61935972f6758a7b780ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
