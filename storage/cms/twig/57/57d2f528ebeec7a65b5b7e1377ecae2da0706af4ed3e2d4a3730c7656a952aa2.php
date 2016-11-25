<?php

/* /var/www/html/cms/themes/topsportstv/pages/home.htm */
class __TwigTemplate_e30036b9934716a7a93a062025c1e0274e84dc9a2386f138028b0cd2db6b1b2e extends Twig_Template
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
\t<div class=\"col l12 m12 s12\">
\t\t";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home/carousel"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "     
\t</div>
</div>
    ";
        // line 6
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 7
            echo "        ";
            if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("seccion_noticias"))) {
                // line 8
                echo "        ";
            } elseif (call_user_func_array($this->env->getFunction('can')->getCallable(), array("seccion_streaming"))) {
                // line 9
                echo "        ";
            } else {
                // line 10
                echo "            <div class=\"row\">
            \t<div class=\"col l12 m12 s12\">
                    ";
                // line 12
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction("home/alertaVerPlanes"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 13
                echo "            \t</div>
            </div>
        ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home/secciones"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/themes/topsportstv/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  55 => 16,  50 => 13,  46 => 12,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
\t<div class=\"col l12 m12 s12\">
\t\t{% partial 'home/carousel' %}     
\t</div>
</div>
    {% if user %}
        {% if can('seccion_noticias') %}
        {% elseif can('seccion_streaming')%}
        {% else %}
            <div class=\"row\">
            \t<div class=\"col l12 m12 s12\">
                    {% partial 'home/alertaVerPlanes' %}
            \t</div>
            </div>
        {% endif %}
    {% endif %}
{% partial 'home/secciones' %}", "/var/www/html/cms/themes/topsportstv/pages/home.htm", "");
    }
}
