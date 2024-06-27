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

/* @help_topics/contextual.overview.html.twig */
class __TwigTemplate_40a7fae80d582b033e71c97124da3323 extends Template
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
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 8
        yield t("Use contextual links to access administrative tasks without navigating the administrative menu.", array());
        yield "</p>
<h2>";
        // line 9
        yield t("What are contextual links?", array());
        yield "</h2>
<p>";
        // line 10
        yield t("<em>Contextual links</em> give users with the <em>Use contextual links</em> permission quick access to administrative tasks related to areas of non-administrative pages. For example, if a page on your site displays a block, the block would have a contextual link that would allow users with permission to configure the block. If the block contains a menu or a view, it would also have a contextual link for editing the menu links or the view. Clicking a contextual link takes you to the related administrative page directly, without needing to navigate through the administrative menu system.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 13
        yield t("Make sure that the core Contextual Links module is installed, and that you have a role with the <em>Use contextual links</em> permission. Optionally, make sure that a toolbar module is installed (either the core Toolbar module or a contributed module replacement).", array());
        yield "</li>
  <li>";
        // line 14
        yield t("Visit a non-administrative page on your site, such as the home page.", array());
        yield "</li>
  <li>";
        // line 15
        yield t("Locate a block or another area on the page that you want to edit or configure.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Make the contextual links button visible by hovering your mouse over that area in the page. In most themes, this button looks like a pencil and is placed in the upper right corner of the page area (upper left for right-to-left languages), and hovering will also temporarily outline the affected area. Alternatively, click the contextual links toggle button on the right end of the toolbar (left end for right-to-left languages), which will make all contextual link buttons on the page visible until it is clicked again.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("While the contextual links button for the area of interest is visible, click the button to display the list of links for that area. Click a link in the list to visit the corresponding administrative page.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Complete your administrative task and save your settings, or cancel the action. You should be returned to the page you started from.", array());
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/contextual.overview.html.twig";
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
        return array (  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/contextual.overview.html.twig", "/var/www/html/web/core/modules/contextual/help_topics/contextual.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
                [],
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
