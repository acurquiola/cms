<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/layouts/default.htm */
class __TwigTemplate_e46b5ed0b8509c5a5c5377dfe7d83fcb16bcbedb6cffd448d5c638ccb5d4675c extends Twig_Template
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
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/materialize/css/materialize.min.css", 1 => "assets/css/style.css"));
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
            ";
        // line 25
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 26
        echo "        </main>
        
            ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "
        <!-- Scripts -->
        <script src=\"";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 32
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/materialize/js/materialize.min.js");
        echo "\"></script>
        <script src=\"";
        // line 33
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/app.js");
        echo "\"></script>
        ";
        // line 34
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 35
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 36
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
        return array (  102 => 36,  98 => 35,  91 => 34,  87 => 33,  83 => 32,  79 => 31,  75 => 29,  71 => 28,  67 => 26,  65 => 25,  60 => 22,  56 => 21,  50 => 17,  47 => 16,  42 => 13,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>October CMS - {{ this.page.title }}</title>*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="OctoberCMS">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="generator" content="OctoberCMS">*/
/*         <link href="{{ ['assets/css/materialize/css/materialize.min.css',*/
/*                         'assets/css/style.css'*/
/*                             ]|theme }}" rel="stylesheet">*/
/*           <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/* */
/*         {% styles %}*/
/*     </head>*/
/*     <body>*/
/* */
/* */
/*             {% partial 'nav' %}*/
/* */
/*         <!-- Content -->*/
/*         <main >*/
/*             {% page %}*/
/*         </main>*/
/*         */
/*             {%partial 'footer' %}*/
/* */
/*         <!-- Scripts -->*/
/*         <script src="{{ 'assets/js/jquery.js'|theme }}"></script>*/
/*         <script src="{{ 'assets/js/materialize/js/materialize.min.js'|theme }}"></script>*/
/*         <script src="{{ 'assets/js/app.js'|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/* */
/*     </body>*/
/* </html>*/
