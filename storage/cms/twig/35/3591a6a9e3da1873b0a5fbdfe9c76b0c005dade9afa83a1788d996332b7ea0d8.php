<?php

/* /var/www/html/cms/themes/topsportstv/pages/home.htm */
class __TwigTemplate_986fcb027cd62d51088308e9ff9f229ce886de754f7c9f1b89156da3303bbadc extends Twig_Template
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
        echo $this->env->getExtension('CMS')->contentFunction("home.md"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/themes/topsportstv/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="section" >*/
/*     <div class="container" >*/
/*         {% content "home.md" %}*/
/*     </div>*/
/* </div>*/
