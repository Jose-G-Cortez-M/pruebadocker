<?php

namespace ContainerRB5zbmO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilterProjectsCountTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\FilterProjectsCountType' shared autowired service.
     *
     * @return \App\Form\FilterProjectsCountType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\FilterProjectsCountType'] = new \App\Form\FilterProjectsCountType();
    }
}
