<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* project_close/show.html.twig */
class __TwigTemplate_cbe41af0e77d0772b31ef64a72d3e43bb3403ab26695dfa4e10675865b1a7cad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_close/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_close/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project_close/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Indice de proyecto cerrado";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Indice de proyecto cerrado</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Número de contrato</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 12, $this->source); })()), "contractNumber", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha de Registro</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 20, $this->source); })()), "registrationDate", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 20, $this->source); })()), "registrationDate", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Fecha de inicio</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 24, $this->source); })()), "startDate", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 24, $this->source); })()), "startDate", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Fecha de finalización</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 28, $this->source); })()), "endTime", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 28, $this->source); })()), "endTime", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Costo total por tareas</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 32, $this->source); })()), "totalCostTask", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Costo total del inventario</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 36, $this->source); })()), "totalCostInventory", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Costo total</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 40, $this->source); })()), "totalCost", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valor comercial</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_close"]) || array_key_exists("project_close", $context) ? $context["project_close"] : (function () { throw new RuntimeError('Variable "project_close" does not exist.', 44, $this->source); })()), "commercialValue", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_close_index");
        echo "\"><i class=\"fas fa-hand-point-left\"> volver a la lista</i></a>

    ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            // line 52
            echo "        ";
            echo twig_include($this->env, $context, "project_close/_delete_form.html.twig");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project_close/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 52,  165 => 51,  160 => 49,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Indice de proyecto cerrado{% endblock %}

{% block body %}
    <h1>Indice de proyecto cerrado</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Número de contrato</th>
                <td>{{ project_close.contractNumber }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ project_close.name }}</td>
            </tr>
            <tr>
                <th>Fecha de Registro</th>
                <td>{{ project_close.registrationDate ? project_close.registrationDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Fecha de inicio</th>
                <td>{{ project_close.startDate ? project_close.startDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Fecha de finalización</th>
                <td>{{ project_close.endTime ? project_close.endTime|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Costo total por tareas</th>
                <td>{{ project_close.totalCostTask }}</td>
            </tr>
            <tr>
                <th>Costo total del inventario</th>
                <td>{{ project_close.totalCostInventory }}</td>
            </tr>
            <tr>
                <th>Costo total</th>
                <td>{{ project_close.totalCost }}</td>
            </tr>
            <tr>
                <th>Valor comercial</th>
                <td>{{ project_close.commercialValue }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('project_close_index') }}\"><i class=\"fas fa-hand-point-left\"> volver a la lista</i></a>

    {% if is_granted(\"ROLE_MANAGER\") %}
        {{ include('project_close/_delete_form.html.twig') }}
    {% endif %}
{% endblock %}
", "project_close/show.html.twig", "/home/josegcm/monolithicEquipanelec/templates/project_close/show.html.twig");
    }
}
