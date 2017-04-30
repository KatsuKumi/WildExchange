<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_216dc5f39887f85b951d5bbfb9aba51aa792a17a2e5c4fd7eaab67bc7fc31fc5 extends Twig_Template
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
        $__internal_97e4bb2a5b008a8e8ba2543ffbffc73891e2667294e94e95a20fa5a59baf4ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e4bb2a5b008a8e8ba2543ffbffc73891e2667294e94e95a20fa5a59baf4ace->enter($__internal_97e4bb2a5b008a8e8ba2543ffbffc73891e2667294e94e95a20fa5a59baf4ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_97e4bb2a5b008a8e8ba2543ffbffc73891e2667294e94e95a20fa5a59baf4ace->leave($__internal_97e4bb2a5b008a8e8ba2543ffbffc73891e2667294e94e95a20fa5a59baf4ace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
