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

/* @help_topics/contact.creating.html.twig */
class __TwigTemplate_816347a9d94cae4b962af58831f7536a extends Template
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
        $context["contact_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Contact forms", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["contact_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["contact_link_text"] ?? null), 9, $this->source), "entity.contact_form.collection"));
        // line 10
        $context["adding_fields_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("contact.adding_fields"));
        // line 11
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 12
        yield t("Create a new site-wide contact form.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 15
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@contact_link</em>.", array("@contact_link" => ($context["contact_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 16
        yield t("Click <em>Add contact form</em>.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("Fill in the <em>Label</em> (title) for the form, <em>Recipients</em>, and optionally the other settings.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Click <em>Save</em>. You should see your new contact form in the table, along with a link to view it.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("The contact form will always have <em>Subject</em> and <em>Message</em> fields. If you want to add more fields, follow the steps in @adding_fields_topic.", array("@adding_fields_topic" => ($context["adding_fields_topic"] ?? null), ));
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/contact.creating.html.twig";
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
        return array (  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  58 => 13,  54 => 12,  49 => 11,  47 => 10,  45 => 9,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/contact.creating.html.twig", "/var/www/html/web/core/modules/contact/help_topics/contact.creating.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 8);
        static $filters = array("escape" => 15);
        static $functions = array("render_var" => 9, "help_route_link" => 9, "help_topic_link" => 10);

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
