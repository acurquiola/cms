<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/planes/contratar.htm */
class __TwigTemplate_4b1ba2ebb0e3c90694c5d05f7d73e6d85276db102ddd0c9e357e2d0667594164 extends Twig_Template
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
        <div class=\"row \">
            <div class=\"wrap\">
                <div class=\"col-md-6 z-depth-2 wrap-content\">
                    <h4>Registro de Pago</h4>
                    </br>
                    ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("PagosForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/planes/contratar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  28 => 8,  19 => 1,);
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
        <div class=\"row \">
            <div class=\"wrap\">
                <div class=\"col-md-6 z-depth-2 wrap-content\">
                    <h4>Registro de Pago</h4>
                    </br>
                    {% component 'PagosForm' %}
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/planes/contratar.htm", "");
    }
}
