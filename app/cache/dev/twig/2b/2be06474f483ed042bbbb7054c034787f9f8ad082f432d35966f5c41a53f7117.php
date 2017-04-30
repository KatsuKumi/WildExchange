<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_12cefdad9b82626843e5ba874890884ad44fa83761cbccca4ac26e48141aca00 extends Twig_Template
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
        $__internal_4570eeea6f6a3bc09075de185a1bef446bce10333435fc41d2d9e9b557914822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4570eeea6f6a3bc09075de185a1bef446bce10333435fc41d2d9e9b557914822->enter($__internal_4570eeea6f6a3bc09075de185a1bef446bce10333435fc41d2d9e9b557914822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_4570eeea6f6a3bc09075de185a1bef446bce10333435fc41d2d9e9b557914822->leave($__internal_4570eeea6f6a3bc09075de185a1bef446bce10333435fc41d2d9e9b557914822_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
