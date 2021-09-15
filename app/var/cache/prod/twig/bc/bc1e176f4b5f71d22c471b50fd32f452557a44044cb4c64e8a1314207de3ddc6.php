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

/* security/login.html.twig */
class __TwigTemplate_e28b4635834a3d89ead0f66f0a16e087d3d418c679d1b76cb2bf4488fb3467ac extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Iniciar sesión!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"form-signin\">
        <div class=\"card\">
            <div class=\"card-body\">
                <form method=\"post\" class=\"px-4 py-3\">
                    <div class=\"mb-3\">
                        ";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 14
        echo "
                        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "                            <div class=\"mb-3\">
                                Has iniciado sesión como ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17), "username", [], "any", false, false, false, 17), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Cerrar sesión</a>
                            </div>
                        ";
        }
        // line 20
        echo "
                        <img data-src=\"holder.js/300x70?text=EQUIPANELEC&bg=111&fg=fff&size=26\" alt=\"Equipanelec\">

                        <h1 class=\"h3 mb-3 font-weight-normal\">Por favor Inicia sesión</h1>
                        <div class=\"mb-3\">
                            <label for=\"inputEmail\">Correo</label>
                            <input type=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"inputPassword\">Contraseña</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                        >

                        ";
        // line 47
        echo "
                        <button class=\"w-100 bn btn-lg btn-dark\" type=\"submit\">
                            Iniciar sesión
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 47,  108 => 34,  97 => 26,  89 => 20,  81 => 17,  78 => 16,  76 => 15,  73 => 14,  67 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/josegcm/monolithicEquipanelec/templates/security/login.html.twig");
    }
}
