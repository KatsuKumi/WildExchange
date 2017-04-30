<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_04a5369ba6637c2b4fe8da84e228aeaf8d8cf632848ec04552c846be5a219395 extends Twig_Template
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
        $__internal_d83952ee6513e44ff218c860f75c1c82bdcc74b4574e5f66fc4586acc29e7d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83952ee6513e44ff218c860f75c1c82bdcc74b4574e5f66fc4586acc29e7d95->enter($__internal_d83952ee6513e44ff218c860f75c1c82bdcc74b4574e5f66fc4586acc29e7d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d83952ee6513e44ff218c860f75c1c82bdcc74b4574e5f66fc4586acc29e7d95->leave($__internal_d83952ee6513e44ff218c860f75c1c82bdcc74b4574e5f66fc4586acc29e7d95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
