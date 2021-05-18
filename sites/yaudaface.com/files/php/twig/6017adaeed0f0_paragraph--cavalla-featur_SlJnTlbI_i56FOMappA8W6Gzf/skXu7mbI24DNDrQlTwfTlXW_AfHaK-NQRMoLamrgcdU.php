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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_feature_blog_post/templates/paragraph--cavalla-feature-blog-post.html.twig */
class __TwigTemplate_2772553ea443cea2852590711361a4f6e66d93e14ed07b03430d6d76f4f9cd16 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4];
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
        // line 1
        echo " <section class=\"w-100 d-md-table feature_blog_post\">
  <section class=\"featurettes d-md-table-cell align-middle\">
\t\t<section class=\"container animation_featurettes_Off\">
      <h1 class=\"title\">";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cavalla_fbp_header", [])), "html", null, true);
        echo "</h1>
      <p class=\"text\">";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cavalla_fbp_text", [])), "html", null, true);
        echo "</p>
\t\t  <div class=\"row h-100 \">
\t\t\t\t  <div class=\"col-lg-6 col-md-6 featurettes_image p-3\">
            <img src=\"";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null)), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\" alt=\"\" />
          </div>
\t\t\t    <div class=\"col-lg-6 col-md-6 featurettes_text my-auto \">
            <aside class=\"featurette text-md-left\">
              <h2 class=\"featurette-heading\">";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h2>
              <p class=\"lead\">";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null)), "html", null, true);
        echo "</p>
              <a class=\"btn btn-dark\" href=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hyperlink"] ?? null)), "html", null, true);
        echo "\">Read more&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
            </aside>
\t\t\t    </div>
\t\t    </div>
\t\t</section>
\t</section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_feature_blog_post/templates/paragraph--cavalla-feature-blog-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  81 => 13,  77 => 12,  70 => 8,  64 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" <section class=\"w-100 d-md-table feature_blog_post\">
  <section class=\"featurettes d-md-table-cell align-middle\">
\t\t<section class=\"container animation_featurettes_Off\">
      <h1 class=\"title\">{{ content.field_cavalla_fbp_header }}</h1>
      <p class=\"text\">{{ content.field_cavalla_fbp_text }}</p>
\t\t  <div class=\"row h-100 \">
\t\t\t\t  <div class=\"col-lg-6 col-md-6 featurettes_image p-3\">
            <img src=\"{{ image }}\" width=\"100%\" height=\"100%\" alt=\"\" />
          </div>
\t\t\t    <div class=\"col-lg-6 col-md-6 featurettes_text my-auto \">
            <aside class=\"featurette text-md-left\">
              <h2 class=\"featurette-heading\">{{ title }}</h2>
              <p class=\"lead\">{{ summary }}</p>
              <a class=\"btn btn-dark\" href=\"{{ hyperlink }}\">Read more&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
            </aside>
\t\t\t    </div>
\t\t    </div>
\t\t</section>
\t</section>
</section>
", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_feature_blog_post/templates/paragraph--cavalla-feature-blog-post.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cavalla_projects/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_feature_blog_post/templates/paragraph--cavalla-feature-blog-post.html.twig");
    }
}
