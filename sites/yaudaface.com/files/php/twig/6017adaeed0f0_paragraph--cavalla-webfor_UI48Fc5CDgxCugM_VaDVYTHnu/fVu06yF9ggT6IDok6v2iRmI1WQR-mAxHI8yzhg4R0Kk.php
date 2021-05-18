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

/* themes/contrib/yaudaface_theme/templates/paragraphs/paragraph--cavalla-webform.html.twig */
class __TwigTemplate_3a9c388a7ceefca68b8c0478b206475834c9db792fa5e7f0c683606a31cfd6fa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 32];
        $filters = ["escape" => 5];
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
        echo "<section class=\"webform_bundle\">
  <div class=\"container\">
    <div class=\"row\">
      <aside class=\"col-lg-12 d-none\">
        ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_map", []), 0, [], "array")), "html", null, true);
        echo "
        <div class=\"contactInfo\">
          <address>
            <h1>";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_company_name", []), 0, [], "array")), "html", null, true);
        echo "</h1>
            <p>
              <b><u>Address</u></b>
              ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_address_street", []), 0, [], "array")), "html", null, true);
        echo "</br>
              ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_address_city", []), 0, [], "array")), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_address_state", []), 0, [], "array")), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_address_zipcode", []), 0, [], "array")), "html", null, true);
        echo "</br>
            </p>
             <p>
              <b><u>Hours</u></b></br>
               ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_work_hours", []), 0, [], "array")), "html", null, true);
        echo "
             </p>
             <p>
              <b><u>Email</u></b> </br>
              <a href=\"mailto:";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_email", []), 0, [], "array")), "html", null, true);
        echo "?subject=Inquiry\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_email", []), 0, [], "array")), "html", null, true);
        echo "</a>
            </p>
            <p>
              <b><u>Telephone</u></b></br>
              ";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_telephone", []), 0, [], "array")), "html", null, true);
        echo "
            </p>
            ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_link", []), 0, [], "array")), "html", null, true);
        echo "
          </address>
        </div>
      </aside>
      <aside class=\"col-lg-12 webform\">
        <header><h2>General Inquiries</h2></header>
          ";
        // line 32
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_intro_title", []), 0, [], "array"))) {
            // line 33
            echo "            <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_intro_title", []), 0, [], "array")), "html", null, true);
            echo "</h1>
          ";
        }
        // line 35
        echo "          ";
        if (twig_in_filter(true, $this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_intro_text", []))) {
            // line 36
            echo "            <p class=\"lead\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_intro_text", []), 0, [], "array")), "html", null, true);
            echo "</p>
          ";
        }
        // line 38
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_webform", []), 0, [], "array")), "html", null, true);
        echo "
      </aside>

    </div>
  </div>
</section>


</section>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yaudaface_theme/templates/paragraphs/paragraph--cavalla-webform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  129 => 36,  126 => 35,  120 => 33,  118 => 32,  109 => 26,  104 => 24,  95 => 20,  88 => 16,  77 => 12,  73 => 11,  67 => 8,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"webform_bundle\">
  <div class=\"container\">
    <div class=\"row\">
      <aside class=\"col-lg-12 d-none\">
        {{ content.field_cavalla_wf_map[0] }}
        <div class=\"contactInfo\">
          <address>
            <h1>{{ content.field_cavalla_wf_company_name[0] }}</h1>
            <p>
              <b><u>Address</u></b>
              {{ content.field_cavalla_wf_address_street[0] }}</br>
              {{ content.field_cavalla_wf_address_city[0] }},{{ content.field_cavalla_wf_address_state[0] }} {{ content.field_cavalla_wf_address_zipcode[0] }}</br>
            </p>
             <p>
              <b><u>Hours</u></b></br>
               {{ content.field_cavalla_wf_work_hours[0] }}
             </p>
             <p>
              <b><u>Email</u></b> </br>
              <a href=\"mailto:{{ content.field_cavalla_wf_email[0] }}?subject=Inquiry\">{{ content.field_cavalla_wf_email[0] }}</a>
            </p>
            <p>
              <b><u>Telephone</u></b></br>
              {{ content.field_cavalla_wf_telephone[0] }}
            </p>
            {{ content.field_cavalla_wf_link[0] }}
          </address>
        </div>
      </aside>
      <aside class=\"col-lg-12 webform\">
        <header><h2>General Inquiries</h2></header>
          {%  if true in content.field_cavalla_wf_intro_title[0] %}
            <h1>{{ content.field_cavalla_wf_intro_title[0] }}</h1>
          {% endif %}
          {%  if true in content.field_cavalla_wf_intro_text %}
            <p class=\"lead\">{{ content.field_cavalla_wf_intro_text[0] }}</p>
          {% endif %}
          {{ content.field_cavalla_wf_webform[0] }}
      </aside>

    </div>
  </div>
</section>


</section>
", "themes/contrib/yaudaface_theme/templates/paragraphs/paragraph--cavalla-webform.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cavalla_projects/themes/contrib/yaudaface_theme/templates/paragraphs/paragraph--cavalla-webform.html.twig");
    }
}
