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

/* movement/index.html.twig */
class __TwigTemplate_56c789cbe0035b386bdc3fc5d800c289e668859464be40a94525deb506e8f641 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "movement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Índice de movimiento ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <h1>Índice de movimiento </h1>

    <table class=\"table table-hover table-bordered\">
        <thead>
            <tr class=\"table-dark\">
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Fecha de orden</th>
                <th>Asignar a un proyecto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
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
            // line 21
            echo "            <tr>
                <td>
                    ";
            // line 23
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "materials", [], "any", false, true, false, 23), "name", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "materials", [], "any", false, true, false, 23), "name", [], "any", false, false, false, 23))) : (""))) {
                // line 24
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "materials", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                echo "
                    ";
            }
            // line 26
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "tools", [], "any", false, true, false, 26), "name", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "tools", [], "any", false, true, false, 26), "name", [], "any", false, false, false, 26))) : (""))) {
                // line 27
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "tools", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
                echo "
                    ";
            }
            // line 29
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "cables", [], "any", false, true, false, 29), "name", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "cables", [], "any", false, true, false, 29), "name", [], "any", false, false, false, 29))) : (""))) {
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "cables", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
                echo "
                    ";
            }
            // line 32
            echo "                </td>

                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            ((twig_get_attribute($this->env, $this->source, $context["movement"], "orderdate", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movement"], "orderdate", [], "any", false, false, false, 35), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["movement"], "projects", [], "any", false, false, false, 37)) {
                // line 38
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movement"], "projects", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                echo "
                    ";
            }
            // line 40
            echo "                </td>

                <td>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["movement"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"> Editar o agregar a un proyecto</i></a>
                    ";
            // line 44
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
            // line 48
            echo "            <tr>
                <td colspan=\"4\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "movement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 52,  169 => 48,  152 => 44,  148 => 43,  143 => 40,  137 => 38,  135 => 37,  130 => 35,  126 => 34,  122 => 32,  116 => 30,  113 => 29,  107 => 27,  104 => 26,  98 => 24,  96 => 23,  92 => 21,  74 => 20,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "movement/index.html.twig", "/var/www/project/templates/movement/index.html.twig");
    }
}
