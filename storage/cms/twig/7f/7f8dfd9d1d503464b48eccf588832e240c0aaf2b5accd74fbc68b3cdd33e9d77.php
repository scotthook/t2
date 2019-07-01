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

/* /Users/andrew/Sites/turnkey-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm */
class __TwigTemplate_d45200fa94d5ecc80c09e01570c31fdd2a2c05be4aee04f7ffb960f1f0a0ccf8 extends \Twig\Template
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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 1
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 2
                echo "
  ";
                // line 3
                if ((($context["flashSuccess"] ?? null) == ($context["__SELF__"] ?? null))) {
                    // line 4
                    echo "  \t<div class=\"alert alert-";
                    (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                    echo "\">
  \t\t";
                    // line 5
                    echo nl2br(call_user_func_array($this->env->getFunction('html_entity_decode')->getCallable(), [($context["message"] ?? null)]));
                    echo "
  \t</div>
  ";
                }
                // line 8
                echo "
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  48 => 5,  43 => 4,  41 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% flash%}

  {% if flashSuccess==__SELF__ %}
  \t<div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
  \t\t{{ html_entity_decode(message)|nl2br }}
  \t</div>
  {% endif %}

{% endflash %}
", "/Users/andrew/Sites/turnkey-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm", "");
    }
}
