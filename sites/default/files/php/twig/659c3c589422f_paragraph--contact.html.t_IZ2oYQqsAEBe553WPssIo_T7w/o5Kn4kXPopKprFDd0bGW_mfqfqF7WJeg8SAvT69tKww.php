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

/* themes/custom/yucon/templates/paragraphs/contact/paragraph--contact.html.twig */
class __TwigTemplate_3fb36452595037f64cafc3755e6512df extends Template
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
        echo "<section id=\"#contact\" class=\"section contact\">
    <div class=\"container-xxl px-4\">
        <div class=\"contact-header\">
            <h2>";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_section_title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h2>
            <p>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</p>
        </div>

        <div class=\"contact-content d-flex  gy-4\">

            <div class=\"contact-left-section\">
                <div class=\"contact-header mb-5\">
                    <h2>";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_section_title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</h2>
                    <p>";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</p>
                </div>

                <div class=\"row gy-4\">
                    <div class=\"col-md-6\">
                        <div class=\"info-item d-flex align-items-center\">
                            <i class=\"icon bi bi-geo-alt flex-shrink-0\"></i>
                            <div>
                                <h3>";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Address"));
        echo "</h3>
                                <p>Im Tiergarten 11, CH-8055, Zurich</p>
                            </div>
                        </div>

                        <div class=\"info-item  d-flex align-items-center\">
                            <i class=\"icon bi bi-telephone flex-shrink-0\"></i>
                            <div>
                                <p><strong>";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Phone"));
        echo ":</strong> 079 632 80 01</p>
                                <p><strong>";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("E-Mail"));
        echo ":</strong> thomas@yucon.ch</p>
                            </div>
                        </div>
                    </div>
        
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <iframe title=\"addressMapIframe\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39250.86189607918!2d8.485407704727935!3d47.365089258144174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4790098aff1cb05f%3A0x5f6ba2f85cc9c13a!2sIm%20Tiergarten%2011%2C%208055%20Z%C3%BCrich%2C%20Switzerland!5e0!3m2!1sen!2suk!4v1702946603345!5m2!1sen!2suk\" style=\"border:0; width: 100%; height: 150px;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"contact-right-section\">
                ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntityForm("contact_message", null, "default", ["contact_form" => "website_contact"]), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/yucon/templates/paragraphs/contact/paragraph--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  88 => 30,  84 => 29,  73 => 21,  62 => 13,  58 => 12,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/yucon/templates/paragraphs/contact/paragraph--contact.html.twig", "/var/www/html/yucon/themes/custom/yucon/templates/paragraphs/contact/paragraph--contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4, "t" => 21);
        static $functions = array("drupal_entity_form" => 44);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
                ['drupal_entity_form']
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
