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

/* core/themes/claro/templates/details.html.twig */
class __TwigTemplate_3a472086d7d98b18121aaa5794e24820 extends Template
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
        // line 23
        $context["classes"] = ["claro-details", ((        // line 25
($context["accordion"] ?? null)) ? ("claro-details--accordion") : ("")), ((        // line 26
($context["accordion_item"] ?? null)) ? ("claro-details--accordion-item") : ("")), (((($__internal_compile_0 =         // line 27
($context["element"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#module_package_listing"] ?? null) : null)) ? ("claro-details--package-listing") : (""))];
        // line 31
        $context["content_wrapper_classes"] = ["claro-details__wrapper", "details-wrapper", ((        // line 34
($context["accordion"] ?? null)) ? ("claro-details__wrapper--accordion") : ("")), ((        // line 35
($context["accordion_item"] ?? null)) ? ("claro-details__wrapper--accordion-item") : ("")), (((($__internal_compile_1 =         // line 36
($context["element"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#module_package_listing"] ?? null) : null)) ? ("claro-details__wrapper--package-listing") : (""))];
        // line 40
        $context["inner_wrapper_classes"] = ["claro-details__content", ((        // line 42
($context["accordion"] ?? null)) ? ("claro-details__content--accordion") : ("")), ((        // line 43
($context["accordion_item"] ?? null)) ? ("claro-details__content--accordion-item") : ("")), (((($__internal_compile_2 =         // line 44
($context["element"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#module_package_listing"] ?? null) : null)) ? ("claro-details__content--package-listing") : (""))];
        // line 47
        yield "<details";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        yield ">";
        // line 48
        if (($context["title"] ?? null)) {
            // line 50
            $context["summary_classes"] = ["claro-details__summary", ((            // line 52
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((            // line 53
($context["required"] ?? null)) ? ("form-required") : ("")), ((            // line 54
($context["accordion"] ?? null)) ? ("claro-details__summary--accordion") : ("")), ((            // line 55
($context["accordion_item"] ?? null)) ? ("claro-details__summary--accordion-item") : ("")), (((($__internal_compile_3 =             // line 56
($context["element"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#module_package_listing"] ?? null) : null)) ? ("claro-details__summary--package-listing") : (""))];
            // line 60
            yield "    <summary";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "html", null, true);
            yield ">";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 61, $this->source), "html", null, true);
            // line 62
            if (($context["required"] ?? null)) {
                // line 63
                yield "<span class=\"required-mark\"></span>";
            }
            // line 65
            yield "</summary>";
        }
        // line 67
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_wrapper_classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
        yield ">
    ";
        // line 68
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 69
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["inner_wrapper_classes"] ?? null)]), "html", null, true);
            yield ">
    ";
        }
        // line 71
        yield "
      ";
        // line 72
        if (($context["errors"] ?? null)) {
            // line 73
            yield "        <div class=\"form-item form-item__error-message\">
          ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 74, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 77
        if (($context["description"] ?? null)) {
            // line 78
            yield "<div class=\"claro-details__description";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["disabled"] ?? null)) ? (" is-disabled") : ("")));
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 78, $this->source), "html", null, true);
            yield "</div>";
        }
        // line 80
        if (($context["children"] ?? null)) {
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 81, $this->source), "html", null, true);
        }
        // line 83
        if (($context["value"] ?? null)) {
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 84, $this->source), "html", null, true);
        }
        // line 87
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 88
            yield "    </div>
    ";
        }
        // line 90
        yield "  </div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["accordion", "accordion_item", "element", "attributes", "title", "required", "summary_attributes", "content_attributes", "errors", "description", "disabled", "children", "value"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/details.html.twig";
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
        return array (  134 => 90,  130 => 88,  128 => 87,  125 => 84,  123 => 83,  120 => 81,  118 => 80,  111 => 78,  109 => 77,  103 => 74,  100 => 73,  98 => 72,  95 => 71,  89 => 69,  87 => 68,  82 => 67,  79 => 65,  76 => 63,  74 => 62,  72 => 61,  68 => 60,  66 => 56,  65 => 55,  64 => 54,  63 => 53,  62 => 52,  61 => 50,  59 => 48,  55 => 47,  53 => 44,  52 => 43,  51 => 42,  50 => 40,  48 => 36,  47 => 35,  46 => 34,  45 => 31,  43 => 27,  42 => 26,  41 => 25,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/details.html.twig", "/var/www/html/web/core/themes/claro/templates/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 48);
        static $filters = array("escape" => 47);
        static $functions = array("create_attribute" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['create_attribute'],
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
