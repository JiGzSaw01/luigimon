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

/* core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig */
class __TwigTemplate_b72fbe6ac1df34acd2cca4322e6fd181 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/navigation-secondary"), "html", null, true);
        yield "

";
        // line 25
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        yield "
";
        // line 31
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu"], "method", false, false, true, 31);
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 32, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "menu_level"]);        return; yield '';
    }

    // line 34
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

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 35
            yield "  ";
            $context["secondary_nav_level"] = ("secondary-nav__menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 36
            yield "  ";
            $macros["menus"] = $this;
            // line 37
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 38
                yield "    <ul";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["secondary-nav__menu", ($context["secondary_nav_level"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
                yield ">
      ";
                // line 39
                $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["secondary_nav_level"] ?? null)], "method", false, false, true, 39);
                // line 40
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    yield "
        ";
                    // line 42
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "isRouted", [], "any", false, false, true, 42) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "routeName", [], "any", false, false, true, 42) == "<nolink>"))) {
                        // line 43
                        yield "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 44
                        yield "        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), "isRouted", [], "any", false, false, true, 44) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), "routeName", [], "any", false, false, true, 44) == "<button>"))) {
                        // line 45
                        yield "          ";
                        $context["menu_item_type"] = "button";
                        // line 46
                        yield "        ";
                    } else {
                        // line 47
                        yield "          ";
                        $context["menu_item_type"] = "link";
                        // line 48
                        yield "        ";
                    }
                    // line 49
                    yield "
        ";
                    // line 50
                    $context["item_classes"] = ["secondary-nav__menu-item", ("secondary-nav__menu-item--" . $this->sandbox->ensureToStringAllowed(                    // line 52
($context["menu_item_type"] ?? null), 52, $this->source)), ("secondary-nav__menu-item--level-" . (                    // line 53
($context["menu_level"] ?? null) + 1)), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 54
$context["item"], "in_active_trail", [], "any", false, false, true, 54)) ? ("secondary-nav__menu-item--active-trail") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 55
$context["item"], "below", [], "any", false, false, true, 55)) ? ("secondary-nav__menu-item--has-children") : (""))];
                    // line 58
                    yield "
        ";
                    // line 59
                    $context["link_classes"] = ["secondary-nav__menu-link", ("secondary-nav__menu-link--" . $this->sandbox->ensureToStringAllowed(                    // line 61
($context["menu_item_type"] ?? null), 61, $this->source)), ("secondary-nav__menu-link--level-" . (                    // line 62
($context["menu_level"] ?? null) + 1)), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 63
$context["item"], "in_active_trail", [], "any", false, false, true, 63)) ? ("secondary-nav__menu-link--active-trail") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 64
$context["item"], "below", [], "any", false, false, true, 64)) ? ("secondary-nav__menu-link--has-children") : (""))];
                    // line 67
                    yield "
        <li";
                    // line 68
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 68), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 68), 68, $this->source), "html", null, true);
                    yield ">
          ";
                    // line 69
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 69), 69, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 69), 69, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    yield "

          ";
                    // line 71
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 71)) {
                        // line 72
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 72), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 72, $context, $this->getSourceContext()));
                        yield "
          ";
                    }
                    // line 74
                    yield "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                yield "    </ul>
  ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig";
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
        return array (  164 => 76,  157 => 74,  151 => 72,  149 => 71,  144 => 69,  140 => 68,  137 => 67,  135 => 64,  134 => 63,  133 => 62,  132 => 61,  131 => 59,  128 => 58,  126 => 55,  125 => 54,  124 => 53,  123 => 52,  122 => 50,  119 => 49,  116 => 48,  113 => 47,  110 => 46,  107 => 45,  104 => 44,  101 => 43,  99 => 42,  96 => 41,  91 => 40,  89 => 39,  84 => 38,  81 => 37,  78 => 36,  75 => 35,  61 => 34,  52 => 32,  50 => 31,  47 => 26,  45 => 25,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 25, "set" => 31, "macro" => 34, "if" => 37, "for" => 40);
        static $filters = array("escape" => 23);
        static $functions = array("attach_library" => 23, "link" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['escape'],
                ['attach_library', 'link'],
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
