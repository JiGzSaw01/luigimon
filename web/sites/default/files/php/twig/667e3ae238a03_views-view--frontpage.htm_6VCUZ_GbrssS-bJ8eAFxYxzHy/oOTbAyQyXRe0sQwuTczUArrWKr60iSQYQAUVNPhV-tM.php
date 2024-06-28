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

/* core/themes/olivero/templates/views/views-view--frontpage.html.twig */
class __TwigTemplate_1d3f6d4c0c35e29a11d678db7370ba62 extends Template
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
        // line 35
        yield "
";
        // line 37
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null), 39, $this->source))), ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["id"] ?? null), 40, $this->source)), ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 41
($context["display_id"] ?? null), 41, $this->source)), "grid-full", "layout--pass--content-narrow", ((        // line 44
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 44, $this->source))) : (""))];
        // line 47
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        yield ">
  ";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 48, $this->source), "html", null, true);
        yield "
  ";
        // line 49
        if (($context["title"] ?? null)) {
            // line 50
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 50, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 52
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 52, $this->source), "html", null, true);
        yield "
  ";
        // line 53
        if (($context["header"] ?? null)) {
            // line 54
            yield "    <div class=\"view-header\">
      ";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 55, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 58
        yield "  ";
        if (($context["exposed"] ?? null)) {
            // line 59
            yield "    <div class=\"view-filters\">
      ";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 60, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 63
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 64
            yield "    <div class=\"attachment attachment-before\">
      ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 65, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 68
        yield "
  ";
        // line 69
        if (($context["rows"] ?? null)) {
            // line 70
            yield "    <div class=\"view-content\">
      ";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 71, $this->source), "html", null, true);
            yield "
    </div>
  ";
        } elseif (        // line 73
($context["empty"] ?? null)) {
            // line 74
            yield "    ";
            yield from             $this->loadTemplate("@olivero/includes/get-started.html.twig", "core/themes/olivero/templates/views/views-view--frontpage.html.twig", 74)->unwrap()->yield($context);
            // line 75
            yield "  ";
        }
        // line 76
        yield "
  ";
        // line 77
        if (($context["pager"] ?? null)) {
            // line 78
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 78, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 80
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 81
            yield "    <div class=\"attachment attachment-after\">
      ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 82, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 85
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 86
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 86, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 88
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 89
            yield "    <div class=\"view-footer\">
      ";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 90, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 93
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/views/views-view--frontpage.html.twig";
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
        return array (  171 => 93,  165 => 90,  162 => 89,  159 => 88,  153 => 86,  150 => 85,  144 => 82,  141 => 81,  138 => 80,  132 => 78,  130 => 77,  127 => 76,  124 => 75,  121 => 74,  119 => 73,  114 => 71,  111 => 70,  109 => 69,  106 => 68,  100 => 65,  97 => 64,  94 => 63,  88 => 60,  85 => 59,  82 => 58,  76 => 55,  73 => 54,  71 => 53,  66 => 52,  60 => 50,  58 => 49,  54 => 48,  49 => 47,  47 => 44,  46 => 41,  45 => 40,  44 => 39,  43 => 37,  40 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/views/views-view--frontpage.html.twig", "/var/www/html/web/core/themes/olivero/templates/views/views-view--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 37, "if" => 49, "include" => 74);
        static $filters = array("clean_class" => 39, "escape" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
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
