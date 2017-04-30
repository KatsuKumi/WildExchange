<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9afe8fd5201c207284590701426149c4a4f65c189f85b0bfc2b337b6beba4c0f extends Twig_Template
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
        $__internal_c60f07bcb2a93a08c4bd57f68b10e97d9bdd0d3b58ce07bfc3ec056e33e3b347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60f07bcb2a93a08c4bd57f68b10e97d9bdd0d3b58ce07bfc3ec056e33e3b347->enter($__internal_c60f07bcb2a93a08c4bd57f68b10e97d9bdd0d3b58ce07bfc3ec056e33e3b347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c60f07bcb2a93a08c4bd57f68b10e97d9bdd0d3b58ce07bfc3ec056e33e3b347->leave($__internal_c60f07bcb2a93a08c4bd57f68b10e97d9bdd0d3b58ce07bfc3ec056e33e3b347_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
