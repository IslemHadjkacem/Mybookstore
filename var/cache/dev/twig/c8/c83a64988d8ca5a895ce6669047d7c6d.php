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

/* livre/show.html.twig */
class __TwigTemplate_0dde470a3e2b0d4c9a540c50148bf63e extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - MyBookstore";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_index");
        yield "\">Livres</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "</li>
        </ol>
    </nav>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <img src=\"";
        // line 16
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 16, $this->source); })()), "imageCouverture", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/livres/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 16, $this->source); })()), "imageCouverture", [], "any", false, false, false, 16))), "html", null, true)) : ("https://via.placeholder.com/600x800"));
        yield "\" class=\"img-fluid rounded shadow\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        yield "\">
        </div>
        <div class=\"col-md-8\">
            <h1 class=\"display-4\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), "html", null, true);
        yield "</h1>
            <p class=\"lead\">Par <strong>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 20, $this->source); })()), "auteurs", [], "any", false, false, false, 20), ", "), "html", null, true);
        yield "</strong></p>
            
            <div class=\"my-4\">
                <span class=\"badge bg-secondary mb-2\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 23, $this->source); })()), "categorie", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield "</span>
                <p><strong>Éditeur :</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 24, $this->source); })()), "editeur", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
                <p><strong>Date de publication :</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 25, $this->source); })()), "datePublication", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
        yield "</p>
                <p><strong>ISBN :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 26, $this->source); })()), "isbn", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
            </div>

            <div class=\"fs-4 text-primary mb-4\">
                ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 30, $this->source); })()), "prix", [], "any", false, false, false, 30), "html", null, true);
        yield " €
                ";
        // line 31
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 31, $this->source); })()), "stock", [], "any", false, false, false, 31) > 0)) {
            // line 32
            yield "                    <span class=\"badge bg-success ms-2 fs-6\">En stock (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 32, $this->source); })()), "stock", [], "any", false, false, false, 32), "html", null, true);
            yield ")</span>
                ";
        } else {
            // line 34
            yield "                    <span class=\"badge bg-danger ms-2 fs-6\">Rupture de stock</span>
                ";
        }
        // line 36
        yield "            </div>

            <div class=\"mb-4\">
                <h5>Description</h5>
                <p>";
        // line 40
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true));
        yield "</p>
            </div>

            <div class=\"d-grid gap-2 d-md-flex\">
                ";
        // line 44
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ABONNE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 45, $this->source); })()), "stock", [], "any", false, false, false, 45) > 0)) {
                // line 46
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-lg px-5\">Ajouter au panier</a>
                    ";
            } else {
                // line 48
                yield "                        <button class=\"btn btn-secondary btn-lg px-5\" disabled>Indisponible</button>
                    ";
            }
            // line 50
            yield "                ";
        } else {
            // line 51
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-outline-primary btn-lg\">Connectez-vous pour commander</a>
                ";
        }
        // line 53
        yield "
                ";
        // line 54
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setDashboard", ["App\\Controller\\Admin\\DashboardController"], "method", false, false, false, 55), "setController", ["App\\Controller\\Admin\\LivreCrudController"], "method", false, false, false, 55), "setAction", ["edit"], "method", false, false, false, 55), "setEntityId", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)], "method", false, false, false, 55), "html", null, true);
            yield "\" class=\"btn btn-warning btn-lg ms-md-2\">
                        <i class=\"fas fa-edit\"></i> Modifier (Admin)
                    </a>
                ";
        }
        // line 59
        yield "            </div>
        </div>
    </div>
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
        return "livre/show.html.twig";
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
        return array (  225 => 59,  217 => 55,  215 => 54,  212 => 53,  206 => 51,  203 => 50,  199 => 48,  193 => 46,  190 => 45,  188 => 44,  181 => 40,  175 => 36,  171 => 34,  165 => 32,  163 => 31,  159 => 30,  152 => 26,  148 => 25,  144 => 24,  140 => 23,  134 => 20,  130 => 19,  122 => 16,  113 => 10,  109 => 9,  105 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ livre.titre }} - MyBookstore{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_livre_index') }}\">Livres</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ livre.titre }}</li>
        </ol>
    </nav>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <img src=\"{{ livre.imageCouverture ? asset('uploads/images/livres/' ~ livre.imageCouverture) : 'https://via.placeholder.com/600x800' }}\" class=\"img-fluid rounded shadow\" alt=\"{{ livre.titre }}\">
        </div>
        <div class=\"col-md-8\">
            <h1 class=\"display-4\">{{ livre.titre }}</h1>
            <p class=\"lead\">Par <strong>{{ livre.auteurs|join(', ') }}</strong></p>
            
            <div class=\"my-4\">
                <span class=\"badge bg-secondary mb-2\">{{ livre.categorie.nom }}</span>
                <p><strong>Éditeur :</strong> {{ livre.editeur.nom }}</p>
                <p><strong>Date de publication :</strong> {{ livre.datePublication|date('d/m/Y') }}</p>
                <p><strong>ISBN :</strong> {{ livre.isbn }}</p>
            </div>

            <div class=\"fs-4 text-primary mb-4\">
                {{ livre.prix }} €
                {% if livre.stock > 0 %}
                    <span class=\"badge bg-success ms-2 fs-6\">En stock ({{ livre.stock }})</span>
                {% else %}
                    <span class=\"badge bg-danger ms-2 fs-6\">Rupture de stock</span>
                {% endif %}
            </div>

            <div class=\"mb-4\">
                <h5>Description</h5>
                <p>{{ livre.description|nl2br }}</p>
            </div>

            <div class=\"d-grid gap-2 d-md-flex\">
                {% if is_granted('ROLE_ABONNE') %}
                    {% if livre.stock > 0 %}
                        <a href=\"{{ path('app_cart_add', {id: livre.id}) }}\" class=\"btn btn-primary btn-lg px-5\">Ajouter au panier</a>
                    {% else %}
                        <button class=\"btn btn-secondary btn-lg px-5\" disabled>Indisponible</button>
                    {% endif %}
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-primary btn-lg\">Connectez-vous pour commander</a>
                {% endif %}

                {% if is_granted('ROLE_AGENT') %}
                    <a href=\"{{ ea_url().setDashboard('App\\\\Controller\\\\Admin\\\\DashboardController').setController('App\\\\Controller\\\\Admin\\\\LivreCrudController').setAction('edit').setEntityId(livre.id) }}\" class=\"btn btn-warning btn-lg ms-md-2\">
                        <i class=\"fas fa-edit\"></i> Modifier (Admin)
                    </a>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "livre/show.html.twig", "C:\\Users\\Lenovo\\Desktop\\2emeGlid\\symfony\\examen\\mybookstore\\templates\\livre\\show.html.twig");
    }
}
