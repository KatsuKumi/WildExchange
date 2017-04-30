<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_a788d9324212bc4f9c27068f93b788e0e336707d1e6463959f578c20e47a4d0d extends Twig_Template
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
        $__internal_55718b88d57e83a516a1807a41f633ce711cedf2d1b4599010059fe9348b8aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55718b88d57e83a516a1807a41f633ce711cedf2d1b4599010059fe9348b8aa9->enter($__internal_55718b88d57e83a516a1807a41f633ce711cedf2d1b4599010059fe9348b8aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_55718b88d57e83a516a1807a41f633ce711cedf2d1b4599010059fe9348b8aa9->leave($__internal_55718b88d57e83a516a1807a41f633ce711cedf2d1b4599010059fe9348b8aa9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
