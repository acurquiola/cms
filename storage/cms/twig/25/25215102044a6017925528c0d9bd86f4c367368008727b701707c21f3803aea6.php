<?php

/* /var/www/html/cms/themes/topsportstv/partials/nav.htm */
class __TwigTemplate_d88aea272e58a0c0b66561b2f49cd3c668644922d48d45abe9d022b87f87838e extends Twig_Template
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


<ul id='streaming-btn-full' class='dropdown-content'>
    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("streaming/canal1");
        echo "\">Canal 1</a></li>
    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("streaming/canal2");
        echo "\">Canal 2</a></li>
</ul>

<ul id='streaming-btn' class='dropdown-content'>
    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("streaming/canal1");
        echo "\">Canal 1</a></li>
    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("streaming/canal2");
        echo "\">Canal 2</a></li>
</ul>

<div class=\"navbar-fixed\">
    <nav class=\"purple darken-4\">
    \t<div class=\"nav-wrapper\">
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"brand-logo\">
                Streaming Sports
            </a>
            <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\">
                <i class=\"material-icons\">menu</i>
            </a>
            <ul class=\"right hide-on-med-and-down\">
                ";
        // line 47
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 48
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t";
            // line 49
            if (call_user_func_array($this->env->getFunction('inGroup')->getCallable(), array("usuarios-premium"))) {
                // line 50
                echo "    \t\t\t\t\t<li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"streaming-btn-full\">Streaming</a></li>
    \t\t\t\t    <li class=\"";
                // line 51
                if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "blog")) {
                    echo " active ";
                }
                echo "\"><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
                echo "\">Noticias</a></li>
    \t\t\t\t";
            }
            // line 53
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 54
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contacto</a></li>
                    <a class='dropdown-button btn' href='#' data-activates='button-user-full'>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 57
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t<li class=\"";
            // line 58
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 59
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
        // line 63
        echo "            </ul>
            <ul class=\"side-nav\" id=\"mobile-demo\">
                ";
        // line 65
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 66
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t";
            // line 67
            if (call_user_func_array($this->env->getFunction('inGroup')->getCallable(), array("usuarios-premium"))) {
                // line 68
                echo "    \t\t\t\t\t<li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"streaming-btn\">Streaming</a></li>
    \t\t\t\t    <li class=\"";
                // line 69
                if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "blog")) {
                    echo " active ";
                }
                echo "\"><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
                echo "\">Noticias</a></li>
    \t\t\t\t";
            }
            // line 71
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 72
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contacto</a></li>
                    <a class='dropdown-button btn' href='#' data-activates='button-user'>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 75
            echo "    \t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Home</a></li>
    \t\t\t\t<li class=\"";
            // line 76
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
            echo "\">Planes</a></li>
    \t\t\t\t<li class=\"";
            // line 77
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
        // line 81
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
        return array (  254 => 81,  243 => 77,  235 => 76,  226 => 75,  221 => 73,  213 => 72,  204 => 71,  195 => 69,  192 => 68,  190 => 67,  181 => 66,  179 => 65,  175 => 63,  164 => 59,  156 => 58,  147 => 57,  142 => 55,  134 => 54,  125 => 53,  116 => 51,  113 => 50,  111 => 49,  102 => 48,  100 => 47,  90 => 40,  81 => 34,  77 => 33,  70 => 29,  66 => 28,  58 => 23,  54 => 22,  44 => 15,  36 => 10,  32 => 9,  22 => 2,  19 => 1,);
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


<ul id='streaming-btn-full' class='dropdown-content'>
    <li><a href=\"{{ 'streaming/canal1'|page }}\">Canal 1</a></li>
    <li><a href=\"{{ 'streaming/canal2'|page }}\">Canal 2</a></li>
</ul>

<ul id='streaming-btn' class='dropdown-content'>
    <li><a href=\"{{ 'streaming/canal1'|page }}\">Canal 1</a></li>
    <li><a href=\"{{ 'streaming/canal2'|page }}\">Canal 2</a></li>
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
    \t\t\t\t{% if inGroup('usuarios-premium') %}
    \t\t\t\t\t<li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"streaming-btn-full\">Streaming</a></li>
    \t\t\t\t    <li class=\"{% if this.page.id == 'blog' %} active {% endif %}\"><a href=\"{{ 'blog'|page }}\">Noticias</a></li>
    \t\t\t\t{% endif %}
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
    \t\t\t\t{% if inGroup('usuarios-premium') %}
    \t\t\t\t\t<li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"streaming-btn\">Streaming</a></li>
    \t\t\t\t    <li class=\"{% if this.page.id == 'blog' %} active {% endif %}\"><a href=\"{{ 'blog'|page }}\">Noticias</a></li>
    \t\t\t\t{% endif %}
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
</div>", "/var/www/html/cms/themes/topsportstv/partials/nav.htm", "");
    }
}
