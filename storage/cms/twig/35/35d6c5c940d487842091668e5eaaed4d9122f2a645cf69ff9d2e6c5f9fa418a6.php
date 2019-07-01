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

/* /Users/andrew/Sites/turnkey-site/themes/turnkey/pages/search-results.htm */
class __TwigTemplate_367e57f24d9fd95295af0deab041116c2c0ee42d33ce98ba5851ea1799e12d0d extends \Twig\Template
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
        echo "<!-- Body Content -->
    <main role=\"main\">
      <!-- Main Content -->
      \t<div class=\"container-fluid contentSections template3\">
      \t\t<div class=\"row padMe100\">
      \t\t    
      \t\t\t<div class=\"col-md-12\">
      \t\t\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, ($context["totalResults"] ?? null), "html", null, true);
        echo " Results for ";
        echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
        echo "</h1>
                ";
        // line 9
        if (($context["results"] ?? null)) {
            // line 10
            echo "                <ul>
                    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 12
                echo "                    <li>
                        <h3><a href=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "link", [], "any", false, false, false, 13), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "htmlTitle", [], "any", false, false, false, 13);
                echo "</a></h3>
                        ";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["result"], "htmlSnippet", [], "any", false, false, false, 14);
                echo "
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                </ul>
                ";
            // line 18
            echo twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "render", [], "any", false, false, false, 18);
            echo "
                ";
        } else {
            // line 20
            echo "                
                No Results
                
                ";
        }
        // line 24
        echo "               
                
      \t\t\t</div>
      \t\t\t<div class=\"col-md-12 padMe100\">
      \t\t\t\t<h3>Our turnkey office and call center solutions are pre-built and good to go applications as soon as they are positioned within your business processes</h3>
      \t\t\t\t<h3>Placing turnkey solutions in your office and call center enhances your business functions more effectively. They improve customer experiences and ensure continuous value and faster returns on investment.</h3>
      \t\t\t\t<a class=\"btn btn-primary btn-lg greenBtn headerBtn\" href=\"/contact-us\">Request a Free Consultation</a>
      \t\t\t\t<p>Or call <a href=\"18005610580\">1 (800) 561-0580</a>
      \t\t\t</div>
      \t\t</div>
\t\t\t
\t\t</div>
      <!-- /Main Content -->

    </main>
    <!-- /Body Content -->";
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/themes/turnkey/pages/search-results.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  85 => 20,  80 => 18,  77 => 17,  68 => 14,  62 => 13,  59 => 12,  55 => 11,  52 => 10,  50 => 9,  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Body Content -->
    <main role=\"main\">
      <!-- Main Content -->
      \t<div class=\"container-fluid contentSections template3\">
      \t\t<div class=\"row padMe100\">
      \t\t    
      \t\t\t<div class=\"col-md-12\">
      \t\t\t<h1>{{ totalResults }} Results for {{search}}</h1>
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
                {% else %}
                
                No Results
                
                {% endif %}
               
                
      \t\t\t</div>
      \t\t\t<div class=\"col-md-12 padMe100\">
      \t\t\t\t<h3>Our turnkey office and call center solutions are pre-built and good to go applications as soon as they are positioned within your business processes</h3>
      \t\t\t\t<h3>Placing turnkey solutions in your office and call center enhances your business functions more effectively. They improve customer experiences and ensure continuous value and faster returns on investment.</h3>
      \t\t\t\t<a class=\"btn btn-primary btn-lg greenBtn headerBtn\" href=\"/contact-us\">Request a Free Consultation</a>
      \t\t\t\t<p>Or call <a href=\"18005610580\">1 (800) 561-0580</a>
      \t\t\t</div>
      \t\t</div>
\t\t\t
\t\t</div>
      <!-- /Main Content -->

    </main>
    <!-- /Body Content -->", "/Users/andrew/Sites/turnkey-site/themes/turnkey/pages/search-results.htm", "");
    }
}
