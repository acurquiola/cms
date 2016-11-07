<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/register.htm */
class __TwigTemplate_b087272b533cff2bb18253ff1e4d3f74c5f8d577a3bd2d17172fffb003ddf44c extends Twig_Template
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

                <div class=\"col-md-6\">
                    <h4>Registro</h4>
                    ";
            // line 10
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::register")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 11
            echo "                </div>
        
            </div>
        
        ";
        }
        // line 16
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
        return array (  44 => 16,  37 => 11,  33 => 10,  26 => 5,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container\">
    <div class=\"section\">
        
        {% if not user %}

            <div class=\"row\">

                <div class=\"col-md-6\">
                    <h4>Registro</h4>
                    {% partial account ~ '::register' %}
                </div>
        
            </div>
        
        {% endif %}
    </div>
</div>";
    }
}
