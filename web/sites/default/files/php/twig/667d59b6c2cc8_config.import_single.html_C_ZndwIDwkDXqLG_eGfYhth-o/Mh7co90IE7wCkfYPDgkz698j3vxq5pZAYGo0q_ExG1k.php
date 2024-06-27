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

/* @help_topics/config.import_single.html.twig */
class __TwigTemplate_691493bea36cb9331ac12fe909450fa4 extends Template
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
        // line 9
        $context["single_import_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Single item", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["single_import_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["single_import_link_text"] ?? null), 10, $this->source), "config.import_single"));
        // line 11
        $context["export_single_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("config.export_single"));
        // line 12
        $context["config_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.config_overview"));
        // line 13
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 14
        yield t("Import a single configuration item in YAML format, such as one that was previously exported (see @export_single_topic). See @config_overview_topic for more information about configuration.", array("@export_single_topic" => ($context["export_single_topic"] ?? null), "@config_overview_topic" => ($context["config_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 15
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 17
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em>Configuration synchronization</em> &gt; <em>Import</em> &gt; <em>@single_import_link</em>.", array("@single_import_link" => ($context["single_import_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 18
        yield t("Select the <em>Configuration type</em> that you want to import.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("On your computer or other device, copy the YAML-format configuration that you want to import to the clipboard.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("Paste the clipboard text into the box labeled <em>Paste your configuration here</em>.", array());
        yield "</li>
  <li>";
        // line 21
        yield t("Click <em>Import</em>.", array());
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/config.import_single.html.twig";
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
        return array (  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  60 => 15,  56 => 14,  51 => 13,  49 => 12,  47 => 11,  45 => 10,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/config.import_single.html.twig", "/var/www/html/web/core/modules/config/help_topics/config.import_single.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 9);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 10, "help_route_link" => 10, "help_topic_link" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link', 'help_topic_link'],
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
