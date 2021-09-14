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
class __TwigTemplate_1f363c8eed88506231f75d21912ae71a44270f2eac17352f5aadb37ea6282574 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Índice de proyectos";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (((array_key_exists("message", $context)) ? (_twig_default_filter(($context["message"] ?? null))) : (""))) {
            // line 11
            echo "            ";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
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
        return array (  250 => 72,  241 => 68,  226 => 65,  221 => 63,  217 => 62,  213 => 61,  209 => 60,  204 => 59,  202 => 58,  197 => 56,  194 => 55,  189 => 53,  185 => 52,  181 => 51,  176 => 50,  173 => 49,  168 => 47,  164 => 46,  159 => 45,  156 => 44,  150 => 42,  148 => 41,  144 => 40,  140 => 39,  137 => 38,  119 => 37,  113 => 33,  106 => 28,  103 => 27,  97 => 23,  94 => 22,  90 => 20,  88 => 19,  80 => 13,  74 => 11,  72 => 10,  69 => 9,  63 => 7,  61 => 6,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project/index.html.twig", "/var/www/project/templates/project/index.html.twig");
    }
}
