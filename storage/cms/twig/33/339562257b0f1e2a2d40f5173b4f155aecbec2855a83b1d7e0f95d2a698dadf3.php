<?php

/* /var/www/html/cms/themes/topsportstv/pages/home.htm */
class __TwigTemplate_f485f1aa010b4068cde61f2e58e8f229d5da741f56c1099d0d0d85d35effc232 extends Twig_Template
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
        return "/var/www/html/cms/themes/topsportstv/pages/home.htm";
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
