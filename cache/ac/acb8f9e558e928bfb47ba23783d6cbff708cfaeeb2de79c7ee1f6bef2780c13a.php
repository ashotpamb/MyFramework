<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /includes/header.twig */
class __TwigTemplate_377c8096028c224a3c2ca94b548bf8573a362710919d2f8fbb8b187e1655afc2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<head>
    ";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "</head>";
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <link rel=\"stylesheet\" href=\"style.css\"/>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - My Framework</title>
    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "/includes/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 4,  52 => 3,  48 => 2,  44 => 6,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/includes/header.twig", "/var/www/html/projects/MyFramework_test/MF/view/templates/includes/header.twig");
    }
}
