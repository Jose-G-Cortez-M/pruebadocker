<?php

namespace ContainerRB5zbmO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectCloseTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ProjectCloseType' shared autowired service.
     *
     * @return \App\Form\ProjectCloseType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ProjectCloseType'] = new \App\Form\ProjectCloseType();
    }
}