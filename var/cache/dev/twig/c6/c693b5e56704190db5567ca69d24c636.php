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

/* commande/index.html.twig */
class __TwigTemplate_ca76bd0e9460cf2312c26789d887e71f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

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

        yield "Mes Commandes - MyBookstore";
        
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
        <h1 class=\"mb-4\"><i class=\"fas fa-box\"></i> Mes Commandes</h1>

        <div class=\"table-responsive shadow-sm rounded\">
            <table class=\"table table-hover align-middle bg-white\">
                <thead class=\"table-dark\">
                    <tr>
                        <th>Référence</th>
                        <th>Date</th>
                        <th>Articles</th>
                        <th>Montant Total</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 23
            yield "                        <tr>
                            <td class=\"fw-bold\">#";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                            <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateCommande", [], "any", false, false, false, 25), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                            <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "ligneCommandes", [], "any", false, false, false, 26)), "html", null, true);
            yield " article(s)</td>
                            <td class=\"text-primary fw-bold\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montantTotal", [], "any", false, false, false, 27), "html", null, true);
            yield " €</td>
                            <td>
                                <span class=\"badge ";
            // line 29
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 29) == "Validée")) ? ("bg-success") : ("bg-warning"));
            yield "\">
                                    ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 30), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"fas fa-eye\"></i> Détails
                                </a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 39
        if (!$context['_iterated']) {
            // line 40
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center py-4\">
                                <p class=\"text-muted mb-0\">Vous n'avez pas encore passé de commande.</p>
                                <a href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_index");
            yield "\" class=\"btn btn-primary mt-3\">Commencer mes achats</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                </tbody>
            </table>
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
        return "commande/index.html.twig";
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
        return array (  181 => 47,  171 => 43,  166 => 40,  164 => 39,  154 => 34,  147 => 30,  143 => 29,  138 => 27,  134 => 26,  130 => 25,  126 => 24,  123 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Commandes - MyBookstore{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"mb-4\"><i class=\"fas fa-box\"></i> Mes Commandes</h1>

        <div class=\"table-responsive shadow-sm rounded\">
            <table class=\"table table-hover align-middle bg-white\">
                <thead class=\"table-dark\">
                    <tr>
                        <th>Référence</th>
                        <th>Date</th>
                        <th>Articles</th>
                        <th>Montant Total</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for commande in commandes %}
                        <tr>
                            <td class=\"fw-bold\">#{{ commande.id }}</td>
                            <td>{{ commande.dateCommande|date('d/m/Y H:i') }}</td>
                            <td>{{ commande.ligneCommandes|length }} article(s)</td>
                            <td class=\"text-primary fw-bold\">{{ commande.montantTotal }} €</td>
                            <td>
                                <span class=\"badge {{ commande.statut == 'Validée' ? 'bg-success' : 'bg-warning' }}\">
                                    {{ commande.statut }}
                                </span>
                            </td>
                            <td>
                                <a href=\"{{ path('app_commande_show', {id: commande.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"fas fa-eye\"></i> Détails
                                </a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center py-4\">
                                <p class=\"text-muted mb-0\">Vous n'avez pas encore passé de commande.</p>
                                <a href=\"{{ path('app_livre_index') }}\" class=\"btn btn-primary mt-3\">Commencer mes achats</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "commande/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\2emeGlid\\symfony\\examen\\mybookstore\\templates\\commande\\index.html.twig");
    }
}
