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

/* @help_topics/system.config_basic.html.twig */
class __TwigTemplate_39b4fb9b1a15750dd042f3577ac2c617 extends Template
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
        $context["regional_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Regional settings", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["regional_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["regional_link_text"] ?? null), 8, $this->source), "system.regional_settings"));
        // line 9
        $context["information_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Basic site settings", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["information_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["information_link_text"] ?? null), 10, $this->source), "system.site_information_settings"));
        // line 11
        $context["datetime_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Date and time formats", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        $context["datetime_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["datetime_link_text"] ?? null), 12, $this->source), "entity.date_format.collection"));
        // line 13
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 14
        yield t("Configure the basic settings of your site, including the site name, slogan, main email address, default time zone, default country, and the date formats to use.", array());
        yield "</p>
<h2>";
        // line 15
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 17
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <em>@information_link</em>.", array("@information_link" => ($context["information_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 18
        yield t("Enter the site name, slogan, and main email address for your site.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; <em>@regional_link</em>.", array("@regional_link" => ($context["regional_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 21
        yield t("Select the default country and default time zone for your site.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        yield "</li>
  <li>";
        // line 23
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; <em>@datetime_link</em>.", array("@datetime_link" => ($context["datetime_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 24
        yield t("Look at the <em>Patterns</em> for the Default long, medium, and short date formats. If any of them does not match the date format you want to use on your site, click <em>Edit</em> in that row to edit the format.", array());
        yield "</li>
  <li>";
        // line 25
        yield t("Adjust the <em>Format string</em> until the <em>Displayed</em> format matches what you want. (Date format strings are composed of PHP date format codes.)", array());
        yield "</li>
  <li>";
        // line 26
        yield t("Click <em>Save format</em>. You should see a message indicating that the format was saved.", array());
        yield "</li>
  <li>";
        // line 27
        yield t("Repeat the previous three steps for any other date formats that need to be changed.", array());
        yield "</li>
</ol>
<h2>";
        // line 29
        yield t("Additional resources", array());
        yield "</h2>
<p>";
        // line 30
        yield t("<a href=\"https://www.php.net/manual/datetime.format.php#refsect1-datetime.format-parameters\">PHP date format codes reference</a>", array());
        yield "</p>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/system.config_basic.html.twig";
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
        return array (  124 => 30,  120 => 29,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  70 => 15,  66 => 14,  61 => 13,  59 => 12,  54 => 11,  52 => 10,  47 => 9,  45 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/system.config_basic.html.twig", "/var/www/html/web/core/modules/system/help_topics/system.config_basic.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 17);
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
