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

/* /Users/andrew/Sites/turnkey-site/themes/turnkey/pages/contact-us.htm */
class __TwigTemplate_fa1011734510b42ed95d1783fb77d23adfa4521bc231327b7eb5d39fb3d63950 extends \Twig\Template
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
      <!-- Body Content -->
\t<main role=\"main\"> <!-- Header -->
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 hideOver box1 formHeader tinted contactBannerNew formBox white\">
\t\t\t    <h1>Get in Touch With Us</h1>
\t\t\t    <p class=\"white\">Phone: <a class=\"white\" href=\"8005610580\">(800) 561-0580</a><br/>
\t\t\t    Email: <a href=\"mailto:support@turnkeyofficesolutions.com\" class=\"white\">support@turnkeyofficesolutions.com</a> </p>
\t\t\t    <p></p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 hideOver formBox2 blueBoxContent formBox\">
\t\t\t\t<h3>Contact Turnkey Office Solutions</h3>
\t\t\t\t
\t\t\t\t<form data-request=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 17
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>

    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
    </div>
<input type=\"hidden\" name=\"campaign\" value=\"contact-us\" />
    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <textarea id=\"comments\" name=\"comments\" rows=\"8\" cols=\"80\" class=\"form-control\"></textarea>
    </div>

    

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>

</form>
                
                </div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /Header -->
      <!-- Main Content -->
\t\t<div class=\"container-fluid contentSections mt-5\">
\t\t\t\t\t\t\t
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/themes/turnkey/pages/contact-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  56 => 17,  51 => 15,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Body Content -->
      <!-- Body Content -->
\t<main role=\"main\"> <!-- Header -->
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 hideOver box1 formHeader tinted contactBannerNew formBox white\">
\t\t\t    <h1>Get in Touch With Us</h1>
\t\t\t    <p class=\"white\">Phone: <a class=\"white\" href=\"8005610580\">(800) 561-0580</a><br/>
\t\t\t    Email: <a href=\"mailto:support@turnkeyofficesolutions.com\" class=\"white\">support@turnkeyofficesolutions.com</a> </p>
\t\t\t    <p></p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 hideOver formBox2 blueBoxContent formBox\">
\t\t\t\t<h3>Contact Turnkey Office Solutions</h3>
\t\t\t\t
\t\t\t\t<form data-request=\"{{ genericForm }}::onFormSubmit\">

    {{ form_token() }}

    <div id=\"{{ genericForm }}_forms_flash\"></div>

    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
    </div>
<input type=\"hidden\" name=\"campaign\" value=\"contact-us\" />
    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <textarea id=\"comments\" name=\"comments\" rows=\"8\" cols=\"80\" class=\"form-control\"></textarea>
    </div>

    

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>

</form>
                
                </div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /Header -->
      <!-- Main Content -->
\t\t<div class=\"container-fluid contentSections mt-5\">
\t\t\t\t\t\t\t
\t\t</div>", "/Users/andrew/Sites/turnkey-site/themes/turnkey/pages/contact-us.htm", "");
    }
}
