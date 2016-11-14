<?php

/* C:\xampp\htdocs\cms/plugins/zainab/simplecontact/components/simplecontact/default.htm */
class __TwigTemplate_fa663b7e6b790bdf5b3bc14fc0c90f3c5ef4e137b2765e5638c5c0b3303ad08e extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "settings", array()), "text_top_form", array());
        echo "

<form id=\"simpleContactForm\">

    <div id=\"simple_contact_flash_message\"></div>


    <div class=\"form-group\">
        <label for=\"name\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "nameLabel", array()), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
    </div>

    <div class=\"form-group\">
        <label for=\"email\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "emailLabel", array()), "html", null, true);
        echo "</label>
        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
    </div>

    ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "phoneEnabled", array())) {
            // line 19
            echo "        <div class=\"form-group\">
            <label for=\"phone\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "phoneLabel", array()), "html", null, true);
            echo "</label>
            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\"  >
        </div>
    ";
        }
        // line 24
        echo "
    <div class=\"form-group\">
        <label for=\"subject\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "subjectLabel", array()), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\"  >
    </div>

    <div class=\"form-group\">
        <label for=\"message\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "messageLabel", array()), "html", null, true);
        echo "</label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\"></textarea>
    </div>

    <!-- Injecting reCaptcha if enabled -->
    ";
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "settings", array()), "recaptcha_enabled", array())) {
            // line 37
            echo "        <div class=\"form-group\">
            <label for=\"message\"></label>
            <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "settings", array()), "recaptcha_site_key", array()), "html", null, true);
            echo "\"></div>
        </div>
    ";
        }
        // line 42
        echo "    <!-- End reCaptcha -->

    <button id=\"simpleContactSubmitButton\"
            data-request=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onFormSubmit\"
            type=\"submit\" class=\"btn btn-default\">
        ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "buttonText", array()), "html", null, true);
        echo "
    </button>

</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/plugins/zainab/simplecontact/components/simplecontact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  94 => 45,  89 => 42,  83 => 39,  79 => 37,  77 => 36,  69 => 31,  61 => 26,  57 => 24,  50 => 20,  47 => 19,  45 => 18,  38 => 14,  30 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ __SELF__.settings.text_top_form|raw}}

<form id=\"simpleContactForm\">

    <div id=\"simple_contact_flash_message\"></div>


    <div class=\"form-group\">
        <label for=\"name\">{{__SELF__.properties.nameLabel}}</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
    </div>

    <div class=\"form-group\">
        <label for=\"email\">{{__SELF__.properties.emailLabel}}</label>
        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
    </div>

    {% if(__SELF__.properties.phoneEnabled) %}
        <div class=\"form-group\">
            <label for=\"phone\">{{__SELF__.properties.phoneLabel}}</label>
            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\"  >
        </div>
    {% endif %}

    <div class=\"form-group\">
        <label for=\"subject\">{{__SELF__.properties.subjectLabel}}</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\"  >
    </div>

    <div class=\"form-group\">
        <label for=\"message\">{{__SELF__.properties.messageLabel}}</label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\"></textarea>
    </div>

    <!-- Injecting reCaptcha if enabled -->
    {% if(__SELF__.settings.recaptcha_enabled) %}
        <div class=\"form-group\">
            <label for=\"message\"></label>
            <div class=\"g-recaptcha\" data-sitekey=\"{{__SELF__.settings.recaptcha_site_key}}\"></div>
        </div>
    {% endif %}
    <!-- End reCaptcha -->

    <button id=\"simpleContactSubmitButton\"
            data-request=\"{{ __SELF__ }}::onFormSubmit\"
            type=\"submit\" class=\"btn btn-default\">
        {{__SELF__.properties.buttonText}}
    </button>

</form>", "C:\\xampp\\htdocs\\cms/plugins/zainab/simplecontact/components/simplecontact/default.htm", "");
    }
}
