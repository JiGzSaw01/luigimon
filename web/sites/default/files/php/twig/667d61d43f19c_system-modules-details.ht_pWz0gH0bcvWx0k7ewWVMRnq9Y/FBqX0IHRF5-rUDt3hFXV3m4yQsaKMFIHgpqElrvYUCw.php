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

/* core/themes/claro/templates/admin/system-modules-details.html.twig */
class __TwigTemplate_21710754cd88e6322e626a6ed377b00d extends Template
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
        // line 27
        yield "<table class=\"responsive-enabled module-list\">
  <thead>
    <tr>
      <th class=\"checkbox visually-hidden\">";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Installed"));
        yield "</th>
      <th class=\"name visually-hidden\">";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Name"));
        yield "</th>
      <th class=\"description visually-hidden priority-low\">";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
        yield "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 37
            yield "      <tr";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, true, 37), "addClass", ["module-list__module"], "method", false, false, true, 37), 37, $this->source), "html", null, true);
            yield ">
        <td class=\"module-list__checkbox\">
          ";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "checkbox", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            yield "
        </td>
        <td class=\"module-list__module\">
          <label id=\"";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            yield "\" for=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            yield "\" class=\"module-list__module-name table-filter-text-source\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            yield "</label>
        </td>
        <td class=\"expand priority-low module-list__description\">
          <details class=\"js-form-wrapper form-wrapper module-list__module-details claro-details\" id=\"";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            yield "-description\">
            <summary aria-controls=\"";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            yield "-description\" role=\"button\" aria-expanded=\"false\" class=\"claro-details__summary module-list__module-summary\"><span class=\"text module-description\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "description", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            yield "</span></summary>
            <div class=\"claro-details__wrapper module-details__wrapper\">
              <div class=\"module-details__description\">
                <div class=\"module-details__requirements\">
                  <div class=\"module-details__requirement\">";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Machine name: <span dir=\"ltr\" class=\"table-filter-text-source\">@machine-name</span>", ["@machine-name" => CoreExtension::getAttribute($this->env, $this->source, $context["module"], "machine_name", [], "any", false, false, true, 50)]));
            yield "</div>
                  ";
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, $context["module"], "version", [], "any", false, false, true, 51)) {
                // line 52
                yield "                    <div class=\"module-details__requirement\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Version: @module-version", ["@module-version" => CoreExtension::getAttribute($this->env, $this->source, $context["module"], "version", [], "any", false, false, true, 52)]));
                yield "</div>
                  ";
            }
            // line 54
            yield "                  ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["module"], "requires", [], "any", false, false, true, 54)) {
                // line 55
                yield "                    <div class=\"module-details__requirement\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Requires: @module-list", ["@module-list" => CoreExtension::getAttribute($this->env, $this->source, $context["module"], "requires", [], "any", false, false, true, 55)]));
                yield "</div>
                  ";
            }
            // line 57
            yield "                  ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["module"], "required_by", [], "any", false, false, true, 57)) {
                // line 58
                yield "                    <div class=\"module-details__requirement\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Required by: @module-list", ["@module-list" => CoreExtension::getAttribute($this->env, $this->source, $context["module"], "required_by", [], "any", false, false, true, 58)]));
                yield "</div>
                  ";
            }
            // line 60
            yield "                </div>
                ";
            // line 61
            if (CoreExtension::getAttribute($this->env, $this->source, $context["module"], "links", [], "any", false, false, true, 61)) {
                // line 62
                yield "                  <div class=\"module-details__links\">
                    ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(["help", "permissions", "configure"]);
                foreach ($context['_seq'] as $context["_key"] => $context["link_type"]) {
                    // line 64
                    yield "                      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["module"], "links", [], "any", false, false, true, 64)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["link_type"]] ?? null) : null), 64, $this->source), "html", null, true);
                    yield "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                yield "                  </div>
                ";
            }
            // line 68
            yield "              </div>
            </div>
          </details>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "  </tbody>
</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["modules"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/admin/system-modules-details.html.twig";
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
        return array (  165 => 74,  154 => 68,  150 => 66,  141 => 64,  137 => 63,  134 => 62,  132 => 61,  129 => 60,  123 => 58,  120 => 57,  114 => 55,  111 => 54,  105 => 52,  103 => 51,  99 => 50,  90 => 46,  86 => 45,  76 => 42,  70 => 39,  64 => 37,  60 => 36,  53 => 32,  49 => 31,  45 => 30,  40 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/admin/system-modules-details.html.twig", "/var/www/html/web/core/themes/claro/templates/admin/system-modules-details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 36, "if" => 51);
        static $filters = array("t" => 30, "escape" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['t', 'escape'],
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
