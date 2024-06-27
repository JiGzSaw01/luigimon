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

/* @help_topics/core.maintenance.html.twig */
class __TwigTemplate_b72ae07156b7e5edbcd5cbb25e7ba4fc extends Template
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
        // line 12
        yield "<h2>";
        yield t("Maintaining and troubleshooting overview", array());
        yield "</h2>
<p>";
        // line 13
        yield t("Here are some tasks and hints related to maintaining your site, and troubleshooting problems that may come up on your site. See the related topics below for more information.", array());
        yield "</p>
<ul>
  <li>";
        // line 15
        yield t("When performing maintenance, such as installing, uninstalling, or updating a module, put your site in maintenance mode.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Configure your site so that cron runs periodically.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("If your site is not behaving as expected, clear the cache before trying to diagnose the problem.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("There are several site reports that can help you diagnose problems with your site. There are also two core modules that can be used for error logging: Database Logging and Syslog.", array());
        yield "</li>
</ul>
<h2>";
        // line 20
        yield t("Additional resources", array());
        yield "</h2>
<ul>
    <li>";
        // line 22
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/prevent-chapter.html\">Preventing and Fixing Problems (Drupal User Guide)</a>", array());
        yield "</li>
    <li>";
        // line 23
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance (Drupal User Guide)</a>", array());
        yield "</li>
</ul>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/core.maintenance.html.twig";
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
        return array (  76 => 23,  72 => 22,  67 => 20,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  45 => 13,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/core.maintenance.html.twig", "/var/www/html/web/core/modules/help/help_topics/core.maintenance.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 12);
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
