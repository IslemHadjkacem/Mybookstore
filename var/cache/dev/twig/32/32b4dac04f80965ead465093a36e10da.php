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

/* admin/dashboard.html.twig */
class __TwigTemplate_e1d53647c5357e0600f90cde2057ce67 extends Template
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
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->load("@EasyAdmin/page/content.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        yield "Dashboard MyBookstore";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm border-primary mb-4\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-plus-circle fa-3x mb-3 text-primary\"></i>
                    <h5 class=\"card-title\">Ajouter un Livre</h5>
                    <p class=\"card-text text-muted\">Créer une nouvelle fiche livre.</p>
                    <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setDashboard", ["App\\Controller\\Admin\\DashboardController"], "method", false, false, false, 13), "setController", ["App\\Controller\\Admin\\LivreCrudController"], "method", false, false, false, 13), "setAction", ["new"], "method", false, false, false, 13), "html", null, true);
        yield "\" class=\"btn btn-primary d-block\">Ajouter Nouveau</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm border-dark mb-4\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-list fa-3x mb-3 text-dark\"></i>
                    <h5 class=\"card-title\">Liste Livres</h5>
                    <p class=\"card-text text-muted\">Voir et modifier les livres existants.</p>
                    <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setDashboard", ["App\\Controller\\Admin\\DashboardController"], "method", false, false, false, 23), "setController", ["App\\Controller\\Admin\\LivreCrudController"], "method", false, false, false, 23), "html", null, true);
        yield "\" class=\"btn btn-dark d-block\">Liste Complète</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm border-info mb-4\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-tags fa-3x mb-3 text-info\"></i>
                    <h5 class=\"card-title\">Catégories</h5>
                    <p class=\"card-text text-muted\">Organisez les genres de livres.</p>
                    <a href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setDashboard", ["App\\Controller\\Admin\\DashboardController"], "method", false, false, false, 33), "setController", ["App\\Controller\\Admin\\CategorieCrudController"], "method", false, false, false, 33), "html", null, true);
        yield "\" class=\"btn btn-info text-white d-block\">Aller aux Catégories</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm border-success mb-4\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-shopping-cart fa-3x mb-3 text-success\"></i>
                    <h5 class=\"card-title\">Commandes</h5>
                    <p class=\"card-text text-muted\">Suivez les achats clients.</p>
                    <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setDashboard", ["App\\Controller\\Admin\\DashboardController"], "method", false, false, false, 43), "setController", ["App\\Controller\\Admin\\CommandeCrudController"], "method", false, false, false, 43), "html", null, true);
        yield "\" class=\"btn btn-success d-block\">Voir Commandes</a>
                </div>
            </div>
        </div>
        ";
        // line 47
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "            <div class=\"col-md-3\">
                <div class=\"card shadow-sm border-danger mb-4\">
                    <div class=\"card-body text-center\">
                        <i class=\"fas fa-users fa-3x mb-3 text-danger\"></i>
                        <h5 class=\"card-title\">Utilisateurs</h5>
                        <p class=\"card-text text-muted\">Gérez les comptes et rôles.</p>
                        <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setDashboard", ["App\\Controller\\Admin\\DashboardController"], "method", false, false, false, 54), "setController", ["App\\Controller\\Admin\\UserCrudController"], "method", false, false, false, 54), "html", null, true);
            yield "\" class=\"btn btn-danger d-block\">Gérer Utilisateurs</a>
                    </div>
                </div>
            </div>
        ";
        }
        // line 59
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
        return "admin/dashboard.html.twig";
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
        return array (  173 => 59,  165 => 54,  157 => 48,  155 => 47,  148 => 43,  135 => 33,  122 => 23,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content_title %}Dashboard MyBookstore{% endblock %}

{% block main %}
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm border-primary mb-4\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-plus-circle fa-3x mb-3 text-primary\"></i>
                    <h5 class=\"card-title\">Ajouter un Livre</h5>
                    <p class=\"card-text text-muted\">Créer une nouvelle fiche livre.</p>
                    <a href=\"{{ ea_url().setDashboard('App\\\\Controller\\\\Admin\\\\DashboardController').setController('App\\\\Controller\\\\Admin\\\\LivreCrudController').setAction('new') }}\" class=\"btn btn-primary d-block\">Ajouter Nouveau</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm border-dark mb-4\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-list fa-3x mb-3 text-dark\"></i>
                    <h5 class=\"card-title\">Liste Livres</h5>
                    <p class=\"card-text text-muted\">Voir et modifier les livres existants.</p>
                    <a href=\"{{ ea_url().setDashboard('App\\\\Controller\\\\Admin\\\\DashboardController').setController('App\\\\Controller\\\\Admin\\\\LivreCrudController') }}\" class=\"btn btn-dark d-block\">Liste Complète</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm border-info mb-4\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-tags fa-3x mb-3 text-info\"></i>
                    <h5 class=\"card-title\">Catégories</h5>
                    <p class=\"card-text text-muted\">Organisez les genres de livres.</p>
                    <a href=\"{{ ea_url().setDashboard('App\\\\Controller\\\\Admin\\\\DashboardController').setController('App\\\\Controller\\\\Admin\\\\CategorieCrudController') }}\" class=\"btn btn-info text-white d-block\">Aller aux Catégories</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm border-success mb-4\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-shopping-cart fa-3x mb-3 text-success\"></i>
                    <h5 class=\"card-title\">Commandes</h5>
                    <p class=\"card-text text-muted\">Suivez les achats clients.</p>
                    <a href=\"{{ ea_url().setDashboard('App\\\\Controller\\\\Admin\\\\DashboardController').setController('App\\\\Controller\\\\Admin\\\\CommandeCrudController') }}\" class=\"btn btn-success d-block\">Voir Commandes</a>
                </div>
            </div>
        </div>
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"col-md-3\">
                <div class=\"card shadow-sm border-danger mb-4\">
                    <div class=\"card-body text-center\">
                        <i class=\"fas fa-users fa-3x mb-3 text-danger\"></i>
                        <h5 class=\"card-title\">Utilisateurs</h5>
                        <p class=\"card-text text-muted\">Gérez les comptes et rôles.</p>
                        <a href=\"{{ ea_url().setDashboard('App\\\\Controller\\\\Admin\\\\DashboardController').setController('App\\\\Controller\\\\Admin\\\\UserCrudController') }}\" class=\"btn btn-danger d-block\">Gérer Utilisateurs</a>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock %}
", "admin/dashboard.html.twig", "C:\\Users\\Lenovo\\Desktop\\2emeGlid\\symfony\\examen\\mybookstore\\templates\\admin\\dashboard.html.twig");
    }
}
