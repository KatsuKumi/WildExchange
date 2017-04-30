<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_cf55c889875d2d8af2f45c3cd733fc03e42b9aa5b03db7c8e197aaf3af2a9a4c extends Twig_Template
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
        $__internal_557f7ad90f0b5a09138b077d72417c47c5c5d16d65ee2d4d45b57c66d5a22082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557f7ad90f0b5a09138b077d72417c47c5c5d16d65ee2d4d45b57c66d5a22082->enter($__internal_557f7ad90f0b5a09138b077d72417c47c5c5d16d65ee2d4d45b57c66d5a22082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_557f7ad90f0b5a09138b077d72417c47c5c5d16d65ee2d4d45b57c66d5a22082->leave($__internal_557f7ad90f0b5a09138b077d72417c47c5c5d16d65ee2d4d45b57c66d5a22082_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
