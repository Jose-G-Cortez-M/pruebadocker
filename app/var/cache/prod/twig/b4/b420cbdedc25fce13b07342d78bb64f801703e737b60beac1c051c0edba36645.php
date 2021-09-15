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

/* tool/_movement_form.html.twig */
class __TwigTemplate_bfdea9b4eded8102c3905b24ecf91674b5d114a606c7757ec3c5b613cd7e3bac extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_new_tool", ["id" => twig_get_attribute($this->env, $this->source, ($context["tool"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\">
    <button class=\"btn btn-success\" id=\"mov\"><i class=\"fas fa-dolly-flatbed\"> Movimiento</i></button>
</form>";
    }

    public function getTemplateName()
    {
        return "tool/_movement_form.html.twig";
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
        return new Source("", "tool/_movement_form.html.twig", "/home/josegcm/monolithicEquipanelec/templates/tool/_movement_form.html.twig");
    }
}
