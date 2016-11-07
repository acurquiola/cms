<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/perfil.htm */
class __TwigTemplate_51ee6c595350e9e5f81e428e5214c4f79f8e6db13aafb74779b75047a6039650 extends Twig_Template
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
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 4
            echo "
            ";
            // line 5
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "        
            ";
            // line 7
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "        
            ";
            // line 9
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::deactivate_link")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "        
        ";
        }
        // line 12
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/perfil.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  46 => 10,  42 => 9,  39 => 8,  35 => 7,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container\">
    <div class=\"section\">
        {% if user %}

            {% partial account ~ '::activation_check' %}
        
            {% partial account ~ '::update' %}
        
            {% partial account ~ '::deactivate_link' %}
        
        {% endif %}
    </div>
</div>";
    }
}
