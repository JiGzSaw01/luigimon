<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/modules/system/templates/form-element.html.twig */
class __TwigTemplate_8c2867cfb7398b4aa0f8999c777a8e85 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        $context["classes"] = ["js-form-item", "form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["type"] ?? null), 53, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null), 54, $this->source))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["name"] ?? null), 55, $this->source))), ((!CoreExtension::inFilter(        // line 56
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), ((        // line 58
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 62
        $context["description_classes"] = ["description", (((        // line 64
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 67
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
        yield ">
  ";
        // line 68
        if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 69
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 69, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 71
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
            // line 72
            yield "    <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 72, $this->source), "html", null, true);
            yield "</span>
  ";
        }
        // line 74
        yield "  ";
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 74))) {
            // line 75
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            yield ">
      ";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 79
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 79, $this->source), "html", null, true);
        yield "
  ";
        // line 80
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
            // line 81
            yield "    <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 81, $this->source), "html", null, true);
            yield "</span>
  ";
        }
        // line 83
        yield "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 84
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 84, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 86
        yield "  ";
        if (($context["errors"] ?? null)) {
            // line 87
            yield "    <div class=\"form-item--error-message\">
      ";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 88, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 91
        yield "  ";
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 91))) {
            // line 92
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 92), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 92), 92, $this->source), "html", null, true);
            yield ">
      ";
            // line 93
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 96
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "errors", "description_display", "attributes", "label_display", "label", "prefix", "description", "children", "suffix"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/system/templates/form-element.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  135 => 96,  129 => 93,  124 => 92,  121 => 91,  115 => 88,  112 => 87,  109 => 86,  103 => 84,  100 => 83,  94 => 81,  92 => 80,  87 => 79,  81 => 76,  76 => 75,  73 => 74,  67 => 72,  64 => 71,  58 => 69,  56 => 68,  51 => 67,  49 => 64,  48 => 62,  46 => 58,  45 => 57,  44 => 56,  43 => 55,  42 => 54,  41 => 53,  40 => 50,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/system/templates/form-element.html.twig", "/var/www/html/web/core/modules/system/templates/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 50, "if" => 68);
        static $filters = array("clean_class" => 53, "escape" => 67);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                [],
                $this->source
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
