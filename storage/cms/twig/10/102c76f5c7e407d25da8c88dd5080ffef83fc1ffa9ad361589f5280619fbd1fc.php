<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/contact.htm */
class __TwigTemplate_639c12873c2fd7fc0a0b0f252c0fec6a8bf70a8a06553d4b9a0069705a16fbfd extends Twig_Template
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
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("simpleContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
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
        {% component 'simpleContact' %}
    </div>
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/contact.htm", "");
    }
}
