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

/* /Users/andrew/Sites/turnkey-site/themes/turnkey/partials/scripts.htm */
class __TwigTemplate_0a75d411e2e7cd9d4bd85564c22439459927fc278b2c5a64377e1b8e952f69b5 extends \Twig\Template
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
        echo "<!-- Google Tag Manager (noscript) -->

<!-- Fancy Animations -->
<script src=\"//unpkg.com/aos@next/dist/aos.js\"></script>

<script src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>

";
        // line 8
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 10
        echo "
<script src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/js/bootstrap.js");
        echo "\"></script>
<script src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/js/popper.js");
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/themes/turnkey/partials/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  68 => 11,  65 => 10,  62 => 9,  47 => 8,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Google Tag Manager (noscript) -->

<!-- Fancy Animations -->
<script src=\"//unpkg.com/aos@next/dist/aos.js\"></script>

<script src=\"{{ 'assets/js/app.js' | theme }}\"></script>

{% framework extras %}
{% scripts %}

<script src=\"{{ '/assets/js/bootstrap.js' | theme }}\"></script>
<script src=\"{{ '/assets/js/popper.js' | theme }}\"></script>", "/Users/andrew/Sites/turnkey-site/themes/turnkey/partials/scripts.htm", "");
    }
}
