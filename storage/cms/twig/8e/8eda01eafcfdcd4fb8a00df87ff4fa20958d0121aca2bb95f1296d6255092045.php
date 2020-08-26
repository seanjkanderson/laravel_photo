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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/temp.htm */
class __TwigTemplate_6327e04e9aec6451aaa63de3e9458e4b6da66fb76034cc213264eab1512485f9 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"demo\"></div>

<script>
    var x =\"\", i;
    for (i=1; i<=6; i++) {
      x = x + \"<h\" + i + \">Heading \" + i + \"</h\" + i + \">\";
    }
    document.getElementById(\"demo\").innerHTML = x;
</script>";
    }

    public function getTemplateName()
    {
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/temp.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"demo\"></div>

<script>
    var x =\"\", i;
    for (i=1; i<=6; i++) {
      x = x + \"<h\" + i + \">Heading \" + i + \"</h\" + i + \">\";
    }
    document.getElementById(\"demo\").innerHTML = x;
</script>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/temp.htm", "");
    }
}
