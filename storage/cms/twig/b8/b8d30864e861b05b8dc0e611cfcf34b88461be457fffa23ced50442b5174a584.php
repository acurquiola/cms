<?php

/* /var/www/html/cms/themes/topsportstv/partials/nav.htm */
class __TwigTemplate_3dfc1a22ac0eedf589fed3d0f3267519cf893323a14119eacb38b23d7b967476 extends Twig_Template
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
        echo "<nav class=\"purple darken-4\">
\t\t<div class=\"nav-wrapper\">
\t\t\t<a href=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"brand-logo\">Streaming Sports</a>
\t\t\t

\t\t\t<ul id=\"nav-mobile\" class=\"side-bar right\">
\t\t\t    ";
        // line 7
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 8
            echo "    \t\t\t\t<li class=\"";
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
    \t\t\t\t<li class=\"";
            // line 11
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contacto</a></li>
                    <a class='dropdown-button btn' href='#' data-activates='dropdown1'>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</a>
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href=\"";
            // line 14
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("perfil");
            echo "\">Perfil</a></li>
                        <li class=\"divider\"></li>
                        <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Cerrar Sesión</a></li>
                    </ul>
                ";
        } else {
            // line 19
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t<li class=\"";
            // line 20
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 21
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contacto</a></li>
    \t\t\t\t
                    <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Acceder</a>
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href=\"";
            // line 25
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\">Inicia Sesión</a></li>
                        <li><a href=\"";
            // line 26
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("register");
            echo "\">Regístrate</a></li>
                    </ul>
                ";
        }
        // line 29
        echo "\t\t\t</ul>

\t\t\t<!-- <a href=\"#\" data-activates=\"nav-mobile\" class=\"buttom-collapse\">Menú</a> -->

\t\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/themes/topsportstv/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  110 => 26,  106 => 25,  95 => 21,  87 => 20,  78 => 19,  70 => 14,  65 => 12,  57 => 11,  49 => 10,  41 => 9,  32 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<nav class=\"purple darken-4\">
\t\t<div class=\"nav-wrapper\">
\t\t\t<a href=\"{{ 'home'|page }}\" class=\"brand-logo\">Streaming Sports</a>
\t\t\t

\t\t\t<ul id=\"nav-mobile\" class=\"side-bar right\">
\t\t\t    {% if user %}
    \t\t\t\t<li class=\"{% if this.page.id == 'home' %} active {% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'blog' %} active {% endif %}\"><a href=\"{{ 'blog'|page }}\">Noticias</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'planes' %} active {% endif %}\"><a href=\"{{ 'planes'|page }}\">Planes</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'contact' %} active {% endif %}\"><a href=\"{{ 'contact'|page }}\">Contacto</a></li>
                    <a class='dropdown-button btn' href='#' data-activates='dropdown1'>{{ user.name}}</a>
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href=\"{{ 'perfil'|page }}\">Perfil</a></li>
                        <li class=\"divider\"></li>
                        <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Cerrar Sesión</a></li>
                    </ul>
                {% else %}
    \t\t\t\t<li class=\"{% if this.page.id == 'home' %} active {% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'planes' %} active {% endif %}\"><a href=\"{{ 'planes'|page }}\">Planes</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'contact' %} active {% endif %}\"><a href=\"{{ 'contact'|page }}\">Contacto</a></li>
    \t\t\t\t
                    <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Acceder</a>
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href=\"{{ 'login'|page }}\">Inicia Sesión</a></li>
                        <li><a href=\"{{ 'register'|page }}\">Regístrate</a></li>
                    </ul>
                {% endif %}
\t\t\t</ul>

\t\t\t<!-- <a href=\"#\" data-activates=\"nav-mobile\" class=\"buttom-collapse\">Menú</a> -->

\t\t</div>
</nav>";
    }
}
