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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/gallery-full.htm */
class __TwigTemplate_28dcf8df2305ccf80ffd384dc9756263d744fdba8e2e0d984c5c59aefb4de758 extends \Twig\Template
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

    <!-- <div style=\"text-align: center; bottom: 20px;\"> <p>Caption</p></div> -->

    <ul id=\"lightSlider\">

        <li data-thumb=\"";
        // line 35
        echo $this->extensions['System\Twig\Extension']->mediaFilter("sanctuary.jpg");
        echo "\">
            <button id=\"gallery_toggle\">
                <div class=\"middlepane\" >
                    <img src=\"";
        // line 38
        echo $this->extensions['System\Twig\Extension']->mediaFilter("sanctuary.jpg");
        echo "\" class=\"image_2\"/>
                </div>
            </button>
        </li>
        <li data-thumb=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("awakening.jpg");
        echo "\">
            <button id=\"gallery_toggle\">
                <div class=\"middlepane\" >
                    <img src=\"";
        // line 45
        echo $this->extensions['System\Twig\Extension']->mediaFilter("awakening.jpg");
        echo "\" class=\"image_2\"/>
                </div>
            </button>
        </li>
        <li data-thumb=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\">
            <div class=\"middlepane\" >
                <img src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\">
            <div class=\"middlepane\" >
                <img src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\">
            <div class=\"middlepane\" >
                <img src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\">
            <div class=\"middlepane\" >
                <img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\">
            <div class=\"middlepane\" >
                <img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\">
            <div class=\"middlepane\" >
                <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\">
            <div class=\"middlepane\" >
                <img src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\">
            <div class=\"middlepane\" >
                <img src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/bg-img/1.jpg");
        echo "\" class=\"image_2\"/>
            </div>
        </li>
        
    </ul>
    
    
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
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/gallery-full.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 86,  188 => 84,  182 => 81,  177 => 79,  171 => 76,  166 => 74,  160 => 71,  155 => 69,  149 => 66,  144 => 64,  138 => 61,  133 => 59,  127 => 56,  122 => 54,  116 => 51,  111 => 49,  104 => 45,  98 => 42,  91 => 38,  85 => 35,  59 => 12,  55 => 11,  50 => 9,  46 => 8,  37 => 1,);
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

    <!-- <div style=\"text-align: center; bottom: 20px;\"> <p>Caption</p></div> -->

    <ul id=\"lightSlider\">

        <li data-thumb=\"{{ 'sanctuary.jpg'|media }}\">
            <button id=\"gallery_toggle\">
                <div class=\"middlepane\" >
                    <img src=\"{{ 'sanctuary.jpg'|media }}\" class=\"image_2\"/>
                </div>
            </button>
        </li>
        <li data-thumb=\"{{ 'awakening.jpg'|media }}\">
            <button id=\"gallery_toggle\">
                <div class=\"middlepane\" >
                    <img src=\"{{ 'awakening.jpg'|media }}\" class=\"image_2\"/>
                </div>
            </button>
        </li>
        <li data-thumb=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\">
            <div class=\"middlepane\" >
                <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\">
            <div class=\"middlepane\" >
                <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\">
            <div class=\"middlepane\" >
                <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\">
            <div class=\"middlepane\" >
                <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\">
            <div class=\"middlepane\" >
                <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\">
            <div class=\"middlepane\" >
                <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\">
            <div class=\"middlepane\" >
                <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" class=\"image_2\"/>
            </div>
        </li>
        <li data-thumb=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\">
            <div class=\"middlepane\" >
                <img src=\"{{ '/assets/img/bg-img/1.jpg'|theme }}\" class=\"image_2\"/>
            </div>
        </li>
        
    </ul>
    
    
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

    

</scripts>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/gallery-full.htm", "");
    }
}
