<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @yucon/partials/header.html.twig */
class __TwigTemplate_af785e43f2c7bb560d85b6c111fc80c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">
    <div class=\"container-fluid px-4 d-flex align-items-center justify-content-between\">
      <a href=\"/\" class=\"logo d-flex align-items-center\">
        <img src=\"/themes/custom/yucon/images/yucon_logo_small.png\" alt =\"Yucon Logo\" width=\"109px\" height=\"39px\" />
      </a>

      <div id=\"mob-navbar\" class=\"mob-navbar\">
        ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("main"), "html", null, true);
        echo "
      </div>

      <div class=\"contact-language-wrapper\">
        ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("language_block:language_interface", array(), false), "html", null, true);
        echo "
        ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 13) == "de")) {
            // line 14
            echo "          <a data-anchor=\"#contact\" class=\"cta\">Kontakt</a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 15
($context["language"] ?? null), "id", [], "any", false, false, true, 15) == "en")) {
            // line 16
            echo "          <a data-anchor=\"#contact\" class=\"cta\">Contact</a>
        ";
        }
        // line 18
        echo "      </div>

      <div class=\"search-iconwrap\">
        <a class=\"search-link\" title=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to the search page"));
        echo "\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("search.view"));
        echo "\">
          <span class=\"search-icon\" aria-hidden=\"true\">";
        // line 22
        $this->loadTemplate(($this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath() . "/images/search.svg"), "@yucon/partials/header.html.twig", 22)->display($context);
        echo "</span>
          <span class=\"visually-hidden\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search"));
        echo "</span>
        </a>
      </div>

      <i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
      <i class=\"mobile-nav-toggle mobile-nav-hide bi bi-x d-none\"></i>
    </div>
  </header> 
";
    }

    public function getTemplateName()
    {
        return "@yucon/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  81 => 22,  75 => 21,  70 => 18,  66 => 16,  64 => 15,  61 => 14,  59 => 13,  55 => 12,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@yucon/partials/header.html.twig", "/var/www/html/yucon/themes/custom/yucon/templates/partials/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "include" => 22);
        static $filters = array("escape" => 8, "t" => 21);
        static $functions = array("drupal_menu" => 8, "drupal_block" => 12, "path" => 21, "active_theme_path" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 't'],
                ['drupal_menu', 'drupal_block', 'path', 'active_theme_path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
