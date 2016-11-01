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
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("home.md"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
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
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% content 'home.md' %}";
    }
}
