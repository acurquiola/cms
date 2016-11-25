<?php

/* C:\xampp\htdocs\cms/plugins/topsportstv/subscriptions/components/pagosform/default.htm */
class __TwigTemplate_529599218815ef930b960627eed83480a5cd009cf61d5bd2d8ead1d6e36c6efd extends Twig_Template
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
\t<form data-request=\"onSave\" class=\"form-control col s12\">
\t\t<div class=\"input-field col s12 m4 l4\">
\t\t\t<input placeholder=\"Monto depositado\" id=\"monto-input\" type=\"number\" name=\"monto\" readonly class=\"right-align\" required>
\t\t\t<label for=\"monto-input\"><b>MONTO</b></label>
\t\t</div>
\t\t<div class=\"input-field col s12 m4 l4 \">
\t\t\t<input placeholder=\"Código de Referencia\" id=\"nro_referencia-input\" name=\"nro_referencia\" type=\"text\" class=\"validate\" >
\t\t\t<label for=\"nro_referencia-input\"><b>REFERENCIA</b></label>
\t\t</div>
\t\t<div class=\"input-field col s12 m4 l4\">
\t\t\t<input placeholder=\"Fecha del depósito\" id=\"fecha_pago-input\" name=\"fecha_pago\" type=\"date\" class=\"datepicker\" required>
\t\t\t<label for=\"fecha_pago-input\"><b>FECHA</b></label>
\t\t</div>
\t\t<input id=\"plan_id-input\" type=\"hidden\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "subscriptions_id", array()), "html", null, true);
        echo "\">
\t\t<div class=\"input-field col s12 m6 l6\">
\t\t\t<select name=\"metodo_pago\" required>
\t\t\t\t<option value=\"\" disabled selected> Seleccione Forma de Pago</option>
\t\t\t\t<option value=\"transferencia\">Transferencia Bancaria</option>
\t\t\t\t<option value=\"deposito\">Depósito Bancario</option>
\t\t\t\t</select>
\t\t\t<label for=\"metodo_pago\"><b>FORMA DE PAGO</b></label>
\t\t</div>
\t\t";
        // line 24
        $context["records"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "records", array());
        // line 25
        echo "\t\t";
        $context["displayColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "displayColumn", array());
        // line 26
        echo "\t\t";
        $context["noRecordsMessage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "noRecordsMessage", array());
        // line 27
        echo "\t\t";
        $context["detailsPage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsPage", array());
        // line 28
        echo "\t\t";
        $context["detailsKeyColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsKeyColumn", array());
        // line 29
        echo "\t\t";
        $context["detailsUrlParameter"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsUrlParameter", array());
        // line 30
        echo "\t\t
\t\t<div class=\"input-field col s12 m6 l6\">
\t\t\t<select name=\"subscriptions_id\" id=\"subscriptions_id-select\" required>
\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 34
            echo "\t\t\t\t<option data-precio=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "precio", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "nombre", array()), "html", null, true);
            echo "</option>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "\t\t\t\t<option disabled selected value=\"\">Ningún plan seleccionado</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</select>
\t\t\t<label for=\"metodo_pago\"><b>PLAN DE SUSCRIPCIÓN</b></label>
\t\t</div>


\t    <div class=\"right-align\">
\t        <button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t    </div>
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/plugins/topsportstv/subscriptions/components/pagosform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 38,  86 => 36,  74 => 34,  69 => 33,  64 => 30,  61 => 29,  58 => 28,  55 => 27,  52 => 26,  49 => 25,  47 => 24,  35 => 15,  19 => 1,);
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
\t<form data-request=\"onSave\" class=\"form-control col s12\">
\t\t<div class=\"input-field col s12 m4 l4\">
\t\t\t<input placeholder=\"Monto depositado\" id=\"monto-input\" type=\"number\" name=\"monto\" readonly class=\"right-align\" required>
\t\t\t<label for=\"monto-input\"><b>MONTO</b></label>
\t\t</div>
\t\t<div class=\"input-field col s12 m4 l4 \">
\t\t\t<input placeholder=\"Código de Referencia\" id=\"nro_referencia-input\" name=\"nro_referencia\" type=\"text\" class=\"validate\" >
\t\t\t<label for=\"nro_referencia-input\"><b>REFERENCIA</b></label>
\t\t</div>
\t\t<div class=\"input-field col s12 m4 l4\">
\t\t\t<input placeholder=\"Fecha del depósito\" id=\"fecha_pago-input\" name=\"fecha_pago\" type=\"date\" class=\"datepicker\" required>
\t\t\t<label for=\"fecha_pago-input\"><b>FECHA</b></label>
\t\t</div>
\t\t<input id=\"plan_id-input\" type=\"hidden\" value=\"{{ this.param.subscriptions_id }}\">
\t\t<div class=\"input-field col s12 m6 l6\">
\t\t\t<select name=\"metodo_pago\" required>
\t\t\t\t<option value=\"\" disabled selected> Seleccione Forma de Pago</option>
\t\t\t\t<option value=\"transferencia\">Transferencia Bancaria</option>
\t\t\t\t<option value=\"deposito\">Depósito Bancario</option>
\t\t\t\t</select>
\t\t\t<label for=\"metodo_pago\"><b>FORMA DE PAGO</b></label>
\t\t</div>
\t\t{% set records = builderList.records %}
\t\t{% set displayColumn = builderList.displayColumn %}
\t\t{% set noRecordsMessage = builderList.noRecordsMessage %}
\t\t{% set detailsPage = builderList.detailsPage %}
\t\t{% set detailsKeyColumn = builderList.detailsKeyColumn %}
\t\t{% set detailsUrlParameter = builderList.detailsUrlParameter %}
\t\t
\t\t<div class=\"input-field col s12 m6 l6\">
\t\t\t<select name=\"subscriptions_id\" id=\"subscriptions_id-select\" required>
\t\t\t\t{% for record in records %}
\t\t\t\t<option data-precio=\"{{ record.precio }}\" value=\"{{ record.id }}\">{{ record.nombre }}</option>
\t\t\t\t{% else %}
\t\t\t\t<option disabled selected value=\"\">Ningún plan seleccionado</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t<label for=\"metodo_pago\"><b>PLAN DE SUSCRIPCIÓN</b></label>
\t\t</div>


\t    <div class=\"right-align\">
\t        <button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t    </div>
\t</form>
</div>", "C:\\xampp\\htdocs\\cms/plugins/topsportstv/subscriptions/components/pagosform/default.htm", "");
    }
}
