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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/home-old.htm */
class __TwigTemplate_4f51d29d9c509c1e4e98d049e26dea9006c367ee09ffa836607db0585559d354 extends \Twig\Template
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
        echo "<body>
    <head>
        <!-- jQuery 1.8 or later, 33 KB -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

        <link  href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/css/lightslider.css");
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/javascript/lightslider.js");
        echo "\"></script>            

    </head>

    <div id=\"container\">
        <div id=\"cycler\"> </div>
    </div>

    <div class=\"js-files\" data-is-authenticated=\"";
        // line 15
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "photoFiles", [], "any", false, false, false, 15)), "html_attr");
        echo "\">
        <!-- ... -->
    </div>

    <scripts>

        <!-- <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', function() {
                var userRating = document.querySelector('.js-files');
                var data = \$('.js-files').data('isAuthenticated');
                var x =\"\";
                // var isAuthenticated = userRating.dataset.isAuthenticated;
                \$.each(data, function(key, value ) {
                    x = x + \"<h4> \" + value + \"</h4>\";
                });
                // or with jQuery
                
                document.getElementById(\"demo\").innerHTML = x;
            });

        </script> -->

        <script type=\"text/javascript\">
            function loadImages() {
                document.addEventListener('DOMContentLoaded', function() {
                        var userRating = document.querySelector('.js-files');
                        var data = \$('.js-files').data('isAuthenticated');
                        var im_ls =\"\";
                        // var isAuthenticated = userRating.dataset.isAuthenticated;

                        // var im_ls = '<div class=\"container\"> \\n';
                        // im_ls = im_ls + '<div id=\"cycler\"> \\n';
                        
                        \$.each(data, function(key, value ) {
                            if (value.indexOf(\".jpg\") >= 0) {
                                if (key == 1) {
                                    im_ls = im_ls + '<img class=\"active image\" src=\"' + value + '\" > \\n'
                                }
                                else {
                                im_ls = im_ls + '<img class=\"image\" src=\"' + value + '\" > \\n'
                                }
                            }
                        });

                        // im_ls = im_ls + '</div> \\n </div>'
                        // or with jQuery
                        
                        // \$(\"\").append(im_ls)
                        document.getElementById(\"cycler\").innerHTML = im_ls;
                    });
            }
            loadImages()
    
        </script>

        
        <!-- <script type=\"text/javascript\">
            var files = \"<?php echo json_encode(\$out) ?>\";
            var x =\"\", i;
            for (i=1; i<=6; i++) {
            x = x + \"<h\" + i + \">Heading \" + i + \"</h\" + i + \">\";
            }
            document.getElementById(\"demo\").innerHTML = x;

            for (var i = 0; i < files.length; i++){
            document.write(\"<br><br>array index: \" + i);
            var obj = files[i];
            for (var key in obj){
                var value = obj[key];
                
                document.write(\"<br> - \" + key + \": \" + value);
            }
            }
        </script> -->

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
            setInterval('cycleImages()', 7000);
            })</script>
            
    </scripts>
</body>";
    }

    public function getTemplateName()
    {
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/home-old.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
    <head>
        <!-- jQuery 1.8 or later, 33 KB -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

        <link  href=\"{{ '/assets/css/lightslider.css'|theme }}\" rel=\"stylesheet\">
        <script src=\"{{ '/assets/javascript/lightslider.js'|theme }}\"></script>            

    </head>

    <div id=\"container\">
        <div id=\"cycler\"> </div>
    </div>

    <div class=\"js-files\" data-is-authenticated=\"{{ this.page.photoFiles|json_encode|e('html_attr') }}\">
        <!-- ... -->
    </div>

    <scripts>

        <!-- <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', function() {
                var userRating = document.querySelector('.js-files');
                var data = \$('.js-files').data('isAuthenticated');
                var x =\"\";
                // var isAuthenticated = userRating.dataset.isAuthenticated;
                \$.each(data, function(key, value ) {
                    x = x + \"<h4> \" + value + \"</h4>\";
                });
                // or with jQuery
                
                document.getElementById(\"demo\").innerHTML = x;
            });

        </script> -->

        <script type=\"text/javascript\">
            function loadImages() {
                document.addEventListener('DOMContentLoaded', function() {
                        var userRating = document.querySelector('.js-files');
                        var data = \$('.js-files').data('isAuthenticated');
                        var im_ls =\"\";
                        // var isAuthenticated = userRating.dataset.isAuthenticated;

                        // var im_ls = '<div class=\"container\"> \\n';
                        // im_ls = im_ls + '<div id=\"cycler\"> \\n';
                        
                        \$.each(data, function(key, value ) {
                            if (value.indexOf(\".jpg\") >= 0) {
                                if (key == 1) {
                                    im_ls = im_ls + '<img class=\"active image\" src=\"' + value + '\" > \\n'
                                }
                                else {
                                im_ls = im_ls + '<img class=\"image\" src=\"' + value + '\" > \\n'
                                }
                            }
                        });

                        // im_ls = im_ls + '</div> \\n </div>'
                        // or with jQuery
                        
                        // \$(\"\").append(im_ls)
                        document.getElementById(\"cycler\").innerHTML = im_ls;
                    });
            }
            loadImages()
    
        </script>

        
        <!-- <script type=\"text/javascript\">
            var files = \"<?php echo json_encode(\$out) ?>\";
            var x =\"\", i;
            for (i=1; i<=6; i++) {
            x = x + \"<h\" + i + \">Heading \" + i + \"</h\" + i + \">\";
            }
            document.getElementById(\"demo\").innerHTML = x;

            for (var i = 0; i < files.length; i++){
            document.write(\"<br><br>array index: \" + i);
            var obj = files[i];
            for (var key in obj){
                var value = obj[key];
                
                document.write(\"<br> - \" + key + \": \" + value);
            }
            }
        </script> -->

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
            setInterval('cycleImages()', 7000);
            })</script>
            
    </scripts>
</body>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/pages/home-old.htm", "");
    }
}
