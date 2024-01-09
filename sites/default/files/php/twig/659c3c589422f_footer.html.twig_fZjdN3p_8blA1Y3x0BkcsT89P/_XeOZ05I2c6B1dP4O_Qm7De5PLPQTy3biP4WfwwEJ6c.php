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

/* @yucon/partials/footer.html.twig */
class __TwigTemplate_7aaf406b3039edf7d7e3737fefbc8f26 extends Template
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
        echo "<footer id=\"footer\" class=\"footer\">
    <div class=\"container-xxl px-4\">
        <div class=\"footer-content d-flex\">
            <div class=\"d-flex m-3\">
                ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("footer"), "html", null, true);
        echo "
            </div>
 
            <div class=\"d-flex m-3\">
                <div class=\"copyright\">
                  © Copyright <strong><span>yucon</span></strong>. All Rights Reserved
                </div>
            </div>

            <div class=\"d-flex footer-links m-3\">
                <div class=\"social-links d-flex ml-auto\">
                    <a href=\"https://www.linkedin.com/in/thomas-weber-z%C3%BCrich/\" aria-label=\"Go to facebook\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"https://www.linkedin.com/in/thomas-weber-z%C3%BCrich/\" aria-label=\"Go to instagram\"><i class=\"bi bi-instagram\"></i></a>
                    <a href=\"https://www.linkedin.com/in/thomas-weber-z%C3%BCrich/\" aria-label=\"Go to twitter\"><i class=\"bi bi-twitter\"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


";
    }

    public function getTemplateName()
    {
        return "@yucon/partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@yucon/partials/footer.html.twig", "/var/www/html/yucon/themes/custom/yucon/templates/partials/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array("drupal_menu" => 5);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['drupal_menu']
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
