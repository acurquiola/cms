<?php

/* /var/www/html/cms/themes/topsportstv/partials/home/carousel.htm */
class __TwigTemplate_faf2b7cc5db30c3ad664f0c5919497fcbd3fbc82612165ea97b10931b2734843 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"slider\">
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
</div>", "/var/www/html/cms/themes/topsportstv/partials/home/carousel.htm", "");
    }
}
