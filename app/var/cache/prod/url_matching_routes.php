<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/addprojects/([^/]++)/add(?'
                    .'|user(*:39)'
                    .'|task(*:50)'
                .')'
                .'|/c(?'
                    .'|able/([^/]++)(?'
                        .'|(*:79)'
                        .'|/edit(*:91)'
                        .'|(*:98)'
                    .')'
                    .'|lient/([^/]++)(?'
                        .'|(*:123)'
                        .'|/edit(*:136)'
                        .'|(*:144)'
                    .')'
                .')'
                .'|/homepage/([^/]++)/([^/]++)/update(?'
                    .'|DescriptionTask(*:206)'
                    .'|StateTask(*:223)'
                .')'
                .'|/m(?'
                    .'|aterial/([^/]++)(?'
                        .'|(*:256)'
                        .'|/edit(*:269)'
                        .'|(*:277)'
                    .')'
                    .'|ovement/(?'
                        .'|new(?'
                            .'|material/([^/]++)(*:320)'
                            .'|cable/([^/]++)(*:342)'
                            .'|tool/([^/]++)(*:363)'
                        .')'
                        .'|([^/]++)(?'
                            .'|/edit(*:388)'
                            .'|(*:396)'
                        .')'
                    .')'
                .')'
                .'|/project/(?'
                    .'|close/([^/]++)(?'
                        .'|(*:436)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:456)'
                        .'|/(?'
                            .'|edit(*:472)'
                            .'|finish(*:486)'
                            .'|observations(*:506)'
                        .')'
                        .'|(*:515)'
                    .')'
                .')'
                .'|/t(?'
                    .'|ask/([^/]++)(?'
                        .'|(*:545)'
                        .'|/edit(*:558)'
                        .'|(*:566)'
                    .')'
                    .'|ool/([^/]++)(?'
                        .'|(*:590)'
                        .'|/edit(*:603)'
                        .'|(*:611)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:638)'
                    .'|/edit(*:651)'
                    .'|(*:659)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'user_add_project', '_controller' => 'App\\Controller\\AddProjectController::userAddProject'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        50 => [[['_route' => 'task_add_project', '_controller' => 'App\\Controller\\AddProjectController::taskAddProject'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        79 => [[['_route' => 'cable_show', '_controller' => 'App\\Controller\\CableController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        91 => [[['_route' => 'cable_edit', '_controller' => 'App\\Controller\\CableController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        98 => [[['_route' => 'cable_delete', '_controller' => 'App\\Controller\\CableController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        123 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        136 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        144 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        206 => [[['_route' => 'homepage_update', '_controller' => 'App\\Controller\\DefaultController::updateDescriptionTask'], ['idt', 'idp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        223 => [[['_route' => 'homepage_update_state', '_controller' => 'App\\Controller\\DefaultController::updateStateTask'], ['idt', 'idp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [[['_route' => 'material_show', '_controller' => 'App\\Controller\\MaterialController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        269 => [[['_route' => 'material_edit', '_controller' => 'App\\Controller\\MaterialController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        277 => [[['_route' => 'material_delete', '_controller' => 'App\\Controller\\MaterialController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        320 => [[['_route' => 'movement_new_material', '_controller' => 'App\\Controller\\MovementController::newMaterial'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        342 => [[['_route' => 'movement_new_cable', '_controller' => 'App\\Controller\\MovementController::newCable'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        363 => [[['_route' => 'movement_new_tool', '_controller' => 'App\\Controller\\MovementController::newTool'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        388 => [[['_route' => 'movement_edit', '_controller' => 'App\\Controller\\MovementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        396 => [[['_route' => 'movement_delete', '_controller' => 'App\\Controller\\MovementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        436 => [
            [['_route' => 'project_close_show', '_controller' => 'App\\Controller\\ProjectCloseController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'project_close_delete', '_controller' => 'App\\Controller\\ProjectCloseController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        456 => [[['_route' => 'project_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        472 => [[['_route' => 'project_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        486 => [[['_route' => 'project_finish', '_controller' => 'App\\Controller\\ProjectController::finishProject'], ['idP'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        506 => [[['_route' => 'project_observations', '_controller' => 'App\\Controller\\ProjectController::showObservations'], ['idP'], ['GET' => 0], null, false, false, null]],
        515 => [[['_route' => 'project_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        545 => [[['_route' => 'task_show', '_controller' => 'App\\Controller\\TaskController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        558 => [[['_route' => 'task_edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        566 => [[['_route' => 'task_delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        590 => [[['_route' => 'tool_show', '_controller' => 'App\\Controller\\ToolController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        603 => [[['_route' => 'tool_edit', '_controller' => 'App\\Controller\\ToolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        611 => [[['_route' => 'tool_delete', '_controller' => 'App\\Controller\\ToolController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        638 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        651 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        659 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
