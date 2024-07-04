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

/* @claro/content-edit/file-managed-file.html.twig */
class __TwigTemplate_b099b213e79c19520bfec33064ac6204 extends Template
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
        // line 25
        $context["classes"] = ["js-form-managed-file", "form-managed-file", ((        // line 28
($context["multiple"] ?? null)) ? ("is-multiple") : ("is-single")), ((        // line 29
($context["upload"] ?? null)) ? ("has-upload") : ("no-upload")), ((        // line 30
($context["has_value"] ?? null)) ? ("has-value") : ("no-value")), ((        // line 31
($context["has_meta"] ?? null)) ? ("has-meta") : ("no-meta"))];
        // line 34
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 34), "removeClass", ["clearfix"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
        yield ">
  <div class=\"form-managed-file__main\">
    ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["main_items"] ?? null), "filename", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        yield "
    ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["main_items"] ?? null), 37, $this->source), "filename"), "html", null, true);
        yield "
  </div>

  ";
        // line 40
        if ((($context["has_meta"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 40))) {
            // line 41
            yield "  <div class=\"form-managed-file__meta-wrapper\">
    <div class=\"form-managed-file__meta\">
      ";
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 43)) {
                // line 44
                yield "        <div class=\"form-managed-file__image-preview image-preview\">
          <div class=\"image-preview__img-wrapper\">
            ";
                // line 46
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                yield "
          </div>
        </div>
      ";
            }
            // line 50
            yield "
      ";
            // line 51
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "description", [], "any", false, false, true, 51) || ($context["display"] ?? null)) || CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "alt", [], "any", false, false, true, 51)) || CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, true, 51))) {
                // line 52
                yield "        <div class=\"form-managed-file__meta-items\">
          ";
                // line 53
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "description", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                yield "
          ";
                // line 54
                if (($context["display"] ?? null)) {
                    // line 55
                    yield "            ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "display", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                    yield "
          ";
                }
                // line 57
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "alt", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                yield "
          ";
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 61
            yield "    </div>
  </div>
  ";
        }
        // line 64
        yield "
  ";
        // line 66
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 66, $this->source), "preview", "alt", "title", "description", "display"), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["multiple", "upload", "has_value", "has_meta", "attributes", "main_items", "data", "display"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@claro/content-edit/file-managed-file.html.twig";
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
        return array (  120 => 66,  117 => 64,  112 => 61,  106 => 58,  101 => 57,  95 => 55,  93 => 54,  89 => 53,  86 => 52,  84 => 51,  81 => 50,  74 => 46,  70 => 44,  68 => 43,  64 => 41,  62 => 40,  56 => 37,  52 => 36,  46 => 34,  44 => 31,  43 => 30,  42 => 29,  41 => 28,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@claro/content-edit/file-managed-file.html.twig", "/var/www/html/web/core/themes/claro/templates/content-edit/file-managed-file.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 25, "if" => 40);
        static $filters = array("escape" => 34, "without" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'without'],
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
