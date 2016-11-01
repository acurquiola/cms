<?php

/* C:\xampp\htdocs\cms/plugins/clarknguyen/blogbreadcrumbs/components/postbreadcrumbs/default.htm */
class __TwigTemplate_41e8cccbc1a02ae1aef05addc7468c750054f3c95ea8bc997baf7904e6406852 extends Twig_Template
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
        echo "<div class=\"blog_post_breadcrumbs\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadCrumbs"]) ? $context["breadCrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 3
            echo "\t";
            if ($this->getAttribute($context["breadcrumb"], "separator", array())) {
                // line 4
                echo "\t<span class=\"breadcrumb_separator\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "separator", array()), "html", null, true);
                echo "</span>
\t";
            } elseif (($this->getAttribute(            // line 5
$context["breadcrumb"], "link", array()) == "#")) {
                // line 6
                echo "\t<span class=\"breadcrumb_currentcategory\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
                echo "</span>
\t";
            } else {
                // line 8
                echo "\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
                echo "</a>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/plugins/clarknguyen/blogbreadcrumbs/components/postbreadcrumbs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  42 => 8,  36 => 6,  34 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"blog_post_breadcrumbs\">
{% for breadcrumb in breadCrumbs %}
\t{% if breadcrumb.separator %}
\t<span class=\"breadcrumb_separator\">{{ breadcrumb.separator }}</span>
\t{% elseif breadcrumb.link == '#' %}
\t<span class=\"breadcrumb_currentcategory\">{{ breadcrumb.name }}</span>
\t{% else %}
\t<a href=\"{{ breadcrumb.link }}\">{{ breadcrumb.name }}</a>
\t{% endif %}
{% endfor %}
</div>";
    }
}
