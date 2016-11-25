<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/layouts/default.htm */
class __TwigTemplate_ac6e817e57043051a3920f7c44fa747178d0a3a6a114944d4069850a8df08864 extends Twig_Template
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
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sweetAlertMessage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/materialize/css/materialize.min.css", 1 => "assets/css/style.css", 2 => "assets/font-awesome/css/font-awesome.min.css"));
        // line 15
        echo "\" rel=\"stylesheet\">
          <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
          <link rel=\"stylesheet\" href=\"/plugins/planetadeleste/swal/assets/vendor/sweetalert/sweetalert.css\">
    ";
        // line 18
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 19
        echo "    </head>
    <body>


        ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "
        <!-- Content -->
        <main >
            ";
        // line 27
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 28
        echo "        </main>
        
            ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
        <!-- Scripts -->
        <script src=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/materialize/js/materialize.min.js");
        echo "\"></script>
        <script src=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/app.js");
        echo "\"></script>
        <script src=\"/plugins/planetadeleste/swal/assets/vendor/sweetalert/sweetalert.min.js\"></script>
        <script src=\"/plugins/planetadeleste/swal/assets/js/flash-swal.js\"></script>
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
        return array (  110 => 40,  106 => 39,  99 => 38,  93 => 35,  89 => 34,  85 => 33,  81 => 31,  77 => 30,  73 => 28,  71 => 27,  66 => 24,  62 => 23,  56 => 19,  53 => 18,  48 => 15,  46 => 12,  39 => 8,  35 => 7,  31 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
{% component 'sweetAlertMessage' %}
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
                        'assets/css/style.css',
                        'assets/font-awesome/css/font-awesome.min.css'
                            ]|theme }}\" rel=\"stylesheet\">
          <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
          <link rel=\"stylesheet\" href=\"/plugins/planetadeleste/swal/assets/vendor/sweetalert/sweetalert.css\">
    {% styles %}
    </head>
    <body>


        {% partial 'nav' %}

        <!-- Content -->
        <main >
            {% page %}
        </main>
        
            {%partial 'footer' %}

        <!-- Scripts -->
        <script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/materialize/js/materialize.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
        <script src=\"/plugins/planetadeleste/swal/assets/vendor/sweetalert/sweetalert.min.js\"></script>
        <script src=\"/plugins/planetadeleste/swal/assets/js/flash-swal.js\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/layouts/default.htm", "");
    }
}
