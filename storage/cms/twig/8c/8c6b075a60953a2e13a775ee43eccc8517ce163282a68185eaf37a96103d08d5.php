<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/partials/nav.htm */
class __TwigTemplate_a4e063d3995ffd86d430bf57edd4d45f0f51d803b13dd1da6a13b8b20d90824a extends Twig_Template
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
        echo "<nav class=\"cyan accent-4\">
\t<div class=\"container\">
\t\t<div class=\"nav-wrapper\">
\t\t\t<a href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"brand-logo\">Streaming Sports</a>
\t\t\t

\t\t\t<ul id=\"nav-mobile\" class=\"side-bar right\">
\t\t\t\t<li class=\"";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
\t\t\t\t<li class=\"";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "blog")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Noticias</a></li>
\t\t\t\t<li class=\"";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
        echo "\">Planes</a></li>
\t\t\t</ul>

\t\t\t<!-- <a href=\"#\" data-activates=\"nav-mobile\" class=\"buttom-collapse\">Menú</a> -->

\t\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  39 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<nav class=\"cyan accent-4\">
\t<div class=\"container\">
\t\t<div class=\"nav-wrapper\">
\t\t\t<a href=\"{{ 'home'|page }}\" class=\"brand-logo\">Streaming Sports</a>
\t\t\t

\t\t\t<ul id=\"nav-mobile\" class=\"side-bar right\">
\t\t\t\t<li class=\"{% if this.page.id == 'home' %} active {% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
\t\t\t\t<li class=\"{% if this.page.id == 'blog' %} active {% endif %}\"><a href=\"{{ 'blog'|page }}\">Noticias</a></li>
\t\t\t\t<li class=\"{% if this.page.id == 'planes' %} active {% endif %}\"><a href=\"{{ 'planes'|page }}\">Planes</a></li>
\t\t\t</ul>

\t\t\t<!-- <a href=\"#\" data-activates=\"nav-mobile\" class=\"buttom-collapse\">Menú</a> -->

\t\t</div>
\t</div>
</nav>";
    }
}
