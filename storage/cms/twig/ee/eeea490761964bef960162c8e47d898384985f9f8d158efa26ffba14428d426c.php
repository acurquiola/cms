<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/blog/categorias.htm */
class __TwigTemplate_e0842b486c89ddc386f9cb098adcc8d4ecd78fb109d6237c48e698f8f82b9f8b extends Twig_Template
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
    <div class=\"col s12 m10 l10\">
        ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    </div>
    <div class=\"collection col s12 m2 l2\">
        <h6 class=\"center\"> CATEGORÍAS </h6>
        ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/blog/categorias.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  32 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"row\">
    <div class=\"col s12 m10 l10\">
        {% component 'blogPosts' %}
    </div>
    <div class=\"collection col s12 m2 l2\">
        <h6 class=\"center\"> CATEGORÍAS </h6>
        {% component 'blogCategories' %}
    </div>
  </div>";
    }
}
