<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e0bbdf6b7bd1f1f2bad53d07de54b9ddc61efa4318bf033729568d28413d6dbd extends Twig_Template
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
        $__internal_95259b46cc9092a26fc734e64b4265bf2df5c0c4d867c86d8da9cf71f81c14b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95259b46cc9092a26fc734e64b4265bf2df5c0c4d867c86d8da9cf71f81c14b8->enter($__internal_95259b46cc9092a26fc734e64b4265bf2df5c0c4d867c86d8da9cf71f81c14b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_95259b46cc9092a26fc734e64b4265bf2df5c0c4d867c86d8da9cf71f81c14b8->leave($__internal_95259b46cc9092a26fc734e64b4265bf2df5c0c4d867c86d8da9cf71f81c14b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
