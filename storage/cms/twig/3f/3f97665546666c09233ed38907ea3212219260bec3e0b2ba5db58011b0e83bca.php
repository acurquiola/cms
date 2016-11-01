<?php

/* C:\xampp\htdocs\cms/themes/martin-materialize-parallax/layouts/default.htm */
class __TwigTemplate_6fd5624456b419d75d39b1893380d84a469b99acf68225c13c307068eb9e447e extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>
    <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/materialize.min.css", 1 => "assets/css/styles.css"));
        echo "\" rel=\"stylesheet\" media=\"screen,projection\" />
    ";
        // line 9
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 10
        echo "</head>
<body>

    ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">

                <div class=\"col s12 m4\">
                    <div class=\"icon-block\">
                        <h2 class=\"center brown-text\"><i class=\"material-icons\">flash_on</i></h2>
                        <h5 class=\"center\">Speeds up development</h5>
                        <p class=\"light\">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block\">
                        <h2 class=\"center brown-text\"><i class=\"material-icons\">group</i></h2>
                        <h5 class=\"center\">User Experience Focused</h5>
                        <p class=\"light\">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block\">
                        <h2 class=\"center brown-text\"><i class=\"material-icons\">settings</i></h2>
                        <h5 class=\"center\">Easy to work with</h5>
                        <p class=\"light\">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"";
        // line 56
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/background2.jpg");
        echo "\" alt=\"Unsplashed background img 2\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h3><i class=\"mdi-content-send brown-text\"></i></h3>
                    <h4>Contact Us</h4>
                    <p class=\"left-align light\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"";
        // line 79
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/background3.jpg");
        echo "\" alt=\"Unsplashed background img 3\"></div>
    </div>

    ";
        // line 82
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 83
        echo "
    <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script src=\"";
        // line 85
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/materialize.min.js", 1 => "assets/js/init.js", 2 => "@framework", 3 => "@framework.extras"));
        // line 89
        echo "\"></script>
    ";
        // line 90
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 91
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/martin-materialize-parallax/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 91,  140 => 90,  137 => 89,  135 => 85,  131 => 83,  127 => 82,  121 => 79,  95 => 56,  52 => 15,  47 => 14,  43 => 13,  38 => 10,  35 => 9,  31 => 8,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>
    <title>{{ this.page.title }}</title>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href=\"{{ ['assets/css/materialize.min.css', 'assets/css/styles.css']|theme }}\" rel=\"stylesheet\" media=\"screen,projection\" />
    {% styles %}
</head>
<body>

    {% partial 'navigation' %}
    {% partial 'header'     %}

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">

                <div class=\"col s12 m4\">
                    <div class=\"icon-block\">
                        <h2 class=\"center brown-text\"><i class=\"material-icons\">flash_on</i></h2>
                        <h5 class=\"center\">Speeds up development</h5>
                        <p class=\"light\">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block\">
                        <h2 class=\"center brown-text\"><i class=\"material-icons\">group</i></h2>
                        <h5 class=\"center\">User Experience Focused</h5>
                        <p class=\"light\">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block\">
                        <h2 class=\"center brown-text\"><i class=\"material-icons\">settings</i></h2>
                        <h5 class=\"center\">Easy to work with</h5>
                        <p class=\"light\">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"{{ 'assets/images/background2.jpg'|theme }}\" alt=\"Unsplashed background img 2\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h3><i class=\"mdi-content-send brown-text\"></i></h3>
                    <h4>Contact Us</h4>
                    <p class=\"left-align light\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"{{ 'assets/images/background3.jpg'|theme }}\" alt=\"Unsplashed background img 3\"></div>
    </div>

    {% partial 'footer' %}

    <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script src=\"{{ [
      'assets/js/materialize.min.js',
      'assets/js/init.js',
      '@framework',
      '@framework.extras']|theme }}\"></script>
    {% scripts %}

</body>
</html>";
    }
}
