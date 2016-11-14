<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/blog.htm */
class __TwigTemplate_529862d821d1b09eb7b29810ddaba4929b19adb20f18d96f78db92f3936012cc extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col s12 m8 l8\">
        ";
        // line 3
        $context["posts"] = $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array());
        // line 4
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "                <div class=\"col s12 m12 l12\">
                    <div class=\"card horizontal news-post\">
                        <div class=\"card-stacked\">
                            <h3 class=\"news-post-title\"><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>
                            <div class=\"card-content news-post-content\">
                                <div class=\"card-content-info right-align\">
                                    Publicado el ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
                                </div>
                                <p class=\"info truncate\">
                                    ";
            // line 14
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 15
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 17
                echo "                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                                </p>        

                                <p class=\"excerpt\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"right-align news-post-footer\">
                                <a  href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\"  class=\"waves-effect waves-light btn\">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div> 
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "                <p>";
            echo twig_escape_filter($this->env, (isset($context["noPostsMessage"]) ? $context["noPostsMessage"] : null), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            <div class=\"center-align\">
                ";
        // line 32
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > 1)) {
            // line 33
            echo "                    <ul class=\"pagination\">
                        ";
            // line 34
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) > 1)) {
                // line 35
                echo "                            <li class=\"waves-effect\"><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
                        ";
            }
            // line 37
            echo "                
                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 39
                echo "                            <li class=\" waves-effect ";
                echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                                <a href=\"";
                // line 40
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
            // line 43
            echo "                
                        ";
            // line 44
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()))) {
                // line 45
                echo "                            <li class=\"waves-effect\"><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
                        ";
            }
            // line 47
            echo "                    </ul>
                ";
        }
        // line 49
        echo "            </div>
    </div>
    <div class=\"card col s12 m2 l2 categorias-post\">
        <h6 class=\"center\"> CATEGORÍAS </h6>
        ";
        // line 53
        if ($this->getAttribute((isset($context["blogCategories"]) ? $context["blogCategories"] : null), "categories", array())) {
            // line 54
            echo "            <ul class=\"category-list\">
                ";
            // line 55
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = $this->getAttribute(            // line 56
(isset($context["blogCategories"]) ? $context["blogCategories"] : null), "categories", array())            ;
            $context['__cms_partial_params']['currentCategorySlug'] = $this->getAttribute(            // line 57
(isset($context["blogCategories"]) ? $context["blogCategories"] : null), "currentCategorySlug", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction((            // line 55
(isset($context["blogCategories"]) ? $context["blogCategories"] : null) . "::items")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 59
            echo "            </ul>
        ";
        }
        // line 61
        echo "
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 61,  199 => 59,  196 => 55,  194 => 57,  192 => 56,  190 => 55,  187 => 54,  185 => 53,  179 => 49,  175 => 47,  169 => 45,  167 => 44,  164 => 43,  153 => 40,  148 => 39,  144 => 38,  141 => 37,  135 => 35,  133 => 34,  130 => 33,  128 => 32,  125 => 31,  116 => 29,  105 => 23,  99 => 20,  95 => 18,  81 => 17,  72 => 16,  54 => 15,  50 => 14,  44 => 11,  36 => 8,  31 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col s12 m8 l8\">
        {% set posts = blogPosts.posts %}
            {% for post in posts %}
                <div class=\"col s12 m12 l12\">
                    <div class=\"card horizontal news-post\">
                        <div class=\"card-stacked\">
                            <h3 class=\"news-post-title\"><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>
                            <div class=\"card-content news-post-content\">
                                <div class=\"card-content-info right-align\">
                                    Publicado el {{ post.published_at|date('M d, Y') }}
                                </div>
                                <p class=\"info truncate\">
                                    {% if post.categories.count %} in {% endif %}
                                    {% for category in post.categories %}
                                        <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                                    {% endfor %}
                                </p>        

                                <p class=\"excerpt\">{{ post.summary }}</p>
                            </div>
                            <div class=\"right-align news-post-footer\">
                                <a  href=\"{{ post.url }}\"  class=\"waves-effect waves-light btn\">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div> 
            {% else %}
                <p>{{ noPostsMessage }}</p>
            {% endfor %}
            <div class=\"center-align\">
                {% if posts.lastPage > 1 %}
                    <ul class=\"pagination\">
                        {% if posts.currentPage > 1 %}
                            <li class=\"waves-effect\"><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
                        {% endif %}
                
                        {% for page in 1..posts.lastPage %}
                            <li class=\" waves-effect {{ posts.currentPage == page ? 'active' : null }}\">
                                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                            </li>
                        {% endfor %}
                
                        {% if posts.lastPage > posts.currentPage %}
                            <li class=\"waves-effect\"><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
                        {% endif %}
                    </ul>
                {% endif %}
            </div>
    </div>
    <div class=\"card col s12 m2 l2 categorias-post\">
        <h6 class=\"center\"> CATEGORÍAS </h6>
        {% if blogCategories.categories %}
            <ul class=\"category-list\">
                {% partial blogCategories ~ \"::items\"
                    categories = blogCategories.categories
                    currentCategorySlug = blogCategories.currentCategorySlug
                %}
            </ul>
        {% endif %}

    </div>
  </div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/blog.htm", "");
    }
}
