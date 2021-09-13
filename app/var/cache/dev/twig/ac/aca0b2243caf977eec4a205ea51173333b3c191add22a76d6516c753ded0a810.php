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
class __TwigTemplate_09c7b1103be7cdaa0b03474863d3f3619e5275b15de5406b7ff824bf05beab45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cable/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cable/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cable/show.html.twig", 1);
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

        echo "Cable";
        
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
        echo "    <h1>Cable</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Imagen</th>
                <td>
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 13, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "\" height=\"50\">
                </td>
            </tr>
            <tr>
                <th>Identificador</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codigo de barras</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 22, $this->source); })()), "barcode", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponibilidad</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 30, $this->source); })()), "availability", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Peso por metro</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 34, $this->source); })()), "weightPerMeter", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio de compra por metro</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 38, $this->source); })()), "purchasePrice", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio de venta por metro</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 42, $this->source); })()), "salePrice", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Límite mínimo</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 46, $this->source); })()), "minimumLimit", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ubicación</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 50, $this->source); })()), "location", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cable_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cable"]) || array_key_exists("cable", $context) ? $context["cable"] : (function () { throw new RuntimeError('Variable "cable" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  195 => 65,  189 => 63,  187 => 62,  183 => 61,  178 => 59,  170 => 54,  163 => 50,  156 => 46,  149 => 42,  142 => 38,  135 => 34,  128 => 30,  121 => 26,  114 => 22,  107 => 18,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cable{% endblock %}

{% block body %}
    <h1>Cable</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Imagen</th>
                <td>
                    <img src=\"{{ vich_uploader_asset(cable, 'imageFile') }}\" alt=\"{{ cable.name }}\" height=\"50\">
                </td>
            </tr>
            <tr>
                <th>Identificador</th>
                <td>{{ cable.id }}</td>
            </tr>
            <tr>
                <th>Codigo de barras</th>
                <td>{{ cable.barcode }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ cable.name }}</td>
            </tr>
            <tr>
                <th>Disponibilidad</th>
                <td>{{ cable.availability }}</td>
            </tr>
            <tr>
                <th>Peso por metro</th>
                <td>{{ cable.weightPerMeter }}</td>
            </tr>
            <tr>
                <th>Precio de compra por metro</th>
                <td>{{ cable.purchasePrice }}</td>
            </tr>
            <tr>
                <th>Precio de venta por metro</th>
                <td>{{ cable.salePrice }}</td>
            </tr>
            <tr>
                <th>Límite mínimo</th>
                <td>{{ cable.minimumLimit }}</td>
            </tr>
            <tr>
                <th>Ubicación</th>
                <td>{{ cable.location }}</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>{{ cable.description }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('cable_index') }}\"><i class=\"fas fa-hand-point-left\"> Regresar a la lista</i></a>
    <br>
    <a href=\"{{ path('cable_edit', {'id': cable.id}) }}\"><i class=\"fas fa-edit\"> Actualice o agregue más cable</i></a>
    {% if is_granted(\"ROLE_MANAGER\") %}
        {{ include('cable/_delete_form.html.twig') }}
    {% endif %}

{% endblock %}
", "cable/show.html.twig", "/home/josegcm/Descargas/monolithicEquipanelec/templates/cable/show.html.twig");
    }
}
