<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/partials/footer.htm */
class __TwigTemplate_f1899813b17c45ee201d41ef1e3c2adefce3b15cdf1b4c26f360ae31c79a21b1 extends Twig_Template
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
                  <li class=\"right-align\"><i class=\"icon-twitter\"></i></li>
                </ul>
\t\t\t</div>
\t\t</div>
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
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<footer class=\"page-footer deep-purple lighten-4\">
\t<div class=\"container \">
\t\t<div class=\"row\">
\t\t\t<div class=\"col l12 m12 s12\"> 
\t\t\t    <ul>
                  <li><a class=\"grey-text text-lighten-5\" href=\"{{ 'contact'|page }}\">Contacto</a></li>
                  <li><a class=\"grey-text text-lighten-5\" href=\"#!\">Condiciones</a></li>
                  <li class=\"right-align\"><i class=\"icon-twitter\"></i></li>
                </ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
            <h6 class=\"center-align\">© 2016 Copyright | CMS</h6>
        </div>
\t</div>
</footer>";
    }
}
