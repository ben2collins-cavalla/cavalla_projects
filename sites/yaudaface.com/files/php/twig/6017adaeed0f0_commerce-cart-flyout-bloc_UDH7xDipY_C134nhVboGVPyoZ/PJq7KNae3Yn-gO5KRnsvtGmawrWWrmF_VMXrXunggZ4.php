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

/* modules/contrib/commerce_cart_flyout/templates/commerce-cart-flyout-block.html.twig */
class __TwigTemplate_b9d725f4aa3e7d6389c737de36c0acf59c71569896f8889b70f494e98f24f092 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        // line 1
        echo "<div class=\"cart--cart-block\">
  <div class=\"cart-block--summary\">
    <a class=\"cart-block--link__expand\" href=\"<%= url %>\">
      <span class=\"cart-block--summary__icon\" />
      <span class=\"cart-block--summary__count\"><%= count_text %></span>
    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce_cart_flyout/templates/commerce-cart-flyout-block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"cart--cart-block\">
  <div class=\"cart-block--summary\">
    <a class=\"cart-block--link__expand\" href=\"<%= url %>\">
      <span class=\"cart-block--summary__icon\" />
      <span class=\"cart-block--summary__count\"><%= count_text %></span>
    </a>
  </div>
</div>
", "modules/contrib/commerce_cart_flyout/templates/commerce-cart-flyout-block.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cavalla_projects/modules/contrib/commerce_cart_flyout/templates/commerce-cart-flyout-block.html.twig");
    }
}
