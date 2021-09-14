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

/* tool/show.html.twig */
class __TwigTemplate_47a7995fcb8bba1563a05cfd959d5ece9cd23f0c73edc1846c9a03919f0cbfa3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "tool/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Herramientas";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Herramientas</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Imagen</th>
                <td>
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["tool"] ?? null), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "\" height=\"150\">
                </td>
            </tr>
            <tr>
                <th>Identificador</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Código de barras</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "barcode", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Inventario</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "stock", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marca</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "brand", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "price", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Límite Minimo</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "minimumLimit", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ubicación</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "location", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "description", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tool_index");
        echo "\"><i class=\"fas fa-hand-point-left\"> volver a la lista</i></a>
    <br>
    <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tool_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "id", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\"><i class=\"fas fa-edit\"> Actualice o agregue más herramientas</i></a>
    ";
        // line 58
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            // line 59
            echo "        ";
            echo twig_include($this->env, $context, "tool/_delete_form.html.twig");
            echo "
    ";
        }
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return "tool/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 61,  152 => 59,  150 => 58,  146 => 57,  141 => 55,  133 => 50,  126 => 46,  119 => 42,  112 => 38,  105 => 34,  98 => 30,  91 => 26,  84 => 22,  77 => 18,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tool/show.html.twig", "/var/www/project/templates/tool/show.html.twig");
    }
}
