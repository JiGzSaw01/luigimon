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

/* @help_topics/image.style.html.twig */
class __TwigTemplate_ac5adfd08ca7b03ca803b32ff1e1ac65 extends Template
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
        $context["media_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.media"));
        // line 9
        $context["styles_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Image styles", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["styles_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["styles_text"] ?? null), 10, $this->source), "entity.image_style.collection"));
        // line 11
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 12
        yield t("Add a new image style, which can be used to process and display images. See @media_topic for an overview of image styles.", array("@media_topic" => ($context["media_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 13
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 15
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Media</em> &gt; @styles_link.", array("@styles_link" => ($context["styles_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 16
        yield t("Click <em>Add image style</em>.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("Enter a descriptive <em>Image style name</em>, and click <em>Create new style</em>.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Under <em>Effect</em>, choose an effect to apply and click <em>Add</em>.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Configure the effect on the next page. Most effects require some additional configuration after they are added.  For example, for the <em>Crop</em> effect, enter the <em>Width</em> and <em>Height</em> to crop the image to, and choose the <em>Anchor</em> point. Click <em>Add effect</em>.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("Repeat the previous two steps until all of the effects have been added.", array());
        yield "</li>
  <li>";
        // line 21
        yield t("Drag to change the order of the effects. Then click <em>Save</em> to save the new order.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("The image style can now be used to format a field containing an image in your layouts or traditional field displays. It can also be used as part of a responsive image style. See related topics below for more information.", array());
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/image.style.html.twig";
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
        return array (  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  58 => 13,  54 => 12,  49 => 11,  47 => 10,  42 => 9,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/image.style.html.twig", "/var/www/html/web/core/modules/image/help_topics/image.style.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 9);
        static $filters = array("escape" => 12);
        static $functions = array("render_var" => 8, "help_topic_link" => 8, "help_route_link" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_topic_link', 'help_route_link'],
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
