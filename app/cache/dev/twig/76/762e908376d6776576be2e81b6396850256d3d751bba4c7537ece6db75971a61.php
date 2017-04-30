<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d2cad543968a1e9f2a6013d78475f0f58a76595e2400866bedaa6710e05abc32 extends Twig_Template
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
        $__internal_0302d23cff17a65f29b52641f1260e0a93e6a88f200e6e2993a2a129b1b853c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0302d23cff17a65f29b52641f1260e0a93e6a88f200e6e2993a2a129b1b853c3->enter($__internal_0302d23cff17a65f29b52641f1260e0a93e6a88f200e6e2993a2a129b1b853c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_0302d23cff17a65f29b52641f1260e0a93e6a88f200e6e2993a2a129b1b853c3->leave($__internal_0302d23cff17a65f29b52641f1260e0a93e6a88f200e6e2993a2a129b1b853c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
