<?php

/* /var/www/html/cms/themes/topsportstv/pages/planes.htm */
class __TwigTemplate_1bb6f9f0ff54001cd50a9743fc4a8454e85c3f03cb10ba7399342f452c4a9d24 extends Twig_Template
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
        echo "        
        ";
        // line 5
        $context["records"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "records", array());
        // line 6
        echo "        ";
        $context["displayColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "displayColumn", array());
        // line 7
        echo "        ";
        $context["noRecordsMessage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "noRecordsMessage", array());
        // line 8
        echo "        ";
        $context["detailsPage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsPage", array());
        // line 9
        echo "        ";
        $context["detailsKeyColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsKeyColumn", array());
        // line 10
        echo "        ";
        $context["detailsUrlParameter"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsUrlParameter", array());
        // line 11
        echo "
        <ul class=\"record-list\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 14
            echo "                <li>
                    ";
            // line 16
            echo "
                    <h5>
                    ";
            // line 18
            ob_start();
            // line 19
            echo "                        ";
            if ((isset($context["detailsPage"]) ? $context["detailsPage"] : null)) {
                // line 20
                echo "                            <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter((isset($context["detailsPage"]) ? $context["detailsPage"] : null), array((isset($context["detailsUrlParameter"]) ? $context["detailsUrlParameter"] : null) => $this->getAttribute($context["record"], (isset($context["detailsKeyColumn"]) ? $context["detailsKeyColumn"] : null))));
                echo "\">
                        ";
            }
            // line 22
            echo "
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "nombre", array()), "html", null, true);
            echo "

                        ";
            // line 25
            if ((isset($context["detailsPage"]) ? $context["detailsPage"] : null)) {
                // line 26
                echo "                            </a>
                        ";
            }
            // line 28
            echo "                    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 29
            echo "                    </h3>

                    ";
            // line 31
            echo $this->getAttribute($context["record"], "descripcion", array());
            echo "

                </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["noRecordsMessage"]) ? $context["noRecordsMessage"] : null), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </ul>

        ";
        // line 39
        if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > 1)) {
            // line 40
            echo "            <ul class=\"pagination\">
                ";
            // line 41
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) > 1)) {
                // line 42
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
                ";
            }
            // line 44
            echo "
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "                    <li class=\"";
                echo ((($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                        <a href=\"";
                // line 47
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
            // line 50
            echo "
                ";
            // line 51
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()))) {
                // line 52
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
                ";
            }
            // line 54
            echo "            </ul>
        ";
        }
        // line 56
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/themes/topsportstv/pages/planes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 56,  164 => 54,  158 => 52,  156 => 51,  153 => 50,  142 => 47,  137 => 46,  133 => 45,  130 => 44,  124 => 42,  122 => 41,  119 => 40,  117 => 39,  113 => 37,  104 => 35,  95 => 31,  91 => 29,  88 => 28,  84 => 26,  82 => 25,  77 => 23,  74 => 22,  68 => 20,  65 => 19,  63 => 18,  59 => 16,  56 => 14,  51 => 13,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  32 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"section\" >
    <div class=\"container\" >
        {% content \"planes.md\" %}
        
        {% set records = builderList.records %}
        {% set displayColumn = builderList.displayColumn %}
        {% set noRecordsMessage = builderList.noRecordsMessage %}
        {% set detailsPage = builderList.detailsPage %}
        {% set detailsKeyColumn = builderList.detailsKeyColumn %}
        {% set detailsUrlParameter = builderList.detailsUrlParameter %}

        <ul class=\"record-list\">
            {% for record in records %}
                <li>
                    {# Use spaceless tag to remove spaces inside the A tag. #}

                    <h5>
                    {% spaceless %}
                        {% if detailsPage %}
                            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                        {% endif %}

                        {{ record.nombre }}

                        {% if detailsPage %}
                            </a>
                        {% endif %}
                    {% endspaceless %}
                    </h3>

                    {{ record.descripcion|raw }}

                </li>
            {% else %}
                <li class=\"no-data\">{{ noRecordsMessage }}</li>
            {% endfor %}
        </ul>

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
        {% endif %}
    </div>
</div>";
    }
}
