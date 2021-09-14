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

/* material/_movement_form.html.twig */
class __TwigTemplate_ae460524ad6aefd02e10e4e769bef064038cfa1b3fe13d1a6cb66d62cbacb35f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_new_material", ["id" => twig_get_attribute($this->env, $this->source, ($context["material"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\">
    <button class=\"btn btn-success\" id=\"mov\"><i class=\"fas fa-dolly-flatbed\"> Movimientos</i></button>
</form>";
    }

    public function getTemplateName()
    {
        return "material/_movement_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "material/_movement_form.html.twig", "/var/www/project/templates/material/_movement_form.html.twig");
    }
}
