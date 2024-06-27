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

/* @help_topics/system.theme_install.html.twig */
class __TwigTemplate_f9e7f044da37c3330663906c9ff899c8 extends Template
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
        $context["themes_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Appearance", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["themes_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["themes_link_text"] ?? null), 8, $this->source), "system.themes_page"));
        // line 9
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Install a core theme, or a contributed theme that has already been downloaded. Choose the default themes to use for the site and for administrative pages.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 13
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>@themes_link</em>.", array("@themes_link" => ($context["themes_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 14
        yield t("Locate the themes that you want to use as the site default theme and for administrative pages.", array());
        yield "</li>
  <li>";
        // line 15
        yield t("For each of these themes, if the theme is in the <em>Uninstalled themes</em> section, click the <em>Install</em> link to install the theme. Wait for the theme to be installed (translations might be downloaded). You should be returned to the <em>Appearance</em> page.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Locate the theme that you want to be your default theme, which should now be in the <em>Installed themes</em> section. If it is not already labeled as the <em>default theme</em>, click the <em>Set as default</em> link.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("At the bottom of the page, select the <em>Administration theme</em> that you want to use on administrative pages. Click <em>Save configuration</em> if you selected a new theme.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("If you changed the default theme for your site, visit the site home page or another page on the non-administration part of your site and verify that the site is using the new theme. If you changed the administration theme, verify that the new theme is used on administrative pages.", array());
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/system.theme_install.html.twig";
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
        return array (  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  56 => 11,  52 => 10,  47 => 9,  45 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/system.theme_install.html.twig", "/var/www/html/web/core/modules/system/help_topics/system.theme_install.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 13);
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
