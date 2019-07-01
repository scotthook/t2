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

/* /Users/andrew/Sites/turnkey-site/themes/turnkey/partials/header.htm */
class __TwigTemplate_bb101973dc68b47b800f6c6ec52ea09772685bcff1dbe57e3c07466063acf560 extends \Twig\Template
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
        echo "<!-- Navigation -->
\t
    <nav class=\"navbar navbar-expand-xl fixed-top navbar-light\">
    <div class=\"container-fluid contentSections\">
\t      <a class=\"navbar-brand\" href=\"/\">
\t      \t<img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/turnkey-logo.png");
        echo "\" />
\t      </a>
\t      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"navbar-toggler-icon\"></span>
\t      </button>
\t      
\t      <div class=\"collapse navbar-collapse nav justify-content-end\" id=\"navbarsExampleDefault\">
\t        <ul class=\"navbar-nav\">
\t          <li class=\"nav-item dropdown\">
\t            <a class=\"nav-link dropdown-toggle\" href=\"/categories\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">CATEGORIES</a>
\t            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
\t              ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category-menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "\t            </ul>
\t          </li>
\t          
\t          <li class=\"nav-item dropdown\">
\t            <a class=\"nav-link dropdown-toggle\" href=\"/partners\" id=\"dropdown02\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">PARTNERS</a>
\t            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
                    <li><a class=\"dropdown-item\" href=\"http://www.dialinginnovations.com\" target=\"_blank\">Dialing Innovations</a></li>
\t            </ul>
\t          </li>  
    \t      <li class=\"nav-item dropdown hamburgerMenu\">
\t            <a class=\"nav-link dropdown-toggle hamburgerIcon\" href=\"/loan-marketing-products\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"https://mdbootstrap.com/img/svg/hamburger4.svg?color=666\" /></a>
\t            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t                <li><a class=\"dropdown-item\" href=\"/about\">About Us</a></li>
\t                <li><a class=\"dropdown-item\" href=\"/contact-us\">Contact Us</a></li>
\t            </ul>
\t          </li>  
\t          
\t          <span class=\"navbar-text navPhone\">
                <a href=\"8005610580\">(800) 561-0580</a>
              </span>
\t        </ul>

\t      </div>
      </div>
    </nav>
    <!-- /Navigation -->";
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/themes/turnkey/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  56 => 17,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navigation -->
\t
    <nav class=\"navbar navbar-expand-xl fixed-top navbar-light\">
    <div class=\"container-fluid contentSections\">
\t      <a class=\"navbar-brand\" href=\"/\">
\t      \t<img src=\"{{ 'assets/images/turnkey-logo.png' | theme }}\" />
\t      </a>
\t      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"navbar-toggler-icon\"></span>
\t      </button>
\t      
\t      <div class=\"collapse navbar-collapse nav justify-content-end\" id=\"navbarsExampleDefault\">
\t        <ul class=\"navbar-nav\">
\t          <li class=\"nav-item dropdown\">
\t            <a class=\"nav-link dropdown-toggle\" href=\"/categories\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">CATEGORIES</a>
\t            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
\t              {% partial 'category-menu' %}
\t            </ul>
\t          </li>
\t          
\t          <li class=\"nav-item dropdown\">
\t            <a class=\"nav-link dropdown-toggle\" href=\"/partners\" id=\"dropdown02\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">PARTNERS</a>
\t            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
                    <li><a class=\"dropdown-item\" href=\"http://www.dialinginnovations.com\" target=\"_blank\">Dialing Innovations</a></li>
\t            </ul>
\t          </li>  
    \t      <li class=\"nav-item dropdown hamburgerMenu\">
\t            <a class=\"nav-link dropdown-toggle hamburgerIcon\" href=\"/loan-marketing-products\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"https://mdbootstrap.com/img/svg/hamburger4.svg?color=666\" /></a>
\t            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t                <li><a class=\"dropdown-item\" href=\"/about\">About Us</a></li>
\t                <li><a class=\"dropdown-item\" href=\"/contact-us\">Contact Us</a></li>
\t            </ul>
\t          </li>  
\t          
\t          <span class=\"navbar-text navPhone\">
                <a href=\"8005610580\">(800) 561-0580</a>
              </span>
\t        </ul>

\t      </div>
      </div>
    </nav>
    <!-- /Navigation -->", "/Users/andrew/Sites/turnkey-site/themes/turnkey/partials/header.htm", "");
    }
}
