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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/partials/site/header-main.htm */
class __TwigTemplate_8c97d6f1f660316095d1f76588f855ca8ba8334513bfe2680c0ab181d63e0b30 extends \Twig\Template
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
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

</head>
 
<!-- Gradient Background Overlay -->
<!-- <div class=\"gradient-background-overlay\"></div> -->

<!-- Header Area Start -->
<header class=\"header-area\">
    <div class=\"container-fluid h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12 h-100\">
                <div class=\"main-menu h-100\">
                    <nav class=\"navbar h-100 navbar-expand-lg\">
                        <!-- Logo Area  -->
                        <a class=\"navbar-brand logo-fade\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/phil-logo.png");
        echo "\"> </a>
                        <!-- <div class=\"logo_text\"> -->
                        <!-- <a class=\"logo_text\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><p> PHIL ANDERSON</p> </a> -->
                        <!-- </div> -->

                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#studioMenu\" aria-controls=\"studioMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"fa fa-bars\"></i> Menu</button>

                        <div class=\"collapse navbar-collapse\" id=\"studioMenu\">
                            <!-- Menu Area Start  -->
                            <ul class=\"navbar-nav ml-auto\">

                                <!-- <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item\" href=\"index.php\">Home</a>
                                        <a class=\"dropdown-item\" href=\"about-me.php\">About</a>
                                        <a class=\"dropdown-item\" href=\"portfolio.php\">Portfolio</a>
                                        <a class=\"dropdown-item\" href=\"blog.php\">Blog</a>
                                        <a class=\"dropdown-item\" href=\"contact.php\">Contact</a>
                                        <a class=\"dropdown-item\" href=\"elements.php\">Elements</a>
                                    </div>
                                </li> -->
                                
                                <li class=\"nav-item active\">
                                  <a class=\"nav-link ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45) == "portfolio")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Portfolio<span class=\"sr-only\">(current)</span></a>
                                </li>
                                <li class=\"nav-item active\">
                                  <a class=\"nav-link ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48) == "about")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About<span class=\"sr-only\">(current)</span></a>
                                </li>
                                <li class=\"nav-item active\">
                                  <a class=\"nav-link ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51) == "contact")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact<span class=\"sr-only\">(current)</span></a>
                                </li>
                            </ul>
                            <!-- Search Form -->
                            <div class=\"header-search-form ml-auto\">
                                <form action=\"#\">
                                    <input type=\"search\" class=\"form-control\" placeholder=\"Input your keyword then press enter...\" id=\"search\" name=\"search\">
                                    <input class=\"d-none\" type=\"submit\" value=\"submit\">
                                </form>
                            </div>
                            <!-- Search btn -->
                            <!-- <div id=\"searchbtn\"> -->
                                <!-- <img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/search.png");
        echo "\" alt=\"\"> -->
                            <!-- </div> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->";
    }

    public function getTemplateName()
    {
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/partials/site/header-main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 63,  111 => 51,  101 => 48,  91 => 45,  66 => 23,  59 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

</head>
 
<!-- Gradient Background Overlay -->
<!-- <div class=\"gradient-background-overlay\"></div> -->

<!-- Header Area Start -->
<header class=\"header-area\">
    <div class=\"container-fluid h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12 h-100\">
                <div class=\"main-menu h-100\">
                    <nav class=\"navbar h-100 navbar-expand-lg\">
                        <!-- Logo Area  -->
                        <a class=\"navbar-brand logo-fade\" href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/img/core-img/phil-logo.png'|theme }}\"> </a>
                        <!-- <div class=\"logo_text\"> -->
                        <!-- <a class=\"logo_text\" href=\"{{ 'home'|page }}\"><p> PHIL ANDERSON</p> </a> -->
                        <!-- </div> -->

                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#studioMenu\" aria-controls=\"studioMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"fa fa-bars\"></i> Menu</button>

                        <div class=\"collapse navbar-collapse\" id=\"studioMenu\">
                            <!-- Menu Area Start  -->
                            <ul class=\"navbar-nav ml-auto\">

                                <!-- <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item\" href=\"index.php\">Home</a>
                                        <a class=\"dropdown-item\" href=\"about-me.php\">About</a>
                                        <a class=\"dropdown-item\" href=\"portfolio.php\">Portfolio</a>
                                        <a class=\"dropdown-item\" href=\"blog.php\">Blog</a>
                                        <a class=\"dropdown-item\" href=\"contact.php\">Contact</a>
                                        <a class=\"dropdown-item\" href=\"elements.php\">Elements</a>
                                    </div>
                                </li> -->
                                
                                <li class=\"nav-item active\">
                                  <a class=\"nav-link {% if this.page.id == 'portfolio' %}active{% endif %}\" href=\"{{ 'portfolio'|page }}\">Portfolio<span class=\"sr-only\">(current)</span></a>
                                </li>
                                <li class=\"nav-item active\">
                                  <a class=\"nav-link {% if this.page.id == 'about' %}active{% endif %}\" href=\"{{ 'about'|page }}\">About<span class=\"sr-only\">(current)</span></a>
                                </li>
                                <li class=\"nav-item active\">
                                  <a class=\"nav-link {% if this.page.id == 'contact' %}active{% endif %}\" href=\"{{ 'contact'|page }}\">Contact<span class=\"sr-only\">(current)</span></a>
                                </li>
                            </ul>
                            <!-- Search Form -->
                            <div class=\"header-search-form ml-auto\">
                                <form action=\"#\">
                                    <input type=\"search\" class=\"form-control\" placeholder=\"Input your keyword then press enter...\" id=\"search\" name=\"search\">
                                    <input class=\"d-none\" type=\"submit\" value=\"submit\">
                                </form>
                            </div>
                            <!-- Search btn -->
                            <!-- <div id=\"searchbtn\"> -->
                                <!-- <img src=\"{{ 'assets/img/core-img/search.png'|theme }}\" alt=\"\"> -->
                            <!-- </div> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/partials/site/header-main.htm", "");
    }
}
