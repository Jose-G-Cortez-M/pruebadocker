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

/* movement/filteredMovement.html.twig */
class __TwigTemplate_5225d9d9382e784e56f22c45dbaaec76cb8c6023080c9939612f2ed0b5076b01 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "movement/filteredMovement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Lista de movimientos";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Lista de movimientos</h1>

    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
        echo "\"><i class=\"fas fa-hand-point-left\"> Volver al listado de Materiales</i></a>

    ";
        // line 10
        echo ($context["message"] ?? null);
        echo "
    <table class=\"table table-hover table-bordered\">
        <thead>
        <tr class=\"table-dark\">
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Descripción</th>
            <th>Fecha de orden</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movements"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
            // line 23
            echo "            <tr>

                <td>
                    ";
            // line 26
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "materials", [], "any", false, true, false, 26), "name", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "materials", [], "any", false, true, false, 26), "name", [], "any", false, false, false, 26))) : (""))) {
                // line 27
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "materials", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
                echo "
                    ";
            }
            // line 29
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "tools", [], "any", false, true, false, 29), "name", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "tools", [], "any", false, true, false, 29), "name", [], "any", false, false, false, 29))) : (""))) {
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "tools", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
                echo "
                    ";
            }
            // line 32
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "cables", [], "any", false, true, false, 32), "name", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "cables", [], "any", false, true, false, 32), "name", [], "any", false, false, false, 32))) : (""))) {
                // line 33
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "cables", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
                echo "
                    ";
            }
            // line 35
            echo "                </td>

                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td id=\"desc\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movement"], "description", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["movement"], "orderDate", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movement"], "orderDate", [], "any", false, false, false, 39), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["movement"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"> Editar o agregar a un proyecto</i></a>
                    ";
            // line 42
            echo twig_include($this->env, $context, "movement/_delete_form.html.twig");
            echo "
                </td>
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
            // line 46
            echo "            <tr>
                <td colspan=\"4\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "movement/filteredMovement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 50,  169 => 46,  152 => 42,  148 => 41,  143 => 39,  139 => 38,  135 => 37,  131 => 35,  125 => 33,  122 => 32,  116 => 30,  113 => 29,  107 => 27,  105 => 26,  100 => 23,  82 => 22,  67 => 10,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "movement/filteredMovement.html.twig", "/home/josegcm/monolithicEquipanelec/templates/movement/filteredMovement.html.twig");
    }
}
