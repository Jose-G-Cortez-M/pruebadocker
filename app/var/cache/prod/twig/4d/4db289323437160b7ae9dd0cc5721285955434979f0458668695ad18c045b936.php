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

/* homepage/_updateDescription_form.html.twig */
class __TwigTemplate_e6838c5b923071b1b480300ffcb4f79523b94b9afd61c9cfb9597f5524e2729c extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage_update", ["idt" => twig_get_attribute($this->env, $this->source, ($context["taskPerUser"] ?? null), "idt", [], "any", false, false, false, 1), "idp" => twig_get_attribute($this->env, $this->source, ($context["taskPerUser"] ?? null), "idp", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\">
    <button class=\"btn btn-success\" id=\"do\"><i class=\"fas fa-pen-alt\"> Escribe una observación</i></button>
</form>
";
    }

    public function getTemplateName()
    {
        return "homepage/_updateDescription_form.html.twig";
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
        return new Source("", "homepage/_updateDescription_form.html.twig", "/var/www/project/templates/homepage/_updateDescription_form.html.twig");
    }
}
