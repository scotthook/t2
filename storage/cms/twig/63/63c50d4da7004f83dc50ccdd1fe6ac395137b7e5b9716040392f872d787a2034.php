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

/* /Users/andrew/Sites/turnkey-site/themes/turnkey/layouts/default.htm */
class __TwigTemplate_8bcc8a03824f026e15ef59366c31490242028ebae55e0c1877e2776edbd2afb1 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
    <body class=\"layout-";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layout", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5), "html", null, true);
        echo " page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
      <!-- <main role=\"main\"> -->
        <div class=\"global-header\">
            ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        </div>
        <div class=\"global-page\">
            ";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 12
        echo "        </div>
    
        <div class=\"global-footer\">
            ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "        </div>

        ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "      <!-- </main> -->
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/themes/turnkey/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  77 => 18,  73 => 16,  69 => 15,  64 => 12,  62 => 11,  58 => 9,  54 => 8,  46 => 5,  43 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    {% partial 'head' %}

    <body class=\"layout-{{ this.layout.id }} page-{{ this.page.id }}\">
      <!-- <main role=\"main\"> -->
        <div class=\"global-header\">
            {% partial 'header' %}
        </div>
        <div class=\"global-page\">
            {% page %}
        </div>
    
        <div class=\"global-footer\">
            {% partial 'footer' %}
        </div>

        {% partial 'scripts' %}
      <!-- </main> -->
    </body>
</html>", "/Users/andrew/Sites/turnkey-site/themes/turnkey/layouts/default.htm", "");
    }
}
