<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/blog/post.htm */
class __TwigTemplate_48991e17d4c26139f356f08b0234ff3cbe0a0a54997642b4e0450cf0704a6029 extends Twig_Template
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
        echo "<div class=\"section\">
\t<div class=\"row\">
\t\t
\t\t<div class=\"col s12 m8 l8\">
\t\t\t<div class=\"card post\">
\t\t\t
\t\t\t\t";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("PostBreadCrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "\t\t\t\t<h3 class=\"post-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h3>
\t\t\t\t";
        // line 9
        $context["post"] = $this->getAttribute((isset($context["blogPost"]) ? $context["blogPost"] : null), "post", array());
        // line 10
        echo "

\t\t\t\t<p class=\"post-info\">
\t\t\t\t    Publicado el
\t\t\t\t    ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()), "count", array())) {
            echo " in
\t\t\t\t        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()));
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
                echo "\t\t\t\t            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 17
                echo "\t\t\t\t        ";
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
            echo "\t\t\t\t    ";
        }
        // line 19
        echo "\t\t\t\t    el ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "
\t\t\t\t</p>

\t\t\t\t<div class=\"card-content\">";
        // line 22
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html", array());
        echo "</div>

\t\t\t\t";
        // line 24
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), "count", array())) {
            // line 25
            echo "\t\t\t\t    <div class=\"featured-images text-center\" >
\t\t\t\t        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                echo "\t\t\t\t            <p>
\t\t\t\t                <img 
\t\t\t\t                    data-src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                echo "\"
\t\t\t\t                    src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\"
\t\t\t\t                    alt=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                echo "\"
\t\t\t\t                    style=\"max-width: 100%; margin-top: 50px\" />
\t\t\t\t            </p>
\t\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t    </div>
\t\t\t\t";
        }
        // line 37
        echo "


\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 37,  134 => 35,  124 => 31,  120 => 30,  116 => 29,  112 => 27,  108 => 26,  105 => 25,  103 => 24,  98 => 22,  91 => 19,  88 => 18,  74 => 17,  65 => 16,  48 => 15,  44 => 14,  38 => 10,  36 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\">
\t<div class=\"row\">
\t\t
\t\t<div class=\"col s12 m8 l8\">
\t\t\t<div class=\"card post\">
\t\t\t
\t\t\t\t{% component 'PostBreadCrumbs' %}
\t\t\t\t<h3 class=\"post-title\">{{ this.page.title }}</h3>
\t\t\t\t{% set post = blogPost.post %}


\t\t\t\t<p class=\"post-info\">
\t\t\t\t    Publicado el
\t\t\t\t    {% if post.categories.count %} in
\t\t\t\t        {% for category in post.categories %}
\t\t\t\t            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
\t\t\t\t        {% endfor %}
\t\t\t\t    {% endif %}
\t\t\t\t    el {{ post.published_at|date('M d, Y') }}
\t\t\t\t</p>

\t\t\t\t<div class=\"card-content\">{{ post.content_html|raw }}</div>

\t\t\t\t{% if post.featured_images.count %}
\t\t\t\t    <div class=\"featured-images text-center\" >
\t\t\t\t        {% for image in post.featured_images %}
\t\t\t\t            <p>
\t\t\t\t                <img 
\t\t\t\t                    data-src=\"{{ image.filename }}\"
\t\t\t\t                    src=\"{{ image.path }}\"
\t\t\t\t                    alt=\"{{ image.description }}\"
\t\t\t\t                    style=\"max-width: 100%; margin-top: 50px\" />
\t\t\t\t            </p>
\t\t\t\t        {% endfor %}
\t\t\t\t    </div>
\t\t\t\t{% endif %}



\t\t\t</div>
\t\t</div>
\t</div>
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/blog/post.htm", "");
    }
}
