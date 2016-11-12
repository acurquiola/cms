<?php

/* /var/www/html/cms/themes/topsportstv/partials/home/secciones.htm */
class __TwigTemplate_587ce0366f6eb98859e7eaafcc43d0616de4d80bfe3c53b280d6d5d85727fe4a extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col s12 m4 l4\">
\t\t<div class=\"card horizontal  deep-purple lighten-5\">
\t\t\t<div class=\"card-image\">
\t\t\t\t<img style=\"width: 150px\" src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter("Homepage/secciones/partidos-online.png");
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"card-stacked\">
            \t<span class=\"card-title\"> Partidos Online</span>
\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t<p>Disfruta de todos los eventos deportivos en vivo: Beisbol, Fútbol, NHL, NFL y mucho más.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t<a  href=\"#\"  class=\"waves-effect waves-light btn\">Ver más</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col s12 m4 l4\">
\t\t<div class=\"card horizontal  deep-purple lighten-5\">
\t\t\t<div class=\"card-image\">
\t\t\t\t<img style=\"width: 150px\" src=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter("Homepage/secciones/news.png");
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"card-stacked\">
            \t<span class=\"card-title\"> Noticias Deportivas</span>
\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t<p>Disfruta de todos los eventos deportivos en vivo: Beisbol, Fútbol, NHL, NFL y mucho más.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\"  class=\"waves-effect waves-light btn\">Ver más</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col s12 m4 l4\">
\t\t<div class=\"card horizontal  deep-purple lighten-5\">
\t\t\t<div class=\"card-image\">
\t\t\t\t<img style=\"width: 150px\" src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter("Homepage/secciones/pronosticos-deportivos.png");
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"card-stacked\">
            \t<span class=\"card-title\"> Pronósticos Deportivos</span>
\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t<p>Accede a los mejores pronósticos para los juegos de las ligas más importantes del mundo.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t<a  href=\"#\"  class=\"waves-effect waves-light btn\">Ver más</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/themes/topsportstv/partials/home/secciones.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 37,  55 => 29,  44 => 21,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"row\">
\t<div class=\"col s12 m4 l4\">
\t\t<div class=\"card horizontal  deep-purple lighten-5\">
\t\t\t<div class=\"card-image\">
\t\t\t\t<img style=\"width: 150px\" src=\"{{ 'Homepage/secciones/partidos-online.png' | media }}\">
\t\t\t</div>
\t\t\t<div class=\"card-stacked\">
            \t<span class=\"card-title\"> Partidos Online</span>
\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t<p>Disfruta de todos los eventos deportivos en vivo: Beisbol, Fútbol, NHL, NFL y mucho más.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t<a  href=\"#\"  class=\"waves-effect waves-light btn\">Ver más</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col s12 m4 l4\">
\t\t<div class=\"card horizontal  deep-purple lighten-5\">
\t\t\t<div class=\"card-image\">
\t\t\t\t<img style=\"width: 150px\" src=\"{{ 'Homepage/secciones/news.png' | media }}\">
\t\t\t</div>
\t\t\t<div class=\"card-stacked\">
            \t<span class=\"card-title\"> Noticias Deportivas</span>
\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t<p>Disfruta de todos los eventos deportivos en vivo: Beisbol, Fútbol, NHL, NFL y mucho más.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t<a href=\"{{ 'blog'|page }}\"  class=\"waves-effect waves-light btn\">Ver más</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col s12 m4 l4\">
\t\t<div class=\"card horizontal  deep-purple lighten-5\">
\t\t\t<div class=\"card-image\">
\t\t\t\t<img style=\"width: 150px\" src=\"{{ 'Homepage/secciones/pronosticos-deportivos.png' | media }}\">
\t\t\t</div>
\t\t\t<div class=\"card-stacked\">
            \t<span class=\"card-title\"> Pronósticos Deportivos</span>
\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t<p>Accede a los mejores pronósticos para los juegos de las ligas más importantes del mundo.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t<a  href=\"#\"  class=\"waves-effect waves-light btn\">Ver más</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }
}
