<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/home.htm */
class __TwigTemplate_b6107c84d0ef096cbddb16151bf921fcd4dbd455c0baeda5f85845f3eae52bcf extends Twig_Template
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
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/home.htm";
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
{% partial 'home/secciones' %}", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/home.htm", "");
    }
}
