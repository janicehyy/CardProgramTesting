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

/* default/template/play/game.twig */
class __TwigTemplate_1efa98c56590ac1035744756ba9295a8b2cc9d95e4ef2de7d6187fbb64f9107d extends \Twig\Template
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

<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('image/bg_2.jpg');min-height:800px\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
      <div class=\"col-md-7 ftco-animate\">
        <span class=\"subheading\">Bursa Sharks Premium Group</span>
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

<section class=\"ftco-section ftco-no-pb ftco-no-pt\" style=\"background-color:#e1e3e3\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-md-6\"></div>
         <div class=\"col-md-6 order-md-last\">
          <div class=\"login-wrap p-5 p-md-6\" style=\"margin-top:-665px\">
              <h3 class=\"mb-5\">";
        // line 23
        echo ($context["text_register"] ?? null);
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
              
\t\t\t  <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t
\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<label class=\"label\" for=\"input-fullname\">";
        // line 36
        echo ($context["entry_fullname"] ?? null);
        echo "</label>
\t\t\t\t\t  <input type=\"text\" name=\"fullname\" value=\"";
        // line 37
        echo ($context["fullname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fullname"] ?? null);
        echo "\" id=\"input-fullname\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 38
        if (($context["error_fullname"] ?? null)) {
            // line 39
            echo "\t\t\t\t\t  <div class=\"text-danger text-center\">";
            echo ($context["error_fullname"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 40
        echo " 
\t\t\t\t  </div>
\t\t\t\t
\t\t\t\t
\t\t\t 
";
        // line 45
        echo ($context["captcha"] ?? null);
        echo "
        ";
        // line 46
        if (($context["text_agree"] ?? null)) {
            // line 47
            echo "        <div class=\"form-group d-flex justify-content-end mt-4 pull-left\">
            ";
            // line 48
            if (($context["agree"] ?? null)) {
                // line 49
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 51
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 53
            echo "            &nbsp;";
            echo ($context["text_agree"] ?? null);
            echo " &nbsp;

        </div>
       
        ";
        }
        // line 58
        echo "\t\t<div class=\"form-group d-flex justify-content-end mt-4 col-md-12\">

            <input type=\"submit\" value=\"";
        // line 60
        echo ($context["button_register"] ?? null);
        echo "\" class=\"btn btn-primary\" style=\"width:100%\" />

        </div>

         </form>
         <p class=\"text-center\"><a href=\"";
        // line 65
        echo ($context["login"] ?? null);
        echo "\" class=\"btn-dark\" style=\"padding:2px 5px\">";
        echo ($context["text_login2"] ?? null);
        echo "</a></p>
        
     </div>
 </div>
</div>
</div>
</section>

<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 128
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 133
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 138
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
";
        // line 143
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/play/game.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 143,  254 => 138,  246 => 133,  238 => 128,  170 => 65,  162 => 60,  158 => 58,  149 => 53,  145 => 51,  141 => 49,  139 => 48,  136 => 47,  134 => 46,  130 => 45,  123 => 40,  117 => 39,  115 => 38,  109 => 37,  105 => 36,  99 => 33,  95 => 31,  89 => 29,  86 => 28,  80 => 26,  78 => 25,  73 => 23,  56 => 11,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/play/game.twig", "");
    }
}
