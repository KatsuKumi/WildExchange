<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4a6c7792261f5a715454c743312ec5b92716aaabc2c44f12adb0181a60835351 extends Twig_Template
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
        $__internal_66ebc21bb17a3c964fea91a572dc524393a75f1b680f95c2be9ec989f213dd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ebc21bb17a3c964fea91a572dc524393a75f1b680f95c2be9ec989f213dd55->enter($__internal_66ebc21bb17a3c964fea91a572dc524393a75f1b680f95c2be9ec989f213dd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_66ebc21bb17a3c964fea91a572dc524393a75f1b680f95c2be9ec989f213dd55->leave($__internal_66ebc21bb17a3c964fea91a572dc524393a75f1b680f95c2be9ec989f213dd55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
