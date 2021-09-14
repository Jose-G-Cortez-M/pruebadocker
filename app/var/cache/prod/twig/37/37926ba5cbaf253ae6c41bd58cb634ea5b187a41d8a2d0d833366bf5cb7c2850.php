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

/* tool/index.html.twig */
class __TwigTemplate_29c1eb1df0eba7d7889b6bdc2476b9bf7e239059fac698f2606226306ac2c2a2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "tool/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Lista de Herramientas";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Lista de Herramientas</h1>

    <h4><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tool_new");
        echo "\"><i class=\"fas fa-tools\"> Agregar nueva herramienta</i></a></h4>
    <table class=\"table table-hover table-bordered\">
        <thead>
            <tr class=\"table-dark\">
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Inventario</th>
                <th>Ubicación</th>
                <th>Descripción</th>
                <th>Límite mínimo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tools"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 23
            echo "            ";
            if (((null === twig_get_attribute($this->env, $this->source, $context["tool"], "minimumLimit", [], "any", false, false, false, 23)) || (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tool"], "minimumLimit", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, $context["tool"], "stock", [], "any", false, false, false, 23))))) {
                // line 24
                echo "                <tr class=\"table-danger\">
                    <td><img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["tool"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "name", [], "any", false, false, false, 25), "html", null, true);
                echo "\" height=\"100\"></td>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "stock", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "location", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                    <td id=\"desc\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "minimumLimit", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tool_show", ["id" => twig_get_attribute($this->env, $this->source, $context["tool"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\"><i class=\"far fa-eye\">Mostrar detalles</i></a>
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tool_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["tool"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\"><i class=\"fas fa-edit\"> Actualice o agregue más herramientas</i></a>
                        ";
                // line 34
                echo twig_include($this->env, $context, "tool/_movement_form.html.twig");
                echo "
                    </td>
            </tr>
            ";
            } else {
                // line 38
                echo "                <tr class=\"table-success\">
                    <td><img src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["tool"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "\" height=\"100\"></td>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "stock", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "location", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                    <td id=\"desc\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "minimumLimit", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tool_show", ["id" => twig_get_attribute($this->env, $this->source, $context["tool"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\"><i class=\"far fa-eye\"> Mostrar detalles</i></a>
                        <br>
                        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tool_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["tool"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\"><i class=\"fas fa-edit\"> Actualice o agregue más herramientas</i></a>
                        ";
                // line 49
                echo twig_include($this->env, $context, "tool/_movement_form.html.twig");
                echo "
                    </td>
                </tr>
            ";
            }
            // line 53
            echo "        ";
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
                <td colspan=\"8\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "tool/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 58,  204 => 54,  191 => 53,  184 => 49,  180 => 48,  175 => 46,  170 => 44,  166 => 43,  162 => 42,  158 => 41,  154 => 40,  148 => 39,  145 => 38,  138 => 34,  134 => 33,  130 => 32,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  103 => 25,  100 => 24,  97 => 23,  79 => 22,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tool/index.html.twig", "/var/www/project/templates/tool/index.html.twig");
    }
}
