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

/* commande/show.html.twig */
class __TwigTemplate_61acd7c30cd6f2b9016495fffb3f9106 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

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

        yield "Commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
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
        yield "    <div class=\"container\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
        yield "\">Mes Commandes</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</li>
            </ol>
        </nav>

        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-sm mb-4\">
                    <div class=\"card-header bg-dark text-white\">
                        <h5 class=\"mb-0\">Articles de la commande #";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        yield "</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table align-middle\">
                                <thead>
                                    <tr>
                                        <th>Livre</th>
                                        <th class=\"text-center\">Prix Unitaire</th>
                                        <th class=\"text-center\">Quantité</th>
                                        <th class=\"text-end\">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 33, $this->source); })()), "ligneCommandes", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 34
            yield "                                        <tr>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    ";
            // line 37
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "livre", [], "any", false, false, false, 37), "imageCouverture", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "                                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/livres/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "livre", [], "any", false, false, false, 38), "imageCouverture", [], "any", false, false, false, 38))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "livre", [], "any", false, false, false, 38), "titre", [], "any", false, false, false, 38), "html", null, true);
                yield "\" style=\"width: 50px; height: 70px; object-fit: cover; margin-right: 15px;\" class=\"rounded shadow-sm\">
                                                    ";
            }
            // line 40
            yield "                                                    <div>
                                                        <h6 class=\"mb-0\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "livre", [], "any", false, false, false, 41), "titre", [], "any", false, false, false, 41), "html", null, true);
            yield "</h6>
                                                        <small class=\"text-muted\">Par ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "livre", [], "any", false, false, false, 42), "auteurs", [], "any", false, false, false, 42), ", "), "html", null, true);
            yield "</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"text-center\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prixUnitaire", [], "any", false, false, false, 46), "html", null, true);
            yield " €</td>
                                            <td class=\"text-center\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                                            <td class=\"text-end fw-bold\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prixUnitaire", [], "any", false, false, false, 48) * CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 48)), "html", null, true);
            yield " €</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=\"3\" class=\"text-end\"><strong>Total de la commande :</strong></td>
                                        <td class=\"text-end text-primary fs-5 fw-bold\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 55, $this->source); })()), "montantTotal", [], "any", false, false, false, 55), "html", null, true);
        yield " €</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card shadow-sm mb-4\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"mb-0\">Informations Livraison</h5>
                    </div>
                    <div class=\"card-body\">
                        <p><strong>Destinataire :</strong> ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "prenom", [], "any", false, false, false, 69), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "nom", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
                        <p><strong>Adresse :</strong><br>";
        // line 70
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "adresse", [], "any", false, false, false, 70)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "adresse", [], "any", false, false, false, 70), "html", null, true)) : ("Non renseignée"));
        yield "</p>
                        <p><strong>Téléphone :</strong> ";
        // line 71
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "telephone", [], "any", false, false, false, 71)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "telephone", [], "any", false, false, false, 71), "html", null, true)) : ("Non renseigné"));
        yield "</p>
                        <hr>
                        <p><strong>Date de commande :</strong> ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 73, $this->source); })()), "dateCommande", [], "any", false, false, false, 73), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                        <p><strong>Statut :</strong> 
                            <span class=\"badge ";
        // line 75
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 75, $this->source); })()), "statut", [], "any", false, false, false, 75) == "Validée")) ? ("bg-success") : ("bg-warning"));
        yield "\">
                                ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 76, $this->source); })()), "statut", [], "any", false, false, false, 76), "html", null, true);
        yield "
                            </span>
                        </p>
                    </div>
                </div>
                <div class=\"d-grid\">
                    <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Retour à mes commandes
                    </a>
                </div>
            </div>
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
        return "commande/show.html.twig";
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
        return array (  249 => 82,  240 => 76,  236 => 75,  231 => 73,  226 => 71,  222 => 70,  216 => 69,  199 => 55,  193 => 51,  184 => 48,  180 => 47,  176 => 46,  169 => 42,  165 => 41,  162 => 40,  154 => 38,  152 => 37,  147 => 34,  143 => 33,  126 => 19,  115 => 11,  111 => 10,  107 => 9,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commande #{{ commande.id }} - MyBookstore{% endblock %}

{% block body %}
    <div class=\"container\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_commande_index') }}\">Mes Commandes</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails #{{ commande.id }}</li>
            </ol>
        </nav>

        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-sm mb-4\">
                    <div class=\"card-header bg-dark text-white\">
                        <h5 class=\"mb-0\">Articles de la commande #{{ commande.id }}</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table align-middle\">
                                <thead>
                                    <tr>
                                        <th>Livre</th>
                                        <th class=\"text-center\">Prix Unitaire</th>
                                        <th class=\"text-center\">Quantité</th>
                                        <th class=\"text-end\">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for ligne in commande.ligneCommandes %}
                                        <tr>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    {% if ligne.livre.imageCouverture %}
                                                        <img src=\"{{ asset('uploads/images/livres/' ~ ligne.livre.imageCouverture) }}\" alt=\"{{ ligne.livre.titre }}\" style=\"width: 50px; height: 70px; object-fit: cover; margin-right: 15px;\" class=\"rounded shadow-sm\">
                                                    {% endif %}
                                                    <div>
                                                        <h6 class=\"mb-0\">{{ ligne.livre.titre }}</h6>
                                                        <small class=\"text-muted\">Par {{ ligne.livre.auteurs|join(', ') }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"text-center\">{{ ligne.prixUnitaire }} €</td>
                                            <td class=\"text-center\">{{ ligne.quantite }}</td>
                                            <td class=\"text-end fw-bold\">{{ ligne.prixUnitaire * ligne.quantite }} €</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=\"3\" class=\"text-end\"><strong>Total de la commande :</strong></td>
                                        <td class=\"text-end text-primary fs-5 fw-bold\">{{ commande.montantTotal }} €</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card shadow-sm mb-4\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"mb-0\">Informations Livraison</h5>
                    </div>
                    <div class=\"card-body\">
                        <p><strong>Destinataire :</strong> {{ commande.user.prenom }} {{ commande.user.nom }}</p>
                        <p><strong>Adresse :</strong><br>{{ commande.user.adresse ?: 'Non renseignée' }}</p>
                        <p><strong>Téléphone :</strong> {{ commande.user.telephone ?: 'Non renseigné' }}</p>
                        <hr>
                        <p><strong>Date de commande :</strong> {{ commande.dateCommande|date('d/m/Y H:i') }}</p>
                        <p><strong>Statut :</strong> 
                            <span class=\"badge {{ commande.statut == 'Validée' ? 'bg-success' : 'bg-warning' }}\">
                                {{ commande.statut }}
                            </span>
                        </p>
                    </div>
                </div>
                <div class=\"d-grid\">
                    <a href=\"{{ path('app_commande_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Retour à mes commandes
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "commande/show.html.twig", "C:\\Users\\Lenovo\\Desktop\\2emeGlid\\symfony\\examen\\mybookstore\\templates\\commande\\show.html.twig");
    }
}
