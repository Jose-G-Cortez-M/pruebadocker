<?php

namespace ContainerLvKHbzd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vh2kqFhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Vh2kqFh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Vh2kqFh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tool' => ['privates', '.errored..service_locator.Vh2kqFh.App\\Entity\\Tool', NULL, 'Cannot autowire service ".service_locator.Vh2kqFh": it references class "App\\Entity\\Tool" but no such service exists.'],
        ], [
            'tool' => 'App\\Entity\\Tool',
        ]);
    }
}
