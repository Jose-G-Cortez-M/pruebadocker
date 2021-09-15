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

/* base.html.twig */
class __TwigTemplate_72ca92c77c38a19e89345ab013f43068a90e658808b0039e41a80e1f9d0b0bb8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/favicon.ico"), "html", null, true);
        echo "\">

    </head>


    <body>

    <header>
        <section>
            <div>
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                    <div class=\"container-fluid\">
                        <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                            <i class=\"fas fa-broadcast-tower\"></i>
                            ";
        // line 24
        echo "                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Lista de tareas pendientes</a>
                                </li>

                                ";
        // line 34
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 35
            echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
            echo "\">Clientes</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_index");
            echo "\">Tareas</a>
                                    </li>
                                ";
        }
        // line 42
        echo "
                                ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            // line 44
            echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Empleados</a>
                                    </li>
                                ";
        }
        // line 48
        echo "

                                ";
        // line 50
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COUNTER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 51
            echo "                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Proyectos
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_index");
            echo "\">Proyectos activos </a></li>
                                            ";
            // line 57
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COUNTER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 58
                echo "                                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_close_index");
                echo "\">Proyectos Cerrados </a></li>
                                                <li><a class=\"dropdown-item\" href=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("counter");
                echo "\">Contabilidad de la empresa</a></li>
                                            ";
            }
            // line 61
            echo "                                        </ul>
                                    </li>
                                ";
        }
        // line 64
        echo "


                                ";
        // line 67
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CELLAR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 68
            echo "                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Inventario
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
            echo "\">Materiales</a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cable_index");
            echo "\">Cables</a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tool_index");
            echo "\">Herramientas</a></li>
                                        </ul>
                                    </li>
                                ";
        }
        // line 79
        echo "
                                ";
        // line 80
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CELLAR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 81
            echo "                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Movimientos
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            ";
            // line 86
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CELLAR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 87
                echo "                                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_list");
                echo "\">Lista de Movimientos</a></li>
                                            ";
            }
            // line 89
            echo "                                            ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 90
                echo "                                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_index");
                echo "\">Movimientos asignados a un proyecto</a></li>
                                            ";
            }
            // line 92
            echo "                                        </ul>
                                    </li>
                                ";
        }
        // line 95
        echo "
                                ";
        // line 96
        if ((((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COUNTER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_WORKERS")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CELLAR")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 97
            echo "                                    <li class=\"nav-item align-content-end dropdown\" >
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"fas fa-cogs\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fas fa-door-open\"> Cerrar sesión</i></a></li>
                                        </ul>
                                    </li>
                                ";
        }
        // line 106
        echo "                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
    </header>


    <div class=\"container\">
        <div class=\"table-responsive\">
            <div class=\"col-12\">
                ";
        // line 118
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "            </div>
        </div>
    </div>

    ";
        // line 123
        $this->displayBlock('javascripts', $context, $blocks);
        // line 126
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenidos!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 124,  339 => 123,  321 => 118,  308 => 7,  298 => 6,  279 => 5,  266 => 126,  264 => 123,  258 => 119,  256 => 118,  242 => 106,  235 => 102,  228 => 97,  226 => 96,  223 => 95,  218 => 92,  212 => 90,  209 => 89,  203 => 87,  201 => 86,  194 => 81,  192 => 80,  189 => 79,  182 => 75,  178 => 74,  174 => 73,  167 => 68,  165 => 67,  160 => 64,  155 => 61,  150 => 59,  145 => 58,  143 => 57,  139 => 56,  132 => 51,  130 => 50,  126 => 48,  120 => 45,  117 => 44,  115 => 43,  112 => 42,  106 => 39,  100 => 36,  97 => 35,  95 => 34,  89 => 31,  80 => 24,  75 => 21,  59 => 9,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Bienvenidos!{% endblock %}</title>
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
        <link rel=\"icon\" href=\"{{ asset('public/favicon.ico') }}\">

    </head>


    <body>

    <header>
        <section>
            <div>
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                    <div class=\"container-fluid\">
                        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                            <i class=\"fas fa-broadcast-tower\"></i>
                            {# <img src=\"{{ asset('images/products/img.png') }}\" alt=\"Equipanelec\" height=\"70\"> #}
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('homepage') }}\">Lista de tareas pendientes</a>
                                </li>

                                {% if is_granted(\"ROLE_PROJECT_MANAGER\") or is_granted(\"ROLE_MANAGER\") %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ path('client_index') }}\">Clientes</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ path('task_index') }}\">Tareas</a>
                                    </li>
                                {% endif %}

                                {% if is_granted(\"ROLE_MANAGER\") %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ path('user_index') }}\">Empleados</a>
                                    </li>
                                {% endif %}


                                {% if is_granted(\"ROLE_COUNTER\") or is_granted(\"ROLE_PROJECT_MANAGER\") or is_granted(\"ROLE_MANAGER\") %}
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Proyectos
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"{{ path('project_index') }}\">Proyectos activos </a></li>
                                            {% if is_granted(\"ROLE_COUNTER\") or is_granted(\"ROLE_MANAGER\") %}
                                                <li><a class=\"dropdown-item\" href=\"{{ path('project_close_index') }}\">Proyectos Cerrados </a></li>
                                                <li><a class=\"dropdown-item\" href=\"{{ path('counter') }}\">Contabilidad de la empresa</a></li>
                                            {% endif %}
                                        </ul>
                                    </li>
                                {% endif %}



                                {% if is_granted(\"ROLE_CELLAR\") or is_granted(\"ROLE_MANAGER\") %}
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Inventario
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"{{ path('material_index') }}\">Materiales</a></li>
                                            <li><a class=\"dropdown-item\" href=\"{{ path('cable_index') }}\">Cables</a></li>
                                            <li><a class=\"dropdown-item\" href=\"{{ path('tool_index') }}\">Herramientas</a></li>
                                        </ul>
                                    </li>
                                {% endif %}

                                {% if is_granted(\"ROLE_CELLAR\") or is_granted(\"ROLE_PROJECT_MANAGER\") or is_granted(\"ROLE_MANAGER\") %}
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Movimientos
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            {% if is_granted(\"ROLE_CELLAR\") or is_granted(\"ROLE_MANAGER\") %}
                                                <li><a class=\"dropdown-item\" href=\"{{ path('movement_list') }}\">Lista de Movimientos</a></li>
                                            {% endif %}
                                            {% if is_granted(\"ROLE_PROJECT_MANAGER\") or is_granted(\"ROLE_MANAGER\") %}
                                                <li><a class=\"dropdown-item\" href=\"{{ path('movement_index') }}\">Movimientos asignados a un proyecto</a></li>
                                            {% endif %}
                                        </ul>
                                    </li>
                                {% endif %}

                                {% if is_granted(\"ROLE_COUNTER\") or is_granted(\"ROLE_WORKERS\") or is_granted(\"ROLE_CELLAR\") or is_granted(\"ROLE_PROJECT_MANAGER\") or is_granted(\"ROLE_MANAGER\") %}
                                    <li class=\"nav-item align-content-end dropdown\" >
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"fas fa-cogs\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"><i class=\"fas fa-door-open\"> Cerrar sesión</i></a></li>
                                        </ul>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
    </header>


    <div class=\"container\">
        <div class=\"table-responsive\">
            <div class=\"col-12\">
                {% block body %}{% endblock %}
            </div>
        </div>
    </div>

    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}

    </body>
</html>
", "base.html.twig", "/home/josegcm/monolithicEquipanelec/templates/base.html.twig");
    }
}
