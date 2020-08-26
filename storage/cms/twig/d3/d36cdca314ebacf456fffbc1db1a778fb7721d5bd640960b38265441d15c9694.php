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
        echo "<div class=\"container\">

    <img class=\"active image\" src=\"";
        // line 3
        echo $this->extensions['System\Twig\Extension']->mediaFilter("awakening.jpg");
        echo "\" >
    <img class=\"active image\" src=\"";
        // line 4
        echo $this->extensions['System\Twig\Extension']->mediaFilter("caldera.jpg");
        echo "\" >
    <img class=\"active image\" src=\"";
        // line 5
        echo $this->extensions['System\Twig\Extension']->mediaFilter("sanctuary.jpg");
        echo "\" >
</div>


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
        setInterval('cycleImages()', 10);
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
        return array (  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

    <img class=\"active image\" src=\"{{ 'awakening.jpg'|media }}\" >
    <img class=\"active image\" src=\"{{ 'caldera.jpg'|media }}\" >
    <img class=\"active image\" src=\"{{ 'sanctuary.jpg'|media }}\" >
</div>


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
        setInterval('cycleImages()', 10);
        })</script>
        
</scripts>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/home.htm", "");
    }
}
