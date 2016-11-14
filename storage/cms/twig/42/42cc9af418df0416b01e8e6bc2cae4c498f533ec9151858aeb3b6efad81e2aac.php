<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/register.htm */
class __TwigTemplate_64dde33c5a303f24d66801c8fc669b08a8c6a2512733c2076af05900e7173929 extends Twig_Template
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
        // line 4
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 5
            echo "
            <div class=\"row\">
                ";
            // line 7
            if ( !(isset($context["user"]) ? $context["user"] : null)) {
                // line 8
                echo "
                    <div class=\"row\">
                
                        <div class=\"col-md-6\">
                            <h3>Registro</h3>
                            ";
                // line 13
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::register")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 14
                echo "                        </div>
                
                    </div>
                
                ";
            } else {
                // line 19
                echo "                
                    ";
                // line 20
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::activation_check")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 21
                echo "                
                    ";
                // line 22
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::update")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 23
                echo "                
                    ";
                // line 24
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::deactivate_link")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 25
                echo "                
                ";
            }
            // line 27
            echo "            </div>
        
        ";
        }
        // line 30
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  75 => 27,  71 => 25,  67 => 24,  64 => 23,  60 => 22,  57 => 21,  53 => 20,  50 => 19,  43 => 14,  39 => 13,  32 => 8,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
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
        
        {% if not user %}

            <div class=\"row\">
                {% if not user %}

                    <div class=\"row\">
                
                        <div class=\"col-md-6\">
                            <h3>Registro</h3>
                            {% partial account ~ '::register' %}
                        </div>
                
                    </div>
                
                {% else %}
                
                    {% partial account ~ '::activation_check' %}
                
                    {% partial account ~ '::update' %}
                
                    {% partial account ~ '::deactivate_link' %}
                
                {% endif %}
            </div>
        
        {% endif %}
    </div>
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/register.htm", "");
    }
}
