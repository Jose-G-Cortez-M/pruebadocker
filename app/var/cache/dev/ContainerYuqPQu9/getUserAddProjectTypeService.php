<?php

namespace ContainerYuqPQu9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserAddProjectTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\UserAddProjectType' shared autowired service.
     *
     * @return \App\Form\UserAddProjectType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/UserAddProjectType.php';

        return $container->privates['App\\Form\\UserAddProjectType'] = new \App\Form\UserAddProjectType();
    }
}