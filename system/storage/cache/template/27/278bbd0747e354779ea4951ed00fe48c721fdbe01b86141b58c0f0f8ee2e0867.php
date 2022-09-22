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

/* default/template/account/login.twig */
class __TwigTemplate_855b47a35d1f1eded127a4ac6012506f639caf5988e768a0769c1d5d954d9b03 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('image/bg_1.jpg');min-height:600px\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
      <div class=\"col-md-7 ftco-animate\">
        <span class=\"subheading\">Welcome to Bursa Sharks</span>
        <h1 class=\"mb-4\">";
        // line 9
        echo ($context["text_slogan"] ?? null);
        echo "</h1>
        <p class=\"caps\">";
        // line 10
        echo ($context["text_explanation"] ?? null);
        echo "</p>
        <p class=\"mb-0\"><a href=\"";
        // line 11
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["text_register"] ?? null);
        echo "</a></p>
    </div>
</div>
</div>
</div>

<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-md-7\"></div>
         <div class=\"col-md-5 order-md-last\">
          <div class=\"login-wrap p-4 p-md-5\">
              <h3 class=\"mb-4\">";
        // line 23
        echo ($context["text_login"] ?? null);
        echo "</h3>
\t\t\t  
\t\t\t  ";
        // line 25
        if (($context["success"] ?? null)) {
            // line 26
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 28
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 29
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 31
        echo "\t\t\t  
              <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                <label class=\"label\" for=\"input-email\">";
        // line 35
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 36
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
\t\t\t 
\t\t\t <div class=\"form-group\">
                <label class=\"label\" for=\"input-password\">";
        // line 40
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 41
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                </div>

             <div class=\"form-group d-flex justify-content-end mt-4\">
                 
\t\t\t\t <input type=\"submit\" value=\"";
        // line 46
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" style=\"width:100%\" />
             </div>
         </form>
         <p class=\"text-center\"><a href=\"";
        // line 49
        echo ($context["register"] ?? null);
        echo "\" class=\"btn-dark\" style=\"padding:2px 5px\">";
        echo ($context["text_register"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["forgotten"] ?? null);
        echo "\" class=\"btn-dark\" style=\"padding:2px 5px\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></p>
        
     </div>
 </div>
</div>
</div>
</section>


";
        // line 58
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 58,  137 => 49,  131 => 46,  121 => 41,  117 => 40,  108 => 36,  104 => 35,  98 => 32,  95 => 31,  89 => 29,  86 => 28,  80 => 26,  78 => 25,  73 => 23,  56 => 11,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/login.twig", "");
    }
}
