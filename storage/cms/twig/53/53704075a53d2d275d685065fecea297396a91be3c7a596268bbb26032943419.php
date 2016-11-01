<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/layouts/fallback.htm */
class __TwigTemplate_a62bc7e4919fb27fd2d4abc3cfe1dce2c001c0e9681dfb46c19403148b898760 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% page %}";
    }
}
