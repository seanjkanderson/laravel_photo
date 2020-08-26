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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/layouts/inner-scroll.htm */
class __TwigTemplate_d73df69a435db56234176143a4b0c0084b3466e84d7a49d9c8f6067f41ed9515 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Phil Anderson Photography | ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Phil Anderson\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Phil Anderson\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/favicon.ico");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/core-style.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header-main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "        </header>

        <!-- Content -->

        <!-- <div class=\"scrollbar force-overflow\" id=\"boxxy\"> -->
        <div class=\"gallery_area clearfix\">
            <div class=\"container-fluid clearfix\">
                    <h2> ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28), "html", null, true);
        echo " </h2>
                    ";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 30
        echo "            </div>
        </div>
            

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "        </footer>

        <!-- Scripts -->
        <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery/jquery-2.2.4.min.js");
        echo "\"></script>
        <!-- Popper js -->
        <script src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/popper.min.js");
        echo "\"></script>
        <!-- Bootstrap js -->
        <script src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/bootstrap.min.js");
        echo "\"></script>
        <!-- Plugins js -->
        <script src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/plugins.js");
        echo "\"></script>
        <!-- Active js -->
        <script src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/active.js");
        echo "\"></script>
        ";
        // line 50
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 51
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 52
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/layouts/inner-scroll.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 52,  152 => 51,  141 => 50,  137 => 49,  132 => 47,  127 => 45,  122 => 43,  117 => 41,  111 => 37,  107 => 36,  99 => 30,  97 => 29,  93 => 28,  84 => 21,  80 => 20,  73 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Phil Anderson Photography | {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Phil Anderson\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Phil Anderson\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/core-img/favicon.ico'|theme }}\">
        <link href=\"{{ 'assets/css/core-style.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/responsive.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header-main' %}
        </header>

        <!-- Content -->

        <!-- <div class=\"scrollbar force-overflow\" id=\"boxxy\"> -->
        <div class=\"gallery_area clearfix\">
            <div class=\"container-fluid clearfix\">
                    <h2> {{ this.page.title }} </h2>
                    {% page %}
            </div>
        </div>
            

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src=\"{{ 'assets/javascript/jquery/jquery-2.2.4.min.js'|theme }}\"></script>
        <!-- Popper js -->
        <script src=\"{{ 'assets/javascript/popper.min.js'|theme}}\"></script>
        <!-- Bootstrap js -->
        <script src=\"{{ 'assets/javascript/bootstrap.min.js'|theme}}\"></script>
        <!-- Plugins js -->
        <script src=\"{{ 'assets/javascript/plugins.js'|theme}}\"></script>
        <!-- Active js -->
        <script src=\"{{ 'assets/javascript/active.js'|theme}}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/layouts/inner-scroll.htm", "");
    }
}
