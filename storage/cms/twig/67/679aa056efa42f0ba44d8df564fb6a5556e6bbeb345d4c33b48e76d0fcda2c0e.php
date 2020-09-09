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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/gallery.htm */
class __TwigTemplate_9e5517846021c43165822f6dbdd030b25cc0a13d02ae8140c1555791ccee147b extends \Twig\Template
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

    <link  href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/css/lightslider.css");
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/javascript/lightslider.js");
        echo "\"></script>            

</head>

<body>

    <div class=\"row\">   
        <div class=\"col\" >
            <button type=\"button\" id=\"goToPrevSlide\" class=\"leftbutton\"><span class=\"caret pull-right\"></span>
            </button>
        </div>

        <div class=\"col\" >
            <button type=\"button\" id=\"goToNextSlide\" class=\"rightbutton\"><span class=\"caret pull-right\"></span>
            </button>
        </div>
        
    </div>

    
    
</body>

<scripts>
    <script type=\"text/javascript\">

        var slider = \$('#lightSlider').lightSlider({
        controls: false,
        gallery: true,
        // item: 5,
        slideMargin: 10,
        // thumbItem: 9,
        mode: \"fade\",
        loop: true,
        speed: 2000,
        keyPress: true,
        autoWidth: false,
    
    });
        \$('#goToPrevSlide').on('click', function () {
        slider.goToPrevSlide();
    });
        \$('#goToNextSlide').on('click', function () {
            slider.goToNextSlide();
    });
    </script>

    <script type=\"text/javascript\">
        \$('.box-wrapper').each(function(index, element) {
    
        setTimeout(function(){
            element.classList.remove('loading');
        }, index * 500);

    });
    </script>

    <script type=\"text/javascript\">
        \$(\"#gallery_toggle\").click(function(){
        // var secondPosition=\$(\"div.box\").position();
        var firstPosition=\$(\"ul.lSPager.lSGallery\").offset();
        var gal = document.querySelector('ul.lSPager.lSGallery');
        var space = innerHeight - gal.offsetTop - gal.offsetHeight;
    
        // var topSecond =secondPosition.top.toString()+'px';
        var space_str = space.toString()+'px';
        var t_ms = 700;
        
        if(space > 0)
        {
        \$(\"ul.lSPager.lSGallery\").animate({\"position\": \"fixed\", \"bottom\":\"-80px\"}, t_ms, function() {});
        \$(\"img.active.image_2\").animate({\"max-height\": \"70%\"});
        
    
        }else
        {
        \$(\"ul.lSPager.lSGallery\").animate({\"position\": \"fixed\", \"bottom\":\"20px\"}, t_ms, function() {});
        \$(\"img.active.image_2\").animate({\"max-height\": \"60%\"}, t_ms);
        }
    
        });
    </script>

    

</scripts>";
    }

    public function getTemplateName()
    {
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <!-- jQuery 1.8 or later, 33 KB -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <link  href=\"{{ '/assets/css/lightslider.css'|theme }}\" rel=\"stylesheet\">
    <script src=\"{{ '/assets/javascript/lightslider.js'|theme }}\"></script>            

</head>

<body>

    <div class=\"row\">   
        <div class=\"col\" >
            <button type=\"button\" id=\"goToPrevSlide\" class=\"leftbutton\"><span class=\"caret pull-right\"></span>
            </button>
        </div>

        <div class=\"col\" >
            <button type=\"button\" id=\"goToNextSlide\" class=\"rightbutton\"><span class=\"caret pull-right\"></span>
            </button>
        </div>
        
    </div>

    
    
</body>

<scripts>
    <script type=\"text/javascript\">

        var slider = \$('#lightSlider').lightSlider({
        controls: false,
        gallery: true,
        // item: 5,
        slideMargin: 10,
        // thumbItem: 9,
        mode: \"fade\",
        loop: true,
        speed: 2000,
        keyPress: true,
        autoWidth: false,
    
    });
        \$('#goToPrevSlide').on('click', function () {
        slider.goToPrevSlide();
    });
        \$('#goToNextSlide').on('click', function () {
            slider.goToNextSlide();
    });
    </script>

    <script type=\"text/javascript\">
        \$('.box-wrapper').each(function(index, element) {
    
        setTimeout(function(){
            element.classList.remove('loading');
        }, index * 500);

    });
    </script>

    <script type=\"text/javascript\">
        \$(\"#gallery_toggle\").click(function(){
        // var secondPosition=\$(\"div.box\").position();
        var firstPosition=\$(\"ul.lSPager.lSGallery\").offset();
        var gal = document.querySelector('ul.lSPager.lSGallery');
        var space = innerHeight - gal.offsetTop - gal.offsetHeight;
    
        // var topSecond =secondPosition.top.toString()+'px';
        var space_str = space.toString()+'px';
        var t_ms = 700;
        
        if(space > 0)
        {
        \$(\"ul.lSPager.lSGallery\").animate({\"position\": \"fixed\", \"bottom\":\"-80px\"}, t_ms, function() {});
        \$(\"img.active.image_2\").animate({\"max-height\": \"70%\"});
        
    
        }else
        {
        \$(\"ul.lSPager.lSGallery\").animate({\"position\": \"fixed\", \"bottom\":\"20px\"}, t_ms, function() {});
        \$(\"img.active.image_2\").animate({\"max-height\": \"60%\"}, t_ms);
        }
    
        });
    </script>

    

</scripts>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/gallery.htm", "");
    }
}
