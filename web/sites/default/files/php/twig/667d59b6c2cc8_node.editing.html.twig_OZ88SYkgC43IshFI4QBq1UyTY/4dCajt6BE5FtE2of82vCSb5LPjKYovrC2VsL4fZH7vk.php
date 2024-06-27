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

/* @help_topics/node.editing.html.twig */
class __TwigTemplate_f1bf905146da5653c45b8677f81ab76f extends Template
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
        $context["content_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 8
            yield "  ";
            yield t("Content", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["content_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_link_text"] ?? null), 10, $this->source), "system.admin_content"));
        // line 11
        $context["content_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "  ";
            yield t("Access the Content overview page", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        $context["content_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_permissions_link_text"] ?? null), 14, $this->source), "user.admin_permissions.module", ["modules" => "node"]));
        // line 15
        $context["node_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("node.overview"));
        // line 16
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 17
        yield t("Find a content item and edit it, or update a group of content items in bulk. See @node_overview_topic for more about content types and content items.", array("@node_overview_topic" => ($context["node_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 18
        yield t("Who can find and edit content?", array());
        yield "</h2>
<p>";
        // line 19
        yield t("Users with the <em>@content_permissions_link</em> permission can use the <em>Content</em> page to find content. Each content type has its own edit permissions. For example, to edit content of type Article, a user would need the <em>Article: Edit own content</em> permission to edit an article they created, or the <em>Article: Edit any content</em> permission to edit an article someone else created. In addition, users with the <em>Bypass content access control</em> or <em>Administer content</em> permission can edit content items of all types. Some contributed modules change the permission structure for editing content.", array("@content_permissions_link" => ($context["content_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 20
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 22
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>@content_link</em>.", array("@content_link" => ($context["content_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 23
        yield t("Optionally, use filters to reduce the list of content items shown:", array());
        // line 24
        yield "    <ul>
      <li>";
        // line 25
        yield t("<em>Title</em>: key word(s) from the title", array());
        yield "</li>
      <li>";
        // line 26
        yield t("<em>Content type</em>", array());
        yield "</li>
      <li>";
        // line 27
        yield t("<em>Published status</em>", array());
        yield "</li>
      <li>";
        // line 28
        yield t("<em>Language</em>", array());
        yield "</li>
    </ul>
    ";
        // line 30
        yield t("If you enter or select filter values, click <em>Filter</em> to apply the filters.", array());
        yield "</li>
  <li>";
        // line 31
        yield t("Optionally, sort the list by clicking a column header. Click again to reverse the order.", array());
        yield "</li>
  <li>";
        // line 32
        yield t("To edit the title or other field values for one content item, click <em>Edit</em> in the row of the content item. Update the values and click <em>Save</em>.", array());
        yield "</li>
  <li>";
        // line 33
        yield t("A few types of edits can be done in bulk to multiple content items. For example, to publish several unpublished content items, check the boxes in the left column (right column in right-to-left languages) to select the desired content items. For <em>Action</em>, select the <em>Publish content</em> action. Click <em>Apply to selected items</em> to make the change. The other actions under <em>Action</em> work in a similar manner.", array());
        yield "</li>
</ol>
<h2>";
        // line 35
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-chapter.html\">";
        // line 37
        yield t("Basic Page Management (Drupal User Guide)", array());
        yield "</a></li>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-edit.html\">";
        // line 38
        yield t("Editing a Content Item (Drupal User Guide)", array());
        yield "</a></li>
</ul>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/node.editing.html.twig";
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
        return array (  134 => 38,  130 => 37,  125 => 35,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  88 => 24,  86 => 23,  82 => 22,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  60 => 16,  58 => 15,  56 => 14,  51 => 12,  49 => 11,  47 => 10,  42 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/node.editing.html.twig", "/var/www/html/web/core/modules/node/help_topics/node.editing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 17);
        static $functions = array("render_var" => 10, "help_route_link" => 10, "help_topic_link" => 15);

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
