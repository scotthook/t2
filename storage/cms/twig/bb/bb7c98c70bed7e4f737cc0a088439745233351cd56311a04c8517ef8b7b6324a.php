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

/* /Users/andrew/Sites/turnkey-site/themes/turnkey/partials/head-forms.htm */
class __TwigTemplate_4728bfa0f953ad12a4b7ed2c8679bba6d937858c98a0a6bd12b6ce03bbd08524 extends \Twig\Template
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
        echo "<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 3), "meta_title", [], "any", false, false, false, 3)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 3), "meta_title", [], "any", false, false, false, 3), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "config", [], "any", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        }
        echo "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "meta_description", [], "any", false, false, false, 5)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "meta_description", [], "any", false, false, false, 5), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "config", [], "any", false, false, false, 5), "description", [], "any", false, false, false, 5), "html", null, true);
        }
        echo "\">
  <meta name=\"keywords\" content=\"";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "keywords", [], "any", false, false, false, 6)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "keywords", [], "any", false, false, false, 6), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "meta_keywords", [], "any", false, false, false, 6), "html", null, true);
        }
        echo "\">
  <meta name=\"title\" content=\"";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "config", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        }
        echo "\">

  <!-- structured data -->

  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->
  
  <!-- Bootstrap core CSS -->
  <link rel=\"stylesheet\" href=\"//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

  <!-- Fonts -->
  <link href=\"//fonts.googleapis.com/css?family=Raleway:400,700\" rel=\"stylesheet\">

  <!-- Fancy Animations -->
  <link rel=\"stylesheet\" href=\"//unpkg.com/aos@next/dist/aos.css\" />
  
  <meta property=\"og:url\" content=\"http://turnkeyofficesolutions.com\" />
  <meta property=\"og:title\" content=\"Office and Call Center Solutions | Turnkey Office Solutions\" />
  <meta property=\"og:description\" content=\"Specializing in office equipments, business processes, VOIP telecommunications\" />
  
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicons/favicon.ico");
        echo "\">
  <!-- styles -->
  
  <link href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "/assets/sass/app.scss"]);
        echo "\" rel=\"stylesheet\">
  
<script src=\"//cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js\"></script>  
  ";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 34
        echo "</head>";
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/themes/turnkey/partials/head-forms.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  103 => 33,  97 => 30,  91 => 27,  64 => 7,  56 => 6,  48 => 5,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
  <meta charset=\"utf-8\">
  <title>{% if this.page.meta_title %}{{ this.page.meta_title }}{% else %}{{ this.theme.config.title }}{% endif %}</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"{% if this.page.meta_description %}{{ this.page.meta_description }}{% else %}{{ this.theme.config.description }}{% endif %}\">
  <meta name=\"keywords\" content=\"{% if this.page.keywords %}{{ this.page.keywords }}{% else %}{{ this.theme.meta_keywords }}{% endif %}\">
  <meta name=\"title\" content=\"{% if this.page.meta_title %}{{ this.page.meta_title }}{% else %}{{ this.theme.config.title }}{% endif %}\">

  <!-- structured data -->

  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->
  
  <!-- Bootstrap core CSS -->
  <link rel=\"stylesheet\" href=\"//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

  <!-- Fonts -->
  <link href=\"//fonts.googleapis.com/css?family=Raleway:400,700\" rel=\"stylesheet\">

  <!-- Fancy Animations -->
  <link rel=\"stylesheet\" href=\"//unpkg.com/aos@next/dist/aos.css\" />
  
  <meta property=\"og:url\" content=\"http://turnkeyofficesolutions.com\" />
  <meta property=\"og:title\" content=\"Office and Call Center Solutions | Turnkey Office Solutions\" />
  <meta property=\"og:description\" content=\"Specializing in office equipments, business processes, VOIP telecommunications\" />
  
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ 'assets/images/favicons/favicon.ico' | theme }}\">
  <!-- styles -->
  
  <link href=\"{{ ['/assets/sass/app.scss'] | theme }}\" rel=\"stylesheet\">
  
<script src=\"//cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js\"></script>  
  {% styles %}
</head>", "/Users/andrew/Sites/turnkey-site/themes/turnkey/partials/head-forms.htm", "");
    }
}
