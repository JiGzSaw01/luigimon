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

/* @claro/form/form-two-columns.html.twig */
class __TwigTemplate_6e3e296a9199b4c938c3c1284ef76980 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'secondary' => [$this, 'block_secondary'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"layout-form clearfix\">
  <div class=\"layout-region layout-region--main\">
    <div class=\"layout-region__content\">
      ";
        // line 4
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 6
        yield "    </div>
  </div>
  <div class=\"layout-region layout-region--secondary\">
    <div class=\"layout-region__content\">
      ";
        // line 10
        yield from $this->unwrap()->yieldBlock('secondary', $context, $blocks);
        // line 12
        yield "    </div>
  </div>
  <div class=\"layout-region layout-region--footer\">
    <div class=\"layout-region__content\">
      ";
        // line 16
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 18
        yield "    </div>
  </div>
</div>
";
        return; yield '';
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "      ";
        return; yield '';
    }

    // line 10
    public function block_secondary($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "      ";
        return; yield '';
    }

    // line 16
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@claro/form/form-two-columns.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  90 => 16,  82 => 10,  74 => 4,  66 => 18,  64 => 16,  58 => 12,  56 => 10,  50 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@claro/form/form-two-columns.html.twig", "/var/www/html/web/core/themes/claro/templates/form/form-two-columns.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 4);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
