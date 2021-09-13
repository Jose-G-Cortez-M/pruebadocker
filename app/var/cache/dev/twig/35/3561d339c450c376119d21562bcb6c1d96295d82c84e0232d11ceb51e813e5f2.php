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

/* counter/index.html.twig */
class __TwigTemplate_2620fb472f1b0f682fe357f93d10a3318469c4e7c638b84c726ebba48c31a923 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counter/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counter/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "counter/index.html.twig", 1);
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

        echo "Contador";
        
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
        echo "
    <h1>Bienvenido Contador</h1>

    <table class=\"table table table-hover table-bordered\">
        <thead>
        <tr class=\"table-dark\">
            <th>Inventario</th>
            <th>Activos(\$)</th>
            <th>Pasivos(\$)</th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td> Materiales </td>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["inventoryMaterials"]) || array_key_exists("inventoryMaterials", $context) ? $context["inventoryMaterials"] : (function () { throw new RuntimeError('Variable "inventoryMaterials" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</td>
                <td>0</td>
            </tr>


            <tr>
                <td> Cables </td>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["inventoryCables"]) || array_key_exists("inventoryCables", $context) ? $context["inventoryCables"] : (function () { throw new RuntimeError('Variable "inventoryCables" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</td>
                <td>0</td>
            </tr>


            <tr>
                <td> Herramientas </td>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["inventoryTools"]) || array_key_exists("inventoryTools", $context) ? $context["inventoryTools"] : (function () { throw new RuntimeError('Variable "inventoryTools" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</td>
                <td>0</td>
            </tr>


            <tr>
                <td><strong> TOTAL </strong></td>
                <td><strong> ";
        // line 42
        echo twig_escape_filter($this->env, (((isset($context["inventoryTools"]) || array_key_exists("inventoryTools", $context) ? $context["inventoryTools"] : (function () { throw new RuntimeError('Variable "inventoryTools" does not exist.', 42, $this->source); })()) + (isset($context["inventoryCables"]) || array_key_exists("inventoryCables", $context) ? $context["inventoryCables"] : (function () { throw new RuntimeError('Variable "inventoryCables" does not exist.', 42, $this->source); })())) + (isset($context["inventoryMaterials"]) || array_key_exists("inventoryMaterials", $context) ? $context["inventoryMaterials"] : (function () { throw new RuntimeError('Variable "inventoryMaterials" does not exist.', 42, $this->source); })())), "html", null, true);
        echo " </strong></td>
                <td><strong> 0 </strong></td>
            </tr>
        </tbody>
    </table>

    <h3> Ingrese las fechas del filtrado </h3>

    ";
        // line 50
        echo twig_include($this->env, $context, "counter/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <table class=\"table table table-hover table-bordered\">
        <thead>
        <tr class=\"table-dark\">
            <th>Proyectos</th>
            <th>Beneficios(\$)</th>
            <th>Perdidas(\$)</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td> Activos </td>
            <td> 0 </td>
            <td> ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["costProjectActive"]) || array_key_exists("costProjectActive", $context) ? $context["costProjectActive"] : (function () { throw new RuntimeError('Variable "costProjectActive" does not exist.', 65, $this->source); })()), "html", null, true);
        echo " </td>
        </tr>


        <tr>
            <td> Cerrados </td>
            <td> ";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["commercialValueClosed"]) || array_key_exists("commercialValueClosed", $context) ? $context["commercialValueClosed"] : (function () { throw new RuntimeError('Variable "commercialValueClosed" does not exist.', 71, $this->source); })()), "html", null, true);
        echo " </td>
            <td>0</td>
        </tr>

        <tr>
            <td> Inversiones en proyectos Cerrados</td>
            <td> 0 </td>
            <td> ";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["totalCostClosed"]) || array_key_exists("totalCostClosed", $context) ? $context["totalCostClosed"] : (function () { throw new RuntimeError('Variable "totalCostClosed" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " </td>
        </tr>

        <tr>
            <td><strong> TOTAL </strong></td>
            <td><strong> ";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["commercialValueClosed"]) || array_key_exists("commercialValueClosed", $context) ? $context["commercialValueClosed"] : (function () { throw new RuntimeError('Variable "commercialValueClosed" does not exist.', 83, $this->source); })()), "html", null, true);
        echo " </strong></td>
            <td><strong> ";
        // line 84
        echo twig_escape_filter($this->env, ((isset($context["costProjectActive"]) || array_key_exists("costProjectActive", $context) ? $context["costProjectActive"] : (function () { throw new RuntimeError('Variable "costProjectActive" does not exist.', 84, $this->source); })()) + (isset($context["totalCostClosed"]) || array_key_exists("totalCostClosed", $context) ? $context["totalCostClosed"] : (function () { throw new RuntimeError('Variable "totalCostClosed" does not exist.', 84, $this->source); })())), "html", null, true);
        echo " </strong></td>
        </tr>
        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "counter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 84,  191 => 83,  183 => 78,  173 => 71,  164 => 65,  146 => 50,  135 => 42,  125 => 35,  115 => 28,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contador{% endblock %}

{% block body %}

    <h1>Bienvenido Contador</h1>

    <table class=\"table table table-hover table-bordered\">
        <thead>
        <tr class=\"table-dark\">
            <th>Inventario</th>
            <th>Activos(\$)</th>
            <th>Pasivos(\$)</th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td> Materiales </td>
                <td>{{ inventoryMaterials }}</td>
                <td>0</td>
            </tr>


            <tr>
                <td> Cables </td>
                <td>{{ inventoryCables }}</td>
                <td>0</td>
            </tr>


            <tr>
                <td> Herramientas </td>
                <td>{{ inventoryTools }}</td>
                <td>0</td>
            </tr>


            <tr>
                <td><strong> TOTAL </strong></td>
                <td><strong> {{ inventoryTools+inventoryCables+inventoryMaterials }} </strong></td>
                <td><strong> 0 </strong></td>
            </tr>
        </tbody>
    </table>

    <h3> Ingrese las fechas del filtrado </h3>

    {{ include('counter/_form.html.twig', {'button_label': 'Update'}) }}

    <table class=\"table table table-hover table-bordered\">
        <thead>
        <tr class=\"table-dark\">
            <th>Proyectos</th>
            <th>Beneficios(\$)</th>
            <th>Perdidas(\$)</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td> Activos </td>
            <td> 0 </td>
            <td> {{ costProjectActive }} </td>
        </tr>


        <tr>
            <td> Cerrados </td>
            <td> {{ commercialValueClosed }} </td>
            <td>0</td>
        </tr>

        <tr>
            <td> Inversiones en proyectos Cerrados</td>
            <td> 0 </td>
            <td> {{ totalCostClosed }} </td>
        </tr>

        <tr>
            <td><strong> TOTAL </strong></td>
            <td><strong> {{ commercialValueClosed }} </strong></td>
            <td><strong> {{ costProjectActive+totalCostClosed }} </strong></td>
        </tr>
        </tbody>
    </table>

{% endblock %}
", "counter/index.html.twig", "/home/josegcm/Descargas/monolithicEquipanelec/templates/counter/index.html.twig");
    }
}
