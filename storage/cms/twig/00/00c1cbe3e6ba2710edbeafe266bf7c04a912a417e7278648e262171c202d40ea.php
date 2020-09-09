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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/gallery_2.htm */
class __TwigTemplate_80f467a9b0874bb4d689e3e0f9b6a5c2a532cf781cc8d8acf0641bc733224c0e extends \Twig\Template
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
    <script src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/javascript/project-common.js");
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

    <div class=\"js-files\" data-is-authenticated=\"";
        // line 26
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 26), "photoFiles", [], "any", false, false, false, 26)), "html_attr");
        echo "\">
        <!-- ... -->
    </div>

    <ul id=\"lightSlider\"> </ul>;


    
    
</body>

<scripts>

    <script> loadGalleryImages('.js-files', 'lightSlider') </script>
        
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
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/gallery_2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <!-- jQuery 1.8 or later, 33 KB -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <link  href=\"{{ '/assets/css/lightslider.css'|theme }}\" rel=\"stylesheet\">
    <script src=\"{{ '/assets/javascript/lightslider.js'|theme }}\"></script>
    <script src=\"{{ '/assets/javascript/project-common.js'|theme }}\"></script>             

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

    <div class=\"js-files\" data-is-authenticated=\"{{ this.page.photoFiles|json_encode|e('html_attr') }}\">
        <!-- ... -->
    </div>

    <ul id=\"lightSlider\"> </ul>;


    
    
</body>

<scripts>

    <script> loadGalleryImages('.js-files', 'lightSlider') </script>
        
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

    

</scripts>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/gallery_2.htm", "");
    }
}
