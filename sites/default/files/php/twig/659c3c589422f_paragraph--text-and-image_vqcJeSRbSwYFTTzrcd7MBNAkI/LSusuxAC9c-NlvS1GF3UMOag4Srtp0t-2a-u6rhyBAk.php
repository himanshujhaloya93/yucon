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

/* themes/custom/yucon/templates/paragraphs/text-and-image/paragraph--text-and-image.html.twig */
class __TwigTemplate_0d55e300e45b752813dd5c0fedb23c88 extends Template
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
        echo "
<section class=\"animate__animated animate__slideInUp animate__fast info-card--bg text-and-image\">

    ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4) && $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 4)))) {
            // line 5
            echo "        <div class=\"px-4\">
            <div class=\"info-card ";
            // line 6
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_background", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6))) {
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_background", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo " ";
            }
            echo "\">
                ";
            // line 7
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading", [], "any", false, false, true, 7))) {
                // line 8
                echo "                    <h2 class=\"";
                if ((twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image_position", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8))) == "left")) {
                    echo " text-align-left ";
                } else {
                    echo " text-align-right ";
                }
                echo "\">
                        ";
                // line 9
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "
                    </h2>
                ";
            }
            // line 12
            echo "
                <div class=\"info-card--text ";
            // line 13
            if ((twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image_position", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13))) == "left")) {
                echo " order-1 ";
            }
            echo "\">
                    ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
                </div>

                <div class=\"info-card--image\">
                    ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    ";
        } else {
            // line 23
            echo "        <div class=\"px-4 m-0 info-card ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_background", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23))) {
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_background", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo " ";
            }
            echo "\">
            ";
            // line 24
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading", [], "any", false, false, true, 24))) {
                // line 25
                echo "                <h2 class=\"";
                if ((twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image_position", [], "any", false, false, true, 25), 0, [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25))) == "left")) {
                    echo " text-align-left ";
                } else {
                    echo " text-align-right ";
                }
                echo "\">
                    ";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "
                </h2>
            ";
            }
            // line 29
            echo "
            ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 30), 0, [], "any", false, false, true, 30)) {
                // line 31
                echo "                <div class=\"my-4 col-12 text-align-center\">
                    ";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "
                </div>
            ";
            } else {
                // line 35
                echo "                <div class=\"my-4 col-12\">
                    ";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "
                </div>
            ";
            }
            // line 38
            echo "   
        </div>
    ";
        }
        // line 40
        echo "        

</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/yucon/templates/paragraphs/text-and-image/paragraph--text-and-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 40,  147 => 38,  141 => 36,  138 => 35,  132 => 32,  129 => 31,  127 => 30,  124 => 29,  118 => 26,  109 => 25,  107 => 24,  98 => 23,  90 => 18,  83 => 14,  77 => 13,  74 => 12,  68 => 9,  59 => 8,  57 => 7,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/yucon/templates/paragraphs/text-and-image/paragraph--text-and-image.html.twig", "/var/www/html/yucon/themes/custom/yucon/templates/paragraphs/text-and-image/paragraph--text-and-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("render" => 4, "escape" => 6, "trim" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['render', 'escape', 'trim'],
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
