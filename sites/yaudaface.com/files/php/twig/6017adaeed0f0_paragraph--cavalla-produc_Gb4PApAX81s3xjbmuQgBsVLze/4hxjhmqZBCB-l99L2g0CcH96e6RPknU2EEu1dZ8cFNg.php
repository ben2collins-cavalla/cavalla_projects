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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_product_feed/templates/paragraph--cavalla-product-feed.html.twig */
class __TwigTemplate_7514cfa0cfefe779ca1ba4356302ddb97079454e6bacf73e51baddf45fc9f283 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 1
        echo "<section class=\"product_feed_bundle\" >
    <section class=\"container\">
        <section class=\"product_feed_introduction\">
            <h1>";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_pf_header", []), 0, [], "array")), "html", null, true);
        echo "</h1>
            <p class=\"lead-in\">";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_pf_text", []), 0, [], "array")), "html", null, true);
        echo "</p>
        </section>
        <section class=\"card-deck my-4\">
        ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_feed"] ?? null)), "html", null, true);
        echo "
        </section>
        ";
        // line 10
        if ( !(null === $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_pf_hyperlink", []), 0, [], "array"))) {
            // line 11
            echo "        <section class=\"hyperlink\">
            <a class=\"btn btn-dark\" href=\"";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_pf_hyperlink", []), 0, [], "array"), "#url", [], "array")), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_pf_hyperlink", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
            echo "&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
        </section>
        ";
        }
        // line 15
        echo "    </section>
</section>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_product_feed/templates/paragraph--cavalla-product-feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  80 => 12,  77 => 11,  75 => 10,  70 => 8,  64 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"product_feed_bundle\" >
    <section class=\"container\">
        <section class=\"product_feed_introduction\">
            <h1>{{ content.field_cavalla_pf_header[0] }}</h1>
            <p class=\"lead-in\">{{ content.field_cavalla_pf_text[0] }}</p>
        </section>
        <section class=\"card-deck my-4\">
        {{ product_feed }}
        </section>
        {% if content.field_cavalla_pf_hyperlink[0] is not null %}
        <section class=\"hyperlink\">
            <a class=\"btn btn-dark\" href=\"{{ content.field_cavalla_pf_hyperlink[0]['#url'] }}\">{{ content.field_cavalla_pf_hyperlink[0]['#title'] }}&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
        </section>
        {% endif %}
    </section>
</section>", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_product_feed/templates/paragraph--cavalla-product-feed.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cavalla_projects/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_product_feed/templates/paragraph--cavalla-product-feed.html.twig");
    }
}
