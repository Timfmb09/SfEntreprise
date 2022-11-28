<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/employe' => [[['_route' => 'app_employe', '_controller' => 'App\\Controller\\EmployeController::index'], null, null, null, false, false, null]],
        '/employe/add' => [[['_route' => 'add_employe', '_controller' => 'App\\Controller\\EmployeController::add'], null, null, null, false, false, null]],
        '/entreprise' => [[['_route' => 'app_entreprise', '_controller' => 'App\\Controller\\EntrepriseController::index'], null, null, null, false, false, null]],
        '/entreprise/add' => [[['_route' => 'add_entreprise', '_controller' => 'App\\Controller\\EntrepriseController::add'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/e(?'
                    .'|mploye/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:38)'
                            .'|delete(*:51)'
                        .')'
                        .'|(*:59)'
                    .')'
                    .'|ntreprise/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:96)'
                            .'|delete(*:109)'
                        .')'
                        .'|(*:118)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                    .'|wdt/([^/]++)(*:179)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:225)'
                            .'|router(*:239)'
                            .'|exception(?'
                                .'|(*:259)'
                                .'|\\.css(*:272)'
                            .')'
                        .')'
                        .'|(*:282)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'edit_employe', '_controller' => 'App\\Controller\\EmployeController::add'], ['id'], null, null, false, false, null]],
        51 => [[['_route' => 'delete_employe', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], null, null, false, false, null]],
        59 => [[['_route' => 'show_employe', '_controller' => 'App\\Controller\\EmployeController::show'], ['id'], null, null, false, true, null]],
        96 => [[['_route' => 'edit_entreprise', '_controller' => 'App\\Controller\\EntrepriseController::add'], ['id'], null, null, false, false, null]],
        109 => [[['_route' => 'delete_entreprise', '_controller' => 'App\\Controller\\EntrepriseController::delete'], ['id'], null, null, false, false, null]],
        118 => [[['_route' => 'show_entreprise', '_controller' => 'App\\Controller\\EntrepriseController::show'], ['id'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        179 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        225 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        239 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        259 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        272 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        282 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
