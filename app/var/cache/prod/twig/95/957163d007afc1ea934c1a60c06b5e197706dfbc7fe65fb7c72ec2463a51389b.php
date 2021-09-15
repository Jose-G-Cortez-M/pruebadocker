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

    // line 118
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 123
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
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
        return array (  295 => 124,  291 => 123,  285 => 118,  278 => 7,  274 => 6,  267 => 5,  260 => 126,  258 => 123,  252 => 119,  250 => 118,  236 => 106,  229 => 102,  222 => 97,  220 => 96,  217 => 95,  212 => 92,  206 => 90,  203 => 89,  197 => 87,  195 => 86,  188 => 81,  186 => 80,  183 => 79,  176 => 75,  172 => 74,  168 => 73,  161 => 68,  159 => 67,  154 => 64,  149 => 61,  144 => 59,  139 => 58,  137 => 57,  133 => 56,  126 => 51,  124 => 50,  120 => 48,  114 => 45,  111 => 44,  109 => 43,  106 => 42,  100 => 39,  94 => 36,  91 => 35,  89 => 34,  83 => 31,  74 => 24,  69 => 21,  53 => 9,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/josegcm/monolithicEquipanelec/templates/base.html.twig");
    }
}
