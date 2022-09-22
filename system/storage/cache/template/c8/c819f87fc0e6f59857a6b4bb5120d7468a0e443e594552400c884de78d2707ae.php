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

/* default/template/information/contact.twig */
class __TwigTemplate_82daece83308f93c7b7c738508fdebe27d27e01a7eff4dc606029f77c4fb19ea extends \Twig\Template
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

<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('image/bg_1.jpg');\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text align-items-end justify-content-center\">
\t\t\t<h1 class=\"mb-0 bread\">Contact us</h1>
\t\t\t\t<div class=\"col-md-9 ftco-animate pb-5 text-center\">
\t\t\t\t\t<p class=\"breadcrumbs\">
\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

<section class=\"ftco-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-7 order-md-last d-flex align-items-stretch\">
\t\t\t\t\t\t\t\t<div class=\"contact-wrap w-100 p-md-5 p-4\">
\t\t\t\t\t\t\t\t\t<h3 class=\"mb-4\">Get in touch</h3>
\t\t\t\t\t\t\t\t\t <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"contactForm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t  ";
        }
        // line 35
        echo "
\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\"> 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label\" for=\"input-email\">";
        // line 42
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 43
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t  ";
        // line 44
        if (($context["error_email"] ?? null)) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t  ";
        }
        // line 47
        echo "\t\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"label\" for=\"input-enquiry\">";
        // line 55
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"enquiry\" cols=\"30\" rows=\"5\" id=\"input-enquiry\" class=\"form-control\">";
        // line 56
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t  ";
        // line 57
        if (($context["error_enquiry"] ?? null)) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t  ";
        }
        // line 60
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"submitting\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-5 d-flex align-items-stretch\">
\t\t\t\t\t\t\t\t<div class=\"info-wrap bg-primary w-100 p-md-5 p-4\">
\t\t\t\t\t\t\t\t\t<h3>Let's get in touch</h3>
\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">We're open for any suggestion or just to have a chat</p>

\t\t\t\t\t\t\t\t\t<div class=\"dbox w-100 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-whatsapp\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text pl-3\">
\t\t\t\t\t\t\t\t\t\t\t<p><span>Whatsapp:</span> <a href=\"https://wa.me/+60173292048\">Bursasharks</a></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"dbox w-100 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-telegram\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text pl-3\">
\t\t\t\t\t\t\t\t\t\t\t<p><span>Telegram:</span> <a href=\"https://t.me/Bursasharks\">Bursasharks</a></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"dbox w-100 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-paper-plane\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text pl-3\">
\t\t\t\t\t\t\t\t\t\t\t<p><span>Email:</span> <a href=\"mailto:askme@bursasharks.com\">askme@bursasharks.com</a></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</section>

";
        // line 119
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 119,  147 => 66,  139 => 60,  133 => 58,  131 => 57,  127 => 56,  123 => 55,  113 => 47,  107 => 45,  105 => 44,  101 => 43,  97 => 42,  88 => 35,  82 => 33,  80 => 32,  76 => 31,  72 => 30,  65 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
