<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/partials/nav.htm */
class __TwigTemplate_186f3738ea4daae7050ca1f9195e9474cd96ceda6b70ba59128341fd6926e88e extends Twig_Template
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


<ul id='button-user-full' class='dropdown-content'>
    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("perfil");
        echo "\">Perfil</a></li>
    <li class=\"divider\"></li>
    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Cerrar Sesión</a></li>
</ul>


<ul id='button-guest-full' class='dropdown-content'>
    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
        echo "\">Inicia Sesión</a></li>
    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("register");
        echo "\">Regístrate</a></li>
</ul>

<div class=\"navbar-fixed\">
    <nav class=\"purple darken-4\">
    \t<div class=\"nav-wrapper\">
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"brand-logo\">
                Streaming Sports
            </a>
            <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\">
                <i class=\"material-icons\">menu</i>
            </a>
            <ul class=\"right hide-on-med-and-down\">
                ";
        // line 36
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 37
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t<li class=\"";
            // line 38
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "blog")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
            echo "\">Noticias</a></li>
    \t\t\t\t<li class=\"";
            // line 39
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 40
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contacto</a></li>
                    <a class='dropdown-button btn' href='#' data-activates='button-user-full'>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 43
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t<li class=\"";
            // line 44
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 45
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contacto</a></li>
    \t\t\t\t
                    <a class='dropdown-button btn' href='#' data-activates='button-guest-full'>Acceder</a>
                ";
        }
        // line 49
        echo "            </ul>
            <ul class=\"side-nav\" id=\"mobile-demo\">
                ";
        // line 51
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 52
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t<li class=\"";
            // line 53
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "blog")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
            echo "\">Noticias</a></li>
    \t\t\t\t<li class=\"";
            // line 54
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 55
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contacto</a></li>
                    <a class='dropdown-button btn' href='#' data-activates='button-user'>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 58
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t<li class=\"";
            // line 59
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 60
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
        // line 64
        echo "            </ul>
        </div>
    </nav>
</div>";
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
        return array (  217 => 64,  206 => 60,  198 => 59,  189 => 58,  184 => 56,  176 => 55,  168 => 54,  160 => 53,  151 => 52,  149 => 51,  145 => 49,  134 => 45,  126 => 44,  117 => 43,  112 => 41,  104 => 40,  96 => 39,  88 => 38,  79 => 37,  77 => 36,  67 => 29,  58 => 23,  54 => 22,  44 => 15,  36 => 10,  32 => 9,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul id='button-user' class='dropdown-content'>
    <li><a href=\"{{ 'perfil'|page }}\">Perfil</a></li>
    <li class=\"divider\"></li>
    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Cerrar Sesión</a></li>
</ul>


<ul id='button-guest' class='dropdown-content'>
    <li><a href=\"{{ 'login'|page }}\">Inicia Sesión</a></li>
    <li><a href=\"{{ 'register'|page }}\">Regístrate</a></li>
</ul>


<ul id='button-user-full' class='dropdown-content'>
    <li><a href=\"{{ 'perfil'|page }}\">Perfil</a></li>
    <li class=\"divider\"></li>
    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Cerrar Sesión</a></li>
</ul>


<ul id='button-guest-full' class='dropdown-content'>
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
                    <a class='dropdown-button btn' href='#' data-activates='button-user-full'>{{ user.name}}</a>
                {% else %}
    \t\t\t\t<li class=\"{% if this.page.id == 'home' %} active {% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'planes' %} active {% endif %}\"><a href=\"{{ 'planes'|page }}\">Planes</a></li>
    \t\t\t\t<li class=\"{% if this.page.id == 'contact' %} active {% endif %}\"><a href=\"{{ 'contact'|page }}\">Contacto</a></li>
    \t\t\t\t
                    <a class='dropdown-button btn' href='#' data-activates='button-guest-full'>Acceder</a>
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
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/partials/nav.htm", "");
    }
}
