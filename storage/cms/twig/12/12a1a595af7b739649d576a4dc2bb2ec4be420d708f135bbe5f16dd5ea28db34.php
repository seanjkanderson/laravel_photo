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

/* /Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/layouts/empty.htm */
class __TwigTemplate_e38688a7b9bf8cf454dd25b1a3652e49f23b45d42fe01e22bf183133f7813609 extends \Twig\Template
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

    <div class=\"main-container\">
        <head>
            <meta charset=\"utf-8\">
            <title>Phil Anderson Photography | ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>
            <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_description", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
            <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "meta_title", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
            <meta name=\"author\" content=\"Phil Anderson\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta name=\"generator\" content=\"Phil Anderson\">
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/favicon.ico");
        echo "\">
            <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/core-style.css");
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\" rel=\"stylesheet\">
            ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 17
        echo "        </head>
        <body>

            <!-- Content -->
            <section id=\"layout-content\">
                ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 23
        echo "            </section>

            <!-- Scripts -->
            <!-- jQuery (Necessary for All JavaScript Plugins) -->
            <script src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery/jquery-2.2.4.min.js");
        echo "\"></script>
            <!-- Popper js -->
            <script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/popper.min.js");
        echo "\"></script>
            <!-- Bootstrap js -->
            <script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/bootstrap.min.js");
        echo "\"></script>
            <!-- Plugins js -->
            <script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/plugins.js");
        echo "\"></script>
            <!-- Active js -->
            <script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/active.js");
        echo "\"></script>
            ";
        // line 36
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
        // line 37
        echo "            ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 38
        echo "
        </body>
    </div>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/layouts/empty.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  125 => 37,  114 => 36,  110 => 35,  105 => 33,  100 => 31,  95 => 29,  90 => 27,  84 => 23,  82 => 22,  75 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  53 => 9,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

    <div class=\"main-container\">
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

            <!-- Content -->
            <section id=\"layout-content\">
                {% page %}
            </section>

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
    </div>
</html>", "/Users/seananderson/Documents/websites/laravel_photo/themes/seaofdreams/layouts/empty.htm", "");
    }
}
