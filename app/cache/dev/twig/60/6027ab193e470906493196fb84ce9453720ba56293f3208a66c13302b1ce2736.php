<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1c3c9417ae29217f51c5e94f9f0e7fac5251d831feb82cfe7cd6d62ef1880b3f extends Twig_Template
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
        $__internal_9ca91e7b8e662a462f6f0b6bb5541752ba1707906aa135bee600368b80e7f78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca91e7b8e662a462f6f0b6bb5541752ba1707906aa135bee600368b80e7f78a->enter($__internal_9ca91e7b8e662a462f6f0b6bb5541752ba1707906aa135bee600368b80e7f78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9ca91e7b8e662a462f6f0b6bb5541752ba1707906aa135bee600368b80e7f78a->leave($__internal_9ca91e7b8e662a462f6f0b6bb5541752ba1707906aa135bee600368b80e7f78a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
