<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_71347177b316f8f76b739dc652305ca840f226a5d059bd58ff5c3d5eec191944 extends Twig_Template
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
        $__internal_bf9879f3690afde4cf399a2eac0813e567fdcf3df94ca1199fe61fa48e5c7de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9879f3690afde4cf399a2eac0813e567fdcf3df94ca1199fe61fa48e5c7de5->enter($__internal_bf9879f3690afde4cf399a2eac0813e567fdcf3df94ca1199fe61fa48e5c7de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_bf9879f3690afde4cf399a2eac0813e567fdcf3df94ca1199fe61fa48e5c7de5->leave($__internal_bf9879f3690afde4cf399a2eac0813e567fdcf3df94ca1199fe61fa48e5c7de5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
