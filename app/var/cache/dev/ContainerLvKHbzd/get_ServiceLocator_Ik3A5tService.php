<?php

namespace ContainerLvKHbzd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ik3A5tService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ik_3A5t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ik_3A5t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'project' => ['privates', '.errored..service_locator.ik_3A5t.App\\Entity\\Project', NULL, 'Cannot autowire service ".service_locator.ik_3A5t": it references class "App\\Entity\\Project" but no such service exists.'],
        ], [
            'project' => 'App\\Entity\\Project',
        ]);
    }
}
