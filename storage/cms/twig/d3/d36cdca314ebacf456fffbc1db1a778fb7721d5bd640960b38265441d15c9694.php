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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/home.htm */
class __TwigTemplate_d724621501a07ae6c50449f1accaf8aba1df4a82639f867c1aa1b342bd87aa32 extends \Twig\Template
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


<scripts>
    <script type=\"text/javascript\">
        function cycleImages(){
            var \$active = \$('#cycler .active');
            var \$next = (\$active.next().length > 0) ? \$active.next() : \$('#cycler img:first');
            \$next.css('z-index',2);//move the next image up the pile
            \$active.fadeOut(1500,function(){//fade out the top image
                \$active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
                \$next.css('z-index',3).addClass('active');//make the next image the top one
            });
            }
    
        \$(document).ready(function(){
        // run every 4s
        setInterval('cycleImages()', 4000);
        })</script>
        
</scripts>";
    }

    public function getTemplateName()
    {
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/home.htm";
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


<scripts>
    <script type=\"text/javascript\">
        function cycleImages(){
            var \$active = \$('#cycler .active');
            var \$next = (\$active.next().length > 0) ? \$active.next() : \$('#cycler img:first');
            \$next.css('z-index',2);//move the next image up the pile
            \$active.fadeOut(1500,function(){//fade out the top image
                \$active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
                \$next.css('z-index',3).addClass('active');//make the next image the top one
            });
            }
    
        \$(document).ready(function(){
        // run every 4s
        setInterval('cycleImages()', 4000);
        })</script>
        
</scripts>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/home.htm", "");
    }
}
