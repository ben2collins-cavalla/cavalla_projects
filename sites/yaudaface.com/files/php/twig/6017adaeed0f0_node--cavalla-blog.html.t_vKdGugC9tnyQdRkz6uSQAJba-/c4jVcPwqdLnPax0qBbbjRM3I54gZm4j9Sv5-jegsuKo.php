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

/* themes/contrib/yaudaface_theme/templates/node/node--cavalla-blog.html.twig */
class __TwigTemplate_a6825d791d59df894a9e294957a567af9c3dfa1514ae46961a4ab31070627e26 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2, "spaceless" => 7];
        $filters = ["escape" => 7, "raw" => 51];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless'],
                ['escape', 'raw'],
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
        echo " <section id=\"blog_page_cavalla\">
  ";
        // line 2
        if (twig_in_filter("Off", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_hero_img_hide", []), 0, [], "array"))) {
            // line 3
            echo "  <!--Hero Image-->
  <section class=\"hero_image\">
  ";
            // line 5
            if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_hero_image", []), 0, [], "array"))) {
                // line 6
                echo "    <picture class=\"\">
      <img  class=\"background_image\" src=\"";
                // line 7
                ob_start();
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_hero_image", []), 0, [], "array")), "html", null, true);
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                echo "\" />
    </picture>
    <div class=\"marketing_background_text center_text\">
      <div class=\"container\">
        <h1 class=\"title-header\">";
                // line 11
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
                echo "</h1>
      </div>
    </div>
  ";
            }
            // line 15
            echo "  </section>
  <!--Breadcrumb-->
  <section class=\"breadcrumb_section p-3 mb-5\">
    <div class=\"container\">
      <nav aria-label=\"breadcrumb\" class=\"breadcrumb\">
        ";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
            echo "
      </nav>
    </div>
  </section>
  <!--Breadcrumb-->
  ";
        }
        // line 26
        echo "  <section class=\"container\">
    <section class=\"row m-auto w-100\">
      <div class=\"col\">
        <section class=\"container\">
          ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_widgets", [])), "html", null, true);
        echo "
          <section class=\"blog_post_feed_footer\">
            ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_suggested_post_feeds_foot", [])), "html", null, true);
        echo "
          </section>
        </section>
      </div>
      <div class=\"col col-12 col-lg-4 blog_post_feed d-none\">
        <section class=\"container\">
          ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_sp_feeds", [])), "html", null, true);
        echo "
        </section>
      </div>
    </section>
    <section class=\"row my-5 ml-0 w-100 d-none\">
      <div class=\"col col-12 col-lg-8\">
        <section class=\"container\">
          <section class=\"blog_author\" aria=\"Blog Author\">
          <h1>About the Author</h1>
            <div class=\"media\">
              <img src=\"";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_image"] ?? null)), "html", null, true);
        echo "\" class=\"mr-3 blog_author_photo rounded-circle\" alt=\"The article's author e.jackson-stokes\">
              <div class=\"media-body\">
                <p class=\"m-0 blog_author_name\">";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null)), "html", null, true);
        echo "</p>
                <p class=\"blog_author_bio\"> ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["user_bio"] ?? null)));
        echo " </p>
              </div>
            </div>
          </section>
        </section>
      </div>
    </section>
    <section class=\"row my-5 ml-0 w-100\">
      <div class=\"col\">
        ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_comments", [])), "html", null, true);
        echo "
      </div>
    </section>
  </section>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yaudaface_theme/templates/node/node--cavalla-blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 60,  143 => 51,  139 => 50,  134 => 48,  121 => 38,  112 => 32,  107 => 30,  101 => 26,  92 => 20,  85 => 15,  78 => 11,  69 => 7,  66 => 6,  64 => 5,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" <section id=\"blog_page_cavalla\">
  {% if 'Off' in content.field_cavalla_blog_hero_img_hide[0] %}
  <!--Hero Image-->
  <section class=\"hero_image\">
  {%  if true in content.field_cavalla_blog_hero_image[0] %}
    <picture class=\"\">
      <img  class=\"background_image\" src=\"{% spaceless %}{{content.field_cavalla_blog_hero_image[0]}}{% endspaceless %}\" />
    </picture>
    <div class=\"marketing_background_text center_text\">
      <div class=\"container\">
        <h1 class=\"title-header\">{{node.title.value}}</h1>
      </div>
    </div>
  {% endif %}
  </section>
  <!--Breadcrumb-->
  <section class=\"breadcrumb_section p-3 mb-5\">
    <div class=\"container\">
      <nav aria-label=\"breadcrumb\" class=\"breadcrumb\">
        {{ breadcrumb }}
      </nav>
    </div>
  </section>
  <!--Breadcrumb-->
  {% endif %}
  <section class=\"container\">
    <section class=\"row m-auto w-100\">
      <div class=\"col\">
        <section class=\"container\">
          {{ content.field_cavalla_blog_widgets }}
          <section class=\"blog_post_feed_footer\">
            {{ content.field_suggested_post_feeds_foot }}
          </section>
        </section>
      </div>
      <div class=\"col col-12 col-lg-4 blog_post_feed d-none\">
        <section class=\"container\">
          {{ content.field_cavalla_blog_sp_feeds }}
        </section>
      </div>
    </section>
    <section class=\"row my-5 ml-0 w-100 d-none\">
      <div class=\"col col-12 col-lg-8\">
        <section class=\"container\">
          <section class=\"blog_author\" aria=\"Blog Author\">
          <h1>About the Author</h1>
            <div class=\"media\">
              <img src=\"{{ user_image }}\" class=\"mr-3 blog_author_photo rounded-circle\" alt=\"The article's author e.jackson-stokes\">
              <div class=\"media-body\">
                <p class=\"m-0 blog_author_name\">{{ author }}</p>
                <p class=\"blog_author_bio\"> {{ user_bio | raw}} </p>
              </div>
            </div>
          </section>
        </section>
      </div>
    </section>
    <section class=\"row my-5 ml-0 w-100\">
      <div class=\"col\">
        {{ content.field_cavalla_blog_comments }}
      </div>
    </section>
  </section>
</section>", "themes/contrib/yaudaface_theme/templates/node/node--cavalla-blog.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cavalla_projects/themes/contrib/yaudaface_theme/templates/node/node--cavalla-blog.html.twig");
    }
}
