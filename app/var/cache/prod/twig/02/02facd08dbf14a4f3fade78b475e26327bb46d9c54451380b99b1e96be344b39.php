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

/* cable/index.html.twig */
class __TwigTemplate_3a77adcce5c9f3ee52b4b364dd2d1f982f04fb9d20b5bf74b48f0874903c5c3e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cable/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Lista de cables";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Lista de cables</h1>

    <h4><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cable_new");
        echo "\"><i class=\"fas fa-dolly\"> Agregar un nuevo Cable </i></a></h4>
    <table class=\"table table-hover table-bordered\">
        <thead>
            <tr class=\"table-dark\">
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Disponibilidad</th>
                <th>Ubicación</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cables"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cable"]) {
            // line 22
            echo "            ";
            if (((null === twig_get_attribute($this->env, $this->source, $context["cable"], "minimumLimit", [], "any", false, false, false, 22)) || (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cable"], "minimumLimit", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, $context["cable"], "availability", [], "any", false, false, false, 22))))) {
                // line 23
                echo "                <tr class=\"table-danger\">
                    <td><img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["cable"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cable"], "name", [], "any", false, false, false, 24), "html", null, true);
                echo "\" height=\"100\"></td>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cable"], "name", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cable"], "availability", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                    <td id=\"desc\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cable"], "location", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                    <td id=\"desc\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cable"], "description", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cable_show", ["id" => twig_get_attribute($this->env, $this->source, $context["cable"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" ><i class=\"far fa-eye\"> Mostrar detalles</i></a>
                        <br>
                        <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cable_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["cable"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\"><i class=\"fas fa-edit\"> Actualice o agregue más cable</i></a>
                        ";
                // line 33
                echo twig_include($this->env, $context, "cable/_movement_form.html.twig");
                echo "
                    </td>
                </tr>
            ";
            } else {
                // line 37
                echo "                <tr class=\"table-success\">
                    <td><img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["cable"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cable"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "\" height=\"100\"></td>
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cable"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cable"], "availability", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                    <td id=\"desc\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cable"], "location", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>

                    <td id=\"desc\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cable"], "description", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cable_show", ["id" => twig_get_attribute($this->env, $this->source, $context["cable"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\"><i class=\"far fa-eye\"> Mostrar detalles</i></a>
                        <br>
                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cable_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["cable"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\"><i class=\"fas fa-edit\"> Actualice o agregue más cable</i></a>
                        ";
                // line 48
                echo twig_include($this->env, $context, "cable/_movement_form.html.twig");
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
                <td colspan=\"8\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "cable/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 58,  198 => 54,  184 => 52,  177 => 48,  173 => 47,  168 => 45,  163 => 43,  158 => 41,  154 => 40,  150 => 39,  144 => 38,  141 => 37,  134 => 33,  130 => 32,  125 => 30,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  102 => 24,  99 => 23,  96 => 22,  78 => 21,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cable/index.html.twig", "/var/www/project/templates/cable/index.html.twig");
    }
}
