<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2a4d27eb95a2dbbfbc22af2decaee8576d5ed25f179c140669573b428121066c extends Twig_Template
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
        $__internal_49ded908c669e1e618604f30808125e6e55f0b91b66be70bd41768e9b7ea99de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ded908c669e1e618604f30808125e6e55f0b91b66be70bd41768e9b7ea99de->enter($__internal_49ded908c669e1e618604f30808125e6e55f0b91b66be70bd41768e9b7ea99de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_49ded908c669e1e618604f30808125e6e55f0b91b66be70bd41768e9b7ea99de->leave($__internal_49ded908c669e1e618604f30808125e6e55f0b91b66be70bd41768e9b7ea99de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
