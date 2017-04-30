<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_68e8261ba3692442405e7b456e1fbf281e1f50f8b9f30fbd7c9d5c5184856448 extends Twig_Template
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
        $__internal_8d3dc0e8a67b6aa8bb7cd2d02a775e9d093f7e95b2557f46d406e644618ce06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3dc0e8a67b6aa8bb7cd2d02a775e9d093f7e95b2557f46d406e644618ce06e->enter($__internal_8d3dc0e8a67b6aa8bb7cd2d02a775e9d093f7e95b2557f46d406e644618ce06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8d3dc0e8a67b6aa8bb7cd2d02a775e9d093f7e95b2557f46d406e644618ce06e->leave($__internal_8d3dc0e8a67b6aa8bb7cd2d02a775e9d093f7e95b2557f46d406e644618ce06e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
