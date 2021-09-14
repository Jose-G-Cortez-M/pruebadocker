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

/* project/showObservations.html.twig */
class __TwigTemplate_2e90a9e2a7a11a2af1d12c944a98eddd16cf28f86700ecf2a1f1fac2acd6c97f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "project/showObservations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Observaciones";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <h1>Observaciones del proyecto</h1>
    ";
        // line 8
        if (((array_key_exists("projects", $context)) ? (_twig_default_filter(($context["projects"] ?? null))) : (""))) {
            // line 9
            echo "        <h2>";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["projects"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null), "html", null, true);
            echo "</h2>
    ";
        }
        // line 11
        echo "    <table class=\"table table-hover table-bordered\">
        <thead>
        <tr class=\"table-dark\">
            <th>Nombre de la tarea</th>
            <th>Observación</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 20
            echo "            <tr>
                <td>
                    ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "
                </td>

                <td>
                    ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "            <tr>
                <td colspan=\"10\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_index");
        echo "\"><i class=\"fas fa-hand-point-left\"> Volver a la lista</i></a>

";
    }

    public function getTemplateName()
    {
        return "project/showObservations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 36,  114 => 34,  105 => 30,  96 => 26,  89 => 22,  85 => 20,  80 => 19,  70 => 11,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project/showObservations.html.twig", "/var/www/project/templates/project/showObservations.html.twig");
    }
}
