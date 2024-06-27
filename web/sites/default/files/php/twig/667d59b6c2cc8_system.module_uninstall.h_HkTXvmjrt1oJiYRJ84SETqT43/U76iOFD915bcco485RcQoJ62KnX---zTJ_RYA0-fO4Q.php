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

/* @help_topics/system.module_uninstall.html.twig */
class __TwigTemplate_9fb3287e89955bfd71040dc718484997 extends Template
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
        // line 8
        $context["uninstall_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Uninstall", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["uninstall_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["uninstall_link_text"] ?? null), 9, $this->source), "system.modules_uninstall"));
        // line 10
        $context["maintenance_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("system.maintenance_mode"));
        // line 11
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 12
        yield t("Uninstall a module. Your site should be in <em>maintenance mode</em> when you uninstall modules. See @maintenance_topic for details.", array("@maintenance_topic" => ($context["maintenance_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 13
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 15
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Extend</em> &gt; <em>@uninstall_link</em>.", array("@uninstall_link" => ($context["uninstall_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 16
        yield t("Enter a word from the module name or description into the filter box, to make the list of modules smaller. Locate the module you want to uninstall.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("In the <em>Description</em> column, see if there are reasons that this module cannot be uninstalled. For example, you may have created content using this module (which you would need to delete first), or there may be another module installed that requires this module to be installed (you would need to uninstall the other module first).", array());
        yield "</li>
  <li>";
        // line 18
        yield t("If there are no reasons listed, the module can be uninstalled. Check the box in the <em>Uninstall</em> column, next to the module's name.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Click <em>Uninstall</em> at the bottom of the page. Verify the list of modules to be uninstalled and configuration to be deleted on the confirmation page, and click <em>Uninstall</em>.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("Wait for the module to be uninstalled. You should be returned to the <em>Uninstall</em> page with a message saying the module was uninstalled.", array());
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/system.module_uninstall.html.twig";
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
        return array (  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  58 => 13,  54 => 12,  49 => 11,  47 => 10,  45 => 9,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/system.module_uninstall.html.twig", "/var/www/html/web/core/modules/system/help_topics/system.module_uninstall.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 8);
        static $filters = array("escape" => 12);
        static $functions = array("render_var" => 9, "help_route_link" => 9, "help_topic_link" => 10);

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
