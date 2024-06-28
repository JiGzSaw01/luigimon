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

/* core/themes/claro/templates/filter/filter-tips.html.twig */
class __TwigTemplate_e2f900501f029fe8b2226bb71811066a extends Template
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
        // line 20
        if (($context["multiple"] ?? null)) {
            // line 21
            yield "  <h2>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Text Formats"));
            yield "</h2>
";
        }
        // line 23
        yield "
";
        // line 24
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tips"] ?? null))) {
            // line 25
            yield "  ";
            if (($context["multiple"] ?? null)) {
                // line 26
                yield "    <div class=\"compose-tips\">
  ";
            }
            // line 28
            yield "
  ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tips"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 30
                yield "    ";
                if (($context["multiple"] ?? null)) {
                    // line 31
                    yield "      ";
                    // line 32
                    $context["tip_classes"] = ["compose-tips__item", ("compose-tips__item--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 34
$context["name"], 34, $this->source)))];
                    // line 37
                    yield "      <div";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "attributes", [], "any", false, false, true, 37), "addClass", [($context["tip_classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
                    yield ">
    ";
                }
                // line 39
                yield "    ";
                if ((($context["multiple"] ?? null) || ($context["long"] ?? null))) {
                    // line 40
                    yield "      <h3>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "name", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    yield "</h3>
    ";
                }
                // line 42
                yield "
    ";
                // line 43
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "list", [], "any", false, false, true, 43))) {
                    // line 44
                    yield "      <ul class=\"filter-tips ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["long"] ?? null)) ? ("filter-tips--long") : ("filter-tips--short")));
                    yield "\">
      ";
                    // line 45
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "list", [], "any", false, false, true, 45));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 46
                        yield "        ";
                        // line 47
                        $context["item_classes"] = ["filter-tips__item", ((                        // line 49
($context["long"] ?? null)) ? ("filter-tips__item--long") : ("filter-tips__item--short")), ((                        // line 50
($context["long"] ?? null)) ? (("filter-tips__item--id-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 50), 50, $this->source)))) : (""))];
                        // line 53
                        yield "        <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 53), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 53), 53, $this->source), "html", null, true);
                        yield ">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tip", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        yield "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    yield "      </ul>
    ";
                }
                // line 57
                yield "
    ";
                // line 58
                if (($context["multiple"] ?? null)) {
                    // line 59
                    yield "      </div>
    ";
                }
                // line 61
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "
  ";
            // line 63
            if (($context["multiple"] ?? null)) {
                // line 64
                yield "    </div>
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["multiple", "tips", "long"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/filter/filter-tips.html.twig";
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
        return array (  145 => 64,  143 => 63,  140 => 62,  134 => 61,  130 => 59,  128 => 58,  125 => 57,  121 => 55,  110 => 53,  108 => 50,  107 => 49,  106 => 47,  104 => 46,  100 => 45,  95 => 44,  93 => 43,  90 => 42,  84 => 40,  81 => 39,  75 => 37,  73 => 34,  72 => 32,  70 => 31,  67 => 30,  63 => 29,  60 => 28,  56 => 26,  53 => 25,  51 => 24,  48 => 23,  42 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/filter/filter-tips.html.twig", "/var/www/html/web/core/themes/claro/templates/filter/filter-tips.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "for" => 29, "set" => 32);
        static $filters = array("t" => 21, "length" => 24, "clean_class" => 34, "escape" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'length', 'clean_class', 'escape'],
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
