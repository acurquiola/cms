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
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home/secciones"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
<div>
\t<a href=\"#confirmacion-modal\" class=\"btn modal-trigger\" id=\"confirmacion-modal-btn\" style=\"display: none\">Modal</a>

\t<div id=\"confirmacion-modal\" class=\"modal\">
\t\t<div class=\"modal-content\">
\t\t\t<h4>Modal Header</h4>
\t\t\t<p>A bunch of text</p>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t<a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">OK</a>
\t\t</div>
\t</div>
</div>";
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
        return array (  35 => 7,  31 => 6,  23 => 3,  19 => 1,);
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
{% partial 'home/secciones' %}

<div>
\t<a href=\"#confirmacion-modal\" class=\"btn modal-trigger\" id=\"confirmacion-modal-btn\" style=\"display: none\">Modal</a>

\t<div id=\"confirmacion-modal\" class=\"modal\">
\t\t<div class=\"modal-content\">
\t\t\t<h4>Modal Header</h4>
\t\t\t<p>A bunch of text</p>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t<a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">OK</a>
\t\t</div>
\t</div>
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/home.htm", "");
    }
}
