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

/* home/index.html.twig */
class __TwigTemplate_24c0f5c915a2adadff2080e2bd826187 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Accueil - MyBookstore";
        
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
        yield "    <div class=\"p-5 mb-4 bg-light rounded-3\">
        <div class=\"container-fluid py-5 text-center\">
            <h1 class=\"display-5 fw-bold\">Bienvenue sur MyBookstore</h1>
            <p class=\"col-md-12 fs-4\">Découvrez notre large sélection de livres, des classiques aux dernières nouveautés.</p>
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-primary btn-lg\">Créer un compte</a>
        </div>
    </div>

    <h2 class=\"mb-4\">Dernières nouveautés</h2>
    <div class=\"row row-cols-1 row-cols-md-3 g-4\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 17
            yield "            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    ";
            // line 19
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "imageCouverture", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/livres/" . CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "imageCouverture", [], "any", false, false, false, 20))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 20), "html", null, true);
                yield "\" style=\"height: 300px; object-fit: cover;\">
                    ";
            } else {
                // line 22
                yield "                        <img src=\"https://via.placeholder.com/300x400?text=Pas+d'image\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 22), "html", null, true);
                yield "\" style=\"height: 300px; object-fit: cover;\">
                    ";
            }
            // line 24
            yield "                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 25), "html", null, true);
            yield "</h5>
                        <p class=\"card-text text-truncate\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "description", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"badge bg-success fs-5\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "prix", [], "any", false, false, false, 28), "html", null, true);
            yield " €</span>
                            <div class=\"btn-group\">
                                <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">Détails</a>
                                <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Ajouter</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer text-muted small\">
                        Catégorie: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "categorie", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
            yield "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['livre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "    </div>
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
        return "home/index.html.twig";
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
        return array (  179 => 41,  168 => 36,  160 => 31,  156 => 30,  151 => 28,  146 => 26,  142 => 25,  139 => 24,  133 => 22,  125 => 20,  123 => 19,  119 => 17,  115 => 16,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - MyBookstore{% endblock %}

{% block body %}
    <div class=\"p-5 mb-4 bg-light rounded-3\">
        <div class=\"container-fluid py-5 text-center\">
            <h1 class=\"display-5 fw-bold\">Bienvenue sur MyBookstore</h1>
            <p class=\"col-md-12 fs-4\">Découvrez notre large sélection de livres, des classiques aux dernières nouveautés.</p>
            <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary btn-lg\">Créer un compte</a>
        </div>
    </div>

    <h2 class=\"mb-4\">Dernières nouveautés</h2>
    <div class=\"row row-cols-1 row-cols-md-3 g-4\">
        {% for livre in livres %}
            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    {% if livre.imageCouverture %}
                        <img src=\"{{ asset('uploads/images/livres/' ~ livre.imageCouverture) }}\" class=\"card-img-top\" alt=\"{{ livre.titre }}\" style=\"height: 300px; object-fit: cover;\">
                    {% else %}
                        <img src=\"https://via.placeholder.com/300x400?text=Pas+d'image\" class=\"card-img-top\" alt=\"{{ livre.titre }}\" style=\"height: 300px; object-fit: cover;\">
                    {% endif %}
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ livre.titre }}</h5>
                        <p class=\"card-text text-truncate\">{{ livre.description }}</p>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"badge bg-success fs-5\">{{ livre.prix }} €</span>
                            <div class=\"btn-group\">
                                <a href=\"{{ path('app_livre_show', {id: livre.id}) }}\" class=\"btn btn-sm btn-outline-primary\">Détails</a>
                                <a href=\"{{ path('app_cart_add', {id: livre.id}) }}\" class=\"btn btn-sm btn-primary\">Ajouter</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer text-muted small\">
                        Catégorie: {{ livre.categorie.nom }}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\2emeGlid\\symfony\\examen\\mybookstore\\templates\\home\\index.html.twig");
    }
}
