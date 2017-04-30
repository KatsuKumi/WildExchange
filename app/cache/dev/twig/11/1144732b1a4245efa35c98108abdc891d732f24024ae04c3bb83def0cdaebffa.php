<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5322e7ccd2b5701b6131852a21b70ea595e413acb920503fb329ec27d7367e77 extends Twig_Template
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
        $__internal_e41739bd1c1cc7f569af69d123c9144394afa1517ac5b5e891b08107bd1a55d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41739bd1c1cc7f569af69d123c9144394afa1517ac5b5e891b08107bd1a55d9->enter($__internal_e41739bd1c1cc7f569af69d123c9144394afa1517ac5b5e891b08107bd1a55d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e41739bd1c1cc7f569af69d123c9144394afa1517ac5b5e891b08107bd1a55d9->leave($__internal_e41739bd1c1cc7f569af69d123c9144394afa1517ac5b5e891b08107bd1a55d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
