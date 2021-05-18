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

/* themes/contrib/yaudaface_theme/templates/_includes/global/footer.html.twig */
class __TwigTemplate_55407f2285b5fba778bd991c088cde5c4b5b39c554ee105c28fc9ac855e5a0a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 6];
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
        echo "<footer class=\"page-footer navbar-dark bg-dark\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4 col-12\">
        ";
        // line 5
        if (($context["address_organization_name"] ?? null)) {
            // line 6
            echo "        <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_organization_name"] ?? null)), "html", null, true);
            echo "</h1>
        ";
        }
        // line 8
        echo "        <address class=\"page_footer_address\">
          <ul class=\"mb-0 p-0\">
            ";
        // line 10
        if (($context["address_street"] ?? null)) {
            // line 11
            echo "            <li>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_street"] ?? null)), "html", null, true);
            echo "</li>
            ";
        }
        // line 13
        echo "            ";
        if (($context["address_city_state_zipcode"] ?? null)) {
            // line 14
            echo "            <li>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_city_state_zipcode"] ?? null)), "html", null, true);
            echo "</li>
            ";
        }
        // line 16
        echo "          </ul>
        </address>
        <div class=\"page_footer_contact\">
          <ul class=\"mb-0 p-0\">
            ";
        // line 20
        if (($context["address_phone"] ?? null)) {
            // line 21
            echo "            <li>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_phone"] ?? null)), "html", null, true);
            echo "</li>
            ";
        }
        // line 23
        echo "
            ";
        // line 24
        if (($context["address_email"] ?? null)) {
            // line 25
            echo "            <li>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_email"] ?? null)), "html", null, true);
            echo "</li>
            ";
        }
        // line 27
        echo "          </ul>
        </div>
      </div>

      <div class=\"col-md-8 col-12\">
        ";
        // line 32
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
            // line 33
            echo "        <div class=\"col\">
          ";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 37
        echo "
        ";
        // line 38
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
            // line 39
            echo "        <div class=\"col\">
          ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 43
        echo "

      </div>
    </div>
  </div>
  <div class=\"footer-copyright\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"copyright col-8\"> ©2020 Copyright YaudaFace. All Rights Resevered</div>
          <div class=\"social-links col-4\">
            ";
        // line 53
        if (($context["facebook_link"] ?? null)) {
            // line 54
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-facebook\" target=\"_blank\"></a>
            ";
        }
        // line 56
        echo "
            ";
        // line 57
        if (($context["twitter_link"] ?? null)) {
            // line 58
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-twitter\" target=\"_blank\"></a>
            ";
        }
        // line 60
        echo "
            ";
        // line 61
        if (($context["instagram_link"] ?? null)) {
            // line 62
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-instagram\" target=\"_blank\"></a>
            ";
        }
        // line 64
        echo "
            ";
        // line 65
        if (($context["linkedin_link"] ?? null)) {
            // line 66
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-linkedin\" target=\"_blank\"></a>
            ";
        }
        // line 68
        echo "
            ";
        // line 69
        if (($context["youtube_link"] ?? null)) {
            // line 70
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-youtube\" target=\"_blank\"></a>
            ";
        }
        // line 72
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yaudaface_theme/templates/_includes/global/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 72,  205 => 70,  203 => 69,  200 => 68,  194 => 66,  192 => 65,  189 => 64,  183 => 62,  181 => 61,  178 => 60,  172 => 58,  170 => 57,  167 => 56,  161 => 54,  159 => 53,  147 => 43,  141 => 40,  138 => 39,  136 => 38,  133 => 37,  127 => 34,  124 => 33,  122 => 32,  115 => 27,  109 => 25,  107 => 24,  104 => 23,  98 => 21,  96 => 20,  90 => 16,  84 => 14,  81 => 13,  75 => 11,  73 => 10,  69 => 8,  63 => 6,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"page-footer navbar-dark bg-dark\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4 col-12\">
        {% if address_organization_name %}
        <h1>{{ address_organization_name }}</h1>
        {% endif %}
        <address class=\"page_footer_address\">
          <ul class=\"mb-0 p-0\">
            {% if address_street %}
            <li>{{ address_street }}</li>
            {% endif %}
            {% if address_city_state_zipcode %}
            <li>{{ address_city_state_zipcode }}</li>
            {% endif %}
          </ul>
        </address>
        <div class=\"page_footer_contact\">
          <ul class=\"mb-0 p-0\">
            {% if address_phone %}
            <li>{{ address_phone }}</li>
            {% endif %}

            {% if address_email %}
            <li>{{ address_email }}</li>
            {% endif %}
          </ul>
        </div>
      </div>

      <div class=\"col-md-8 col-12\">
        {% if page.footer_second %}
        <div class=\"col\">
          {{ page.footer_first}}
        </div>
        {% endif %}

        {% if page.footer_second %}
        <div class=\"col\">
          {{ page.footer_second}}
        </div>
        {% endif %}


      </div>
    </div>
  </div>
  <div class=\"footer-copyright\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"copyright col-8\"> ©2020 Copyright YaudaFace. All Rights Resevered</div>
          <div class=\"social-links col-4\">
            {% if facebook_link %}
            <a href=\"{{ facebook_link }}\" class=\"fa fa-facebook\" target=\"_blank\"></a>
            {% endif %}

            {% if twitter_link %}
            <a href=\"{{ twitter_link }}\" class=\"fa fa-twitter\" target=\"_blank\"></a>
            {% endif %}

            {% if instagram_link %}
            <a href=\"{{ instagram_link }}\" class=\"fa fa-instagram\" target=\"_blank\"></a>
            {% endif %}

            {% if linkedin_link %}
            <a href=\"{{ linkedin_link }}\" class=\"fa fa-linkedin\" target=\"_blank\"></a>
            {% endif %}

            {% if youtube_link %}
            <a href=\"{{ youtube_link }}\" class=\"fa fa-youtube\" target=\"_blank\"></a>
            {% endif %}
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>", "themes/contrib/yaudaface_theme/templates/_includes/global/footer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cavalla_projects/themes/contrib/yaudaface_theme/templates/_includes/global/footer.html.twig");
    }
}
