<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_94311d3a48dd9b563212a57a72d9458ac3034fb966dbed55aac2cb3852c1bb1b extends Twig_Template
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
        $__internal_02339f5d1e39b5b6177c8f50b3ac181870e022836352aaf9bf0ccd238732a414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02339f5d1e39b5b6177c8f50b3ac181870e022836352aaf9bf0ccd238732a414->enter($__internal_02339f5d1e39b5b6177c8f50b3ac181870e022836352aaf9bf0ccd238732a414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_02339f5d1e39b5b6177c8f50b3ac181870e022836352aaf9bf0ccd238732a414->leave($__internal_02339f5d1e39b5b6177c8f50b3ac181870e022836352aaf9bf0ccd238732a414_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
