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

/* core/themes/olivero/templates/layout/html.html.twig */
class __TwigTemplate_2a94b6994cc1db04a74e62c0d16ea758 extends Template
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
        // line 29
        $context["body_classes"] = [((        // line 30
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 31
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 31, $this->source))))), ((        // line 32
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 32, $this->source)))) : ("")), ((        // line 33
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 36
        yield "<!DOCTYPE html>
<html";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 37, $this->source), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 39, $this->source), "html", null, true);
        yield "\">
    <title>";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 40, $this->source), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source), "html", null, true);
        yield "\">
    <js-placeholder token=\"";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 42, $this->source), "html", null, true);
        yield "\">
    ";
        // line 43
        yield from         $this->loadTemplate("@olivero/includes/preload.twig", "core/themes/olivero/templates/layout/html.html.twig", 43)->unwrap()->yield(CoreExtension::toArray(["olivero_path" => ($context["olivero_path"] ?? null)]));
        // line 44
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["noscript_styles"] ?? null), 44, $this->source), "html", null, true);
        yield "
  </head>
  <body";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
        yield ">
    ";
        // line 51
        yield "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 54, $this->source), "html", null, true);
        yield "
    ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 55, $this->source), "html", null, true);
        yield "
    ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 56, $this->source), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 57, $this->source), "html", null, true);
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "html_attributes", "placeholder_token", "head_title", "olivero_path", "noscript_styles", "attributes", "page_top", "page", "page_bottom"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/layout/html.html.twig";
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
        return array (  102 => 57,  98 => 56,  94 => 55,  90 => 54,  85 => 52,  82 => 51,  78 => 46,  72 => 44,  70 => 43,  66 => 42,  62 => 41,  58 => 40,  54 => 39,  49 => 37,  46 => 36,  44 => 33,  43 => 32,  42 => 31,  41 => 30,  40 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/layout/html.html.twig", "/var/www/html/web/core/themes/olivero/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "include" => 43);
        static $filters = array("clean_class" => 31, "escape" => 37, "safe_join" => 40, "t" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class', 'escape', 'safe_join', 't'],
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
