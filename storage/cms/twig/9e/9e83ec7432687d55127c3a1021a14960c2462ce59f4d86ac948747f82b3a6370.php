<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/contact.htm */
class __TwigTemplate_9a222f2dacfd2e50a97485c3d9a6cf35d08d5513f828b5daf06748377e4567c2 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"section\">
        ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("simpleContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container\">
    <div class=\"section\">
        {% component 'simpleContact' %}
    </div>
</div>";
    }
}
