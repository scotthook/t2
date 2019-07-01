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

/* /Users/andrew/Sites/turnkey-site/themes/turnkey/pages/404.htm */
class __TwigTemplate_46bd9c4d3b404c1eda2253831061a26b42e4509c0b6800ecc4c366af78328ca4 extends \Twig\Template
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

\t  <!-- Header Images -->
      <div class=\"container-fluid\">
        <div class=\"row page-not-found-bg\">
          \t<div class=\"col-md-12 text-center align-self-center\">
          \t\t<h1>Whoops! Looks like something went wrong?</h1>
          \t\t<a class=\"btn btn-primary btn-lg blueBtn\" href=\"/contact-us\">Contact Us</a>
          \t</div>
          \t
        </div>
      </div>
    </main>";
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/themes/turnkey/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Body Content -->
    <main role=\"main\">

\t  <!-- Header Images -->
      <div class=\"container-fluid\">
        <div class=\"row page-not-found-bg\">
          \t<div class=\"col-md-12 text-center align-self-center\">
          \t\t<h1>Whoops! Looks like something went wrong?</h1>
          \t\t<a class=\"btn btn-primary btn-lg blueBtn\" href=\"/contact-us\">Contact Us</a>
          \t</div>
          \t
        </div>
      </div>
    </main>", "/Users/andrew/Sites/turnkey-site/themes/turnkey/pages/404.htm", "");
    }
}
