<?php

/* C:\xampp\htdocs\cms/plugins/planetadeleste/swal/components/swal/default.htm */
class __TwigTemplate_d2f3e6c47bf7f77351154ff2a5c81707d4c9ac536c112cb9d976e6d51c346ff4 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 2
        echo "<script>
    document.swalFlash = ";
        // line 3
        echo ((twig_length_filter($this->env, (isset($context["options"]) ? $context["options"] : null))) ? ("true") : ("false"));
        echo ";
    document.swalOptions = ";
        // line 4
        echo twig_jsonencode_filter(((array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) ? $context["options"] : null), array())) : (array())));
        echo ";
    document.swalGlobalOptions = ";
        // line 5
        echo twig_jsonencode_filter(((array_key_exists("globalOptions", $context)) ? (_twig_default_filter((isset($context["globalOptions"]) ? $context["globalOptions"] : null), array())) : (array())));
        echo ";
</script>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/plugins/planetadeleste/swal/components/swal/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put scripts %}
<script>
    document.swalFlash = {{ options|length ? 'true' : 'false' }};
    document.swalOptions = {{ options|default([])|json_encode|raw }};
    document.swalGlobalOptions = {{ globalOptions|default([])|json_encode|raw }};
</script>
{% endput %}", "C:\\xampp\\htdocs\\cms/plugins/planetadeleste/swal/components/swal/default.htm", "");
    }
}
