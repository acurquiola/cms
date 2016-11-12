<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/confirmacion.htm */
class __TwigTemplate_d392b8df90d01b5e1901cd46b6b79910f0d2fdba8ac65a5c64246f839f001f7a extends Twig_Template
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
        echo "<div class=\"section\">
    <div class=\"row\">
        <div id=\"info-confirmacion\" >
            <h4 >¡Bienvenido, tu correo ha sido verificado!</h4>
            </br>
            <p>Te invitamos a que contrates alguno de nuestros planes y disfrutes de todo el contenido que tenemos para ti</p>
            ";
        // line 7
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("formasPago.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 8
        echo "            <a class=\"waves-effect waves-light btn \" href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" style=\"margin-top: 20px\"> Home</a>
            <a class=\"waves-effect waves-light btn \" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
        echo "\" style=\"margin-top: 20px\" >Ver Planes</a>
            
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/confirmacion.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\">
    <div class=\"row\">
        <div id=\"info-confirmacion\" >
            <h4 >¡Bienvenido, tu correo ha sido verificado!</h4>
            </br>
            <p>Te invitamos a que contrates alguno de nuestros planes y disfrutes de todo el contenido que tenemos para ti</p>
            {% content 'formasPago.htm' %}
            <a class=\"waves-effect waves-light btn \" href=\"{{ 'home'|page}}\" style=\"margin-top: 20px\"> Home</a>
            <a class=\"waves-effect waves-light btn \" href=\"{{ 'planes'|page}}\" style=\"margin-top: 20px\" >Ver Planes</a>
            
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/confirmacion.htm", "");
    }
}
