<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_413abd783bf34ca82e5df69009ccb016447fbc650bf09285fcf08541950dc83d extends Twig_Template
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
        $__internal_abbcaa89455b52ec188c5f14fb5c334045fa25e836f8da1e8c1bb3e78d21c938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbcaa89455b52ec188c5f14fb5c334045fa25e836f8da1e8c1bb3e78d21c938->enter($__internal_abbcaa89455b52ec188c5f14fb5c334045fa25e836f8da1e8c1bb3e78d21c938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_abbcaa89455b52ec188c5f14fb5c334045fa25e836f8da1e8c1bb3e78d21c938->leave($__internal_abbcaa89455b52ec188c5f14fb5c334045fa25e836f8da1e8c1bb3e78d21c938_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
