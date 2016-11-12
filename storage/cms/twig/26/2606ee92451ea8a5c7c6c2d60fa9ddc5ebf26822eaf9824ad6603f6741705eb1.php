<?php

/* /var/www/html/cms/themes/topsportstv/partials/home/carousel.htm */
class __TwigTemplate_1ebeea22ab94237c6154bd1a2ca090a109c63db2423542f79f0da0eda089353d extends Twig_Template
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
        echo "<div class=\"slider\">
    <ul class=\"slides\">
        <li>
            <img class=\"carrusel-img\" src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter("Homepage/carrusel/messi.jpg");
        echo "\" >
        </li> 
        <li>
            <img class=\"carrusel-img\" src=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter("Homepage/carrusel/tom-brady-nfl.jpg");
        echo "\" >
        </li> 
        <li>
            <img class=\"carrusel-img\" src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter("Homepage/carrusel/Jose-Altuve.jpg");
        echo "\" >
        </li>
        <li>
            <img class=\"carrusel-img\" src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter("Homepage/carrusel/hockey.jpg");
        echo "\" >
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/themes/topsportstv/partials/home/carousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  36 => 10,  30 => 7,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"slider\">
    <ul class=\"slides\">
        <li>
            <img class=\"carrusel-img\" src=\"{{ 'Homepage/carrusel/messi.jpg'|media }}\" >
        </li> 
        <li>
            <img class=\"carrusel-img\" src=\"{{ 'Homepage/carrusel/tom-brady-nfl.jpg'|media }}\" >
        </li> 
        <li>
            <img class=\"carrusel-img\" src=\"{{ 'Homepage/carrusel/Jose-Altuve.jpg'|media }}\" >
        </li>
        <li>
            <img class=\"carrusel-img\" src=\"{{ 'Homepage/carrusel/hockey.jpg'|media }}\" >
        </li>
    </ul>
</div>";
    }
}
