<?php

/* /var/www/html/cms/themes/topsportstv/partials/footer.htm */
class __TwigTemplate_0438b5c55a125300e384d3caff91a7c4e3fef193c6057159a9bb56823f93d075 extends Twig_Template
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
        echo "<footer class=\"page-footer deep-purple lighten-4\">
\t<div class=\"container \">
\t\t<div class=\"row\">
\t\t\t<div class=\"col l12 m12 s12\"> 
\t\t\t    <ul>
                  <li><a class=\"grey-text text-lighten-5\" href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contacto</a></li>
                  <li><a class=\"grey-text text-lighten-5\" href=\"#!\">Condiciones</a></li>
                  <li class=\"center-align\">
                        <a class=\"btn-floating blue\"><i class=\"fa fa-twitter\"></i></a>
                        <a class=\"btn-floating blue darken-4\"><i class=\"fa fa-facebook\"></i></a>
                        <a class=\"btn-floating red darken-4\"><i class=\"fa fa-google-plus\"></i></a>
                        <a class=\"btn-floating grey darken-1\"><i class=\"fa fa-youtube\"></i></a>
                  </li>
                </ul>
\t\t\t</div>\t\t
        </div>        
        
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
            <h6 class=\"center-align\">© 2016 Copyright | CMS</h6>
        </div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/themes/topsportstv/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"page-footer deep-purple lighten-4\">
\t<div class=\"container \">
\t\t<div class=\"row\">
\t\t\t<div class=\"col l12 m12 s12\"> 
\t\t\t    <ul>
                  <li><a class=\"grey-text text-lighten-5\" href=\"{{ 'contact'|page }}\">Contacto</a></li>
                  <li><a class=\"grey-text text-lighten-5\" href=\"#!\">Condiciones</a></li>
                  <li class=\"center-align\">
                        <a class=\"btn-floating blue\"><i class=\"fa fa-twitter\"></i></a>
                        <a class=\"btn-floating blue darken-4\"><i class=\"fa fa-facebook\"></i></a>
                        <a class=\"btn-floating red darken-4\"><i class=\"fa fa-google-plus\"></i></a>
                        <a class=\"btn-floating grey darken-1\"><i class=\"fa fa-youtube\"></i></a>
                  </li>
                </ul>
\t\t\t</div>\t\t
        </div>        
        
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
            <h6 class=\"center-align\">© 2016 Copyright | CMS</h6>
        </div>
\t</div>
</footer>", "/var/www/html/cms/themes/topsportstv/partials/footer.htm", "");
    }
}
