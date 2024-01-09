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

/* themes/custom/yucon/templates/paragraphs/slide-with-cta/paragraph--slide-with-cta.html.twig */
class __TwigTemplate_b28c6e164f69bfa2537c3f77c57c4fae extends Template
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
        echo "<section id=\"contact\" class=\"section slide-cta section-fh ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text_position", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1) == "bottom-left")) {
            echo " bottom-left ";
        }
        echo "\">
    <div class=\"cta-background\">
        ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
    </div>
    
    <div class=\"px-4 slide-cta-content\">
        <h1 class=\"";
        // line 7
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text_position", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7) == "bottom-left")) {
            echo " col-12 col-lg-9 ";
        }
        echo " mx-auto animate__animated animate__fadeInUp animate__slow display-5 fw-bold\">
            ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
        </h1>

        <div class=\"";
        // line 11
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text_position", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11) == "bottom-left")) {
            echo " col-10 col-lg-6 ";
        }
        echo " mx-auto\">
            <p class=\"animate__animated animate__fadeInLeft aniamte_slow mb-4\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#text"] ?? null) : null), 12, $this->source), "html", null, true);
        echo "</p>

            ";
        // line 14
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 14))) {
            // line 15
            echo "                <div class=\"animate__animated animate__fadeInUp animate__slow mt-5 d-grid gap-2 d-sm-flex justify-content-sm-center\">
                    ";
            // line 18
            echo "                    
                    ";
            // line 19
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 19)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null))) {
                // line 20
                echo "                        <a role=\"button\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 20)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#url"] ?? null) : null), 20, $this->source)), "html", null, true);
                echo "\" class=\"cta\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 20)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#title"] ?? null) : null), 20, $this->source), "html", null, true);
                echo "</a>
                    ";
            }
            // line 22
            echo "
                    ";
            // line 23
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_7 = (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 23)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[1] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#title"] ?? null) : null))) {
                // line 24
                echo "                        <a role=\"button\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_9 = (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 24)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[1] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#url"] ?? null) : null), 24, $this->source)), "html", null, true);
                echo "\" class=\"cta-orange\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_11 = (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 24)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[1] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#title"] ?? null) : null), 24, $this->source), "html", null, true);
                echo "</a>
                    ";
            }
            // line 26
            echo "                </div>
            ";
        }
        // line 28
        echo "        </div>

    </div>
</section>


  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/yucon/templates/paragraphs/slide-with-cta/paragraph--slide-with-cta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  108 => 26,  100 => 24,  98 => 23,  95 => 22,  87 => 20,  85 => 19,  82 => 18,  79 => 15,  77 => 14,  72 => 12,  66 => 11,  60 => 8,  54 => 7,  47 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/yucon/templates/paragraphs/slide-with-cta/paragraph--slide-with-cta.html.twig", "/var/www/html/yucon/themes/custom/yucon/templates/paragraphs/slide-with-cta/paragraph--slide-with-cta.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 3, "render" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
                []
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
