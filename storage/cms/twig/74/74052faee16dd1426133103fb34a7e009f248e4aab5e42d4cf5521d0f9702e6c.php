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

/* /Users/andrew/Sites/turnkey-site/plugins/janvince/smallcontactform/components/smallcontactform/default.htm */
class __TwigTemplate_d401c9a66c7a24cb2b074157a1ef88c8dccefbf9ea04577443b23062a0b1b7b4 extends \Twig\Template
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
        echo "<div id=\"scf-message-";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\">
\t";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scf-message")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>

<div id=\"scf-form-";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\">
\t";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scf-form")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/plugins/janvince/smallcontactform/components/smallcontactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  52 => 6,  48 => 5,  44 => 3,  40 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"scf-message-{{ __SELF__ }}\">
\t{% partial __SELF__ ~ '::scf-message' %}
</div>

<div id=\"scf-form-{{ __SELF__ }}\">
\t{% partial __SELF__ ~ '::scf-form' %}
</div>
", "/Users/andrew/Sites/turnkey-site/plugins/janvince/smallcontactform/components/smallcontactform/default.htm", "");
    }
}
