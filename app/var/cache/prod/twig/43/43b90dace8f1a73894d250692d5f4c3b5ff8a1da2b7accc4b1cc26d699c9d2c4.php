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

/* client/edit.html.twig */
class __TwigTemplate_479ed450ec3b14195d7405cbe2ea98fabd3b14dda02b9ea1bbe2c7382acc752c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Editar Cliente";
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
                <h1>Editar Cliente</h1>
                ";
        // line 11
        echo twig_include($this->env, $context, "client/_form.html.twig", ["button_label" => "Update"]);
        echo "
                ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            // line 13
            echo "                    ";
            echo twig_include($this->env, $context, "client/_delete_form.html.twig");
            echo "
                ";
        }
        // line 15
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\"><i class=\"fas fa-hand-point-left\"> Regresar a la lista</i></a></a>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "client/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  71 => 13,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/edit.html.twig", "/var/www/project/templates/client/edit.html.twig");
    }
}
