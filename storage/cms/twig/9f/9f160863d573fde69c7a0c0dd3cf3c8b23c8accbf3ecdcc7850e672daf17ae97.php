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

/* /Users/andrew/Sites/turnkey-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm */
class __TwigTemplate_6b83b8453dc17a6bfb67575941c70334bce48c2aa9cd5dced5c4e14300f6a4b0 extends \Twig\Template
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
        if ((((($context["flashError"] ?? null) || (($context["flashSuccess"] ?? null) == false)) || (($context["flashSuccess"] ?? null) != ($context["__SELF__"] ?? null))) || ((($context["flashSuccess"] ?? null) == ($context["__SELF__"] ?? null)) && (call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["form_hide_after_success", 0]) == 0)))) {
            // line 2
            echo "
\t";
            // line 3
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getFormAttributes", [], "any", false, false, false, 3)]);
            echo "

\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fields", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 6
                echo "
\t\t\t";
                // line 7
                echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getFieldHtmlCode", [0 => $context["field"]], "method", false, false, false, 7);
                echo "

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "
\t\t";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getAntispamFieldHtmlCode", [0 => []], "method", false, false, false, 11);
            echo "

\t\t";
            // line 13
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getDescriptionFieldHtmlCode", [0 => []], "method", false, false, false, 13);
            echo "

\t\t";
            // line 15
            if ((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["add_google_recaptcha"]) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_site_key"]))) {
                // line 16
                echo "\t\t\t<div class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getReCaptchaWrapperClass", [], "method", false, false, false, 16), "html", null, true);
                echo "\">
\t            <div class=\"g-recaptcha\" data-sitekey=\"";
                // line 17
                echo call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_site_key"]);
                echo "\"></div>
\t        </div>
\t\t";
            }
            // line 20
            echo "
\t\t";
            // line 21
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getSubmitButtonHtmlCode", [0 => []], "method", false, false, false, 21);
            echo "

\t";
            // line 23
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

\t";
            // line 25
            if (call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_scripts_allow"])) {
                // line 26
                echo "\t\t<script src='https://www.google.com/recaptcha/api.js";
                (((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_locale_allow"]) && ($context["currentLocale"] ?? null))) ? (print (twig_escape_filter($this->env, ("?hl=" . ($context["currentLocale"] ?? null)), "html", null, true))) : (print ("")));
                echo "'></script>
\t";
            }
            // line 28
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  102 => 26,  100 => 25,  95 => 23,  90 => 21,  87 => 20,  81 => 17,  76 => 16,  74 => 15,  69 => 13,  64 => 11,  61 => 10,  52 => 7,  49 => 6,  45 => 5,  40 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if flashError or (flashSuccess == false) or (flashSuccess!=__SELF__) or (flashSuccess==__SELF__ and settingsGet('form_hide_after_success', 0) == 0) %}

\t{{ form_open(__SELF__.getFormAttributes) }}

\t\t{% for field in __SELF__.fields %}

\t\t\t{{ __SELF__.getFieldHtmlCode(field)|raw }}

\t\t{% endfor %}

\t\t{{ __SELF__.getAntispamFieldHtmlCode({})|raw }}

\t\t{{ __SELF__.getDescriptionFieldHtmlCode({})|raw }}

\t\t{% if settingsGet('add_google_recaptcha') and settingsGet('google_recaptcha_site_key') %}
\t\t\t<div class=\"{{__SELF__.getReCaptchaWrapperClass()}}\">
\t            <div class=\"g-recaptcha\" data-sitekey=\"{{ settingsGet('google_recaptcha_site_key') }}\"></div>
\t        </div>
\t\t{% endif %}

\t\t{{ __SELF__.getSubmitButtonHtmlCode({})|raw }}

\t{{ form_close() }}

\t{% if settingsGet('google_recaptcha_scripts_allow') %}
\t\t<script src='https://www.google.com/recaptcha/api.js{{ settingsGet(\"google_recaptcha_locale_allow\") and currentLocale ? (\"?hl=\"~currentLocale) }}'></script>
\t{% endif %}

{% endif %}
", "/Users/andrew/Sites/turnkey-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm", "");
    }
}
