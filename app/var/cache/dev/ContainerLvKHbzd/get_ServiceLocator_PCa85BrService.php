<?php

namespace ContainerLvKHbzd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PCa85BrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PCa85Br' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PCa85Br'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'user' => ['privates', '.errored..service_locator.PCa85Br.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.PCa85Br": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'encoder' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
