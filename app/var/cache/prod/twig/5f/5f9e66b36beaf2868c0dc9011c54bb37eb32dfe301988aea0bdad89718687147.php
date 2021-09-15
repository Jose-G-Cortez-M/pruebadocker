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
class __TwigTemplate_2cced73cae009a531532582feabf76583708865ab047f45b6eed57c452340db8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "counter/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contador";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["inventoryMaterials"] ?? null), "html", null, true);
        echo "</td>
                <td>0</td>
            </tr>


            <tr>
                <td> Cables </td>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, ($context["inventoryCables"] ?? null), "html", null, true);
        echo "</td>
                <td>0</td>
            </tr>


            <tr>
                <td> Herramientas </td>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, ($context["inventoryTools"] ?? null), "html", null, true);
        echo "</td>
                <td>0</td>
            </tr>


            <tr>
                <td><strong> TOTAL </strong></td>
                <td><strong> ";
        // line 42
        echo twig_escape_filter($this->env, ((($context["inventoryTools"] ?? null) + ($context["inventoryCables"] ?? null)) + ($context["inventoryMaterials"] ?? null)), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["costProjectActive"] ?? null), "html", null, true);
        echo " </td>
        </tr>


        <tr>
            <td> Cerrados </td>
            <td> ";
        // line 71
        echo twig_escape_filter($this->env, ($context["commercialValueClosed"] ?? null), "html", null, true);
        echo " </td>
            <td>0</td>
        </tr>

        <tr>
            <td> Inversiones en proyectos Cerrados</td>
            <td> 0 </td>
            <td> ";
        // line 78
        echo twig_escape_filter($this->env, ($context["totalCostClosed"] ?? null), "html", null, true);
        echo " </td>
        </tr>

        <tr>
            <td><strong> TOTAL </strong></td>
            <td><strong> ";
        // line 83
        echo twig_escape_filter($this->env, ($context["commercialValueClosed"] ?? null), "html", null, true);
        echo " </strong></td>
            <td><strong> ";
        // line 84
        echo twig_escape_filter($this->env, (($context["costProjectActive"] ?? null) + ($context["totalCostClosed"] ?? null)), "html", null, true);
        echo " </strong></td>
        </tr>
        </tbody>
    </table>

";
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
        return array (  165 => 84,  161 => 83,  153 => 78,  143 => 71,  134 => 65,  116 => 50,  105 => 42,  95 => 35,  85 => 28,  75 => 21,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "counter/index.html.twig", "/home/josegcm/monolithicEquipanelec/templates/counter/index.html.twig");
    }
}
