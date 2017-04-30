<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_769c3001fb646593bb4387968fb86bc6514e9774a1ccb9065c0fc6131027c9f0 extends Twig_Template
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
        $__internal_fa451a192add12b1eb46d68d95f3d119621db747fdada496c55d7c2a2de73699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa451a192add12b1eb46d68d95f3d119621db747fdada496c55d7c2a2de73699->enter($__internal_fa451a192add12b1eb46d68d95f3d119621db747fdada496c55d7c2a2de73699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fa451a192add12b1eb46d68d95f3d119621db747fdada496c55d7c2a2de73699->leave($__internal_fa451a192add12b1eb46d68d95f3d119621db747fdada496c55d7c2a2de73699_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
