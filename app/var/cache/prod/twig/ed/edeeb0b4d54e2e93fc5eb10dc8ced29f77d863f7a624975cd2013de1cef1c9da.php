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

/* project/_assignWorker_form.html.twig */
class __TwigTemplate_876622bbd3d98bbc25d6d99daf2e14a524563eeb9b5d7b2b89e79f0eb7aa464c extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_add_project", ["id" => twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\">
    <button class=\"btn btn-success\" id=\"button\">
        <i class=\"fas fa-hammer\"> Trabajadores</i>
    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "project/_assignWorker_form.html.twig";
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
        return new Source("", "project/_assignWorker_form.html.twig", "/home/josegcm/monolithicEquipanelec/templates/project/_assignWorker_form.html.twig");
    }
}
