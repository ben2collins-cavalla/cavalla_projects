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

/* themes/contrib/yaudaface_theme/templates/paragraphs/paragraph--call-to-action-hp.html.twig */
class __TwigTemplate_eb7dc287cba8029397b6b80c0ee621ceca998be74d06fc03224bccf9b137ea7a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 1, "if" => 4];
        $filters = ["escape" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
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
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 2
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " data-animate-cta=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_animation", []), 0, [], "array")), "html", null, true);
        echo "\" >
    ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "  </div>
";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "      ";
        if ((($context["bundle"] ?? null) == "remote_video")) {
            // line 5
            echo "        <div  class=\"video_background_";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["provider"] ?? null)), "html", null, true);
            echo "\" data-videoid=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
            echo "\">
          <div class=\"video_foreground_";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["provider"] ?? null)), "html", null, true);
            echo "\">
            <iframe src=\"";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      ";
        } else {
            // line 11
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_call_to_action_media", [])), "html", null, true);
            echo "
      ";
        }
        // line 13
        echo "        <section class=\"knockout-text px-3\">
          <div class=\"center_content container text-center\">
            <h1>YAUDA</h1>
            <h1>FACE</h1>
          </div>
        </section>
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yaudaface_theme/templates/paragraphs/paragraph--call-to-action-hp.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 13,  101 => 11,  94 => 7,  90 => 6,  83 => 5,  80 => 4,  77 => 3,  72 => 20,  70 => 3,  63 => 2,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block paragraph %}
  <div{{ attributes.addClass(classes) }} data-animate-cta=\"{{ content.field_call_to_action_animation[0] }}\" >
    {% block content %}
      {% if bundle == 'remote_video' %}
        <div  class=\"video_background_{{ provider }}\" data-videoid=\"{{ id }}\">
          <div class=\"video_foreground_{{ provider }}\">
            <iframe src=\"{{ url }}\" width=\"100%\" height=\"100%\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      {% else %}
        {{ content.field_call_to_action_media }}
      {% endif %}
        <section class=\"knockout-text px-3\">
          <div class=\"center_content container text-center\">
            <h1>YAUDA</h1>
            <h1>FACE</h1>
          </div>
        </section>
    {% endblock %}
  </div>
{% endblock paragraph %}", "themes/contrib/yaudaface_theme/templates/paragraphs/paragraph--call-to-action-hp.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cavalla_projects/themes/contrib/yaudaface_theme/templates/paragraphs/paragraph--call-to-action-hp.html.twig");
    }
}
