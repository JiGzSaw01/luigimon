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

/* core/themes/olivero/templates/content/node.html.twig */
class __TwigTemplate_02c24b6b8d9c429b13119d2a63c2d5d9 extends Template
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
        // line 70
        $context["layout"] = ((($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 70, $this->source)))) : (""));
        // line 71
        yield "
";
        // line 73
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "bundle", [], "any", false, false, true, 75), 75, $this->source))), ((        // line 76
($context["layout"] ?? null)) ? ("grid-full") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 77)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 78)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 79)) ? ("node--unpublished") : ("")), ((        // line 80
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 80, $this->source)))) : (""))];
        // line 83
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 83), 83, $this->source), "html", null, true);
        yield ">
  <header class=\"";
        // line 84
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 84, $this->source), "html", null, true);
        yield "\">
    ";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 85, $this->source), "html", null, true);
        yield "
      ";
        // line 86
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 87
            yield "      <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 87), 87, $this->source), "html", null, true);
            yield ">
        <a href=\"";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 88, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 88, $this->source), "html", null, true);
            yield "</a>
      </h2>
    ";
        }
        // line 91
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 91, $this->source), "html", null, true);
        yield "
    ";
        // line 92
        if (($context["display_submitted"] ?? null)) {
            // line 93
            yield "      <div class=\"node__meta\">
      ";
            // line 94
            if (($context["author_picture"] ?? null)) {
                // line 95
                yield "        <div class=\"node__author-image\">
          ";
                // line 96
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 96, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 99
            yield "        <span";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 99, $this->source), "html", null, true);
            yield ">
          ";
            // line 100
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
            yield " ";
            $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 100, $this->source), "html", null, true);
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
            yield ", ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 100, $this->source), "html", null, true);
            yield "
        </span>
        ";
            // line 102
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 102, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 105
        yield "  </header>
  <div";
        // line 106
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", ($context["layout"] ?? null)], "method", false, false, true, 106), 106, $this->source), "html", null, true);
        yield ">
    ";
        // line 108
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 108, $this->source), "comment"), "html", null, true);
        yield "
  </div>
  ";
        // line 110
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 110)) {
            // line 111
            yield "    <div id=\"comments\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 111, $this->source), "html", null, true);
            yield "\">
      ";
            // line 112
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 115
        yield "</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "title_prefix", "label", "page", "title_attributes", "url", "title_suffix", "display_submitted", "author_picture", "author_attributes", "author_name", "date", "metadata", "content_attributes", "content"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/content/node.html.twig";
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
        return array (  155 => 115,  149 => 112,  144 => 111,  142 => 110,  136 => 108,  132 => 106,  129 => 105,  123 => 102,  110 => 100,  105 => 99,  99 => 96,  96 => 95,  94 => 94,  91 => 93,  89 => 92,  84 => 91,  76 => 88,  71 => 87,  69 => 86,  65 => 85,  61 => 84,  56 => 83,  54 => 80,  53 => 79,  52 => 78,  51 => 77,  50 => 76,  49 => 75,  48 => 73,  45 => 71,  43 => 70,  40 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/content/node.html.twig", "/var/www/html/web/core/themes/olivero/templates/content/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 86, "apply" => 100);
        static $filters = array("clean_class" => 70, "escape" => 83, "t" => 100, "spaceless" => 100, "without" => 108);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'apply'],
                ['clean_class', 'escape', 't', 'spaceless', 'without'],
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
