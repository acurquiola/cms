<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/partials/nav.htm */
class __TwigTemplate_8728c56ba1857a398f2aa47ec24bb661b342640466d235a3fd6826bb5a2d8ffd extends Twig_Template
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
\t\t\t<a href=\"#\" class=\"brand-logo\">Streaming Sports</a>
\t\t\t

\t\t\t<ul id=\"nav-mobile\" class=\"side-bar right\">
\t\t\t\t<li class=\"";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Home</a></li>
\t\t\t\t<li class=\"";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "planes")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("planes");
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
        return array (  36 => 9,  28 => 8,  19 => 1,);
    }
}
/* <nav class="cyan accent-4">*/
/* 	<div class="container">*/
/* 		<div class="nav-wrapper">*/
/* 			<a href="#" class="brand-logo">Streaming Sports</a>*/
/* 			*/
/* */
/* 			<ul id="nav-mobile" class="side-bar right">*/
/* 				<li class="{% if this.page.id == 'home' %} active {% endif %}"><a href="{{ 'home'|page }}">Home</a></li>*/
/* 				<li class="{% if this.page.id == 'planes' %} active {% endif %}"><a href="{{ 'planes'|page }}">Planes</a></li>*/
/* 			</ul>*/
/* */
/* 			<!-- <a href="#" data-activates="nav-mobile" class="buttom-collapse">Menú</a> -->*/
/* */
/* 		</div>*/
/* 	</div>*/
/* </nav>*/
