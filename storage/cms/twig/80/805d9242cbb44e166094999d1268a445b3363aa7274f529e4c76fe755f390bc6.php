<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/planes.htm */
class __TwigTemplate_6a67cb5c9ad8e0e77963dbbb14a3e7d3ec8f61a79534c4946a8726856d1fd04a extends Twig_Template
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
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("planes.md"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "        </br>
        ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("planes/planes"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "        ";
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("formasPago.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "    </div>
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
        return array (  39 => 7,  34 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
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
        {% content \"planes.md\" %}
        </br>
        {% partial \"planes/planes\" %}
        {% content \"formasPago.htm\" %}
    </div>
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/planes.htm", "");
    }
}
