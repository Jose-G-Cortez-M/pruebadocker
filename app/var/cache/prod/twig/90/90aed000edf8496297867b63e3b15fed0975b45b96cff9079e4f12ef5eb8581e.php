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

/* movement/_delete_form.html.twig */
class __TwigTemplate_dbdc2fa8726fa9ae305440a9c02a88302865de08aef1527f5555af6823f3b63f extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('¿Seguro que desea devolver todos los artículos al inventario?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "id", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
    <button class=\"btn btn-success\" id=\"do\"><i class=\"fas fa-pallet\"> Regresar al Inventario</i></button>
</form>
";
    }

    public function getTemplateName()
    {
        return "movement/_delete_form.html.twig";
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
        return new Source("", "movement/_delete_form.html.twig", "/var/www/project/templates/movement/_delete_form.html.twig");
    }
}
