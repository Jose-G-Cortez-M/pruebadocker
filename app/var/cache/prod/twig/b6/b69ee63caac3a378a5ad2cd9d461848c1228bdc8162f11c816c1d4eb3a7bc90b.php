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

/* client/_delete_form.html.twig */
class __TwigTemplate_79e50c44905cae8f8ea345d2f9fdd8ba34d92f304b919cc2d287b140af401aef extends Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('¿Está seguro de eliminar este cliente? perderá los proyectos asociados a él, que no están cerrados');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
    <button class=\"btn btn-danger\" id=\"button\"><i class=\"fas fa-trash-alt\"></i></button>
</form>
";
    }

    public function getTemplateName()
    {
        return "client/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/_delete_form.html.twig", "/var/www/project/templates/client/_delete_form.html.twig");
    }
}
