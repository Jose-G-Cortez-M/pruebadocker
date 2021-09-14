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

/* tool/edit.html.twig */
class __TwigTemplate_a8ce987934d2d8215f409e8c4511ae6a4815fe7b70a2ab8df41e9bfc62fb6864 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "tool/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edición de herramienta";
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
                <h1>Edición de herramienta</h1>
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tool_index");
        echo "\"><i class=\"fas fa-hand-point-left\"> Volver a la lista</i></a>
                ";
        // line 12
        echo twig_include($this->env, $context, "tool/_form.html.twig", ["button_label" => "Update"]);
        echo "
                ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            // line 14
            echo "                    ";
            echo twig_include($this->env, $context, "tool/_delete_form.html.twig");
            echo "
                ";
        }
        // line 16
        echo "            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "tool/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  75 => 14,  73 => 13,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tool/edit.html.twig", "/var/www/project/templates/tool/edit.html.twig");
    }
}
