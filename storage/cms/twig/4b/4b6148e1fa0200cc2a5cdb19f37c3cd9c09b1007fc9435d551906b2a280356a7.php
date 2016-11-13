<?php

/* /var/www/html/cms/themes/topsportstv/pages/home.htm */
class __TwigTemplate_e53f9a2c375c5d24511cab4b8b8dc38f3f3009d2b2e439f02fbed52ef50a447d extends Twig_Template
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
        // line 7
        if (call_user_func_array($this->env->getFunction('inGroup')->getCallable(), array("registered"))) {
            // line 8
            echo "        <div class=\"row\">
        \t<div class=\"col l12 m12 s12\">
                ";
            // line 10
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home/alertaVerPlanes"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 11
            echo "        \t</div>
        </div>
    ";
        }
        // line 14
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
        return array (  47 => 14,  42 => 11,  38 => 10,  34 => 8,  32 => 7,  23 => 3,  19 => 1,);
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

    {% if inGroup('registered') %}
        <div class=\"row\">
        \t<div class=\"col l12 m12 s12\">
                {% partial 'home/alertaVerPlanes' %}
        \t</div>
        </div>
    {% endif %}
{% partial 'home/secciones' %}", "/var/www/html/cms/themes/topsportstv/pages/home.htm", "");
    }
}
