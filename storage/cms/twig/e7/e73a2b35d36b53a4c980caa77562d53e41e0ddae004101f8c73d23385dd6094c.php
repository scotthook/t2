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

/* /Users/andrew/Sites/turnkey-site/plugins/inetis/googlecustomsearch/components/searchresults/default.htm */
class __TwigTemplate_1f4882eef59f2881f5363da0d1f9df90fa1a5ea2b44e6f7b1d8b02ccffb1a27d extends \Twig\Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, ($context["totalResults"] ?? null), "html", null, true);
        echo " Results for ";
        echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
        echo "</h1>
";
        // line 2
        if (($context["results"] ?? null)) {
            // line 3
            echo "<ul>
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 5
                echo "    <li>
        <h3><a href=\"";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "link", [], "any", false, false, false, 6), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "htmlTitle", [], "any", false, false, false, 6);
                echo "</a></h3>
        ";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["result"], "htmlSnippet", [], "any", false, false, false, 7);
                echo "
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</ul>
";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "render", [], "any", false, false, false, 11);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/plugins/inetis/googlecustomsearch/components/searchresults/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  69 => 10,  60 => 7,  54 => 6,  51 => 5,  47 => 4,  44 => 3,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>{{ totalResults }} Results for {{search}}</h1>
{% if results %}
<ul>
    {% for result in results %}
    <li>
        <h3><a href=\"{{ result.link }}\">{{ result.htmlTitle|raw }}</a></h3>
        {{ result.htmlSnippet|raw }}
    </li>
    {% endfor %}
</ul>
{{ results.render|raw }}
{% endif %}", "/Users/andrew/Sites/turnkey-site/plugins/inetis/googlecustomsearch/components/searchresults/default.htm", "");
    }
}
