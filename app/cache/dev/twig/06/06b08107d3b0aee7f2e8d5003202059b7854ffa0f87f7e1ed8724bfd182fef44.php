<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4e2137033173c1086acd9a3602361c8332b742717dd39c50f3f57c64ec1237ca extends Twig_Template
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
        $__internal_b1061cdb19b89a6c0ec7c30ce611334fff60dcf7586cacfaf468f73256e6f740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1061cdb19b89a6c0ec7c30ce611334fff60dcf7586cacfaf468f73256e6f740->enter($__internal_b1061cdb19b89a6c0ec7c30ce611334fff60dcf7586cacfaf468f73256e6f740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b1061cdb19b89a6c0ec7c30ce611334fff60dcf7586cacfaf468f73256e6f740->leave($__internal_b1061cdb19b89a6c0ec7c30ce611334fff60dcf7586cacfaf468f73256e6f740_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
