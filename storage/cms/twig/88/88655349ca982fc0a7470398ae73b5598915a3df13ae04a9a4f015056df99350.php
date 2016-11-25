<?php

/* /var/www/html/cms/themes/topsportstv/pages/perfil.htm */
class __TwigTemplate_3d4c4472ec2705a6ff89c09dc5360a1b0079c772c376246b547d9e8eef081052 extends Twig_Template
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
        <div class=\"wrap z-depth-2\">
            <div class=\"wrap-content \">
                ";
        // line 5
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 6
            echo "                
                    <h3>Tu cuenta</h3>
        
                    <div class=\"right-align\">
                        ";
            // line 10
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 11
            echo "                    </div>
                
                    ";
            // line 13
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "                    
                    <div class=\"right-align\">
                        ";
            // line 16
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::deactivate_link")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 17
            echo "                    </div>
                
                
                ";
        }
        // line 21
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/themes/topsportstv/pages/perfil.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  53 => 17,  49 => 16,  45 => 14,  41 => 13,  37 => 11,  33 => 10,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"section\">
        <div class=\"wrap z-depth-2\">
            <div class=\"wrap-content \">
                {% if user %}
                
                    <h3>Tu cuenta</h3>
        
                    <div class=\"right-align\">
                        {% partial account ~ '::activation_check' %}
                    </div>
                
                    {% partial account ~ '::update' %}
                    
                    <div class=\"right-align\">
                        {% partial account ~ '::deactivate_link' %}
                    </div>
                
                
                {% endif %}
            </div>
        </div>
    </div>
</div>", "/var/www/html/cms/themes/topsportstv/pages/perfil.htm", "");
    }
}
