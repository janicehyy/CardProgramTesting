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

/* default/template/extension/captcha/google.twig */
class __TwigTemplate_bfc6488826804420a3822b7372d6334d24da9d26d6b7418edba94c577da20125 extends \Twig\Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        echo "<script src=\"//www.google.com/recaptcha/api.js\" type=\"text/javascript\"></script>
<fieldset>
  <legend>";
        // line 3
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
  <div class=\"form-group required\">";
        // line 4
        if ((twig_slice($this->env, ($context["route"] ?? null), 0, 9) == "checkout/")) {
            // line 5
            echo "    <label class=\"control-label\" for=\"input-payment-captcha\">";
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
    <div id=\"input-payment-captcha\" class=\"g-recaptcha\" data-sitekey=\"";
            // line 6
            echo ($context["site_key"] ?? null);
            echo "\"></div>
    ";
            // line 7
            if (($context["error_captcha"] ?? null)) {
                // line 8
                echo "    <div class=\"text-danger\">";
                echo ($context["error_captcha"] ?? null);
                echo "</div>
    ";
            }
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "    <label class=\"control-label\">";
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
      <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 12
            echo ($context["site_key"] ?? null);
            echo "\"></div>
      ";
            // line 13
            if (($context["error_captcha"] ?? null)) {
                // line 14
                echo "      <div class=\"text-danger\">";
                echo ($context["error_captcha"] ?? null);
                echo "</div>
      ";
            }
            // line 16
            echo "    ";
        }
        echo "</div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/captcha/google.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  78 => 14,  76 => 13,  72 => 12,  67 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/captcha/google.twig", "");
    }
}
