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

/* profile/index.html.twig */
class __TwigTemplate_ea28027e6b63ba82210679847490d22d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

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

        yield "Mon Profil - MyBookstore";
        
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
        yield "    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Informations personnelles</h5>
                    <hr>
                    ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
                        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 13, $this->source); })()), 'widget');
        yield "
                        <button type=\"submit\" class=\"btn btn-primary w-100 mt-3\">Mettre à jour</button>
                    ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 15, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
        <div class=\"col-md-8\">
            <h3>Historique de mes commandes</h3>
            <div class=\"table-responsive\">
                <table class=\"table table-striped align-middle\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Montant</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 33
            yield "                            <tr>
                                <td>#";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateCommande", [], "any", false, false, false, 35), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montantTotal", [], "any", false, false, false, 36), "html", null, true);
            yield " €</td>
                                <td>
                                    <span class=\"badge ";
            // line 38
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 38) == "Validée")) ? ("bg-success") : ("bg-warning"));
            yield "\">
                                        ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 39), "html", null, true);
            yield "
                                    </span>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 43
        if (!$context['_iterated']) {
            // line 44
            yield "                            <tr>
                                <td colspan=\"4\" class=\"text-center\">Vous n'avez pas encore passé de commande.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                    </tbody>
                </table>
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
        return "profile/index.html.twig";
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
        return array (  182 => 48,  173 => 44,  171 => 43,  162 => 39,  158 => 38,  153 => 36,  149 => 35,  145 => 34,  142 => 33,  137 => 32,  117 => 15,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Profil - MyBookstore{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Informations personnelles</h5>
                    <hr>
                    {{ form_start(profileForm) }}
                        {{ form_widget(profileForm) }}
                        <button type=\"submit\" class=\"btn btn-primary w-100 mt-3\">Mettre à jour</button>
                    {{ form_end(profileForm) }}
                </div>
            </div>
        </div>
        <div class=\"col-md-8\">
            <h3>Historique de mes commandes</h3>
            <div class=\"table-responsive\">
                <table class=\"table table-striped align-middle\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Montant</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for commande in commandes %}
                            <tr>
                                <td>#{{ commande.id }}</td>
                                <td>{{ commande.dateCommande|date('d/m/Y H:i') }}</td>
                                <td>{{ commande.montantTotal }} €</td>
                                <td>
                                    <span class=\"badge {{ commande.statut == 'Validée' ? 'bg-success' : 'bg-warning' }}\">
                                        {{ commande.statut }}
                                    </span>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\" class=\"text-center\">Vous n'avez pas encore passé de commande.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "profile/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\2emeGlid\\symfony\\examen\\mybookstore\\templates\\profile\\index.html.twig");
    }
}
