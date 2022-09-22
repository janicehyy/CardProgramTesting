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
class __TwigTemplate_5e606d5b842f39cb379da17dd93bf30f441eb6e08bdb8a9853dc1133a1e51ce4 extends \Twig\Template
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
    <div class=\"row mb-5\">
      <div class=\"col-md pt-5\">
    <div class=\"ftco-footer-widget pt-md-5 mb-4\">
      <h2 class=\"ftco-heading-2\">About</h2>
      <ul class=\"list-unstyled\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 9
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 9);
            echo "\" class=\"py-2 d-block\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 9);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
</div>
</div>
<div class=\"col-md pt-5\">
    <div class=\"ftco-footer-widget pt-md-5 mb-4\">
      <h2 class=\"ftco-heading-2\">Services</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 18
        echo ($context["contact"] ?? null);
        echo "\" class=\"py-2 d-block\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 19
        echo ($context["account"] ?? null);
        echo "\" class=\"py-2 d-block\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
    </ul>
</div>
</div>
<div class=\"col-md pt-5\">
   <div class=\"ftco-footer-widget pt-md-5 mb-4\">
      <h2 class=\"ftco-heading-2\">Features</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"#\" class=\"py-2 d-block\">BOD List</a></li>
        <li><a href=\"#\" class=\"py-2 d-block\">Watchlist</a></li>
        <li><a href=\"#\" class=\"py-2 d-block\">Alerts</a></li>
        <li><a href=\"#\" class=\"py-2 d-block\">Indicators</a></li>
    </ul>
</div>
</div>
<div class=\"col-md pt-5\">
    <div class=\"ftco-footer-widget pt-md-5 mb-4\">
       <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
       <div class=\"block-23 mb-3\">
         <ul>
           <li><a href=\"https://wa.me/+60173292048\"><span class=\"icon fa fa-whatsapp\"></span><span class=\"text\">Bursasharks</span></a></li>
           <li><a href=\"https://t.me/Bursasharks\"><span class=\"icon fa fa-telegram\"></span><span class=\"text\">Bursasharks</span></a></li>
           <li><a href=\"mailto:askme@bursasharks.com\"><span class=\"icon fa fa-paper-plane\"></span><span class=\"text\">askme@bursasharks.com</span></a></li>
       </ul>
   </div>
</div>
</div>
</div>
<div class=\"row\">
  <div class=\"col-md-12 text-center\">

    <p>";
        // line 50
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
        return array (  112 => 50,  76 => 19,  70 => 18,  61 => 11,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
