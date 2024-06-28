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

/* core/themes/olivero/templates/content/node--teaser.html.twig */
class __TwigTemplate_60f462384f89a846d240483b46fbced1 extends Template
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
        // line 69
        yield "
";
        // line 71
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "bundle", [], "any", false, false, true, 73), 73, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 74)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 75)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 76)) ? ("node--unpublished") : ("")), ((        // line 77
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 77, $this->source)))) : (""))];
        // line 80
        yield "

";
        // line 82
        yield from         $this->loadTemplate("core/themes/olivero/templates/content/node--teaser.html.twig", "core/themes/olivero/templates/content/node--teaser.html.twig", 82, "111156771")->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 83
($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 83), "author_attributes" =>         // line 84
($context["author_attributes"] ?? null), "author_name" =>         // line 85
($context["author_name"] ?? null), "content" =>         // line 86
($context["content"] ?? null), "date" =>         // line 87
($context["date"] ?? null), "display_submitted" =>         // line 88
($context["display_submitted"] ?? null), "label" =>         // line 89
($context["label"] ?? null), "metadata" =>         // line 90
($context["metadata"] ?? null), "title_attributes" =>         // line 91
($context["title_attributes"] ?? null), "title_prefix" =>         // line 92
($context["title_prefix"] ?? null), "title_suffix" =>         // line 93
($context["title_suffix"] ?? null), "read_more" =>         // line 94
($context["read_more"] ?? null), "url" =>         // line 95
($context["url"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "author_attributes", "author_name", "content", "date", "display_submitted", "label", "metadata", "title_attributes", "title_prefix", "title_suffix", "read_more", "url"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/content/node--teaser.html.twig";
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
        return array (  67 => 95,  66 => 94,  65 => 93,  64 => 92,  63 => 91,  62 => 90,  61 => 89,  60 => 88,  59 => 87,  58 => 86,  57 => 85,  56 => 84,  55 => 83,  54 => 82,  50 => 80,  48 => 77,  47 => 76,  46 => 75,  45 => 74,  44 => 73,  43 => 71,  40 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/content/node--teaser.html.twig", "/var/www/html/web/core/themes/olivero/templates/content/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "embed" => 82);
        static $filters = array("clean_class" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
                ['clean_class'],
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


/* core/themes/olivero/templates/content/node--teaser.html.twig */
class __TwigTemplate_60f462384f89a846d240483b46fbced1___111156771 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'prefix' => [$this, 'block_prefix'],
            'meta' => [$this, 'block_meta'],
            'image' => [$this, 'block_image'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 82
        return "olivero:teaser";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("olivero:teaser", "core/themes/olivero/templates/content/node--teaser.html.twig", 82);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_prefix", "title_suffix", "display_submitted", "author_attributes", "author_name", "date", "metadata", "content", "label", "page", "title_attributes", "url"]);    }

    // line 97
    public function block_prefix($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 98, $this->source), "html", null, true);
        yield "
    ";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 99, $this->source), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    // line 101
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        yield "    ";
        if (($context["display_submitted"] ?? null)) {
            // line 103
            yield "      <div class=\"node__meta\">
        <span";
            // line 104
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 104, $this->source), "html", null, true);
            yield ">
          ";
            // line 105
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
            yield " ";
            $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "<span class=\"node__author\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 105, $this->source), "html", null, true);
                yield "</span>";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
            yield ", ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 105, $this->source), "html", null, true);
            yield "
        </span>
        ";
            // line 107
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 107, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 110
        yield "  ";
        return; yield '';
    }

    // line 111
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        return; yield '';
    }

    // line 112
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        yield "    ";
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 114
            yield "      <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title", "teaser__title"], "method", false, false, true, 114), 114, $this->source), "html", null, true);
            yield ">
        <a href=\"";
            // line 115
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 115, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 115, $this->source), "html", null, true);
            yield "</a>
      </h2>
    ";
        }
        // line 118
        yield "  ";
        return; yield '';
    }

    // line 119
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 120, $this->source), "field_image", "links"), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/content/node--teaser.html.twig";
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
        return array (  263 => 120,  259 => 119,  254 => 118,  246 => 115,  241 => 114,  238 => 113,  234 => 112,  226 => 111,  221 => 110,  215 => 107,  200 => 105,  196 => 104,  193 => 103,  190 => 102,  186 => 101,  179 => 99,  174 => 98,  170 => 97,  158 => 82,  67 => 95,  66 => 94,  65 => 93,  64 => 92,  63 => 91,  62 => 90,  61 => 89,  60 => 88,  59 => 87,  58 => 86,  57 => 85,  56 => 84,  55 => 83,  54 => 82,  50 => 80,  48 => 77,  47 => 76,  46 => 75,  45 => 74,  44 => 73,  43 => 71,  40 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/content/node--teaser.html.twig", "/var/www/html/web/core/themes/olivero/templates/content/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 102, "apply" => 105);
        static $filters = array("escape" => 98, "t" => 105, "spaceless" => 105, "without" => 120);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply'],
                ['escape', 't', 'spaceless', 'without'],
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
