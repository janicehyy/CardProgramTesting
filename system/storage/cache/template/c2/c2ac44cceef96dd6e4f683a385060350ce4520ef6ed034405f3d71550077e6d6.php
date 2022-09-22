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
class __TwigTemplate_2b32a1c7ab8a8fb63ab5633b0f1e2101e81a738cae2cef8f1f6f4326ed457951 extends \Twig\Template
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
\t<ul class=\"ftco-footer-social list-unstyled float-lft text-center\">
            <li class=\"ftco-animate\"><a href=\"https://twitter.com/bursasharks\" target=\"_blank\"><span class=\"fa fa-twitter\"></span></a></li>
            <li class=\"ftco-animate\"><a href=\"https://www.facebook.com/bursasharks\" target=\"_blank\"><span class=\"fa fa-facebook\"></span></a></li>
            <li class=\"ftco-animate\"><a href=\"https://www.instagram.com/bursasharks/\" target=\"_blank\"><span class=\"fa fa-instagram\"></span></a></li>
        </ul>
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
