<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/layouts/default.htm */
class __TwigTemplate_0b3a1d6798ae04091a4f51d87a43e99bb6411400d1d9bad3fd84b7e0f8a67cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/materialize/css/materialize.min.css", 1 => "assets/css/style.css"));
        // line 13
        echo "\" rel=\"stylesheet\">
          <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        ";
        // line 16
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 17
        echo "    </head>
    <body>


            ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "
        <!-- Content -->
        <main >
            <div class=\"section\" >
                <div class=\"container\" >
                    ";
        // line 27
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 28
        echo "                </div>
            </div>
        </main>
        
            ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "
        <!-- Scripts -->
        <script src=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/materialize/js/materialize.min.js");
        echo "\"></script>
        <script src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/app.js");
        echo "\"></script>
        ";
        // line 38
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 39
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 40
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  102 => 39,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  79 => 33,  75 => 32,  69 => 28,  67 => 27,  60 => 22,  56 => 21,  50 => 17,  47 => 16,  42 => 13,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link href=\"{{ ['assets/css/materialize/css/materialize.min.css',
                        'assets/css/style.css'
                            ]|theme }}\" rel=\"stylesheet\">
          <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        {% styles %}
    </head>
    <body>


            {% partial 'nav' %}

        <!-- Content -->
        <main >
            <div class=\"section\" >
                <div class=\"container\" >
                    {% page %}
                </div>
            </div>
        </main>
        
            {%partial 'footer' %}

        <!-- Scripts -->
        <script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/materialize/js/materialize.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>";
    }
}
