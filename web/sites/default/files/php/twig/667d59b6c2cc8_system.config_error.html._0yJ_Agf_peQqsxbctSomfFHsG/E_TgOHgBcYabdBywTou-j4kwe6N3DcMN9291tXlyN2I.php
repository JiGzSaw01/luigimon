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

/* @help_topics/system.config_error.html.twig */
class __TwigTemplate_6b0f14a6bba1520827a9778709ad7f3e extends Template
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
        $context["log_settings_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Logging and errors", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["log_settings_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["log_settings_link_text"] ?? null), 8, $this->source), "system.logging_settings"));
        // line 9
        $context["information_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Basic site settings", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["information_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["information_link_text"] ?? null), 10, $this->source), "system.site_information_settings"));
        // line 11
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 12
        yield t("Set up your site to respond appropriately to site errors, including 403 and 404 page responses.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("What are 403 and 404 responses?", array());
        yield "</h2>
<p>";
        // line 14
        yield t("When a user visits a web page, the web server sends a response code in addition to the page content. A normal, non-error response has code 200. If the page does not exist on the site, the response code is 404. If the page exists, but the user is not authorized to visit the page, the response code is 403. The core software provides default responses for both 403 and 404 codes, but if you prefer, you can create your own pages for each.", array());
        yield "</p>
<h2>";
        // line 15
        yield t("What other errors can occur?", array());
        yield "</h2>
<p>";
        // line 16
        yield t("Under some situations, your site can generate error messages. These can be due to user errors (such as entering invalid values in a form, or incorrect configuration), PHP runtime errors, or software bugs. Some errors may result in a <em>white screen of death</em> (a totally blank web page response); less drastic errors will generate error messages. You can configure what happens when an error message is generated.", array());
        yield "</p>
<h2>";
        // line 17
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 19
        yield t("If desired, create pages to use for 403 and 404 responses. Note the URLs for these pages.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <em>@information_link</em>.", array("@information_link" => ($context["information_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 21
        yield t("In the <em>Error pages</em> section, enter the URL for your 403/404 pages, starting after the site home page URL. For example, if your site URL is <em>https://example.com</em> and your 404 page is <em>https://example.com/not-found</em>, you would enter <em>/not-found</em>.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        yield "</li>
  <li>";
        // line 23
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em>@log_settings_link</em>.", array("@log_settings_link" => ($context["log_settings_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 24
        yield t("For a production site, select <em>None</em> under <em>Error messages to display</em>. For a site that is in development, select one of the other options, so that you are more aware of the errors the site is generating.", array());
        yield "</li>
  <li>";
        // line 25
        yield t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/system.config_error.html.twig";
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
        return array (  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  54 => 11,  52 => 10,  47 => 9,  45 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/system.config_error.html.twig", "/var/www/html/web/core/modules/system/help_topics/system.config_error.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 20);
        static $functions = array("render_var" => 8, "help_route_link" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link'],
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
