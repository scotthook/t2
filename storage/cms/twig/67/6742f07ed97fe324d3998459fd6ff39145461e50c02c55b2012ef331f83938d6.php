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

/* /Users/andrew/Sites/turnkey-site/themes/turnkey/partials/footer.htm */
class __TwigTemplate_d9d142a5b294cbb56d171a4f8fe1256f6a774075385188c60ae580c4df7d863c extends \Twig\Template
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
        echo "<!-- Footer -->
    <footer class=\"container-fluid padMe50\">
\t<div class=\"container\">
\t    <div class=\"row\">
\t    \t<div class=\"col-lg-4 col-md-3\">
\t    \t\t<a class=\"footer-brand\" href=\"/\">
\t\t      \t\t<img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/turnkey-logo.png");
        echo "\" />
\t\t      \t</a>
\t    \t</div>
\t    \t<div class=\"col-md-2\">
\t    \t\t<a  class=\"footerLinkHeader\" href=\"#\">Categories</a>
\t\t    \t <a href=\"/business-phone-systems\">Business Phone Systems</a>
\t             <a href=\"/computer-equipment\">Computer Equipment</a>
\t             <a href=\"/insurance\">Insurance</a>
\t             <a href=\"/internet\">Internet</a>
\t             <a href=\"/security\">Security</a>
\t             <a href=\"/finance\">Finance</a>
\t             <a href=\"/marketing\">Marketing</a>
\t             <a href=\"/telecom-equipment\">Telecom Equipment</a>
\t             <a href=\"/office-equipment\">Office Equipment</a>
\t             <a href=\"/healthcare\">Healthcare</a>
\t             <a href=\"/professional-services\">Professional Services</a>
\t             <a href=\"/hr-personnel\">HR & Personnel</a></li>
\t             <a href=\"/payroll-services\">Payroll Services</a>
\t    \t</div>
\t    \t
\t    \t<div class=\"col-md-2\">
\t    \t\t<a  class=\"footerLinkHeader\" href=\"#\">Partners</a>
\t\t\t\t<a href=\"http://www.dialinginnovations.com\" target=\"_blank\">Dialing Innovations</a>
\t    \t</div>
\t    \t
\t    \t<div class=\"col-md-3\">
\t    \t\t<a  class=\"footerLinkHeader\" href=\"/about\">About Turnkey Office Solutions</a>
\t    \t\t<br/>
\t\t\t\t<a  class=\"footerLinkHeader\" href=\"/contact-us\">Contact Us Today</a>
\t\t\t\t<a href=\"8005610580\">(800) 561-0580</a>
\t\t\t\t<a href=\"mailto:support@turnkeyofficesolutions.com\">support@turnkeyofficesolutions.com</a>
\t    \t\t
\t    \t</div>
\t    </div>
    \t<div class=\"row padMe50\">
    \t\t<!-- Social Links -->
\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- /Social Links -->
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<p class=\"text-center\">&copy; Turnkey Office Solutions. All Rights Reserved. Turnkey Office Solutions and its logos are trademarks or registered trademarks of Turnkey Office Solutions. All other company and product names referenced herein are the property of their respective owners.</p>
    \t</div>
    </div>  
    </footer>
    <!-- /Footer -->";
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/themes/turnkey/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
    <footer class=\"container-fluid padMe50\">
\t<div class=\"container\">
\t    <div class=\"row\">
\t    \t<div class=\"col-lg-4 col-md-3\">
\t    \t\t<a class=\"footer-brand\" href=\"/\">
\t\t      \t\t<img src=\"{{ 'assets/images/turnkey-logo.png' | theme }}\" />
\t\t      \t</a>
\t    \t</div>
\t    \t<div class=\"col-md-2\">
\t    \t\t<a  class=\"footerLinkHeader\" href=\"#\">Categories</a>
\t\t    \t <a href=\"/business-phone-systems\">Business Phone Systems</a>
\t             <a href=\"/computer-equipment\">Computer Equipment</a>
\t             <a href=\"/insurance\">Insurance</a>
\t             <a href=\"/internet\">Internet</a>
\t             <a href=\"/security\">Security</a>
\t             <a href=\"/finance\">Finance</a>
\t             <a href=\"/marketing\">Marketing</a>
\t             <a href=\"/telecom-equipment\">Telecom Equipment</a>
\t             <a href=\"/office-equipment\">Office Equipment</a>
\t             <a href=\"/healthcare\">Healthcare</a>
\t             <a href=\"/professional-services\">Professional Services</a>
\t             <a href=\"/hr-personnel\">HR & Personnel</a></li>
\t             <a href=\"/payroll-services\">Payroll Services</a>
\t    \t</div>
\t    \t
\t    \t<div class=\"col-md-2\">
\t    \t\t<a  class=\"footerLinkHeader\" href=\"#\">Partners</a>
\t\t\t\t<a href=\"http://www.dialinginnovations.com\" target=\"_blank\">Dialing Innovations</a>
\t    \t</div>
\t    \t
\t    \t<div class=\"col-md-3\">
\t    \t\t<a  class=\"footerLinkHeader\" href=\"/about\">About Turnkey Office Solutions</a>
\t    \t\t<br/>
\t\t\t\t<a  class=\"footerLinkHeader\" href=\"/contact-us\">Contact Us Today</a>
\t\t\t\t<a href=\"8005610580\">(800) 561-0580</a>
\t\t\t\t<a href=\"mailto:support@turnkeyofficesolutions.com\">support@turnkeyofficesolutions.com</a>
\t    \t\t
\t    \t</div>
\t    </div>
    \t<div class=\"row padMe50\">
    \t\t<!-- Social Links -->
\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- /Social Links -->
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<p class=\"text-center\">&copy; Turnkey Office Solutions. All Rights Reserved. Turnkey Office Solutions and its logos are trademarks or registered trademarks of Turnkey Office Solutions. All other company and product names referenced herein are the property of their respective owners.</p>
    \t</div>
    </div>  
    </footer>
    <!-- /Footer -->", "/Users/andrew/Sites/turnkey-site/themes/turnkey/partials/footer.htm", "");
    }
}
