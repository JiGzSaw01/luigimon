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

/* @help_topics/menu_ui.menu_item_add.html.twig */
class __TwigTemplate_76eecba69a1133d1f041f59427a24290 extends Template
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
        $context["structure_menu_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Menus", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["structure_menu_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["structure_menu_text"] ?? null), 9, $this->source), "entity.menu.collection"));
        // line 10
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 11
        yield t("Add a link to a menu. Note that you can also add a link to a menu from the content edit page if menu settings have been configured for the content type.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administration menu, navigate to <em>Structure</em> &gt; @structure_menu_link.", array("@structure_menu_link" => ($context["structure_menu_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 15
        yield t("Locate the desired menu and click <em>Add link</em> in the <em>Operations</em> list.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Enter the <em>Menu link title</em> to be displayed.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("Enter the <em>Link</em>, one of the following:", array());
        // line 18
        yield "    <ul>
      <li>";
        // line 19
        yield t("An internal path, such as <em>/node/add</em>", array());
        yield "</li>
      <li>";
        // line 20
        yield t("A full external URL", array());
        yield "</li>
      <li>";
        // line 21
        yield t("Start typing the title of a content item and select it when the full title comes up", array());
        yield "</li>
      <li>";
        // line 22
        yield t("<em>&lt;nolink&gt;</em> to display the <em>Menu link title</em> as plain text without a link", array());
        yield "</li>
      <li>";
        // line 23
        yield t("<em>&lt;front&gt;</em> to link to the front page of your site", array());
        yield "</li>
    </ul>
  </li>
  <li>";
        // line 26
        yield t("Make sure that <em>Enabled</em> is checked; if not, the menu link will not be displayed.", array());
        yield "</li>
  <li>";
        // line 27
        yield t("Optionally, enter a <em>Description</em>, which will be displayed when a user hovers over the link.", array());
        yield "</li>
  <li>";
        // line 28
        yield t("Optionally, check <em>Show as expanded</em> to automatically show the children of this link (if any) when this link is shown.", array());
        yield "</li>
  <li>";
        // line 29
        yield t("Optionally, select the <em>Parent link</em>, if this menu link should be a child of another menu link.", array());
        yield "</li>
  <li>";
        // line 30
        yield t("Click <em>Save</em>. You will be returned to the <em>Add link</em> page to add another link.", array());
        yield "</li>
  <li>";
        // line 31
        yield t("In the <em>Manage</em> administration menu, navigate to <em>Structure</em> &gt; @structure_menu_link.", array("@structure_menu_link" => ($context["structure_menu_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 32
        yield t("Locate the menu you just added a link to and click <em>Edit</em> in the <em>Operations</em> list.", array());
        yield "</li>
  <li>";
        // line 33
        yield t("Verify that the order of links is correct. If it is not, drag menu links until the order is correct, and click <em>Save</em>.", array());
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/menu_ui.menu_item_add.html.twig";
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
        return array (  128 => 33,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  75 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  56 => 12,  52 => 11,  47 => 10,  45 => 9,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/menu_ui.menu_item_add.html.twig", "/var/www/html/web/core/modules/menu_ui/help_topics/menu_ui.menu_item_add.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 8);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 9, "help_route_link" => 9);

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
