<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/employe' => [[['_route' => 'app_employe', '_controller' => 'App\\Controller\\EmployeController::index'], null, null, null, false, false, null]],
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
                    .'|mploye/([^/]++)(*:27)'
                    .'|ntreprise/([^/]++)(*:52)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:91)'
                    .'|wdt/([^/]++)(*:110)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:156)'
                            .'|router(*:170)'
                            .'|exception(?'
                                .'|(*:190)'
                                .'|\\.css(*:203)'
                            .')'
                        .')'
                        .'|(*:213)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'show_employe', '_controller' => 'App\\Controller\\EmployeController::show'], ['id'], null, null, false, true, null]],
        52 => [[['_route' => 'show_entreprise', '_controller' => 'App\\Controller\\EntrepriseController::show'], ['id'], null, null, false, true, null]],
        91 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        110 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        156 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        190 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        203 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        213 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
