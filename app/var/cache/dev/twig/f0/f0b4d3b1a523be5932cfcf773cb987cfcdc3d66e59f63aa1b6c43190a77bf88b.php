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

/* material/index.html.twig */
class __TwigTemplate_bf493221a6b633cc1af4b9b270c2c3a3820aca4e9771990fb5bad8fedef1c0a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "material/index.html.twig", 1);
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

        echo "Lista de materiales";
        
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
        echo "    <h1>Lista de materiales</h1>

    <h4><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_new");
        echo "\"><i class=\"fas fa-archive\"> Agregar un nuevo material</i></a></h4>
    <table class=\"table table-hover table-bordered\">
        <thead>
            <tr class=\"table-dark\">
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Inventario</th>
                <th>Ubicaci??n</th>
                <th>Descripci??n</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 22
            echo "            ";
            if (((null === twig_get_attribute($this->env, $this->source, $context["material"], "minimumLimit", [], "any", false, false, false, 22)) || (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["material"], "minimumLimit", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, $context["material"], "stock", [], "any", false, false, false, 22))))) {
                // line 23
                echo "                <tr class=\"table-danger\">
                    <td><img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["material"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "name", [], "any", false, false, false, 24), "html", null, true);
                echo "\" height=\"100\">
                    </td>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "stock", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                    <td id=\"desc\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "location", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                    <td id=\"desc\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "description", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_show", ["id" => twig_get_attribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\"><i class=\"far fa-eye\"> Mostrar detalles</i></a>
                        ";
                // line 32
                echo twig_include($this->env, $context, "material/_movement_form.html.twig");
                echo "
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\"><i class=\"fas fa-edit\"> Actualice o agregue m??s material</i></a>
                    </td>
                </tr>
            ";
            } else {
                // line 37
                echo "                <tr class=\"table-success\">
                    <td><img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["material"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "\" height=\"100\">
                    </td>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "stock", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                    <td id=\"desc\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "location", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                    <td id=\"desc\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "description", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_show", ["id" => twig_get_attribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\"><i class=\"far fa-eye\"> Mostrar detalles</i></a>
                        <br>
                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\"><i class=\"fas fa-edit\"> Actualice o agregue m??s material</i></a>
                        ";
                // line 48
                echo twig_include($this->env, $context, "material/_movement_form.html.twig");
                echo "
                    </td>
                </tr>
            ";
            }
            // line 52
            echo "
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <tr>
                <td colspan=\"8\"> No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "material/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  228 => 54,  214 => 52,  207 => 48,  203 => 47,  198 => 45,  193 => 43,  189 => 42,  185 => 41,  181 => 40,  174 => 38,  171 => 37,  164 => 33,  160 => 32,  156 => 31,  151 => 29,  147 => 28,  143 => 27,  139 => 26,  132 => 24,  129 => 23,  126 => 22,  108 => 21,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lista de materiales{% endblock %}

{% block body %}
    <h1>Lista de materiales</h1>

    <h4><a href=\"{{ path('material_new') }}\"><i class=\"fas fa-archive\"> Agregar un nuevo material</i></a></h4>
    <table class=\"table table-hover table-bordered\">
        <thead>
            <tr class=\"table-dark\">
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Inventario</th>
                <th>Ubicaci??n</th>
                <th>Descripci??n</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for material in materials %}
            {% if material.minimumLimit is null or material.minimumLimit>material.stock %}
                <tr class=\"table-danger\">
                    <td><img src=\"{{ vich_uploader_asset(material, 'imageFile') }}\" alt=\"{{ material.name }}\" height=\"100\">
                    </td>
                    <td>{{ material.name }}</td>
                    <td>{{ material.stock }}</td>
                    <td id=\"desc\">{{ material.location }}</td>
                    <td id=\"desc\">{{ material.description }}</td>
                    <td>
                        <a href=\"{{ path('material_show', {'id': material.id}) }}\"><i class=\"far fa-eye\"> Mostrar detalles</i></a>
                        {{ include('material/_movement_form.html.twig') }}
                        <a href=\"{{ path('material_edit', {'id': material.id}) }}\"><i class=\"fas fa-edit\"> Actualice o agregue m??s material</i></a>
                    </td>
                </tr>
            {% else %}
                <tr class=\"table-success\">
                    <td><img src=\"{{ vich_uploader_asset(material, 'imageFile') }}\" alt=\"{{ material.name }}\" height=\"100\">
                    </td>
                    <td>{{ material.name }}</td>
                    <td>{{ material.stock }}</td>
                    <td id=\"desc\">{{ material.location }}</td>
                    <td id=\"desc\">{{ material.description }}</td>
                    <td>
                        <a href=\"{{ path('material_show', {'id': material.id}) }}\"><i class=\"far fa-eye\"> Mostrar detalles</i></a>
                        <br>
                        <a href=\"{{ path('material_edit', {'id': material.id}) }}\"><i class=\"fas fa-edit\"> Actualice o agregue m??s material</i></a>
                        {{ include('material/_movement_form.html.twig') }}
                    </td>
                </tr>
            {% endif %}

        {% else %}
            <tr>
                <td colspan=\"8\"> No se encontraron registros</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "material/index.html.twig", "/home/josegcm/Descargas/monolithicEquipanelec/templates/material/index.html.twig");
    }
}
