<?php

namespace ContainerLvKHbzd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMovementControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MovementController' shared autowired service.
     *
     * @return \App\Controller\MovementController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MovementController.php';

        $container->services['App\\Controller\\MovementController'] = $instance = new \App\Controller\MovementController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\MovementController', $container));

        return $instance;
    }
}
