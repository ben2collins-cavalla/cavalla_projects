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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_basic_html/templates/paragraph--cavalla-basic-html.html.twig */
class __TwigTemplate_ad2179a3e96cef6a7c830615c1141d735b72896dda9cecc9dde27fd57efce1ea extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
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
        echo "<div class=\"container my-5 basic_html\">
  <section class=\"text-center\">
   ";
        // line 3
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_bh_header", []), 0, [], "array"))) {
            // line 4
            echo "      <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_bh_header", []), 0, [], "array")), "html", null, true);
            echo "</h1>
    ";
        }
        // line 6
        echo "    ";
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_bh_text", []), 0, [], "array"))) {
            // line 7
            echo "      <p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_bh_text", []), 0, [], "array")), "html", null, true);
            echo "</p>
    ";
        }
        // line 9
        echo "  </section>
    ";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_bh_wysiwyg", []), 0, [], "array")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_basic_html/templates/paragraph--cavalla-basic-html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 10,  76 => 9,  70 => 7,  67 => 6,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container my-5 basic_html\">
  <section class=\"text-center\">
   {%  if true in content.field_cavalla_bh_header[0] %}
      <h1>{{ content.field_cavalla_bh_header[0] }}</h1>
    {% endif %}
    {%  if true in content.field_cavalla_bh_text[0] %}
      <p>{{ content.field_cavalla_bh_text[0] }}</p>
    {% endif %}
  </section>
    {{ content.field_cavalla_bh_wysiwyg[0] }}
</div>
", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_basic_html/templates/paragraph--cavalla-basic-html.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cavalla_projects/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_basic_html/templates/paragraph--cavalla-basic-html.html.twig");
    }
}
