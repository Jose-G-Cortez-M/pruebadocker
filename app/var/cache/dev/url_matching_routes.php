<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/cable' => [[['_route' => 'cable_index', '_controller' => 'App\\Controller\\CableController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cable/new' => [[['_route' => 'cable_new', '_controller' => 'App\\Controller\\CableController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/counter/counter' => [[['_route' => 'counter', '_controller' => 'App\\Controller\\Counter::counter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/homepage' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, true, false, null]],
        '/material' => [[['_route' => 'material_index', '_controller' => 'App\\Controller\\MaterialController::index'], null, ['GET' => 0], null, true, false, null]],
        '/material/new' => [[['_route' => 'material_new', '_controller' => 'App\\Controller\\MaterialController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/movement' => [[['_route' => 'movement_index', '_controller' => 'App\\Controller\\MovementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/movement/list' => [[['_route' => 'movement_list', '_controller' => 'App\\Controller\\MovementController::listMovement'], null, ['GET' => 0], null, false, false, null]],
        '/project/close' => [[['_route' => 'project_close_index', '_controller' => 'App\\Controller\\ProjectCloseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/project' => [[['_route' => 'project_index', '_controller' => 'App\\Controller\\ProjectController::index'], null, ['GET' => 0], null, true, false, null]],
        '/project/new' => [[['_route' => 'project_new', '_controller' => 'App\\Controller\\ProjectController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/task' => [[['_route' => 'task_index', '_controller' => 'App\\Controller\\TaskController::index'], null, ['GET' => 0], null, true, false, null]],
        '/task/new' => [[['_route' => 'task_new', '_controller' => 'App\\Controller\\TaskController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tool' => [[['_route' => 'tool_index', '_controller' => 'App\\Controller\\ToolController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tool/new' => [[['_route' => 'tool_new', '_controller' => 'App\\Controller\\ToolController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/addprojects/([^/]++)/add(?'
                    .'|user(*:200)'
                    .'|task(*:212)'
                .')'
                .'|/c(?'
                    .'|able/([^/]++)(?'
                        .'|(*:242)'
                        .'|/edit(*:255)'
                        .'|(*:263)'
                    .')'
                    .'|lient/([^/]++)(?'
                        .'|(*:289)'
                        .'|/edit(*:302)'
                        .'|(*:310)'
                    .')'
                .')'
                .'|/homepage/([^/]++)/([^/]++)/update(?'
                    .'|DescriptionTask(*:372)'
                    .'|StateTask(*:389)'
                .')'
                .'|/m(?'
                    .'|aterial/([^/]++)(?'
                        .'|(*:422)'
                        .'|/edit(*:435)'
                        .'|(*:443)'
                    .')'
                    .'|ovement/(?'
                        .'|new(?'
                            .'|material/([^/]++)(*:486)'
                            .'|cable/([^/]++)(*:508)'
                            .'|tool/([^/]++)(*:529)'
                        .')'
                        .'|([^/]++)(?'
                            .'|/edit(*:554)'
                            .'|(*:562)'
                        .')'
                    .')'
                .')'
                .'|/project/(?'
                    .'|close/([^/]++)(?'
                        .'|(*:602)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:622)'
                        .'|/(?'
                            .'|edit(*:638)'
                            .'|finish(*:652)'
                            .'|observations(*:672)'
                        .')'
                        .'|(*:681)'
                    .')'
                .')'
                .'|/t(?'
                    .'|ask/([^/]++)(?'
                        .'|(*:711)'
                        .'|/edit(*:724)'
                        .'|(*:732)'
                    .')'
                    .'|ool/([^/]++)(?'
                        .'|(*:756)'
                        .'|/edit(*:769)'
                        .'|(*:777)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:804)'
                    .'|/edit(*:817)'
                    .'|(*:825)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        200 => [[['_route' => 'user_add_project', '_controller' => 'App\\Controller\\AddProjectController::userAddProject'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'task_add_project', '_controller' => 'App\\Controller\\AddProjectController::taskAddProject'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'cable_show', '_controller' => 'App\\Controller\\CableController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'cable_edit', '_controller' => 'App\\Controller\\CableController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'cable_delete', '_controller' => 'App\\Controller\\CableController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        289 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        372 => [[['_route' => 'homepage_update', '_controller' => 'App\\Controller\\DefaultController::updateDescriptionTask'], ['idt', 'idp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        389 => [[['_route' => 'homepage_update_state', '_controller' => 'App\\Controller\\DefaultController::updateStateTask'], ['idt', 'idp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        422 => [[['_route' => 'material_show', '_controller' => 'App\\Controller\\MaterialController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        435 => [[['_route' => 'material_edit', '_controller' => 'App\\Controller\\MaterialController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        443 => [[['_route' => 'material_delete', '_controller' => 'App\\Controller\\MaterialController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        486 => [[['_route' => 'movement_new_material', '_controller' => 'App\\Controller\\MovementController::newMaterial'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        508 => [[['_route' => 'movement_new_cable', '_controller' => 'App\\Controller\\MovementController::newCable'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        529 => [[['_route' => 'movement_new_tool', '_controller' => 'App\\Controller\\MovementController::newTool'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        554 => [[['_route' => 'movement_edit', '_controller' => 'App\\Controller\\MovementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        562 => [[['_route' => 'movement_delete', '_controller' => 'App\\Controller\\MovementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        602 => [
            [['_route' => 'project_close_show', '_controller' => 'App\\Controller\\ProjectCloseController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'project_close_delete', '_controller' => 'App\\Controller\\ProjectCloseController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        622 => [[['_route' => 'project_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        638 => [[['_route' => 'project_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        652 => [[['_route' => 'project_finish', '_controller' => 'App\\Controller\\ProjectController::finishProject'], ['idP'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        672 => [[['_route' => 'project_observations', '_controller' => 'App\\Controller\\ProjectController::showObservations'], ['idP'], ['GET' => 0], null, false, false, null]],
        681 => [[['_route' => 'project_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        711 => [[['_route' => 'task_show', '_controller' => 'App\\Controller\\TaskController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        724 => [[['_route' => 'task_edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        732 => [[['_route' => 'task_delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        756 => [[['_route' => 'tool_show', '_controller' => 'App\\Controller\\ToolController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        769 => [[['_route' => 'tool_edit', '_controller' => 'App\\Controller\\ToolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        777 => [[['_route' => 'tool_delete', '_controller' => 'App\\Controller\\ToolController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        804 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        817 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        825 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
