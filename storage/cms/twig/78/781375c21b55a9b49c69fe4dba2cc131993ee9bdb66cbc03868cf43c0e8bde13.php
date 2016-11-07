<?php

/* C:\xampp\htdocs\cms/plugins/laminsanneh/flexicontact/components/contactform/default.htm */
class __TwigTemplate_c73d9018669bab29b665ce4d2a304a1d927e557ed2164382be197cc5f19f5813 extends Twig_Template
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
        echo "<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<form class=\"flexiContactForm\" role=\"form\"
      data-request=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onMailSent\"
      data-request-update=\"'";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"Enter name\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"Enter Email\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"Enter Subject\">
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Enter Message\" cols=\"30\" rows=\"10\"></textarea>
        </div>
        ";
        // line 21
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "enableCaptcha", array())) {
            // line 22
            echo "            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "siteKey", array()), "html", null, true);
            echo "\"></div>
            </div>
        ";
        }
        // line 26
        echo "        <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">Send</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/plugins/laminsanneh/flexicontact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 26,  52 => 23,  49 => 22,  47 => 21,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<form class=\"flexiContactForm\" role=\"form\"
      data-request=\"{{ __SELF__ }}::onMailSent\"
      data-request-update=\"'{{ __SELF__ }}::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"Enter name\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"Enter Email\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"Enter Subject\">
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Enter Message\" cols=\"30\" rows=\"10\"></textarea>
        </div>
        {% if __SELF__.enableCaptcha %}
            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.siteKey }}\"></div>
            </div>
        {% endif %}
        <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">Send</button>
    </div>
</form>
";
    }
}
