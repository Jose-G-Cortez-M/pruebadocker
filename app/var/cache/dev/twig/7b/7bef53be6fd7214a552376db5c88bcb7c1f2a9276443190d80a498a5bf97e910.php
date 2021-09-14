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

/* project/index.html.twig */
class __TwigTemplate_32b42f087f9c5cc3c656a4bdf5d2a0459147a9ff8cbd098ae930a57e62a8ae30 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
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

        echo "Índice de proyectos";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Índice de proyectos</h1>
    ";
        // line 6
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 7
            echo "        <h4><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_new");
            echo "\"><i class=\"fas fa-business-time\"> Agregar nuevo proyecto</i></a></h4>
    ";
        }
        // line 9
        echo "    <h2>
        ";
        // line 10
        if (((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 10, $this->source); })()))) : (""))) {
            // line 11
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "
        ";
        }
        // line 13
        echo "    </h2>
    <table class=\"table table-hover table-bordered\">
        <thead>
            <tr class=\"table-dark\">
                <th>Número de contrato</th>
                <th>Nombre</th>
                ";
        // line 19
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COUNTER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 20
            echo "                    <th>Fecha de Registro</th>
                ";
        }
        // line 22
        echo "                ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 23
            echo "                    <th>Fecha de inicio</th>
                    <th>Fecha de finalización</th>
                    <th>Avances (%)</th>
                ";
        }
        // line 27
        echo "                ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COUNTER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 28
            echo "                    <th>Costo total de tareas (\$)</th>
                    <th>Costo total de Inventario (\$)</th>
                    <th>Costo total (\$)</th>
                    <th>Valor comercial (\$)</th>
                ";
        }
        // line 33
        echo "                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 37, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 38
            echo "            <tr>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "contractnumber", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                ";
            // line 41
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COUNTER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 42
                echo "                    <td>";
                ((twig_get_attribute($this->env, $this->source, $context["project"], "registrationDate", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "registrationDate", [], "any", false, false, false, 42), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</td>
                ";
            }
            // line 44
            echo "                ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 45
                echo "                    <td>";
                ((twig_get_attribute($this->env, $this->source, $context["project"], "startdate", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "startdate", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>";
                // line 46
                ((twig_get_attribute($this->env, $this->source, $context["project"], "endtime", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "endtime", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "advances", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                ";
            }
            // line 49
            echo "                ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COUNTER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 50
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "totalCostTask", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                    <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "totalCostInventory", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "totalCost", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                    <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "commercialValue", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                ";
            }
            // line 55
            echo "                <td>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"><i class=\"far fa-eye\"> Mostrar detalles</i></a>
                    <br>
                    ";
            // line 58
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 59
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\"><i class=\"fas fa-edit\"> Editar</i> </a>
                        ";
                // line 60
                echo twig_include($this->env, $context, "project/_assignTask_form.html.twig");
                echo "
                        ";
                // line 61
                echo twig_include($this->env, $context, "project/_assignWorker_form.html.twig");
                echo "
                        ";
                // line 62
                echo twig_include($this->env, $context, "project/_showObs_form.html.twig");
                echo "
                        ";
                // line 63
                echo twig_include($this->env, $context, "project/_finishProject_form.html.twig");
                echo "
                    ";
            }
            // line 65
            echo "                </td>
            </tr>
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
            // line 68
            echo "            <tr>
                <td colspan=\"10\"> No se encontraron registros </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 72,  271 => 68,  256 => 65,  251 => 63,  247 => 62,  243 => 61,  239 => 60,  234 => 59,  232 => 58,  227 => 56,  224 => 55,  219 => 53,  215 => 52,  211 => 51,  206 => 50,  203 => 49,  198 => 47,  194 => 46,  189 => 45,  186 => 44,  180 => 42,  178 => 41,  174 => 40,  170 => 39,  167 => 38,  149 => 37,  143 => 33,  136 => 28,  133 => 27,  127 => 23,  124 => 22,  120 => 20,  118 => 19,  110 => 13,  104 => 11,  102 => 10,  99 => 9,  93 => 7,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Índice de proyectos{% endblock %}
{% block body %}
    <h1>Índice de proyectos</h1>
    {% if is_granted(\"ROLE_PROJECT_MANAGER\") or is_granted(\"ROLE_MANAGER\") %}
        <h4><a href=\"{{ path('project_new') }}\"><i class=\"fas fa-business-time\"> Agregar nuevo proyecto</i></a></h4>
    {% endif %}
    <h2>
        {% if message|default%}
            {{ message }}
        {% endif %}
    </h2>
    <table class=\"table table-hover table-bordered\">
        <thead>
            <tr class=\"table-dark\">
                <th>Número de contrato</th>
                <th>Nombre</th>
                {% if is_granted(\"ROLE_COUNTER\") or is_granted(\"ROLE_MANAGER\") %}
                    <th>Fecha de Registro</th>
                {% endif %}
                {% if is_granted(\"ROLE_PROJECT_MANAGER\") or is_granted(\"ROLE_MANAGER\") %}
                    <th>Fecha de inicio</th>
                    <th>Fecha de finalización</th>
                    <th>Avances (%)</th>
                {% endif %}
                {% if is_granted(\"ROLE_COUNTER\") or is_granted(\"ROLE_MANAGER\") %}
                    <th>Costo total de tareas (\$)</th>
                    <th>Costo total de Inventario (\$)</th>
                    <th>Costo total (\$)</th>
                    <th>Valor comercial (\$)</th>
                {% endif %}
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for project in projects %}
            <tr>
                <td>{{ project.contractnumber }}</td>
                <td>{{ project.name }}</td>
                {% if is_granted(\"ROLE_COUNTER\") or is_granted(\"ROLE_MANAGER\") %}
                    <td>{{ project.registrationDate ? project.registrationDate|date('Y-m-d H:i:s') : '' }}</td>
                {% endif %}
                {% if is_granted(\"ROLE_PROJECT_MANAGER\") or is_granted(\"ROLE_MANAGER\") %}
                    <td>{{ project.startdate ? project.startdate|date('Y-m-d') : '' }}</td>
                    <td>{{ project.endtime ? project.endtime|date('Y-m-d') : '' }}</td>
                    <td>{{ project.advances }}</td>
                {% endif %}
                {% if is_granted(\"ROLE_COUNTER\") or is_granted(\"ROLE_MANAGER\") %}
                    <td>{{ project.totalCostTask }}</td>
                    <td>{{ project.totalCostInventory }}</td>
                    <td>{{ project.totalCost }}</td>
                    <td>{{ project.commercialValue }}</td>
                {% endif %}
                <td>
                    <a href=\"{{ path('project_show', {'id': project.id}) }}\"><i class=\"far fa-eye\"> Mostrar detalles</i></a>
                    <br>
                    {% if is_granted(\"ROLE_PROJECT_MANAGER\") or is_granted(\"ROLE_MANAGER\") %}
                        <a href=\"{{ path('project_edit', {'id': project.id}) }}\"><i class=\"fas fa-edit\"> Editar</i> </a>
                        {{ include('project/_assignTask_form.html.twig') }}
                        {{ include('project/_assignWorker_form.html.twig') }}
                        {{ include('project/_showObs_form.html.twig') }}
                        {{ include('project/_finishProject_form.html.twig') }}
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\"> No se encontraron registros </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "project/index.html.twig", "/var/www/project/templates/project/index.html.twig");
    }
}
