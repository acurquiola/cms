<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/partials/planes/planes.htm */
class __TwigTemplate_985a7cd2ef82872ab340a59b8e0220cc881c41150dcace0e9ea1d5f1bfdf2448 extends Twig_Template
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
        $context["records"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "records", array());
        // line 2
        echo "        ";
        $context["displayColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "displayColumn", array());
        // line 3
        echo "        ";
        $context["noRecordsMessage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "noRecordsMessage", array());
        // line 4
        echo "        ";
        $context["detailsPage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsPage", array());
        // line 5
        echo "        ";
        $context["detailsKeyColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsKeyColumn", array());
        // line 6
        echo "        ";
        $context["detailsUrlParameter"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsUrlParameter", array());
        // line 7
        echo "
       <div class=\"w-table\">
            <div class=\"w-container\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            echo "                    ";
            // line 12
            echo "     
                        <div class=\"w-card color-teal s12 m3 l3\">
                            <div class=\"card-header\">
                                <div class=\"w-title\">
                                    <b>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "nombre", array()), "html", null, true);
            echo "</b>
                                </div>
                                <div class=\"w-price\">
                                    \$ ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "precio", array()), "html", null, true);
            echo "
                                </div>
                                <div class=\"container-button\">
                                    <a class=\"w-button\" href=\"";
            // line 22
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("planes/contratar", array("subscriptions_id" => $this->getAttribute($context["record"], "id", array())));
            echo "\" > CONTRATAR </a>
                                </div>
                            </div>
                            <div class=\"card-content\">
                                ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "descripcion", array()), "html", null, true);
            echo "
                            </div>
                        </div>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "                <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["noRecordsMessage"]) ? $context["noRecordsMessage"] : null), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
            </div>
        </div>
        ";
        // line 36
        if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > 1)) {
            // line 37
            echo "            <ul class=\"pagination\">
                ";
            // line 38
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) > 1)) {
                // line 39
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
                ";
            }
            // line 41
            echo "
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                echo "                    <li class=\"";
                echo ((($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                        <a href=\"";
                // line 44
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
                ";
            // line 48
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()))) {
                // line 49
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
                ";
            }
            // line 51
            echo "            </ul>
        ";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/partials/planes/planes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 51,  138 => 49,  136 => 48,  133 => 47,  122 => 44,  117 => 43,  113 => 42,  110 => 41,  104 => 39,  102 => 38,  99 => 37,  97 => 36,  92 => 33,  83 => 31,  73 => 26,  66 => 22,  60 => 19,  54 => 16,  48 => 12,  46 => 11,  41 => 10,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set records = builderList.records %}
        {% set displayColumn = builderList.displayColumn %}
        {% set noRecordsMessage = builderList.noRecordsMessage %}
        {% set detailsPage = builderList.detailsPage %}
        {% set detailsKeyColumn = builderList.detailsKeyColumn %}
        {% set detailsUrlParameter = builderList.detailsUrlParameter %}

       <div class=\"w-table\">
            <div class=\"w-container\">
                {% for record in records %}
                    {# Use spaceless tag to remove spaces inside the A tag. #}
     
                        <div class=\"w-card color-teal s12 m3 l3\">
                            <div class=\"card-header\">
                                <div class=\"w-title\">
                                    <b>{{ record.nombre }}</b>
                                </div>
                                <div class=\"w-price\">
                                    \$ {{ record.precio }}
                                </div>
                                <div class=\"container-button\">
                                    <a class=\"w-button\" href=\"{{ 'planes/contratar'|page({ subscriptions_id: record.id })}}\" > CONTRATAR </a>
                                </div>
                            </div>
                            <div class=\"card-content\">
                                {{ record.descripcion }}
                            </div>
                        </div>

                {% else %}
                <li class=\"no-data\">{{ noRecordsMessage }}</li>
                {% endfor %}

            </div>
        </div>
        {% if records.lastPage > 1 %}
            <ul class=\"pagination\">
                {% if records.currentPage > 1 %}
                    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
                {% endif %}

                {% for page in 1..records.lastPage %}
                    <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                    </li>
                {% endfor %}

                {% if records.lastPage > records.currentPage %}
                    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
                {% endif %}
            </ul>
        {% endif %}", "C:\\xampp\\htdocs\\cms/themes/topsportstv/partials/planes/planes.htm", "");
    }
}
