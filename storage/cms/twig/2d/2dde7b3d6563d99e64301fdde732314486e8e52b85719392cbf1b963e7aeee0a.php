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

/* /Users/andrew/Sites/turnkey-site/themes/turnkey/partials/contact-header.htm */
class __TwigTemplate_0bca7d9f1fb9df5d4565a41b599e0381a507fd024298e57e0de5859f9d048367 extends \Twig\Template
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
\t<main role=\"main\"> <!-- Header -->
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 hideOver box1 formHeader contactBannerNew\"></div>
\t\t\t<div class=\"col-lg-6 hideOver formBox2 blueBoxContent formBox\">
\t\t\t\t<h1>Contact Turnkey Office Solutions</h1>
\t\t\t\t
\t\t\t\t<div class=\"contactForm\">
                    <form data-request=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 12
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
    <input type=\"hidden\" name=\"campaign\" value=\"contact-us\" />
    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"subject\">Subject:</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"comments\">Comments:</label><br/>
        <textarea id=\"comments\" name=\"comments\" rows=\"8\" cols=\"80\"></textarea>
    </div>
     <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>

</form>
                
                </div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /Header -->";
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/themes/turnkey/partials/contact-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  51 => 12,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Body Content -->
\t<main role=\"main\"> <!-- Header -->
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 hideOver box1 formHeader contactBannerNew\"></div>
\t\t\t<div class=\"col-lg-6 hideOver formBox2 blueBoxContent formBox\">
\t\t\t\t<h1>Contact Turnkey Office Solutions</h1>
\t\t\t\t
\t\t\t\t<div class=\"contactForm\">
                    <form data-request=\"{{ genericForm }}::onFormSubmit\">

    {{ form_token() }}

    <div id=\"{{ genericForm }}_forms_flash\"></div>
    <input type=\"hidden\" name=\"campaign\" value=\"contact-us\" />
    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"subject\">Subject:</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"comments\">Comments:</label><br/>
        <textarea id=\"comments\" name=\"comments\" rows=\"8\" cols=\"80\"></textarea>
    </div>
     <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>

</form>
                
                </div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /Header -->", "/Users/andrew/Sites/turnkey-site/themes/turnkey/partials/contact-header.htm", "");
    }
}
