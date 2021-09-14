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

/* task/edit.html.twig */
class __TwigTemplate_b7ca182532ace254e3245a6e99af29646b63158a22e356e2cc4cc6c6aed040a0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "task/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Editar tarea";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container h-100\">
        <div class=\"row h-100 justify-content-center align-items-center\">
            <div class=\"col-9 bg-white rounded my3 p-5\">
                <h1>Editar tarea</h1>
                ";
        // line 10
        echo twig_include($this->env, $context, "task/_form.html.twig", ["button_label" => "Update"]);
        echo "
                ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            // line 12
            echo "                    ";
            echo twig_include($this->env, $context, "task/_delete_form.html.twig");
            echo "
                ";
        }
        // line 14
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_index");
        echo "\"><i class=\"fas fa-hand-point-left\"> Volver a la lista</i></a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "task/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  70 => 12,  68 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "task/edit.html.twig", "/var/www/project/templates/task/edit.html.twig");
    }
}
