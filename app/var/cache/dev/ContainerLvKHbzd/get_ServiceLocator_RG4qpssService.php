<?php

namespace ContainerLvKHbzd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RG4qpssService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RG4qpss' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RG4qpss'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cableRepository' => ['privates', 'App\\Repository\\CableRepository', 'getCableRepositoryService', true],
            'materialRepository' => ['privates', 'App\\Repository\\MaterialRepository', 'getMaterialRepositoryService', true],
            'movement' => ['privates', '.errored..service_locator.RG4qpss.App\\Entity\\Movement', NULL, 'Cannot autowire service ".service_locator.RG4qpss": it references class "App\\Entity\\Movement" but no such service exists.'],
            'toolRepository' => ['privates', 'App\\Repository\\ToolRepository', 'getToolRepositoryService', true],
        ], [
            'cableRepository' => 'App\\Repository\\CableRepository',
            'materialRepository' => 'App\\Repository\\MaterialRepository',
            'movement' => 'App\\Entity\\Movement',
            'toolRepository' => 'App\\Repository\\ToolRepository',
        ]);
    }
}
