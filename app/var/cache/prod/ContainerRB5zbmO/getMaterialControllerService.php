<?php

namespace ContainerRB5zbmO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaterialControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\MaterialController' shared autowired service.
     *
     * @return \App\Controller\MaterialController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\MaterialController'] = $instance = new \App\Controller\MaterialController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\MaterialController', $container));

        return $instance;
    }
}
