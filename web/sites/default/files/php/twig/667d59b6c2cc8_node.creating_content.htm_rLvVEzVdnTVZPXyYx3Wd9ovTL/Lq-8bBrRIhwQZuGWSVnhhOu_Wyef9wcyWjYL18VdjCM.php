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

/* @help_topics/node.creating_content.html.twig */
class __TwigTemplate_e943b972360fa21f679f345b6db40236 extends Template
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
        $context["content_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 9
            yield "  ";
            yield t("Content", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["content_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_link_text"] ?? null), 11, $this->source), "system.admin_content"));
        // line 12
        $context["content_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "  ";
            yield t("Access the Content overview page", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        $context["content_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_permissions_link_text"] ?? null), 15, $this->source), "user.admin_permissions.module", ["modules" => "node"]));
        // line 16
        $context["content_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("node.overview"));
        // line 17
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 18
        yield t("Create and publish a content item. See @content_overview_topic for more about content types and content items.", array("@content_overview_topic" => ($context["content_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 19
        yield t("Who can create content?", array());
        yield "</h2>
<p>";
        // line 20
        yield t("Users with the <em>@content_permissions_link</em> permission can visit the <em>Content</em> page as described in this topic. Each content type has its own create permissions. For example, to create content of type Article, a user would need the Article: Create new content permission. In addition, users with the <em>Bypass content access control</em> or <em>Administer content</em> permission can create content items of all types. Some contributed modules change the permission structure for creating content.", array("@content_permissions_link" => ($context["content_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 21
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 23
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>@content_link</em>.", array("@content_link" => ($context["content_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 24
        yield t("Click <em>Add content</em>.", array());
        yield "</li>
  <li>";
        // line 25
        yield t("If there is more than one content type defined on your site that you have permission to create, click the name of the type of content you want to create.", array());
        yield "</li>
  <li>";
        // line 26
        yield t("On the content edit form, enter the <em>Title</em> of your content, which will show as the page title when the content item is displayed on a page, and also as the label for the content item in administration screens.", array());
        yield "</li>
  <li>";
        // line 27
        yield t("Fill in the other fields shown on the edit form for this specific content type.", array());
        yield "</li>
  <li>";
        // line 28
        yield t("Leave the <em>Published</em> field checked to publish the content immediately, or uncheck it to make it unpublished. Unpublished content is generally not shown to non-administrative site users.", array());
        yield "</li>
  <li>";
        // line 29
        yield t("Optionally, click <em>Preview</em> to preview the content.", array());
        yield "</li>
  <li>";
        // line 30
        yield t("Click <em>Save</em>. You will see the content displayed on a page.", array());
        yield "</li>
</ol>
<h2>";
        // line 32
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-chapter.html\">";
        // line 34
        yield t("Basic Page Management (Drupal User Guide)", array());
        yield "</a></li>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-create.html\">";
        // line 35
        yield t("Creating a Content Item (Drupal User Guide)", array());
        yield "</a></li>
</ul>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/node.creating_content.html.twig";
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
        return array (  124 => 35,  120 => 34,  115 => 32,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  60 => 17,  58 => 16,  56 => 15,  51 => 13,  49 => 12,  47 => 11,  42 => 9,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/node.creating_content.html.twig", "/var/www/html/web/core/modules/node/help_topics/node.creating_content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 9);
        static $filters = array("escape" => 18);
        static $functions = array("render_var" => 11, "help_route_link" => 11, "help_topic_link" => 16);

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
