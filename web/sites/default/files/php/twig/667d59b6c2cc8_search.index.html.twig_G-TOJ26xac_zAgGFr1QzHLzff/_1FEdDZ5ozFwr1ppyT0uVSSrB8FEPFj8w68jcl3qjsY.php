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

/* @help_topics/search.index.html.twig */
class __TwigTemplate_22a2a2bcc70567b1780c9b3a90f8c889 extends Template
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
        // line 7
        $context["cron_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.cron"));
        // line 8
        $context["search_settings_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Search pages", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["search_settings_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["search_settings_link_text"] ?? null), 9, $this->source), "entity.search_page.collection"));
        // line 10
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 11
        yield t("Manage the search index, and make sure that the site is fully indexed for searching.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("What is the search index?", array());
        yield "</h2>
<p>";
        // line 13
        yield t("The <em>Content</em> and <em>Help</em> search types provided by the core software pre-index their content and store the results in several database tables that are collectively called the <em>search index</em>. The process of indexing renders the content and breaks it up into words, which can then be matched more efficiently with keyword queries when users perform searches. Search indexing happens during cron runs; see @cron_topic for more information about cron.", array("@cron_topic" => ($context["cron_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 14
        yield t("Steps", array());
        yield "</h2>
<ol>
<li>";
        // line 16
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Search and Metadata</em> &gt; <em>@search_settings_link</em>.", array("@search_settings_link" => ($context["search_settings_link"] ?? null), ));
        yield "</li>
<li>";
        // line 17
        yield t("Under <em>Indexing throttle</em>, select the <em>Number of items to index per cron run</em>. A smaller number will make cron faster and reduce the possibility of timeout; a larger number will make sure more of your site is indexed in fewer cron runs.", array());
        yield "</li>
<li>";
        // line 18
        yield t("Under <em>Default indexing settings</em>, enter the desired <em>Minimum word length to index</em>. Words smaller than this length will be dropped from both keywords when searching and content when indexing.", array());
        yield "</li>
<li>";
        // line 19
        yield t("If your site uses Chinese, Japanese, or Korean languages, optionally check <em>Simple CJK handling</em> under <em>Default indexing settings</em> to provide some support for these languages.", array());
        yield "</li>
<li>";
        // line 20
        yield t("Click <em>Save configuration</em>, and you should be returned to the <em>Search pages</em> page.", array());
        yield "</li>
<li>";
        // line 21
        yield t("Click <em>Re-index site</em> if you have changed the indexing configuration, or later on, if you believe that the search index has been corrupted.", array());
        yield "</li>
<li>";
        // line 22
        yield t("Follow the steps in @cron_topic to make sure a cron task has been configured.", array("@cron_topic" => ($context["cron_topic"] ?? null), ));
        yield "</li>
<li>";
        // line 23
        yield t("After waiting for cron to run several times, verify that the content has been fully indexed for searching. The overall status is listed under <em>Indexing progress</em>, and the status for each search page is shown in the <em>Indexing progress</em> column of the <em>Search pages</em> section.", array());
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/search.index.html.twig";
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
        return array (  99 => 23,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  49 => 10,  47 => 9,  42 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/search.index.html.twig", "/var/www/html/web/core/modules/search/help_topics/search.index.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 7, "help_topic_link" => 7, "help_route_link" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_topic_link', 'help_route_link'],
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
