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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/404.htm */
class __TwigTemplate_9a5f2b58332fd53b7da9cd2ec6390d35f377f90e6d1dd64ccb29959f3ed36bed extends \Twig\Template
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
        echo "<div style=\"left: 0;
line-height: 200px;
margin-top: -100px;
position: absolute;
text-align: center;
top: 50%;
width: 100%;\">
        <div class=\"container\">
            <h1>Page not found</h1>
            <p>We're sorry, but the page you requested cannot be found.</p>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"left: 0;
line-height: 200px;
margin-top: -100px;
position: absolute;
text-align: center;
top: 50%;
width: 100%;\">
        <div class=\"container\">
            <h1>Page not found</h1>
            <p>We're sorry, but the page you requested cannot be found.</p>
        </div>
</div>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/404.htm", "");
    }
}
