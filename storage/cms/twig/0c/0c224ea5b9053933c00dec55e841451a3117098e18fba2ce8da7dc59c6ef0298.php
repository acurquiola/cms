<?php

/* /var/www/html/cms/themes/topsportstv/pages/login.htm */
class __TwigTemplate_7273471ff4ce70fce7cc1f9c71fc85ba1fc5f21e676d5c9ed980e65eeaa468b5 extends Twig_Template
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
        echo "<div class=\"container\" >

    <div class=\"section\" >
    
        ";
        // line 5
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 6
            echo "
            <div class=\"row\">
        
                <div class=\"col-md-6\">
                    <h4>Iniciar Sesión</h4>
                    ";
            // line 11
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::signin")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "                </div>
   
            </div>
        
        ";
        } else {
            // line 17
            echo "        
            ";
            // line 18
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "        
            ";
            // line 20
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 21
            echo "        
            ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::deactivate_link")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "        
        ";
        }
        // line 25
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/themes/topsportstv/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  66 => 23,  62 => 22,  59 => 21,  55 => 20,  52 => 19,  48 => 18,  45 => 17,  38 => 12,  34 => 11,  27 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container\" >

    <div class=\"section\" >
    
        {% if not user %}

            <div class=\"row\">
        
                <div class=\"col-md-6\">
                    <h4>Iniciar Sesión</h4>
                    {% partial account ~ '::signin' %}
                </div>
   
            </div>
        
        {% else %}
        
            {% partial account ~ '::activation_check' %}
        
            {% partial account ~ '::update' %}
        
            {% partial account ~ '::deactivate_link' %}
        
        {% endif %}
    </div>
</div>";
    }
}
