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

/* @help_topics/comment.moderating.html.twig */
class __TwigTemplate_e22c98d627071bae0d8f1c437678eb6a extends Template
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
        $context["comment_unpublished_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 9
            yield "  ";
            yield t("Unapproved comments", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["comment_unpublished_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["comment_unpublished_link_text"] ?? null), 11, $this->source), "comment.admin_approval"));
        // line 12
        $context["comment_published_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "  ";
            yield t("Comments", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        $context["comment_published_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["comment_published_link_text"] ?? null), 15, $this->source), "comment.admin"));
        // line 16
        $context["comment_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 17
            yield "  ";
            yield t("Administer comments and comment settings", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        $context["comment_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["comment_permissions_link_text"] ?? null), 19, $this->source), "user.admin_permissions.module", ["modules" => "comment"]));
        // line 20
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 21
        yield t("Decide which comments are shown on the website.", array());
        yield "</p>
<h2>";
        // line 22
        yield t("Who can moderate comments?", array());
        yield "</h2>
<p>";
        // line 23
        yield t("Users with the <em>@comment_permissions_link</em> permission (typically administrators) can moderate comments. You will also need the <em>Access the Content Overview page</em> permission from the Node module (if it is installed) to navigate to the comment management page.", array("@comment_permissions_link" => ($context["comment_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 24
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 26
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Content</em> &gt; <em>@comment_published_link</em>. A list of all comments is shown.", array("@comment_published_link" => ($context["comment_published_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 27
        yield t("To unpublish comments, select one or more comments by checking the boxes on the left side (right side in right-to-left languages). Then select <em>Unpublish comment</em> from the <em>Action</em> select list and click <em>Apply to selected items</em>. If you select the <em>Delete comment</em> action, you can instead delete the unwanted  comments.", array());
        yield "</li>
  <li>";
        // line 28
        yield t("To change the content of a comment click <em>Edit</em> from the dropdown button for a particular comment.", array());
        yield "</li>
  <li>";
        // line 29
        yield t("To publish comments that are not yet visible on the website, navigate to the <em>@comment_unpublished_link</em> tab. Select one or more comments by checking the boxes on the left side (right side in right-to-left languages). Then select <em>Publish comment</em> from the <em>Action</em> select list and click <em>Apply to selected items</em>.", array("@comment_unpublished_link" => ($context["comment_unpublished_link"] ?? null), ));
        yield "</li>
</ol>
<h2>";
        // line 31
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/comment/administering-and-approving-comments\">";
        // line 33
        yield t("Online documentation for moderating comments", array());
        yield "</a></li>
</ul>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/comment.moderating.html.twig";
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
        return array (  111 => 33,  106 => 31,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  67 => 20,  65 => 19,  60 => 17,  58 => 16,  56 => 15,  51 => 13,  49 => 12,  47 => 11,  42 => 9,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/comment.moderating.html.twig", "/var/www/html/web/core/modules/comment/help_topics/comment.moderating.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 9);
        static $filters = array("escape" => 23);
        static $functions = array("render_var" => 11, "help_route_link" => 11);

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
