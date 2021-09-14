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

/* movement/new.html.twig */
class __TwigTemplate_45b4180c611b961a515b9b837ecedcec81d669539d8603d86c7ef44b98ff399b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "movement/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nuevo movimiento";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container h-100\">
        <div class=\"row h-100 justify-content-center align-items-center\">
            <div class=\"col-9 bg-white rounded my3 p-5\">
                <h1>Crear nuevo movimiento</h1>

                ";
        // line 11
        echo ($context["message"] ?? null);
        echo "
                <div class=\"alignedToCenter\">
                    <h3>
                        ";
        // line 14
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "materials", [], "any", false, true, false, 14), "name", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "materials", [], "any", false, true, false, 14), "name", [], "any", false, false, false, 14))) : (""))) {
            // line 15
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "materials", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "
                        ";
        }
        // line 17
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "tools", [], "any", false, true, false, 17), "name", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "tools", [], "any", false, true, false, 17), "name", [], "any", false, false, false, 17))) : (""))) {
            // line 18
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "tools", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "
                        ";
        }
        // line 20
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "cables", [], "any", false, true, false, 20), "name", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "cables", [], "any", false, true, false, 20), "name", [], "any", false, false, false, 20))) : (""))) {
            // line 21
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "cables", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "
                        ";
        }
        // line 23
        echo "                    </h3>
                </div>
                ";
        // line 25
        echo twig_include($this->env, $context, "movement/_form.html.twig");
        echo "
                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_list");
        echo "\"><i class=\"fas fa-hand-point-left\"> Volver a la lista</i></a>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "movement/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  101 => 25,  97 => 23,  91 => 21,  88 => 20,  82 => 18,  79 => 17,  73 => 15,  71 => 14,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "movement/new.html.twig", "/var/www/project/templates/movement/new.html.twig");
    }
}
