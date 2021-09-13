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
class __TwigTemplate_fb35c52a8ceae092ff115193b3eb1d32a74939d6eb2fdb564a27b986bf21cb10 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/_updateDescription_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/_updateDescription_form.html.twig"));

        // line 1
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage_update", ["idt" => twig_get_attribute($this->env, $this->source, (isset($context["taskPerUser"]) || array_key_exists("taskPerUser", $context) ? $context["taskPerUser"] : (function () { throw new RuntimeError('Variable "taskPerUser" does not exist.', 1, $this->source); })()), "idt", [], "any", false, false, false, 1), "idp" => twig_get_attribute($this->env, $this->source, (isset($context["taskPerUser"]) || array_key_exists("taskPerUser", $context) ? $context["taskPerUser"] : (function () { throw new RuntimeError('Variable "taskPerUser" does not exist.', 1, $this->source); })()), "idp", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\">
    <button class=\"btn btn-success\" id=\"do\"><i class=\"fas fa-pen-alt\"> Escribe una observación</i></button>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"get\" action=\"{{ path('homepage_update', {'idt': taskPerUser.idt,'idp': taskPerUser.idp}) }}\">
    <button class=\"btn btn-success\" id=\"do\"><i class=\"fas fa-pen-alt\"> Escribe una observación</i></button>
</form>
", "homepage/_updateDescription_form.html.twig", "/home/josegcm/Descargas/monolithicEquipanelec/templates/homepage/_updateDescription_form.html.twig");
    }
}
