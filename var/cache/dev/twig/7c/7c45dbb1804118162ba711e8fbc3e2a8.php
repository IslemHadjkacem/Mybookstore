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

/* cart/index.html.twig */
class __TwigTemplate_d62acaad099fb9f6d4bc83dc35ec5192 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

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

        yield "Mon Panier - MyBookstore";
        
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
        yield "    <h1>Votre Panier</h1>

    ";
        // line 8
        if ((($tmp = (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        <div class=\"row\">
            <div class=\"col-md-9\">
                <table class=\"table align-middle\">
                    <thead>
                        <tr>
                            <th>Livre</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                yield "                            <tr>
                                <td>
                                    <strong>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "livre", [], "any", false, false, false, 25), "titre", [], "any", false, false, false, 25), "html", null, true);
                yield "</strong>
                                </td>
                                <td>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "livre", [], "any", false, false, false, 27), "prix", [], "any", false, false, false, 27), "html", null, true);
                yield " €</td>
                                <td>
                                    <div class=\"input-group input-group-sm\" style=\"width: 100px;\">
                                        <a href=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "livre", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary\">-</a>
                                        <input type=\"text\" class=\"form-control text-center\" value=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 31), "html", null, true);
                yield "\" readonly>
                                        <a href=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "livre", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary\">+</a>
                                    </div>
                                </td>
                                <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "livre", [], "any", false, false, false, 35), "prix", [], "any", false, false, false, 35) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 35)), 2, ",", " "), "html", null, true);
                yield " €</td>
                                <td>
                                    <a href=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "livre", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-danger\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "                    </tbody>
                </table>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Résumé</h5>
                        <hr>
                        <div class=\"d-flex justify-content-between mb-3\">
                            <span>Total</span>
                            <strong class=\"fs-4\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 53, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " €</strong>
                        </div>
                        
                        ";
            // line 56
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ABONNE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_validate");
                yield "\" class=\"btn btn-success btn-lg w-100\">Valider la commande</a>
                        ";
            } else {
                // line 59
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\" class=\"btn btn-primary w-100\">Se connecter pour valider</a>
                        ";
            }
            // line 61
            yield "                        
                        <a href=\"";
            // line 62
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_index");
            yield "\" class=\"btn btn-outline-secondary w-100 mt-2\">Continuer mes achats</a>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 68
            yield "        <div class=\"text-center my-5\">
            <i class=\"fas fa-shopping-basket fa-4x text-muted mb-3\"></i>
            <p class=\"lead\">Votre panier est vide.</p>
            <a href=\"";
            // line 71
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_index");
            yield "\" class=\"btn btn-primary\">Parcourir les livres</a>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cart/index.html.twig";
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
        return array (  220 => 71,  215 => 68,  206 => 62,  203 => 61,  197 => 59,  191 => 57,  189 => 56,  183 => 53,  171 => 43,  159 => 37,  154 => 35,  148 => 32,  144 => 31,  140 => 30,  134 => 27,  129 => 25,  125 => 23,  121 => 22,  106 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Panier - MyBookstore{% endblock %}

{% block body %}
    <h1>Votre Panier</h1>

    {% if items %}
        <div class=\"row\">
            <div class=\"col-md-9\">
                <table class=\"table align-middle\">
                    <thead>
                        <tr>
                            <th>Livre</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in items %}
                            <tr>
                                <td>
                                    <strong>{{ item.livre.titre }}</strong>
                                </td>
                                <td>{{ item.livre.prix }} €</td>
                                <td>
                                    <div class=\"input-group input-group-sm\" style=\"width: 100px;\">
                                        <a href=\"{{ path('app_cart_remove', {id: item.livre.id}) }}\" class=\"btn btn-outline-secondary\">-</a>
                                        <input type=\"text\" class=\"form-control text-center\" value=\"{{ item.quantity }}\" readonly>
                                        <a href=\"{{ path('app_cart_add', {id: item.livre.id}) }}\" class=\"btn btn-outline-secondary\">+</a>
                                    </div>
                                </td>
                                <td>{{ (item.livre.prix * item.quantity)|number_format(2, ',', ' ') }} €</td>
                                <td>
                                    <a href=\"{{ path('app_cart_delete', {id: item.livre.id}) }}\" class=\"btn btn-sm btn-danger\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Résumé</h5>
                        <hr>
                        <div class=\"d-flex justify-content-between mb-3\">
                            <span>Total</span>
                            <strong class=\"fs-4\">{{ total|number_format(2, ',', ' ') }} €</strong>
                        </div>
                        
                        {% if is_granted('ROLE_ABONNE') %}
                            <a href=\"{{ path('app_cart_validate') }}\" class=\"btn btn-success btn-lg w-100\">Valider la commande</a>
                        {% else %}
                            <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary w-100\">Se connecter pour valider</a>
                        {% endif %}
                        
                        <a href=\"{{ path('app_livre_index') }}\" class=\"btn btn-outline-secondary w-100 mt-2\">Continuer mes achats</a>
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"text-center my-5\">
            <i class=\"fas fa-shopping-basket fa-4x text-muted mb-3\"></i>
            <p class=\"lead\">Votre panier est vide.</p>
            <a href=\"{{ path('app_livre_index') }}\" class=\"btn btn-primary\">Parcourir les livres</a>
        </div>
    {% endif %}
{% endblock %}
", "cart/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\2emeGlid\\symfony\\examen\\mybookstore\\templates\\cart\\index.html.twig");
    }
}
