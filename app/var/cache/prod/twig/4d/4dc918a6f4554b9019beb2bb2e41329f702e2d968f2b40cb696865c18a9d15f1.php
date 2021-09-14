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

/* homepage/update.html.twig */
class __TwigTemplate_c0277d2d1102d4d8cd294f4ca2dc95015a495acf3c68d138d3a7bdd50ebdf60a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "homepage/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"container h-100\">
        <div class=\"row h-100 justify-content-center align-items-center\">
            <div class=\"col-9 bg-white rounded my3 p-5\">
                <h1>Observaciones de la tarea</h1>
                ";
        // line 9
        echo twig_include($this->env, $context, "homepage/_form.html.twig", ["button_label" => "Actualizar"]);
        echo "
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"><i class=\"fas fa-hand-point-left\"> volver a la lista</i></a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "homepage/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "homepage/update.html.twig", "/var/www/project/templates/homepage/update.html.twig");
    }
}
