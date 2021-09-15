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

/* homepage/_updateState_form.html.twig */
class __TwigTemplate_e49c15861efdd1696ab59741fe89d63df2a7478feee8c5588257b625e6514837 extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage_update_state", ["idt" => twig_get_attribute($this->env, $this->source, ($context["taskPerUser"] ?? null), "idt", [], "any", false, false, false, 1), "idp" => twig_get_attribute($this->env, $this->source, ($context["taskPerUser"] ?? null), "idp", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('¿Terminaste tu tarea? No olvides escribir una observación. ');\">
    <button class=\"btn btn-success\" id=\"do\">
        <i class=\"far fa-calendar-check\"> Tarea terminada</i>
    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "homepage/_updateState_form.html.twig";
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
        return new Source("", "homepage/_updateState_form.html.twig", "/home/josegcm/monolithicEquipanelec/templates/homepage/_updateState_form.html.twig");
    }
}
