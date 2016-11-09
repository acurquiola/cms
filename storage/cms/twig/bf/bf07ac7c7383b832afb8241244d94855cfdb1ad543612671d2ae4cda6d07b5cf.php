<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/home.htm */
class __TwigTemplate_d59f206bff69670440c1fcb4c24eee691d3524e506885322bf62a7fb2267c740 extends Twig_Template
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
    <div class=\"col l12 m12 s12\">
        ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home/carousel"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "     
    </div>
</div>
 
        ";
        // line 7
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
        return array (  32 => 7,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"row\">
    <div class=\"col l12 m12 s12\">
        {% partial 'home/carousel' %}     
    </div>
</div>
 
        {% partial 'home/secciones' %}";
    }
}
