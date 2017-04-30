<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_57436b33f6e595742b2c4c44dca1887be7f237862043328bd3359c6d2869ef05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daf14469282287d2d81d3389e021213ab747ed9d6682317ddeee03a4171f64ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf14469282287d2d81d3389e021213ab747ed9d6682317ddeee03a4171f64ba->enter($__internal_daf14469282287d2d81d3389e021213ab747ed9d6682317ddeee03a4171f64ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daf14469282287d2d81d3389e021213ab747ed9d6682317ddeee03a4171f64ba->leave($__internal_daf14469282287d2d81d3389e021213ab747ed9d6682317ddeee03a4171f64ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c8a358a4aa5d7cc3e0a6782e4fb9c91a135ee9d4dc8e4933ca13f5fd92b524b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8a358a4aa5d7cc3e0a6782e4fb9c91a135ee9d4dc8e4933ca13f5fd92b524b->enter($__internal_4c8a358a4aa5d7cc3e0a6782e4fb9c91a135ee9d4dc8e4933ca13f5fd92b524b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">
        ";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 42
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 48
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                    ";
        // line 49
        $this->displayBlock('panel', $context, $blocks);
        // line 50
        echo "                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" class=\"visible-small\" onclick=\"Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded'); return false;\">
                            <span class=\"icon\">";
        // line 57
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search", array("limit" => 10));
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", twig_array_merge(array("token" => "latest"), $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "all", array()))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 63
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                            ";
        // line 64
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_bar", $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "all", array())));
        echo "
                    </div>
                </div>

                ";
        // line 71
        if (array_key_exists("templates", $context)) {
            // line 72
            echo "                    <ul id=\"menu-profiler\">
                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 74
                echo "                            ";
                ob_start();
                // line 75
                if (                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 75)->hasBlock("menu", $context)) {
                    // line 76
                    $__internal_f84babd977ad3acbdbd8e2dd2b23a4eb2628b70a3f8cdee4c051eb0f8e1f3a33 = array("collector" => $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_markup_version" => ($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")));
                    if (!is_array($__internal_f84babd977ad3acbdbd8e2dd2b23a4eb2628b70a3f8cdee4c051eb0f8e1f3a33)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_f84babd977ad3acbdbd8e2dd2b23a4eb2628b70a3f8cdee4c051eb0f8e1f3a33);
                    // line 77
                    $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 77)->displayBlock("menu", $context);
                    $context = $context['_parent'];
                }
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 81
                echo "                            ";
                if ( !twig_test_empty(($context["menu"] ?? $this->getContext($context, "menu")))) {
                    // line 82
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == ($context["panel"] ?? $this->getContext($context, "panel")))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo ($context["menu"] ?? $this->getContext($context, "menu"));
                    echo "</a>
                                </li>
                            ";
                }
                // line 86
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                    </ul>
                ";
        }
        // line 89
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_4c8a358a4aa5d7cc3e0a6782e4fb9c91a135ee9d4dc8e4933ca13f5fd92b524b->leave($__internal_4c8a358a4aa5d7cc3e0a6782e4fb9c91a135ee9d4dc8e4933ca13f5fd92b524b_prof);

    }

    // line 7
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fcecea2e9d576a9976ae99c3f2626af34bd6a7dd5bddbe7eb97b4b4fd1553474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcecea2e9d576a9976ae99c3f2626af34bd6a7dd5bddbe7eb97b4b4fd1553474->enter($__internal_fcecea2e9d576a9976ae99c3f2626af34bd6a7dd5bddbe7eb97b4b4fd1553474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 9
            echo "                ";
            $context["status_code"] = ((twig_in_filter("request", twig_get_array_keys_filter($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "collectors", array())))) ? ((($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array()), 0)) : (0))) : (0));
            // line 10
            echo "                ";
            $context["css_class"] = (((($context["status_code"] ?? $this->getContext($context, "status_code")) > 399)) ? ("status-error") : ((((($context["status_code"] ?? $this->getContext($context, "status_code")) > 299)) ? ("status-warning") : ("status-success"))));
            // line 11
            echo "
                <div class=\"status ";
            // line 12
            echo twig_escape_filter($this->env, ($context["css_class"] ?? $this->getContext($context, "css_class")), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 15
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 16
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 18
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "
                            ";
            }
            // line 20
            echo "                        </h2>

                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "method", array())), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 27
            echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "ip", array()), "html", null, true);
            echo "</dd>

                            <dt>Profiled on</dt>
                            <dd>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "time", array()), "r"), "html", null, true);
            echo "</dd>

                            <dt>Token</dt>
                            <dd>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "token", array()), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 41
        echo "        ";
        
        $__internal_fcecea2e9d576a9976ae99c3f2626af34bd6a7dd5bddbe7eb97b4b4fd1553474->leave($__internal_fcecea2e9d576a9976ae99c3f2626af34bd6a7dd5bddbe7eb97b4b4fd1553474_prof);

    }

    // line 49
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f0b68eb829cbba4169a7d286bed58a244a27cead7392ee24f08a65ffe585b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0b68eb829cbba4169a7d286bed58a244a27cead7392ee24f08a65ffe585b85->enter($__internal_6f0b68eb829cbba4169a7d286bed58a244a27cead7392ee24f08a65ffe585b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6f0b68eb829cbba4169a7d286bed58a244a27cead7392ee24f08a65ffe585b85->leave($__internal_6f0b68eb829cbba4169a7d286bed58a244a27cead7392ee24f08a65ffe585b85_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 49,  271 => 41,  263 => 36,  257 => 33,  251 => 30,  245 => 27,  239 => 24,  233 => 20,  227 => 18,  219 => 16,  217 => 15,  211 => 12,  208 => 11,  205 => 10,  202 => 9,  199 => 8,  193 => 7,  183 => 89,  179 => 87,  165 => 86,  157 => 83,  150 => 82,  147 => 81,  142 => 77,  135 => 76,  133 => 75,  130 => 74,  113 => 73,  110 => 72,  108 => 71,  101 => 67,  95 => 64,  89 => 63,  84 => 61,  80 => 60,  74 => 57,  65 => 50,  63 => 49,  59 => 48,  51 => 42,  49 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}

    <div id=\"summary\">
        {% block summary %}
            {% if profile is defined %}
                {% set status_code = ('request' in profile.collectors|keys) ? profile.getcollector('request').statuscode|default(0) : 0 %}
                {% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}

                <div class=\"status {{ css_class }}\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            {% if profile.method|upper in ['GET', 'HEAD'] %}
                                <a href=\"{{ profile.url }}\">{{ profile.url }}</a>
                            {% else %}
                                {{ profile.url }}
                            {% endif %}
                        </h2>

                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>{{ profile.method|upper }}</dd>

                            <dt>HTTP Status</dt>
                            <dd>{{ status_code }}</dd>

                            <dt>IP</dt>
                            <dd>{{ profile.ip }}</dd>

                            <dt>Profiled on</dt>
                            <dd>{{ profile.time|date('r') }}</dd>

                            <dt>Token</dt>
                            <dd>{{ profile.token }}</dd>
                        </dl>
                    </div>
                </div>
            {% endif %}
        {% endblock %}
    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    {{ include('@WebProfiler/Profiler/base_js.html.twig') }}
                    {% block panel '' %}
                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" class=\"visible-small\" onclick=\"Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded'); return false;\">
                            <span class=\"icon\">{{ include('@WebProfiler/Icon/menu.svg') }}</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler_search', { limit: 10 }) }}\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler', { token: 'latest' }|merge(request.query.all)) }}\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" {% if tokens is defined or about is defined %}data-toggle-initial=\"display\"{% endif %}>
                            {{ include('@WebProfiler/Icon/search.svg') }} <span class=\"hidden-small\">Search</span>
                        </a>

                        {{ render(path('_profiler_search_bar', request.query.all)) }}
                    </div>
                </div>

                {% if templates is defined %}
                    <ul id=\"menu-profiler\">
                        {% for name, template in templates %}
                            {% set menu -%}
                                {%- if block('menu', template) is defined -%}
                                    {% with { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version } %}
                                        {{- block('menu', template) -}}
                                    {% endwith %}
                                {%- endif -%}
                            {%- endset %}
                            {% if menu is not empty %}
                                <li class=\"{{ name }} {{ name == panel ? 'selected' : '' }}\">
                                    <a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{{ menu|raw }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/layout.html.twig", "/home/oem/www/html/WildExchange/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/layout.html.twig");
    }
}
