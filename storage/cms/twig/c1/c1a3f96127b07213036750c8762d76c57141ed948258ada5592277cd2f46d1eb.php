<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/home.htm */
class __TwigTemplate_e91d871defd0a018aeabf0553c0f1967d21138172dff526da866001276f71497 extends Twig_Template
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
            if (call_user_func_array($this->env->getFunction('inGroup')->getCallable(), array("usuarios-premium"))) {
                // line 8
                echo "        ";
            } else {
                // line 9
                echo "            <div class=\"row\">
            \t<div class=\"col l12 m12 s12\">
                    ";
                // line 11
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction("home/alertaVerPlanes"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 12
                echo "            \t</div>
            </div>
        ";
            }
            // line 15
            echo "    ";
        }
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home/secciones"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  52 => 15,  47 => 12,  43 => 11,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  23 => 3,  19 => 1,);
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
        {% if inGroup('usuarios-premium') %}
        {% else %}
            <div class=\"row\">
            \t<div class=\"col l12 m12 s12\">
                    {% partial 'home/alertaVerPlanes' %}
            \t</div>
            </div>
        {% endif %}
    {% endif %}
{% partial 'home/secciones' %}", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/home.htm", "");
    }
}