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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/partials/site/footer.htm */
class __TwigTemplate_da2e427f50c2cdf7c0963b19acb3f60e0fbd402e6c3d1b347f5f242131bba3e8 extends \Twig\Template
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
        echo "<!-- Footer Area Start -->
<footer class=\"footer-area\">
    <p class=\"muted credit align-items-right justify-content-between\">&copy; Phil Anderson</p>
</footer>
<!-- Footer Area End -->";
    }

    public function getTemplateName()
    {
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer Area Start -->
<footer class=\"footer-area\">
    <p class=\"muted credit align-items-right justify-content-between\">&copy; Phil Anderson</p>
</footer>
<!-- Footer Area End -->", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/partials/site/footer.htm", "");
    }
}
