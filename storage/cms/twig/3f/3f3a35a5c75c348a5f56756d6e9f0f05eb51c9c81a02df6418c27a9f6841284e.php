<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Users/andrew/Sites/turnkey-site/plugins/martin/forms/components/partials/flash.htm */
class __TwigTemplate_0eec845a4bc370ca694917ce3f774befe9d3dec99976e1c7f8b646d938582d9c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        ob_start(function () { return ''; });
        // line 2
        echo "
    <div class=\"alert alert-";
        // line 3
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo " alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

    ";
        // line 6
        if (($context["title"] ?? null)) {
            // line 7
            echo "        <h4>";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h4>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if (($context["content"] ?? null)) {
            // line 11
            echo "        <p>";
            echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (($context["list"] ?? null)) {
            // line 15
            echo "        <ul>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
    ";
        }
        // line 21
        echo "
    </div>

    ";
        // line 24
        if (($context["jscript"] ?? null)) {
            // line 25
            echo "        <script>
            ";
            // line 26
            if (($context["errors"] ?? null)) {
                // line 27
                echo "                var errors = JSON.parse('";
                echo ($context["errors"] ?? null);
                echo "');
            ";
            }
            // line 29
            echo "            ";
            echo ($context["jscript"] ?? null);
            echo "
        </script>
    ";
        }
        // line 32
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/plugins/martin/forms/components/partials/flash.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  108 => 29,  102 => 27,  100 => 26,  97 => 25,  95 => 24,  90 => 21,  86 => 19,  77 => 17,  73 => 16,  70 => 15,  68 => 14,  65 => 13,  59 => 11,  57 => 10,  54 => 9,  48 => 7,  46 => 6,  40 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}

    <div class=\"alert alert-{{ type }} alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

    {% if title %}
        <h4>{{ title }}</h4>
    {% endif %}

    {% if content %}
        <p>{{ content }}</p>
    {% endif %}

    {% if list %}
        <ul>
        {% for item in list %}
            <li>{{ item }}</li>
        {% endfor %}
        </ul>
    {% endif %}

    </div>

    {% if jscript %}
        <script>
            {% if errors %}
                var errors = JSON.parse('{{ errors|raw }}');
            {% endif %}
            {{ jscript|raw }}
        </script>
    {% endif %}

{% endspaceless %}
", "/Users/andrew/Sites/turnkey-site/plugins/martin/forms/components/partials/flash.htm", "");
    }
}
