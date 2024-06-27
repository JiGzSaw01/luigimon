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

/* @help_topics/block.configure.html.twig */
class __TwigTemplate_4630e1b0b24ada8752a524a9b7dd3b9b extends Template
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
        $context["layout_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Block layout", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["layout_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["layout_link_text"] ?? null), 8, $this->source), "block.admin_display"));
        // line 9
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Configure the settings of a block that was previously placed in a region of a theme.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 13
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@layout_link</em>.", array("@layout_link" => ($context["layout_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 14
        yield t("Click the name of the theme that contains the block.", array());
        yield "</li>
  <li>";
        // line 15
        yield t("Optionally, click <em>Demonstrate block regions</em> to see the regions of the theme.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("If you only want to change the region where a block is located, or the ordering of blocks within a region, drag blocks to their desired positions and click <em>Save blocks</em>.", array());
        yield "</li>
<li>";
        // line 17
        yield t("If you want to change additional settings, find the region where the block you want to update is currently located, and click <em>Configure</em> in the line of the block description.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Edit the block's settings. The available settings vary depending on the module that provides the block, but for all blocks you can change:", array());
        // line 19
        yield "    <ul>
      <li>";
        // line 20
        yield t("<em>Block title</em>: The heading for the block on your site -- for some blocks, you will need to check the <em>Override title</em> checkbox in order to enter a title", array());
        yield "</li>
      <li>";
        // line 21
        yield t("<em>Display title</em>: Check the box if you want the title displayed", array());
        yield "</li>
      <li>";
        // line 22
        yield t("<em>Visibility</em>: Add conditions for when the block should be displayed", array());
        yield "</li>
      <li>";
        // line 23
        yield t("<em>Region</em>: Change the theme region the block is displayed in", array());
        yield "</li>
    </ul>
  </li>
  <li>";
        // line 26
        yield t("Click <em>Save block</em>.", array());
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/block.configure.html.twig";
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
        return array (  104 => 26,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  83 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  56 => 11,  52 => 10,  47 => 9,  45 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/block.configure.html.twig", "/var/www/html/web/core/modules/block/help_topics/block.configure.html.twig");
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
