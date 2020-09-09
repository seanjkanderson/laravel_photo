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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/portfolio.htm */
class __TwigTemplate_92d737a2c40178e0979c7754ba5090d865adf20042090dfdd774d6f72a5d3b37 extends \Twig\Template
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
    <script src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/javascript/project-common.js");
        echo "\"></script>            
</head>

<body>
       <div id=\"aggregator\"></div>
</body>

<div class=\"js-files\" data-is-authenticated=\"";
        // line 20
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "photoFiles", [], "any", false, false, false, 20)), "html_attr");
        echo "\">
    <!-- ... -->
</div>

<div class=\"gallery\" data-is-authenticated=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gallery");
        echo "\">
    <!-- ... -->
</div>


<scripts>

    <script> loadPortfolioCovers('.js-files', 'gallery', 'aggregator') </script>

    <script type=\"text/javascript\">
        \$('.box-wrapper').each(function(index, element) {

    setTimeout(function(){
        element.classList.remove('loading');
    }, index * 500);

    });
    </script>

</scripts>";
    }

    public function getTemplateName()
    {
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  73 => 20,  63 => 13,  59 => 12,  55 => 11,  50 => 9,  46 => 8,  37 => 1,);
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
    <script src=\"{{ '/assets/javascript/project-common.js'|theme }}\"></script>            
</head>

<body>
       <div id=\"aggregator\"></div>
</body>

<div class=\"js-files\" data-is-authenticated=\"{{ this.page.photoFiles|json_encode|e('html_attr') }}\">
    <!-- ... -->
</div>

<div class=\"gallery\" data-is-authenticated=\"{{ 'gallery'|page }}\">
    <!-- ... -->
</div>


<scripts>

    <script> loadPortfolioCovers('.js-files', 'gallery', 'aggregator') </script>

    <script type=\"text/javascript\">
        \$('.box-wrapper').each(function(index, element) {

    setTimeout(function(){
        element.classList.remove('loading');
    }, index * 500);

    });
    </script>

</scripts>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/portfolio.htm", "");
    }
}
