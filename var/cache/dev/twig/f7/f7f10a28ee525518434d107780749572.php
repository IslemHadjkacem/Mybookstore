<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_4175d10b0011fdbe245d2e6202622b10 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>📚</text></svg>\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 17
        yield "    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                    <i class=\"fas fa-book\"></i> MyBookstore
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_index");
        yield "\">Livres</a>
                        </li>
                        ";
        // line 35
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
            yield "\">Mes Commandes</a>
                            </li>
                        ";
        }
        // line 40
        yield "                    </ul>
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_index");
        yield "\">
                                <i class=\"fas fa-shopping-cart\"></i> Panier
                            </a>
                        </li>
                        ";
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                            ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 50
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                yield "\">
                                        <i class=\"fas fa-cog\"></i> Admin
                                    </a>
                                </li>
                            ";
            }
            // line 55
            yield "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">
                                    <i class=\"fas fa-user\"></i> ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "userIdentifier", [], "any", false, false, false, 57), "html", null, true);
            yield "
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                                </a>
                            </li>
                        ";
        } else {
            // line 66
            yield "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                                    <i class=\"fas fa-sign-in-alt\"></i> Connexion
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
                                    <i class=\"fas fa-user-plus\"></i> Inscription
                                </a>
                            </li>
                        ";
        }
        // line 77
        yield "                    </ul>
                </div>
            </div>
        </nav>

        <main class=\"container my-4\">
            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "flashes", ["success"], "method", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 84
            yield "                <div class=\"alert alert-success alert-dismissible fade show\">
                    ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "            
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "flashes", ["error"], "method", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 91
            yield "                <div class=\"alert alert-danger alert-dismissible fade show\">
                    ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "
            ";
        // line 97
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 98
        yield "        </main>

        <footer class=\"bg-dark text-white mt-5 py-4\">
            <div class=\"container text-center\">
                <p>&copy; 2026 MyBookstore. Tous droits réservés.</p>
            </div>
        </footer>

        ";
        // line 106
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 109
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "MyBookstore";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
            <style>
                /* Sécurité pour éviter les overlays fantômes */
                .modal-backdrop { z-index: -1; display: none; }
                body { min-height: 100vh; display: flex; flex-direction: column; }
                main { flex: 1; }
            </style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        yield "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  339 => 107,  326 => 106,  304 => 97,  285 => 8,  272 => 7,  249 => 5,  236 => 109,  234 => 106,  224 => 98,  222 => 97,  219 => 96,  209 => 92,  206 => 91,  202 => 90,  199 => 89,  189 => 85,  186 => 84,  182 => 83,  174 => 77,  166 => 72,  158 => 67,  155 => 66,  147 => 61,  140 => 57,  136 => 56,  133 => 55,  125 => 50,  122 => 49,  119 => 48,  117 => 47,  110 => 43,  105 => 40,  99 => 37,  96 => 36,  94 => 35,  89 => 33,  83 => 30,  71 => 21,  65 => 17,  63 => 7,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}MyBookstore{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>📚</text></svg>\">
        {% block stylesheets %}
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
            <style>
                /* Sécurité pour éviter les overlays fantômes */
                .modal-backdrop { z-index: -1; display: none; }
                body { min-height: 100vh; display: flex; flex-direction: column; }
                main { flex: 1; }
            </style>
        {% endblock %}
    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
                    <i class=\"fas fa-book\"></i> MyBookstore
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_livre_index') }}\">Livres</a>
                        </li>
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_commande_index') }}\">Mes Commandes</a>
                            </li>
                        {% endif %}
                    </ul>
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_cart_index') }}\">
                                <i class=\"fas fa-shopping-cart\"></i> Panier
                            </a>
                        </li>
                        {% if app.user %}
                            {% if is_granted('ROLE_AGENT') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('admin') }}\">
                                        <i class=\"fas fa-cog\"></i> Admin
                                    </a>
                                </li>
                            {% endif %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_profile') }}\">
                                    <i class=\"fas fa-user\"></i> {{ app.user.userIdentifier }}
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                                    <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_login') }}\">
                                    <i class=\"fas fa-sign-in-alt\"></i> Connexion
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_register') }}\">
                                    <i class=\"fas fa-user-plus\"></i> Inscription
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>

        <main class=\"container my-4\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success alert-dismissible fade show\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            {% endfor %}
            
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger alert-dismissible fade show\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            {% endfor %}

            {% block body %}{% endblock %}
        </main>

        <footer class=\"bg-dark text-white mt-5 py-4\">
            <div class=\"container text-center\">
                <p>&copy; 2026 MyBookstore. Tous droits réservés.</p>
            </div>
        </footer>

        {% block javascripts %}
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Lenovo\\Desktop\\2emeGlid\\symfony\\examen\\mybookstore\\templates\\base.html.twig");
    }
}
