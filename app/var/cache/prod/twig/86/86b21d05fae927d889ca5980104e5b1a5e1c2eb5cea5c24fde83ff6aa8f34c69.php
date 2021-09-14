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

/* project/_finishProject_form.html.twig */
class __TwigTemplate_8e282d2eed648f0520509bda9687f8fdb0bc75dc6944e167ba9c356290290646 extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_finish", ["idP" => twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm(' ¿Estás seguro de que desea terminar el proyecto? Cuando esté terminado, no podrá verlo en su lista de proyectos.')\">
    <button class=\"btn btn-danger\" id=\"button\">
        <i class=\"fas fa-paperclip\"> Terminar proyecto</i>
    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "project/_finishProject_form.html.twig";
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
        return new Source("", "project/_finishProject_form.html.twig", "/var/www/project/templates/project/_finishProject_form.html.twig");
    }
}
