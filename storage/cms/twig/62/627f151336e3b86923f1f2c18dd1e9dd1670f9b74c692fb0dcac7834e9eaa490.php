<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/partials/home/alertaVerPlanes.htm */
class __TwigTemplate_a9fcdbeef5f949865e34aa06e87273b70b763c23d5c3d8f376cbca6856324fa7 extends Twig_Template
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
        echo "<div class=\"s12 m12 l12 card-panel deep-purple lighten-5\">
    <p class=\"center-align\">Te invitamos a que contrates alguno de nuestros planes y disfrutes de todo el contenido que tenemos para ti
    <a class=\"waves-effect waves-light btn \" style=\"margin-left: 20px\" href=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes");
        echo "\" >Ver Planes</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/partials/home/alertaVerPlanes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"s12 m12 l12 card-panel deep-purple lighten-5\">
    <p class=\"center-align\">Te invitamos a que contrates alguno de nuestros planes y disfrutes de todo el contenido que tenemos para ti
    <a class=\"waves-effect waves-light btn \" style=\"margin-left: 20px\" href=\"{{ 'planes'|page}}\" >Ver Planes</a></p>
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/partials/home/alertaVerPlanes.htm", "");
    }
}
