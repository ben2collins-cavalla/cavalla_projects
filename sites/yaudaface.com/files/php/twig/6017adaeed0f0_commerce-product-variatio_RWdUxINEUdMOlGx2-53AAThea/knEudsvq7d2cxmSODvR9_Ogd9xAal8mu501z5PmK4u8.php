<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/cavalla_theme/templates/product/commerce-product-variation--default.html.twig */
class __TwigTemplate_3073451230d029660056f34ef760517a694db96985d151910cd7d27b9e866570 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 25];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        echo "

 <div class=\"card\" >
  <img src=\"";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null)), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Product- ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product"] ?? null)), "html", null, true);
        echo "\">
  <div class=\"card-body\">
    <h5 class=\"card-title\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product"] ?? null)), "html", null, true);
        echo "</a></h5>
    <h6>";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["price"] ?? null)), "html", null, true);
        echo "</h6>

    ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["addToCart"] ?? null)), "html", null, true);
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/cavalla_theme/templates/product/commerce-product-variation--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  73 => 28,  67 => 27,  60 => 25,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 *
 * Default template for product variations.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - product_variation: The rendered product variation fields.
 *   Use 'product_variation' to print them all, or print a subset such as
 *   'product_variation.title'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ product_variation|without('title') }}
 *   @endcode
 * - product_variation_entity: The product variation entity.
 * - product_url: The product URL.
 *
 * @ingroup themeable
 */
#}


 <div class=\"card\" >
  <img src=\"{{ image }}\" class=\"card-img-top\" alt=\"Product- {{ product }}\">
  <div class=\"card-body\">
    <h5 class=\"card-title\"><a href=\"{{ product_url }}\">{{ product }}</a></h5>
    <h6>{{ price }}</h6>

    {{ addToCart }}
  </div>
</div>", "themes/contrib/cavalla_theme/templates/product/commerce-product-variation--default.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cavalla_projects/themes/contrib/cavalla_theme/templates/product/commerce-product-variation--default.html.twig");
    }
}
