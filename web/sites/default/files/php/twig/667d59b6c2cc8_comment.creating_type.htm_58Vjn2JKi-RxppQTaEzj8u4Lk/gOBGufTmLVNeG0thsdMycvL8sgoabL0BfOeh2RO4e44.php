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

/* @help_topics/comment.creating_type.html.twig */
class __TwigTemplate_bba73f85e019321c8c13b3badaa62a5e extends Template
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
        $context["comment_types_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "  ";
            yield t("Comment types", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        $context["comment_types_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["comment_types_link_text"] ?? null), 13, $this->source), "entity.comment_type.collection"));
        // line 14
        $context["comment_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 15
            yield "  ";
            yield t("Administer comment types and settings", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        $context["comment_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["comment_permissions_link_text"] ?? null), 17, $this->source), "user.admin_permissions.module", ["modules" => "comment"]));
        // line 18
        $context["comment_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("comment.overview"));
        // line 19
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 20
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 21
        yield t("Create a new comment type. See @comment_overview_topic for information about comments and comment types.", array("@comment_overview_topic" => ($context["comment_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 22
        yield t("Who can create a comment type?", array());
        yield "</h2>
<p>";
        // line 23
        yield t("Users with the <em>@comment_permissions_link</em> permission (typically administrators) can create comment types.", array("@comment_permissions_link" => ($context["comment_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 24
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 26
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@comment_types_link</em>.", array("@comment_types_link" => ($context["comment_types_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 27
        yield t("Click <em>Add comment type</em>.", array());
        yield "</li>
  <li>";
        // line 28
        yield t("In the <em>Label</em> field, enter a name for the comment type, which is how it will be listed in the administrative interface.", array());
        yield "</li>
  <li>";
        // line 29
        yield t("In the <em>Target entity type</em> field, select the entity type to be commented on. See @content_structure_topic for more about content entities and fields.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        yield "</li>
  <li>";
        // line 30
        yield t("Click <em>Save</em>. The comment type will be created.", array());
        yield "</li>
  <li>";
        // line 31
        yield t("Optionally, if you have the core Field UI module installed you can follow the steps in the related topics to add fields to the new comment type, set up the editing form, and configure the display.", array());
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/comment.creating_type.html.twig";
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
        return array (  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  62 => 20,  60 => 19,  58 => 18,  56 => 17,  51 => 15,  49 => 14,  47 => 13,  42 => 11,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/comment.creating_type.html.twig", "/var/www/html/web/core/modules/comment/help_topics/comment.creating_type.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "trans" => 11);
        static $filters = array("escape" => 21);
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
