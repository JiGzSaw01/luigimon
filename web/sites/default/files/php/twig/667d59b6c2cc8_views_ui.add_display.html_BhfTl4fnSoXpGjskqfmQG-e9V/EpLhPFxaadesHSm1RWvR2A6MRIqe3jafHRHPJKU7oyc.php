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

/* @help_topics/views_ui.add_display.html.twig */
class __TwigTemplate_85de901768e420177cefa6adb3fd56e9 extends Template
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
        $context["views_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Views", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["views_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["views_link_text"] ?? null), 8, $this->source), "entity.view.collection"));
        // line 9
        $context["view_edit_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("views_ui.edit"));
        // line 10
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 11
        yield t("Add a new display to an existing view. This will allow you to display similar data to an existing view, using similar settings, in a new block, page, feed, etc.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("If you are not already editing your view, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@views_link</em>. Find the view you want to edit, and click its <em>Edit</em> link.", array("@views_link" => ($context["views_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 15
        yield t("Under <em>Displays</em>, click <em>Add</em>.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("In the pop-up list, click the link for the type of display you want to add; the most common types are <em>Page</em> and <em>Block</em>. The new display will be added to your view, and you will be editing that display.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("Optionally, click the link next to <em>Display name</em> and enter a new name to be shown for this display in the administrative interface.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Follow the steps in @view_edit_topic to edit the other settings for the display.", array("@view_edit_topic" => ($context["view_edit_topic"] ?? null), ));
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/views_ui.add_display.html.twig";
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
        return array (  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  58 => 12,  54 => 11,  49 => 10,  47 => 9,  45 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/views_ui.add_display.html.twig", "/var/www/html/web/core/modules/views_ui/help_topics/views_ui.add_display.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 8, "help_route_link" => 8, "help_topic_link" => 9);

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
