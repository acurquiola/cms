<?php

/* /var/www/html/cms/themes/topsportstv/pages/blog/post.htm */
class __TwigTemplate_858b63158d4d8b4ce900cc0884b07b481d745aec4ee590b1025b9e05bba4f22e extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("PostBreadCrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "<h3 class=\"blue-text text-blue\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h3>
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/themes/topsportstv/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  23 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% component 'PostBreadCrumbs' %}
<h3 class=\"blue-text text-blue\">{{ this.page.title }}</h3>
{% component 'blogPost' %}";
    }
}
