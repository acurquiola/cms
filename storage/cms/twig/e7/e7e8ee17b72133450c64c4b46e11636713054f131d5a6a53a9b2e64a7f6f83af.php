<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/layouts/fallback.htm */
class __TwigTemplate_50305f6c845052f8abef6029202e1e613048850baee26aafd00431b12560ce12 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\xampp\\htdocs\\cms/themes/topsportstv/layouts/fallback.htm", "");
    }
}
