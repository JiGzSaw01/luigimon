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

/* @help_topics/block.overview.html.twig */
class __TwigTemplate_a532b8c5a3c1ecca612da27e3b8142a9 extends Template
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
        yield t("What are blocks?", array());
        yield "</h2>
<p>";
        // line 8
        yield t("Blocks are boxes of content rendered into an area, or region, of a web page of your site. Blocks are placed and configured specifically for each theme.", array());
        yield "</p>
<h2>";
        // line 9
        yield t("What are content blocks?", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Content blocks are blocks whose content you can edit. You can define one or more <em>block types</em>, and attach fields to each block type. Content blocks can be placed just like blocks provided by other modules.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("What is the block description?", array());
        yield "</h2>
<p>";
        // line 12
        yield t("The block description is an identification name for a block, which is shown in the administrative interface. It is not displayed on the site.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("What is the block title?", array());
        yield "</h2>
<p>";
        // line 14
        yield t("The block title is the heading that is optionally shown to site visitors when the block is placed in a region.", array());
        yield "</p>
<h2>";
        // line 15
        yield t("Overview for managing blocks", array());
        yield "</h2>
<p>";
        // line 16
        yield t("The <em>Block</em> module allows you to place blocks in regions of your installed themes, and configure block settings. The <em>Block Content</em> module allows you to manage block types and content blocks. See the related topics listed below for specific tasks.", array());
        yield "</p>
<h2>";
        // line 17
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li>";
        // line 19
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/blocks-chapter.html\">Blocks (Drupal User Guide)</a>", array());
        yield "</li>
</ul>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/block.overview.html.twig";
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
        return array (  86 => 19,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/block.overview.html.twig", "/var/www/html/web/core/modules/block/help_topics/block.overview.html.twig");
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
