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

/* core/themes/claro/templates/admin/tablesort-indicator.html.twig */
class __TwigTemplate_e55aca4ba4ff61450c4e5a080f4d4293 extends Template
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
        // line 13
        $context["classes"] = ["tablesort", ("tablesort--" . $this->sandbox->ensureToStringAllowed(        // line 15
($context["style"] ?? null), 15, $this->source))];
        // line 18
        yield "<span";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        yield ">
  ";
        // line 19
        if (CoreExtension::inFilter(($context["style"] ?? null), ["asc", "desc"])) {
            // line 20
            yield "    <span class=\"visually-hidden\">
      ";
            // line 21
            if ((($context["style"] ?? null) == "asc")) {
                // line 22
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sort ascending"));
                yield "
      ";
            } else {
                // line 24
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sort descending"));
                yield "
      ";
            }
            // line 26
            yield "    </span>
  ";
        }
        // line 28
        yield "</span>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["style", "attributes"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/admin/tablesort-indicator.html.twig";
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
        return array (  69 => 28,  65 => 26,  60 => 24,  55 => 22,  53 => 21,  50 => 20,  48 => 19,  43 => 18,  41 => 15,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/admin/tablesort-indicator.html.twig", "/var/www/html/web/core/themes/claro/templates/admin/tablesort-indicator.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 19);
        static $filters = array("escape" => 18, "t" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
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
