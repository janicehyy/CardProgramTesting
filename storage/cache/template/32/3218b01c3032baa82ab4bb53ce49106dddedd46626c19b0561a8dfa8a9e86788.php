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
class __TwigTemplate_c3c5ceb82a24bf49e553014f1baf61a3a2a18d1765b30971683bee3203d1b587 extends \Twig\Template
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

";
        // line 3
        if (($context["final"] ?? null)) {
            // line 4
            echo "
<section class=\"ftco-section ftco-no-pb ftco-no-pt\" style=\"margin-top:100px\">
   <div class=\"container\">

   <div class=\"col-md-12 text-center\">
   ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["final"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["display"]) {
                // line 10
                echo "   
   <div class=\"row\">
\t<div class=\"col-md-12\" style=\"margin-bottom:30px\">

\t\t";
                // line 14
                $context["newArr"] = twig_split_filter($this->env, $context["display"], ",");
                // line 15
                echo "\t\t
\t\t";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["newArr"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 17
                    echo "\t\t\t<font size=\"5\" style=\"border:1px solid #ccc; margin:5px;padding:3px 12px;\">
\t\t\t\t";
                    // line 18
                    if ((twig_first($this->env, $context["card"]) == "H")) {
                        // line 19
                        echo "\t\t\t\t\t<span style=\"color:red\">&#9829; 
\t\t\t\t";
                    } elseif ((twig_first($this->env,                     // line 20
$context["card"]) == "D")) {
                        // line 21
                        echo "\t\t\t\t\t<span style=\"color:red\">&#9830; 
\t\t\t\t";
                    } elseif ((twig_first($this->env,                     // line 22
$context["card"]) == "S")) {
                        // line 23
                        echo "\t\t\t\t\t<span style=\"color:black\">&#9824;  
\t\t\t\t";
                    } else {
                        // line 25
                        echo "\t\t\t\t\t<span style=\"color:black\">&#9827; 
\t\t\t\t";
                    }
                    // line 27
                    echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
                    // line 29
                    if ((twig_last($this->env, $context["card"]) == "X")) {
                        // line 30
                        echo "\t\t\t\t\t10
\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t";
                        echo twig_last($this->env, $context["card"]);
                        echo "
\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t
\t\t\t\t</span>

\t\t</font>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
   </div>
   </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['display'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "</div>
</div>
</section>
";
        } else {
            // line 47
            echo "
<div class=\"hero-wrap js-fullheight\">
  <div class=\"overlay\"></div>
</div>

<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-md-3\"></div>
         <div class=\"col-md-6\">
          <div class=\"login-wrap p-5 p-md-6\">
              <h3 class=\"mb-5\">";
            // line 58
            echo ($context["text_title"] ?? null);
            echo "</h3>
\t\t\t  
\t\t\t  ";
            // line 60
            if (($context["success"] ?? null)) {
                // line 61
                echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
                echo ($context["success"] ?? null);
                echo "</div>
  ";
            }
            // line 63
            echo "  ";
            if (($context["error_warning"] ?? null)) {
                // line 64
                echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo ($context["error_warning"] ?? null);
                echo "</div>
  ";
            }
            // line 66
            echo "
\t\t\t  <form action=\"";
            // line 67
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t
\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<label class=\"label\" for=\"input-people\">";
            // line 70
            echo ($context["entry_people"] ?? null);
            echo "</label>
\t\t\t\t\t  <input type=\"number\" name=\"people\" value=\"";
            // line 71
            echo ($context["people"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_people"] ?? null);
            echo "\" id=\"input-people\" class=\"form-control\" />

\t\t\t\t  </div>

\t\t<div class=\"form-group d-flex justify-content-end mt-4 col-md-12\">

            <input type=\"submit\" value=\"";
            // line 77
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\" style=\"width:100%\" />

        </div>

         </form>
         
        
     </div>
 </div>
 <div class=\"col-md-3\"></div>
</div>
</div>
</section>

";
        }
        // line 92
        echo "
";
        // line 93
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
        return array (  214 => 93,  211 => 92,  193 => 77,  182 => 71,  178 => 70,  172 => 67,  169 => 66,  163 => 64,  160 => 63,  154 => 61,  152 => 60,  147 => 58,  134 => 47,  128 => 43,  119 => 39,  109 => 34,  103 => 32,  99 => 30,  97 => 29,  93 => 27,  89 => 25,  85 => 23,  83 => 22,  80 => 21,  78 => 20,  75 => 19,  73 => 18,  70 => 17,  66 => 16,  63 => 15,  61 => 14,  55 => 10,  51 => 9,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/play/game.twig", "");
    }
}
