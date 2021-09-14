<?php

namespace ContainerRB5zbmO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginCustomAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\LoginCustomAuthenticator' shared autowired service.
     *
     * @return \App\Security\LoginCustomAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\LoginCustomAuthenticator'] = new \App\Security\LoginCustomAuthenticator(($container->services['router'] ?? $container->getRouterService()));
    }
}
