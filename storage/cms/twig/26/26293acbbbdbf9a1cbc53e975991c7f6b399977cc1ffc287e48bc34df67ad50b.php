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

</head>

<body>
    <div class=\"row portfolio-column\">

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item\">
            <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gallery");
        echo "\"> HELLO HELLO HELLO </a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item\">
            <img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p2.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item portraits\">
            <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p3.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item weddings life\">
            <img src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p4.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item weddings\">
            <img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p5.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item portraits\">
            <img src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p6.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item studio\">
            <img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p7.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item studio life\">
            <img src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p8.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item fashion\">
            <img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item portraits\">
            <img src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p10.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item studio life\">
            <img src=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p11.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item fashion\">
            <img src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p12.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>
    </div>
</body>


<scripts>
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
        return array (  198 => 109,  187 => 101,  176 => 93,  167 => 87,  162 => 85,  151 => 77,  140 => 69,  129 => 61,  118 => 53,  107 => 45,  96 => 37,  85 => 29,  76 => 23,  71 => 21,  59 => 12,  55 => 11,  50 => 9,  46 => 8,  37 => 1,);
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
    <div class=\"row portfolio-column\">

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a href=\"{{ 'gallery'|page }}\"> HELLO HELLO HELLO </a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p2.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item portraits\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p3.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item weddings life\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p4.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item weddings\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p5.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item portraits\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p6.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item studio\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p7.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item studio life\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p8.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item fashion\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item portraits\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p10.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item studio life\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p11.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>

        <!-- Single Item -->
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item fashion\">
            <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
            <div class=\"hover_overlay\">
                <a class=\"gallery_img\" href=\"img/bg-img/p12.jpg\"><i class=\"fa fa-eye\"></i></a>
            </div>
        </div>
    </div>
</body>


<scripts>
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
