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

/* livre/index.html.twig */
class __TwigTemplate_9ad526595ebb15429ce5cb3bba530f05 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/index.html.twig"));

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

        yield "Nos Livres - MyBookstore";
        
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
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"mb-0\">Nos Livres</h1>
        ";
        // line 8
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setDashboard", ["App\\Controller\\Admin\\DashboardController"], "method", false, false, false, 9), "setController", ["App\\Controller\\Admin\\LivreCrudController"], "method", false, false, false, 9), "setAction", ["new"], "method", false, false, false, 9), "html", null, true);
            yield "\" class=\"btn btn-success shadow-sm\">
                <i class=\"fas fa-plus-circle\"></i> Ajouter un Nouveau Livre
            </a>
        ";
        }
        // line 13
        yield "    </div>

    <div class=\"row my-4\">
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Filtres</h5>
                    <form action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_index");
        yield "\" method=\"get\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Recherche</label>
                            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "query", [], "any", false, false, false, 23), "get", ["q"], "method", false, false, false, 23), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Catégorie</label>
                            <select name=\"categorie\" class=\"form-select\">
                                <option value=\"\">Toutes</option>
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 30
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", ["categorie"], "method", false, false, false, 30) == CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 30))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 30), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Éditeur</label>
                            <select name=\"editeur\" class=\"form-select\">
                                <option value=\"\">Tous</option>
                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["editeurs"]) || array_key_exists("editeurs", $context) ? $context["editeurs"] : (function () { throw new RuntimeError('Variable "editeurs" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ed"]) {
            // line 39
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ed"], "id", [], "any", false, false, false, 39), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "query", [], "any", false, false, false, 39), "get", ["editeur"], "method", false, false, false, 39) == CoreExtension::getAttribute($this->env, $this->source, $context["ed"], "id", [], "any", false, false, false, 39))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ed"], "nom", [], "any", false, false, false, 39), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ed'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                            </select>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"col-md-9\">
            <div class=\"row row-cols-1 row-cols-md-3 g-4\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 51
            yield "                    <div class=\"col\">
                        <div class=\"card h-100 shadow-sm\">
                            <img src=\"";
            // line 53
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "imageCouverture", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/livres/" . CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "imageCouverture", [], "any", false, false, false, 53))), "html", null, true)) : ("https://via.placeholder.com/300x400"));
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 53), "html", null, true);
            yield "\" style=\"height: 250px; object-fit: cover;\">
                            <div class=\"card-body\">
                                <h6 class=\"card-title\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 55), "html", null, true);
            yield "</h6>
                                <p class=\"card-text small text-muted\">Par ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "auteurs", [], "any", false, false, false, 56), ", "), "html", null, true);
            yield "</p>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <span class=\"text-primary fw-bold\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "prix", [], "any", false, false, false, 58), "html", null, true);
            yield " €</span>
                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">Voir</a>
                                        ";
            // line 61
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ABONNE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "                                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "stock", [], "any", false, false, false, 62) > 0)) {
                    // line 63
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-primary\"><i class=\"fas fa-cart-plus\"></i></a>
                                            ";
                } else {
                    // line 65
                    yield "                                                <button class=\"btn btn-sm btn-secondary\" disabled>Indisponible</button>
                                            ";
                }
                // line 67
                yield "                                        ";
            } else {
                // line 68
                yield "                                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\" class=\"btn btn-sm btn-outline-primary\">Connectez-vous</a>
                                        ";
            }
            // line 70
            yield "                                        ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setDashboard", ["App\\Controller\\Admin\\DashboardController"], "method", false, false, false, 71), "setController", ["App\\Controller\\Admin\\LivreCrudController"], "method", false, false, false, 71), "setAction", ["edit"], "method", false, false, false, 71), "setEntityId", [CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 71)], "method", false, false, false, 71), "html", null, true);
                yield "\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        ";
            }
            // line 75
            yield "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 80
        if (!$context['_iterated']) {
            // line 81
            yield "                    <div class=\"col-12\">
                        <p class=\"text-center\">Aucun livre ne correspond à votre recherche.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['livre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        return "livre/index.html.twig";
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
        return array (  280 => 85,  271 => 81,  269 => 80,  260 => 75,  252 => 71,  249 => 70,  243 => 68,  240 => 67,  236 => 65,  230 => 63,  227 => 62,  225 => 61,  221 => 60,  216 => 58,  211 => 56,  207 => 55,  200 => 53,  196 => 51,  191 => 50,  180 => 41,  167 => 39,  163 => 38,  155 => 32,  142 => 30,  138 => 29,  129 => 23,  123 => 20,  114 => 13,  106 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos Livres - MyBookstore{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"mb-0\">Nos Livres</h1>
        {% if is_granted('ROLE_AGENT') %}
            <a href=\"{{ ea_url().setDashboard('App\\\\Controller\\\\Admin\\\\DashboardController').setController('App\\\\Controller\\\\Admin\\\\LivreCrudController').setAction('new') }}\" class=\"btn btn-success shadow-sm\">
                <i class=\"fas fa-plus-circle\"></i> Ajouter un Nouveau Livre
            </a>
        {% endif %}
    </div>

    <div class=\"row my-4\">
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Filtres</h5>
                    <form action=\"{{ path('app_livre_index') }}\" method=\"get\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Recherche</label>
                            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"{{ app.request.query.get('q') }}\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Catégorie</label>
                            <select name=\"categorie\" class=\"form-select\">
                                <option value=\"\">Toutes</option>
                                {% for cat in categories %}
                                    <option value=\"{{ cat.id }}\" {{ app.request.query.get('categorie') == cat.id ? 'selected' : '' }}>{{ cat.nom }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Éditeur</label>
                            <select name=\"editeur\" class=\"form-select\">
                                <option value=\"\">Tous</option>
                                {% for ed in editeurs %}
                                    <option value=\"{{ ed.id }}\" {{ app.request.query.get('editeur') == ed.id ? 'selected' : '' }}>{{ ed.nom }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"col-md-9\">
            <div class=\"row row-cols-1 row-cols-md-3 g-4\">
                {% for livre in livres %}
                    <div class=\"col\">
                        <div class=\"card h-100 shadow-sm\">
                            <img src=\"{{ livre.imageCouverture ? asset('uploads/images/livres/' ~ livre.imageCouverture) : 'https://via.placeholder.com/300x400' }}\" class=\"card-img-top\" alt=\"{{ livre.titre }}\" style=\"height: 250px; object-fit: cover;\">
                            <div class=\"card-body\">
                                <h6 class=\"card-title\">{{ livre.titre }}</h6>
                                <p class=\"card-text small text-muted\">Par {{ livre.auteurs|join(', ') }}</p>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <span class=\"text-primary fw-bold\">{{ livre.prix }} €</span>
                                    <div class=\"btn-group\">
                                        <a href=\"{{ path('app_livre_show', {id: livre.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">Voir</a>
                                        {% if is_granted('ROLE_ABONNE') %}
                                            {% if livre.stock > 0 %}
                                                <a href=\"{{ path('app_cart_add', {id: livre.id}) }}\" class=\"btn btn-sm btn-primary\"><i class=\"fas fa-cart-plus\"></i></a>
                                            {% else %}
                                                <button class=\"btn btn-sm btn-secondary\" disabled>Indisponible</button>
                                            {% endif %}
                                        {% else %}
                                            <a href=\"{{ path('app_login') }}\" class=\"btn btn-sm btn-outline-primary\">Connectez-vous</a>
                                        {% endif %}
                                        {% if is_granted('ROLE_AGENT') %}
                                            <a href=\"{{ ea_url().setDashboard('App\\\\Controller\\\\Admin\\\\DashboardController').setController('App\\\\Controller\\\\Admin\\\\LivreCrudController').setAction('edit').setEntityId(livre.id) }}\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-12\">
                        <p class=\"text-center\">Aucun livre ne correspond à votre recherche.</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "livre/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\2emeGlid\\symfony\\examen\\mybookstore\\templates\\livre\\index.html.twig");
    }
}
