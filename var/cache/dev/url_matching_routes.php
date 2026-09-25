<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/auteur' => [[['_route' => 'admin_auteur_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AuteurCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AuteurCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/auteur/new' => [[['_route' => 'admin_auteur_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AuteurCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AuteurCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/auteur/batch-delete' => [[['_route' => 'admin_auteur_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AuteurCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AuteurCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/auteur/autocomplete' => [[['_route' => 'admin_auteur_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AuteurCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AuteurCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/auteur/render-filters' => [[['_route' => 'admin_auteur_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AuteurCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AuteurCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categorie' => [[['_route' => 'admin_categorie_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categorie/new' => [[['_route' => 'admin_categorie_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categorie/batch-delete' => [[['_route' => 'admin_categorie_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/categorie/autocomplete' => [[['_route' => 'admin_categorie_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categorie/render-filters' => [[['_route' => 'admin_categorie_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/commande' => [[['_route' => 'admin_commande_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommandeCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommandeCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/commande/new' => [[['_route' => 'admin_commande_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommandeCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommandeCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/commande/batch-delete' => [[['_route' => 'admin_commande_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommandeCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommandeCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/commande/autocomplete' => [[['_route' => 'admin_commande_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommandeCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommandeCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/commande/render-filters' => [[['_route' => 'admin_commande_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommandeCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommandeCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/editeur' => [[['_route' => 'admin_editeur_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EditeurCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EditeurCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/editeur/new' => [[['_route' => 'admin_editeur_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EditeurCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EditeurCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/editeur/batch-delete' => [[['_route' => 'admin_editeur_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EditeurCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EditeurCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/editeur/autocomplete' => [[['_route' => 'admin_editeur_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EditeurCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EditeurCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/editeur/render-filters' => [[['_route' => 'admin_editeur_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EditeurCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EditeurCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/livre' => [[['_route' => 'admin_livre_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\LivreCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\LivreCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/livre/new' => [[['_route' => 'admin_livre_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\LivreCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\LivreCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/livre/batch-delete' => [[['_route' => 'admin_livre_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\LivreCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\LivreCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/livre/autocomplete' => [[['_route' => 'admin_livre_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\LivreCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\LivreCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/livre/render-filters' => [[['_route' => 'admin_livre_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\LivreCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\LivreCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/batch-delete' => [[['_route' => 'admin_user_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/autocomplete' => [[['_route' => 'admin_user_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/render-filters' => [[['_route' => 'admin_user_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null]],
        '/cart/validate' => [[['_route' => 'app_cart_validate', '_controller' => 'App\\Controller\\CartController::validate'], null, null, null, false, false, null]],
        '/mes-commandes' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/livres' => [[['_route' => 'app_livre_index', '_controller' => 'App\\Controller\\LivreController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|auteur/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:43)'
                            .'|delete(*:56)'
                        .')'
                        .'|(*:64)'
                    .')'
                    .'|c(?'
                        .'|ategorie/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:104)'
                                .'|delete(*:118)'
                            .')'
                            .'|(*:127)'
                        .')'
                        .'|ommande/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:163)'
                                .'|delete(*:177)'
                            .')'
                            .'|(*:186)'
                        .')'
                    .')'
                    .'|editeur/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:223)'
                            .'|delete(*:237)'
                        .')'
                        .'|(*:246)'
                    .')'
                    .'|livre/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:280)'
                            .'|delete(*:294)'
                        .')'
                        .'|(*:303)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:336)'
                            .'|delete(*:350)'
                        .')'
                        .'|(*:359)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:400)'
                    .'|wdt/([^/]++)(*:420)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:462)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:499)'
                                .'|router(*:513)'
                                .'|exception(?'
                                    .'|(*:533)'
                                    .'|\\.css(*:546)'
                                .')'
                            .')'
                            .'|(*:556)'
                        .')'
                    .')'
                .')'
                .'|/cart/(?'
                    .'|add/([^/]++)(*:588)'
                    .'|remove/([^/]++)(*:611)'
                    .'|delete/([^/]++)(*:634)'
                .')'
                .'|/mes\\-commandes/([^/]++)(*:667)'
                .'|/livre/([^/]++)(*:690)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'admin_auteur_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AuteurCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AuteurCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        56 => [[['_route' => 'admin_auteur_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AuteurCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AuteurCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        64 => [[['_route' => 'admin_auteur_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AuteurCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AuteurCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        104 => [[['_route' => 'admin_categorie_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        118 => [[['_route' => 'admin_categorie_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        127 => [[['_route' => 'admin_categorie_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        163 => [[['_route' => 'admin_commande_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommandeCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommandeCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        177 => [[['_route' => 'admin_commande_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommandeCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommandeCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        186 => [[['_route' => 'admin_commande_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommandeCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommandeCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        223 => [[['_route' => 'admin_editeur_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EditeurCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EditeurCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        237 => [[['_route' => 'admin_editeur_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EditeurCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EditeurCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        246 => [[['_route' => 'admin_editeur_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EditeurCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EditeurCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        280 => [[['_route' => 'admin_livre_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\LivreCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\LivreCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        294 => [[['_route' => 'admin_livre_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\LivreCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\LivreCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        303 => [[['_route' => 'admin_livre_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\LivreCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\LivreCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        336 => [[['_route' => 'admin_user_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        350 => [[['_route' => 'admin_user_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        359 => [[['_route' => 'admin_user_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        400 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        420 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        462 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        499 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        513 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        533 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        546 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        556 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        588 => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        611 => [[['_route' => 'app_cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        634 => [[['_route' => 'app_cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        667 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], null, null, false, true, null]],
        690 => [
            [['_route' => 'app_livre_show', '_controller' => 'App\\Controller\\LivreController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
