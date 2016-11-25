<?php

/* C:\xampp\htdocs\cms/themes/topsportstv/pages/contact.htm */
class __TwigTemplate_d7307f7748bfaef54bfadc2056f83414d706e99f813a2be40ae0c96b2d1bb801 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"section\">
        <div class=\"wrap z-depth-2\">
            <div class=\"wrap-content\">
                <h4>Contáctanos</h4>
                ";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["simpleContact"]) ? $context["simpleContact"] : null), "settings", array()), "text_top_form", array());
        echo "

                <form id=\"simpleContactForm\">
                
                    <div id=\"simple_contact_flash_message\"></div>
                
                
                    <div class=\"form-group\">
                        <label for=\"name\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["simpleContact"]) ? $context["simpleContact"] : null), "properties", array()), "nameLabel", array()), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
                    </div>
                
                    <div class=\"form-group\">
                        <label for=\"email\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["simpleContact"]) ? $context["simpleContact"] : null), "properties", array()), "emailLabel", array()), "html", null, true);
        echo "</label>
                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
                    </div>
                
                    ";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["simpleContact"]) ? $context["simpleContact"] : null), "properties", array()), "phoneEnabled", array())) {
            // line 24
            echo "                        <div class=\"form-group\">
                            <label for=\"phone\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["simpleContact"]) ? $context["simpleContact"] : null), "properties", array()), "phoneLabel", array()), "html", null, true);
            echo "</label>
                            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\"  >
                        </div>
                    ";
        }
        // line 29
        echo "                
                    <div class=\"form-group\">
                        <label for=\"subject\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["simpleContact"]) ? $context["simpleContact"] : null), "properties", array()), "subjectLabel", array()), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\"  >
                    </div>
                
                    <div class=\"form-group\">
                        <label for=\"message\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["simpleContact"]) ? $context["simpleContact"] : null), "properties", array()), "messageLabel", array()), "html", null, true);
        echo "</label>
                        <textarea id=\"message\" name=\"message\" class=\"form-control\"></textarea>
                    </div>
                
                    <!-- Injecting reCaptcha if enabled -->
                    ";
        // line 41
        if ($this->getAttribute($this->getAttribute((isset($context["simpleContact"]) ? $context["simpleContact"] : null), "settings", array()), "recaptcha_enabled", array())) {
            // line 42
            echo "                        <div class=\"form-group\">
                            <label for=\"message\"></label>
                            <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["simpleContact"]) ? $context["simpleContact"] : null), "settings", array()), "recaptcha_site_key", array()), "html", null, true);
            echo "\"></div>
                        </div>
                    ";
        }
        // line 47
        echo "                    <!-- End reCaptcha -->
                    <div class=\"right-align\">    
                        <button id=\"simpleContactSubmitButton\"
                                data-request=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["simpleContact"]) ? $context["simpleContact"] : null), "html", null, true);
        echo "::onFormSubmit\"
                                type=\"submit\" class=\"btn btn-default\">
                            ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["simpleContact"]) ? $context["simpleContact"] : null), "properties", array()), "buttonText", array()), "html", null, true);
        echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 52,  101 => 50,  96 => 47,  90 => 44,  86 => 42,  84 => 41,  76 => 36,  68 => 31,  64 => 29,  57 => 25,  54 => 24,  52 => 23,  45 => 19,  37 => 14,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"section\">
        <div class=\"wrap z-depth-2\">
            <div class=\"wrap-content\">
                <h4>Contáctanos</h4>
                {{ simpleContact.settings.text_top_form|raw}}

                <form id=\"simpleContactForm\">
                
                    <div id=\"simple_contact_flash_message\"></div>
                
                
                    <div class=\"form-group\">
                        <label for=\"name\">{{simpleContact.properties.nameLabel}}</label>
                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
                    </div>
                
                    <div class=\"form-group\">
                        <label for=\"email\">{{simpleContact.properties.emailLabel}}</label>
                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
                    </div>
                
                    {% if(simpleContact.properties.phoneEnabled) %}
                        <div class=\"form-group\">
                            <label for=\"phone\">{{simpleContact.properties.phoneLabel}}</label>
                            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\"  >
                        </div>
                    {% endif %}
                
                    <div class=\"form-group\">
                        <label for=\"subject\">{{simpleContact.properties.subjectLabel}}</label>
                        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\"  >
                    </div>
                
                    <div class=\"form-group\">
                        <label for=\"message\">{{simpleContact.properties.messageLabel}}</label>
                        <textarea id=\"message\" name=\"message\" class=\"form-control\"></textarea>
                    </div>
                
                    <!-- Injecting reCaptcha if enabled -->
                    {% if(simpleContact.settings.recaptcha_enabled) %}
                        <div class=\"form-group\">
                            <label for=\"message\"></label>
                            <div class=\"g-recaptcha\" data-sitekey=\"{{simpleContact.settings.recaptcha_site_key}}\"></div>
                        </div>
                    {% endif %}
                    <!-- End reCaptcha -->
                    <div class=\"right-align\">    
                        <button id=\"simpleContactSubmitButton\"
                                data-request=\"{{ simpleContact }}::onFormSubmit\"
                                type=\"submit\" class=\"btn btn-default\">
                            {{simpleContact.properties.buttonText}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\cms/themes/topsportstv/pages/contact.htm", "");
    }
}
