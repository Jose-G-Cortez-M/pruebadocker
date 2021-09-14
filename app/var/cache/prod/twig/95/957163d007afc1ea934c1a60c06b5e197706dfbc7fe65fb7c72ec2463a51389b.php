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
class __TwigTemplate_1c320e9ef24ba3511449bc6865f23bac7c7629543d68fc33f0840c49ef563e90 extends Template
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
        echo "
    </head>


    <body>

    <header>
        <section>
            <div>
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                    <div class=\"container-fluid\">
                        <a class=\"navbar-brand\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                            <i class=\"fas fa-broadcast-tower\"></i>
                            ";
        // line 23
        echo "                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Lista de tareas pendientes</a>
                                </li>

                                ";
        // line 33
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 34
            echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
            echo "\">Clientes</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_index");
            echo "\">Tareas</a>
                                    </li>
                                ";
        }
        // line 41
        echo "
                                ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            // line 43
            echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Empleados</a>
                                    </li>
                                ";
        }
        // line 47
        echo "

                                ";
        // line 49
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COUNTER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 50
            echo "                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Proyectos
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_index");
            echo "\">Proyectos activos </a></li>
                                            ";
            // line 56
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COUNTER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 57
                echo "                                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_close_index");
                echo "\">Proyectos Cerrados </a></li>
                                                <li><a class=\"dropdown-item\" href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("counter");
                echo "\">Contabilidad de la empresa</a></li>
                                            ";
            }
            // line 60
            echo "                                        </ul>
                                    </li>
                                ";
        }
        // line 63
        echo "


                                ";
        // line 66
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CELLAR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 67
            echo "                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Inventario
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
            echo "\">Materiales</a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cable_index");
            echo "\">Cables</a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tool_index");
            echo "\">Herramientas</a></li>
                                        </ul>
                                    </li>
                                ";
        }
        // line 78
        echo "
                                ";
        // line 79
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CELLAR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 80
            echo "                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Movimientos
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            ";
            // line 85
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CELLAR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 86
                echo "                                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_list");
                echo "\">Lista de Movimientos</a></li>
                                            ";
            }
            // line 88
            echo "                                            ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 89
                echo "                                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movement_index");
                echo "\">Movimientos asignados a un proyecto</a></li>
                                            ";
            }
            // line 91
            echo "                                        </ul>
                                    </li>
                                ";
        }
        // line 94
        echo "
                                ";
        // line 95
        if ((((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COUNTER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_WORKERS")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CELLAR")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROJECT_MANAGER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 96
            echo "                                    <li class=\"nav-item align-content-end dropdown\" >
                                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"fas fa-cogs\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fas fa-door-open\"> Cerrar sesión</i></a></li>
                                        </ul>
                                    </li>
                                ";
        }
        // line 105
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
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "            </div>
        </div>
    </div>

    ";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        // line 125
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bienvenidos!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
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
        return array (  292 => 123,  288 => 122,  282 => 117,  275 => 7,  271 => 6,  264 => 5,  257 => 125,  255 => 122,  249 => 118,  247 => 117,  233 => 105,  226 => 101,  219 => 96,  217 => 95,  214 => 94,  209 => 91,  203 => 89,  200 => 88,  194 => 86,  192 => 85,  185 => 80,  183 => 79,  180 => 78,  173 => 74,  169 => 73,  165 => 72,  158 => 67,  156 => 66,  151 => 63,  146 => 60,  141 => 58,  136 => 57,  134 => 56,  130 => 55,  123 => 50,  121 => 49,  117 => 47,  111 => 44,  108 => 43,  106 => 42,  103 => 41,  97 => 38,  91 => 35,  88 => 34,  86 => 33,  80 => 30,  71 => 23,  66 => 20,  53 => 9,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/project/templates/base.html.twig");
    }
}
