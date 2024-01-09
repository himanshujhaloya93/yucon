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

/* themes/custom/yucon/templates/navigation/menu--main.html.twig */
class __TwigTemplate_b3f5ea5fbfe30179059db1770fbb16ea extends Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        echo "
";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 3, $context, $this->getSourceContext()));
        echo "

";
        // line 31
        echo "
<div class=\"contact-language-wrapper mt-auto\">
  ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("language_block:language_interface", array(), false), "html", null, true);
        echo "

  ";
        // line 35
        if ((($context["lang_code"] ?? null) == "de")) {
            // line 36
            echo "    <a data-anchor=\"#contact\" >Kontakt</a>
  ";
        } elseif ((        // line 37
($context["lang_code"] ?? null) == "en")) {
            // line 38
            echo "    <a data-anchor=\"#contact\" >Contact</a>
  ";
        }
        // line 40
        echo "</div>
";
    }

    // line 5
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 6
            echo "  ";
            $macros["menus"] = $this;
            // line 7
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 8
                echo "    <nav> 
      <ul>
        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 11
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 11)) {
                        // line 12
                        echo "            <li class=\"drop\">
                <a aria-current=\"page\" href=";
                        // line 13
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                        echo "</a>
              <ul>
                ";
                        // line 15
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 15));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 16
                            echo "                  <li><a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subitem"], "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                            echo "\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subitem"], "title", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                            echo "</a></li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 18
                        echo "              </ul>
            </li>
          ";
                    } else {
                        // line 21
                        echo "            <li>
              <a aria-current=\"page\" href=";
                        // line 22
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                        echo "</a>
            </li>
          ";
                    }
                    // line 25
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "      </ul>

    </nav>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/yucon/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 26,  147 => 25,  139 => 22,  136 => 21,  131 => 18,  120 => 16,  116 => 15,  109 => 13,  106 => 12,  103 => 11,  99 => 10,  95 => 8,  92 => 7,  89 => 6,  74 => 5,  69 => 40,  65 => 38,  63 => 37,  60 => 36,  58 => 35,  53 => 33,  49 => 31,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/yucon/templates/navigation/menu--main.html.twig", "/var/www/html/yucon/themes/custom/yucon/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "if" => 35, "macro" => 5, "for" => 10);
        static $filters = array("escape" => 33);
        static $functions = array("drupal_block" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'macro', 'for'],
                ['escape'],
                ['drupal_block']
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
