<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/planes.htm */
class __TwigTemplate_bacfe01ea88e00e66e68fe72626c7f984becf2e97e9b3eb4cbccc3cc458d2aa6 extends Twig_Template
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
        echo "<div class=\"section\" >
    <div class=\"container\" >
        <div class=\"wrap z-depth-2\">
            <div class=\"wrap-content\">   
                ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("planes/planes"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "                ";
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("formasPago.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/planes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" >
    <div class=\"container\" >
        <div class=\"wrap z-depth-2\">
            <div class=\"wrap-content\">   
                {% partial \"planes/planes\" %}
                {% content \"formasPago.htm\" %}
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/planes.htm", "");
    }
}
