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

/* client/show.html.twig */
class __TwigTemplate_69a7cd8482eb90893da02f12a31ec6012a99ea1d09651045fd57bcf67f48d803 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Cliente";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Cliente</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Identificador</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Empresa</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "company", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Representante</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "representative", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "direction", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\"><i class=\"fas fa-hand-point-left\"> Regresar a la lista</i></a>
    <br>
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\"><i class=\"fas fa-edit\"> Editar</i></a>

    ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            // line 38
            echo "        ";
            echo twig_include($this->env, $context, "client/_delete_form.html.twig");
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  112 => 37,  107 => 35,  102 => 33,  94 => 28,  87 => 24,  80 => 20,  73 => 16,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/show.html.twig", "/var/www/project/templates/client/show.html.twig");
    }
}
