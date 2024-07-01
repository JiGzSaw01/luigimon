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

/* core/themes/claro/templates/fieldset.html.twig */
class __TwigTemplate_cfba749998e76992d369f04f2f8750d6 extends Template
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
        // line 30
        $context["classes"] = ["fieldset", ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 32)) ? ("fieldset--group") : ("")), "js-form-item", "form-item", "js-form-wrapper", "form-wrapper"];
        // line 40
        $context["wrapper_classes"] = ["fieldset__wrapper", ((CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 42)) ? ("fieldset__wrapper--group") : (""))];
        // line 46
        $context["legend_span_classes"] = ["fieldset__label", ((CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 48)) ? ("fieldset__label--group") : ("")), ((        // line 49
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 50
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 54
        $context["legend_classes"] = ["fieldset__legend", (((CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 56) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["form-composite"], "method", false, false, true, 56))) ? ("fieldset__legend--group") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["attributes"] ?? null), "hasClass", ["form-composite"], "method", false, false, true, 57)) ? ("fieldset__legend--composite") : ("")), (((        // line 58
($context["title_display"] ?? null) == "invisible")) ? ("fieldset__legend--invisible") : ("fieldset__legend--visible"))];
        // line 62
        $context["description_classes"] = ["fieldset__description"];
        // line 66
        yield "
<fieldset";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
        yield ">
  ";
        // line 69
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 69)) {
            // line 70
            yield "  <legend";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 70), "addClass", [($context["legend_classes"] ?? null)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
            yield ">
    <span";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 71), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 71), 71, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            yield "</span>
  </legend>
  ";
        }
        // line 74
        yield "
  <div";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["wrapper_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        yield ">
    ";
        // line 76
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 76))) {
            // line 77
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 77), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 77), 77, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            yield "</div>
    ";
        }
        // line 79
        yield "    ";
        if (($context["inline_items"] ?? null)) {
            // line 80
            yield "      <div class=\"container-inline\">
    ";
        }
        // line 82
        yield "
    ";
        // line 83
        if (($context["prefix"] ?? null)) {
            // line 84
            yield "      <span class=\"fieldset__prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 84, $this->source), "html", null, true);
            yield "</span>
    ";
        }
        // line 86
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 86, $this->source), "html", null, true);
        yield "
    ";
        // line 87
        if (($context["suffix"] ?? null)) {
            // line 88
            yield "      <span class=\"fieldset__suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 88, $this->source), "html", null, true);
            yield "</span>
    ";
        }
        // line 90
        yield "    ";
        if (($context["errors"] ?? null)) {
            // line 91
            yield "      <div class=\"fieldset__error-message\">
        ";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 92, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 95
        yield "    ";
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 95))) {
            // line 96
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 96), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            yield "</div>
    ";
        }
        // line 98
        yield "
    ";
        // line 99
        if (($context["inline_items"] ?? null)) {
            // line 100
            yield "      </div>
    ";
        }
        // line 102
        yield "  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "title_display", "legend", "legend_span", "content_attributes", "description_display", "description", "inline_items", "prefix", "children", "suffix", "errors"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/fieldset.html.twig";
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
        return array (  161 => 102,  157 => 100,  155 => 99,  152 => 98,  144 => 96,  141 => 95,  135 => 92,  132 => 91,  129 => 90,  123 => 88,  121 => 87,  116 => 86,  110 => 84,  108 => 83,  105 => 82,  101 => 80,  98 => 79,  90 => 77,  88 => 76,  84 => 75,  81 => 74,  73 => 71,  68 => 70,  65 => 69,  61 => 67,  58 => 66,  56 => 62,  54 => 58,  53 => 57,  52 => 56,  51 => 54,  49 => 50,  48 => 49,  47 => 48,  46 => 46,  44 => 42,  43 => 40,  41 => 32,  40 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/fieldset.html.twig", "/var/www/html/web/core/themes/claro/templates/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 69);
        static $filters = array("escape" => 67);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
