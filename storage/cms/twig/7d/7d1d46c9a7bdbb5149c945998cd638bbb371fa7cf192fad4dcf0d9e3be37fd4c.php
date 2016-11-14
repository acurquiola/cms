<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/login.htm */
class __TwigTemplate_8979f3fba146aa66aa55009bd040bf3895615ca916b4f64fc4029d4d6af69866 extends Twig_Template
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
        // line 4
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 5
            echo "        
            <div class=\"row\">
        
                <div class=\"col-md-6\">
                    <h3>Iniciar Sesión</h3>
                    ";
            // line 10
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::signin")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 11
            echo "                </div>
        
            </div>
        
        ";
        } else {
            // line 16
            echo "        
            ";
            // line 17
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "        
            ";
            // line 19
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "        
            ";
            // line 21
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::deactivate_link")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "        
        ";
        }
        // line 24
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  65 => 22,  61 => 21,  58 => 20,  54 => 19,  51 => 18,  47 => 17,  44 => 16,  37 => 11,  33 => 10,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\" >

    <div class=\"section\" >
        {% if not user %}
        
            <div class=\"row\">
        
                <div class=\"col-md-6\">
                    <h3>Iniciar Sesión</h3>
                    {% partial account ~ '::signin' %}
                </div>
        
            </div>
        
        {% else %}
        
            {% partial account ~ '::activation_check' %}
        
            {% partial account ~ '::update' %}
        
            {% partial account ~ '::deactivate_link' %}
        
        {% endif %}
    </div>
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/login.htm", "");
    }
}
