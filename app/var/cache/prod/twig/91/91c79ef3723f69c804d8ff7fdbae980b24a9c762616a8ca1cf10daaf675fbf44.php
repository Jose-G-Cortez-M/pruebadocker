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

/* cable/show.html.twig */
class __TwigTemplate_51e0d10e0e9992e861fc1ea77d6155ea12943d0aa9ff232916c9bdbb085b2ee3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cable/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Cable";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Cable</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Imagen</th>
                <td>
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["cable"] ?? null), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "\" height=\"50\">
                </td>
            </tr>
            <tr>
                <th>Identificador</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codigo de barras</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "barcode", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponibilidad</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "availability", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Peso por metro</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "weightPerMeter", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio de compra por metro</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "purchasePrice", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio de venta por metro</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "salePrice", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Límite mínimo</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "minimumLimit", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ubicación</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "location", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "description", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cable_index");
        echo "\"><i class=\"fas fa-hand-point-left\"> Regresar a la lista</i></a>
    <br>
    <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cable_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["cable"] ?? null), "id", [], "any", false, false, false, 61)]), "html", null, true);
        echo "\"><i class=\"fas fa-edit\"> Actualice o agregue más cable</i></a>
    ";
        // line 62
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            // line 63
            echo "        ";
            echo twig_include($this->env, $context, "cable/_delete_form.html.twig");
            echo "
    ";
        }
        // line 65
        echo "
";
    }

    public function getTemplateName()
    {
        return "cable/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 65,  159 => 63,  157 => 62,  153 => 61,  148 => 59,  140 => 54,  133 => 50,  126 => 46,  119 => 42,  112 => 38,  105 => 34,  98 => 30,  91 => 26,  84 => 22,  77 => 18,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cable/show.html.twig", "/var/www/project/templates/cable/show.html.twig");
    }
}
