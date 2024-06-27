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

/* @help_topics/help.help_topic_search.html.twig */
class __TwigTemplate_14c971824e2c6a4e765beb7d511a26d3 extends Template
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
        $context["extend_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Extend", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["help_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Help", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["extend_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["extend_link_text"] ?? null), 11, $this->source), "system.modules_list"));
        // line 12
        $context["help_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["help_link_text"] ?? null), 12, $this->source), "help.main"));
        // line 13
        $context["cache_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("system.cache"));
        // line 14
        $context["cron_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.cron"));
        // line 15
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 16
        yield t("Set up your site so that users can search for help.", array());
        yield "</p>
<h2>";
        // line 17
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 19
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>@extend_link</em>. Verify that the Search, Help, and Block modules are installed (or install them if they are not already installed).", array("@extend_link" => ($context["extend_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 20
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Search and metadata</em> &gt; <em>Search pages</em>.", array());
        yield "</li>
  <li>";
        // line 21
        yield t("Verify that a Help search page is listed in the <em>Search pages</em> section. If not, add a new page of type <em>Help</em>.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("Check the indexing status of the Help search page. If it is not fully indexed, see @cron_topic about how to run Cron until indexing is complete.", array("@cron_topic" => ($context["cron_topic"] ?? null), ));
        yield "</li>
  <li>";
        // line 23
        yield t("In the future, you can click <em>Rebuild search index</em> on this page, or @cache_topic, in order to force help topic text to be reindexed for searching. This should be done whenever a module, theme, language, or string translation is updated.", array("@cache_topic" => ($context["cache_topic"] ?? null), ));
        yield "</li>
  <li>";
        // line 24
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>Block layout</em>.", array());
        yield "</li>
  <li>";
        // line 25
        yield t("Click the link for your administrative theme (such as the core Claro theme), near the top of the page, and verify that there is already a search block for help located in the Help region. If not, follow the steps in the related topic to place the <em>Search form</em> block in the Help region. When configuring the block, choose <em>Help</em> as the search page, and in the <em>Pages</em> tab under <em>Visibility</em>, enter <em>/admin/help</em> to make the search form only visible on the main <em>Help</em> page.", array());
        yield "</li>
  <li>";
        // line 26
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>@help_link</em>. Verify that the search block is visible, and try a search.", array("@help_link" => ($context["help_link"] ?? null), ));
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/help.help_topic_search.html.twig";
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
        return array (  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  67 => 17,  63 => 16,  58 => 15,  56 => 14,  54 => 13,  52 => 12,  50 => 11,  45 => 10,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/help.help_topic_search.html.twig", "/var/www/html/web/core/modules/help/help_topics/help.help_topic_search.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 9);
        static $filters = array("escape" => 19);
        static $functions = array("render_var" => 11, "help_route_link" => 11, "help_topic_link" => 13);

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
