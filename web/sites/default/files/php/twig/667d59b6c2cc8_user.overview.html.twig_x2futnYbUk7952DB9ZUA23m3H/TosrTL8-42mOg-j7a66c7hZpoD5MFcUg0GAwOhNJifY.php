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

/* @help_topics/user.overview.html.twig */
class __TwigTemplate_4f37612d87c7b963823a9d0f4268a5fd extends Template
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
        // line 5
        yield "<h2>";
        yield t("What is a user?", array());
        yield "</h2>
<p>";
        // line 6
        yield t("A user is anyone accessing or viewing your site. <em>Anonymous</em> users are users who are not logged in, and <em>Authenticated</em> users are users who are logged in.", array());
        yield "</p>
<h2>";
        // line 7
        yield t("What is a role?", array());
        yield "</h2>
<p>";
        // line 8
        yield t("<em>Roles</em> are used to group and classify users; each user can be assigned one or more roles. There are also special roles for all anonymous and all authenticated users.", array());
        yield "</p>
<h2>";
        // line 9
        yield t("What is a permission?", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Granting a <em>permission</em> to a role allows users who have been assigned that role to perform an action on the site, such as viewing content, editing or creating  a particular type of content, administering settings for a particular module, or using a particular function of the site (such as search).", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Overview of managing user accounts and visitors", array());
        yield "</h2>
<p>";
        // line 12
        yield t("The core User module allows users to register, log in, and log out, and administrators to manage user roles and permissions. The core Ban module allows administrators to ban certain IP addresses from accessing the site. Depending on which modules you have installed on your site, the related topics below will help you with tasks related to managing user accounts and visitors.", array());
        yield "</p>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/user.overview.html.twig";
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
        return array (  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/user.overview.html.twig", "/var/www/html/web/core/modules/user/help_topics/user.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 5);
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
