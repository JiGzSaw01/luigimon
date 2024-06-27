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

/* @help_topics/node.creating_type.html.twig */
class __TwigTemplate_2ab3ebf549a25e9134d6e5ac955950b7 extends Template
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
        // line 10
        $context["content_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "  ";
            yield t("Administer content types", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        $context["content_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_permissions_link_text"] ?? null), 13, $this->source), "user.admin_permissions.module", ["modules" => "node"]));
        // line 14
        $context["content_types_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 15
            yield "  ";
            yield t("Content types", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        $context["content_types_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_types_link_text"] ?? null), 17, $this->source), "entity.node_type.collection"));
        // line 18
        $context["content_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("node.overview"));
        // line 19
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 20
        yield t("Create a new content type. See @content_overview_topic for more about content types.", array("@content_overview_topic" => ($context["content_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 21
        yield t("Who can create a content type?", array());
        yield "</h2>
<p>";
        // line 22
        yield t("Users with the <em>@content_permissions_link</em> permission (typically administrators) can create new content types.", array("@content_permissions_link" => ($context["content_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 23
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 25
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@content_types_link</em>.", array("@content_types_link" => ($context["content_types_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 26
        yield t("Click <em>Add content type.</em>", array());
        yield "</li>
  <li>";
        // line 27
        yield t("In the <em>Name</em> field, enter a name for the content type, which is how it will be listed in the administrative interface.", array());
        yield "</li>
  <li>";
        // line 28
        yield t("Optionally, enter a <em>Description</em> for the content type. You may also want to adjust some of the settings in the vertical tabs section of the edit page.", array());
        yield "</li>
  <li>";
        // line 29
        yield t("Click <em>Save and manage fields</em>. Your content type will be created, and assuming you have the core Field UI module installed, you will be taken to the <em>Manage fields</em> page for the content type. (If you do not have the core Field UI module installed, the button will say <em>Save</em> instead.)", array());
        yield "</li>
  <li>";
        // line 30
        yield t("If you have the core Field UI module installed, follow the steps in the related topics to add fields to the new content type, set up the editing form, and configure the display.", array());
        yield "</li>
</ol>
<h2>";
        // line 32
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/structure-content-type.html\">";
        // line 34
        yield t("Adding a Content Type (Drupal User Guide)", array());
        yield "</a></li>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-structure-chapter.html\">";
        // line 35
        yield t("Setting Up Content Structure (Drupal User Guide)", array());
        yield "</a></li>
</ul>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/node.creating_type.html.twig";
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
        return array (  116 => 35,  112 => 34,  107 => 32,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  60 => 19,  58 => 18,  56 => 17,  51 => 15,  49 => 14,  47 => 13,  42 => 11,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/node.creating_type.html.twig", "/var/www/html/web/core/modules/node/help_topics/node.creating_type.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "trans" => 11);
        static $filters = array("escape" => 20);
        static $functions = array("render_var" => 13, "help_route_link" => 13, "help_topic_link" => 18);

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
