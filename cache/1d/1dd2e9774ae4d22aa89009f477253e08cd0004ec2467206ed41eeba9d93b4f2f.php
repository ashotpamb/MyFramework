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

/* includes/app.twig */
class __TwigTemplate_777245c892cba3ad47763e8443deef18565179e952060b18acc1b4ea535cfb0d extends Template
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
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "<body>
<div id=\"content\">";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
<div id=\"footer\">
    ";
        // line 9
        $this->displayBlock('footer', $context, $blocks);
        // line 12
        echo "</div>
</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        ";
        $this->loadTemplate("/includes/header.twig", "includes/app.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            ";
        $this->loadTemplate("/includes/footer.twig", "includes/app.twig", 10)->display($context);
        // line 11
        echo "    ";
    }

    public function getTemplateName()
    {
        return "includes/app.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 11,  81 => 10,  77 => 9,  71 => 7,  66 => 4,  62 => 3,  56 => 12,  54 => 9,  49 => 7,  46 => 6,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/app.twig", "/var/www/html/projects/MyFramework_test/MF/view/templates/includes/app.twig");
    }
}
