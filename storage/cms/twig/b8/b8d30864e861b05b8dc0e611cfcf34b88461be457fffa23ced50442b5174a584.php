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
        echo "<ul id='button-user' class='dropdown-content'>
    <li><a href=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("perfil");
        echo "\">Perfil</a></li>
    <li class=\"divider\"></li>
    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Cerrar Sesión</a></li>
</ul>


<ul id='button-guest' class='dropdown-content'>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
        echo "\">Inicia Sesión</a></li>
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("register");
        echo "\">Regístrate</a></li>
</ul>

<div class=\"navbar-fixed\">
    <nav class=\"purple darken-4\">
    \t<div class=\"nav-wrapper\">
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"brand-logo\">
                Streaming Sports
            </a>
            <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\">
                <i class=\"material-icons\">menu</i>
            </a>
            <ul class=\"right hide-on-med-and-down\">
                ";
        // line 23
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 24
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t<li class=\"";
            // line 25
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "blog")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
            echo "\">Noticias</a></li>
    \t\t\t\t<li class=\"";
            // line 26
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 27
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contacto</a></li>
                    <a class='dropdown-button btn' href='#' data-activates='button-user'>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 30
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t<li class=\"";
            // line 31
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 32
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contacto</a></li>
    \t\t\t\t
                    <a class='dropdown-button btn' href='#' data-activates='button-guest'>Acceder</a>
                ";
        }
        // line 36
        echo "            </ul>
            <ul class=\"side-nav\" id=\"mobile-demo\">
                ";
        // line 38
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 39
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t<li class=\"";
            // line 40
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "blog")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
            echo "\">Noticias</a></li>
    \t\t\t\t<li class=\"";
            // line 41
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 42
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contacto</a></li>
                    <a class='dropdown-button btn' href='#' data-activates='button-user'>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 45
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t<li class=\"";
            // line 46
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 47
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contacto</a></li>
    \t\t\t\t
                    <a class='dropdown-button btn' href='#' data-activates='button-guest'>Acceder</a>
                ";
        }
        // line 51
        echo "            </ul>
        </div>
    </nav>
</div>";
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
        return array (  195 => 51,  184 => 47,  176 => 46,  167 => 45,  162 => 43,  154 => 42,  146 => 41,  138 => 40,  129 => 39,  127 => 38,  123 => 36,  112 => 32,  104 => 31,  95 => 30,  90 => 28,  82 => 27,  74 => 26,  66 => 25,  57 => 24,  55 => 23,  45 => 16,  36 => 10,  32 => 9,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<ul id='button-user' class='dropdown-content'>
    <li><a href=\"{{ 'perfil'|page }}\">Perfil</a></li>
    <li class=\"divider\"></li>
    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Cerrar Sesión</a></li>
</ul>


<ul id='button-guest' class='dropdown-content'>
    <li><a href=\"{{ 'login'|page }}\">Inicia Sesión</a></li>
    <li><a href=\"{{ 'register'|page }}\">Regístrate</a></li>
</ul>

<div class=\"navbar-fixed\">
    <nav class=\"purple darken-4\">
    \t<div class=\"nav-wrapper\">
            <a href=\"{{ 'home'|page }}\" class=\"brand-logo\">
                Streaming Sports
            </a>
            <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\">
                <i class=\"material-icons\">menu</i>
            </a>
            <ul class=\"right hide-on-med-and-down\">
                {% if user %}
    \t\t\t\t<li class=\"{% if this.page.id == 'home' %} active {% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'blog' %} active {% endif %}\"><a href=\"{{ 'blog'|page }}\">Noticias</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'planes' %} active {% endif %}\"><a href=\"{{ 'planes'|page }}\">Planes</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'contact' %} active {% endif %}\"><a href=\"{{ 'contact'|page }}\">Contacto</a></li>
                    <a class='dropdown-button btn' href='#' data-activates='button-user'>{{ user.name}}</a>
                {% else %}
    \t\t\t\t<li class=\"{% if this.page.id == 'home' %} active {% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'planes' %} active {% endif %}\"><a href=\"{{ 'planes'|page }}\">Planes</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'contact' %} active {% endif %}\"><a href=\"{{ 'contact'|page }}\">Contacto</a></li>
    \t\t\t\t
                    <a class='dropdown-button btn' href='#' data-activates='button-guest'>Acceder</a>
                {% endif %}
            </ul>
            <ul class=\"side-nav\" id=\"mobile-demo\">
                {% if user %}
    \t\t\t\t<li class=\"{% if this.page.id == 'home' %} active {% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'blog' %} active {% endif %}\"><a href=\"{{ 'blog'|page }}\">Noticias</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'planes' %} active {% endif %}\"><a href=\"{{ 'planes'|page }}\">Planes</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'contact' %} active {% endif %}\"><a href=\"{{ 'contact'|page }}\">Contacto</a></li>
                    <a class='dropdown-button btn' href='#' data-activates='button-user'>{{ user.name}}</a>
                {% else %}
    \t\t\t\t<li class=\"{% if this.page.id == 'home' %} active {% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'planes' %} active {% endif %}\"><a href=\"{{ 'planes'|page }}\">Planes</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'contact' %} active {% endif %}\"><a href=\"{{ 'contact'|page }}\">Contacto</a></li>
    \t\t\t\t
                    <a class='dropdown-button btn' href='#' data-activates='button-guest'>Acceder</a>
                {% endif %}
            </ul>
        </div>
    </nav>
</div>";
    }
}
