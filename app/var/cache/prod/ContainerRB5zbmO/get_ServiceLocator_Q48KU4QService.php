<?php

namespace ContainerRB5zbmO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q48KU4QService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.q48KU4Q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q48KU4Q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'client' => ['privates', '.errored..service_locator.q48KU4Q.App\\Entity\\Client', NULL, 'Cannot autowire service ".service_locator.q48KU4Q": it references class "App\\Entity\\Client" but no such service exists.'],
        ], [
            'client' => 'App\\Entity\\Client',
        ]);
    }
}
