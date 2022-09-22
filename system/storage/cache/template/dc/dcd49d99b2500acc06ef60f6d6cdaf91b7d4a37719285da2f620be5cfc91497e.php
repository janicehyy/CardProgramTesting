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

/* default/template/common/footer.twig */
class __TwigTemplate_7aa3b54643465374a434b856416b56616de51ac2916c565e04d751b2f4444bc0 extends \Twig\Template
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
        echo "<footer class=\"ftco-footer ftco-no-pt\">
  <div class=\"container\">
    
<div class=\"row\">
  <div class=\"col-md-12 text-center\">

    <p>";
        // line 7
        echo ($context["powered"] ?? null);
        echo "</p>

  </div>
</div>
</div>
</footer>


<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


<script src=\"catalog/view/javascript/jquery.min.js\"></script>
<script src=\"catalog/view/javascript/jquery-migrate-3.0.1.min.js\"></script>
<script src=\"catalog/view/javascript/popper.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.easing.1.3.js\"></script>
<script src=\"catalog/view/javascript/jquery.waypoints.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.stellar.min.js\"></script>
<script src=\"catalog/view/javascript/owl.carousel.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.magnific-popup.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.animateNumber.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap-datepicker.js\"></script>
<script src=\"catalog/view/javascript/scrollax.min.js\"></script>
<script src=\"catalog/view/javascript/google-map.js\"></script>
<script src=\"catalog/view/javascript/main.js\"></script>
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
