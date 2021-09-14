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

/* project/show.html.twig */
class __TwigTemplate_e9783fe4fa528f25f3be76cbf7f4b1bf28d9e57dfd0b832664e66e9accdffc8d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "project/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Proyecto";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Proyecto</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Número de contrato</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "contractnumber", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha de Registro</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "registrationdate", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "registrationdate", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Fecha de inicio</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "startdate", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "startdate", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Fecha de finalización</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "endtime", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "endtime", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Descripción o lista de materiales</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Avances (%)</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "advances", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th> Coste total(\$)</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "totalcost", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_index");
        echo "\"><i class=\"fas fa-hand-point-left\"> volver a la lista</i></a>
    <br>
    ";
        // line 47
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 48
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"> Editar</i></a>
    ";
        }
        // line 50
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            // line 51
            echo "        ";
            echo twig_include($this->env, $context, "project/_delete_form.html.twig");
            echo "
    ";
        }
        // line 53
        echo "
";
    }

    public function getTemplateName()
    {
        return "project/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 53,  139 => 51,  136 => 50,  130 => 48,  128 => 47,  123 => 45,  115 => 40,  108 => 36,  101 => 32,  94 => 28,  87 => 24,  80 => 20,  73 => 16,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project/show.html.twig", "/var/www/project/templates/project/show.html.twig");
    }
}
