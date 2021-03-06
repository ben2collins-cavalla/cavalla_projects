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

/* themes/contrib/yaudaface_theme/templates/_includes/global/header.html.twig */
class __TwigTemplate_28a8cd6899cb616f9fb4cf8423aef1fea6c49dfdd1a72c640f39f6eda9956b87 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 9];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
        echo "<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"Site header\">
    <nav class=\"secondary-nav nav\">
      <div class=\"container\">
        ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
      </div>
    </nav>
  <nav class=\"primary-nav  nav container\">
    <div class=\"col-10\">
      <a class=\"navbar-brand\" href=\"#\"> ";
        // line 9
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/_includes/global/logo.html.twig"), "themes/contrib/yaudaface_theme/templates/_includes/global/header.html.twig", 9)->display($context);
        echo "</a>
        <div id=\"showMenu\">
          <button  class=\"menu navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            <span class=\"navbar-toggler-icon\"></span>
            <span class=\"navbar-toggler-icon\"></span>
          </button>
        </div>
    </div>
    <section class=\"col-2\">";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "cart", [])), "html", null, true);
        echo "</section>
  </nav>

  <div class=\"menu-wrap\">
    <div class=\"icon-list\">
      ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
    </div>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yaudaface_theme/templates/_includes/global/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  80 => 18,  68 => 9,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"Site header\">
    <nav class=\"secondary-nav nav\">
      <div class=\"container\">
        {{ page.secondary_menu }}
      </div>
    </nav>
  <nav class=\"primary-nav  nav container\">
    <div class=\"col-10\">
      <a class=\"navbar-brand\" href=\"#\"> {% include directory ~ '/templates/_includes/global/logo.html.twig' %}</a>
        <div id=\"showMenu\">
          <button  class=\"menu navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            <span class=\"navbar-toggler-icon\"></span>
            <span class=\"navbar-toggler-icon\"></span>
          </button>
        </div>
    </div>
    <section class=\"col-2\">{{ page.cart }}</section>
  </nav>

  <div class=\"menu-wrap\">
    <div class=\"icon-list\">
      {{ page.primary_menu }}
    </div>
\t</div>
</header>", "themes/contrib/yaudaface_theme/templates/_includes/global/header.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cavalla_projects/themes/contrib/yaudaface_theme/templates/_includes/global/header.html.twig");
    }
}
