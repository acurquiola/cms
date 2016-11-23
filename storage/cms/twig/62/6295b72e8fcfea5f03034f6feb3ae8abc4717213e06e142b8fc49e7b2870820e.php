<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/login.htm */
class __TwigTemplate_b2fed858eedb2a2e4b3f1c9941447f86744ab16ccb0aee8cdca0f286535ddfd6 extends Twig_Template
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
    <div class=\"section \" >

        ";
        // line 4
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 5
            echo "        
            <div class=\"row \">
                <div class=\"wrap\">
            
                    <div class=\"col-md-6 z-depth-2 wrap-content\">
                        <h4>Iniciar Sesión</h4>
                        ";
            // line 11
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::signin")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "                        
                        <div class=\"right-align\">
                            <a href=\"";
            // line 14
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("reiniciar-constrasena");
            echo "\">Olvidé mi contraseña</a>
                        </div>
                        <div id=\"loginTaken\" class=\"alert alert-danger\" style=\"display: none\">
                            Sorry, that login name is already taken.
                        </div>
                    </div>
                    
                </div>
        
            </div>
        
        ";
        } else {
            // line 26
            echo "        
            ";
            // line 27
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 28
            echo "        
            ";
            // line 29
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 30
            echo "        
            ";
            // line 31
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::deactivate_link")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 32
            echo "        
        ";
        }
        // line 34
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
        return array (  82 => 34,  78 => 32,  74 => 31,  71 => 30,  67 => 29,  64 => 28,  60 => 27,  57 => 26,  42 => 14,  38 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
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
    <div class=\"section \" >

        {% if not user %}
        
            <div class=\"row \">
                <div class=\"wrap\">
            
                    <div class=\"col-md-6 z-depth-2 wrap-content\">
                        <h4>Iniciar Sesión</h4>
                        {% partial account ~ '::signin' %}
                        
                        <div class=\"right-align\">
                            <a href=\"{{'reiniciar-constrasena'|page}}\">Olvidé mi contraseña</a>
                        </div>
                        <div id=\"loginTaken\" class=\"alert alert-danger\" style=\"display: none\">
                            Sorry, that login name is already taken.
                        </div>
                    </div>
                    
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
