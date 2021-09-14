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
class __TwigTemplate_3e72e710f3b09d66ba94e31e974c34361e1c21538883030d6a229c5d9ea6c60a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movement/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movement/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "movement/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nuevo movimiento";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container h-100\">
        <div class=\"row h-100 justify-content-center align-items-center\">
            <div class=\"col-9 bg-white rounded my3 p-5\">
                <h1>Crear nuevo movimiento</h1>

                ";
        // line 11
        echo (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 11, $this->source); })());
        echo "
                <div class=\"alignedToCenter\">
                    <h3>
                        ";
        // line 14
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "materials", [], "any", false, true, false, 14), "name", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "materials", [], "any", false, true, false, 14), "name", [], "any", false, false, false, 14))) : (""))) {
            // line 15
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 15, $this->source); })()), "materials", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "
                        ";
        }
        // line 17
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "tools", [], "any", false, true, false, 17), "name", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "tools", [], "any", false, true, false, 17), "name", [], "any", false, false, false, 17))) : (""))) {
            // line 18
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 18, $this->source); })()), "tools", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "
                        ";
        }
        // line 20
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "cables", [], "any", false, true, false, 20), "name", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movement"] ?? null), "cables", [], "any", false, true, false, 20), "name", [], "any", false, false, false, 20))) : (""))) {
            // line 21
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 21, $this->source); })()), "cables", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  135 => 26,  131 => 25,  127 => 23,  121 => 21,  118 => 20,  112 => 18,  109 => 17,  103 => 15,  101 => 14,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nuevo movimiento{% endblock %}

{% block body %}
    <div class=\"container h-100\">
        <div class=\"row h-100 justify-content-center align-items-center\">
            <div class=\"col-9 bg-white rounded my3 p-5\">
                <h1>Crear nuevo movimiento</h1>

                {{ message |raw}}
                <div class=\"alignedToCenter\">
                    <h3>
                        {% if movement.materials.name |default  %}
                            {{ movement.materials.name }}
                        {% endif %}
                        {% if movement.tools.name |default  %}
                            {{ movement.tools.name }}
                        {% endif %}
                        {% if movement.cables.name |default  %}
                            {{ movement.cables.name }}
                        {% endif %}
                    </h3>
                </div>
                {{ include('movement/_form.html.twig') }}
                <a href=\"{{ path('movement_list') }}\"><i class=\"fas fa-hand-point-left\"> Volver a la lista</i></a>
            </div>
        </div>
    </div>

{% endblock %}
", "movement/new.html.twig", "/var/www/project/templates/movement/new.html.twig");
    }
}
