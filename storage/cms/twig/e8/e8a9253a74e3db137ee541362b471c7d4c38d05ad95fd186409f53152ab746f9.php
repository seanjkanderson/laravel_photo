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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/contact.htm */
class __TwigTemplate_2ed2f23ca76badd2fcb91c34dd146a438b50652bdced8d2d0824cb2c976b227a extends \Twig\Template
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
        echo "<head>
    <!-- jQuery 1.8 or later, 33 KB -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <!-- Fotorama from CDNJS, 19 KB -->
    <!-- <link  href=\"https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css\" rel=\"stylesheet\"> -->
    <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js\"></script> -->
    <!-- <link  href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/css/fotorama.dev.css");
        echo "\" rel=\"stylesheet\"> -->
    <!-- <script src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/javascript/fotorama.dev.js");
        echo "\"></script> -->

    <link  href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/css/lightslider.css");
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/javascript/lightslider.js");
        echo "\"></script>            

</head>

<body>
</body>

<scripts>
</scripts>";
    }

    public function getTemplateName()
    {
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  55 => 11,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <!-- jQuery 1.8 or later, 33 KB -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <!-- Fotorama from CDNJS, 19 KB -->
    <!-- <link  href=\"https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css\" rel=\"stylesheet\"> -->
    <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js\"></script> -->
    <!-- <link  href=\"{{ '/assets/css/fotorama.dev.css'|theme }}\" rel=\"stylesheet\"> -->
    <!-- <script src=\"{{ '/assets/javascript/fotorama.dev.js'|theme }}\"></script> -->

    <link  href=\"{{ '/assets/css/lightslider.css'|theme }}\" rel=\"stylesheet\">
    <script src=\"{{ '/assets/javascript/lightslider.js'|theme }}\"></script>            

</head>

<body>
</body>

<scripts>
</scripts>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/contact.htm", "");
    }
}
