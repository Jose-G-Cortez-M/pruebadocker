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

/* movement/edit.html.twig */
class __TwigTemplate_30952b9d7824f840cf6fd0d530210b5f9727d041858472aeda810b8d11a3920c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "movement/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Editar movimiento";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"container h-100\">
        <div class=\"row h-100 justify-content-center align-items-center\">
            <div class=\"col-9 bg-white rounded my3 p-5\">
                <h1>Editar movimiento</h1>
                ";
        // line 11
        echo ($context["message"] ?? null);
        echo "
                ";
        // line 12
        echo twig_include($this->env, $context, "movement/_form.html.twig", ["button_label" => "Update"]);
        echo "
                ";
        // line 13
        echo twig_include($this->env, $context, "movement/_delete_form.html.twig");
        echo "
                ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CELLAR")) {
            // line 15
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_list");
            echo "\"><i class=\"fas fa-hand-point-left\"> Volver a la lista</i></a>
                ";
        } else {
            // line 17
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_index");
            echo "\"><i class=\"fas fa-hand-point-left\"> Volver a la lista</i></a>
                ";
        }
        // line 19
        echo "

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "movement/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  85 => 17,  79 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "movement/edit.html.twig", "/home/josegcm/monolithicEquipanelec/templates/movement/edit.html.twig");
    }
}
